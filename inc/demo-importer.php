<?php
/**
 * Demo import controller.
 *
 * Handles:
 *   - Admin page registration (Appearance → GoDevs Demos)
 *   - Admin asset enqueues
 *   - AJAX endpoints for preview, import, removal
 *   - Import logic: page creation, navigation, style application
 *   - Style variation application (via user meta)
 *
 * Security:
 *   - Every AJAX endpoint checks capability 'manage_options' (admin only)
 *   - Every AJAX endpoint verifies a nonce
 *   - Demo IDs are validated against the registry
 *   - All user-provided content is escaped at output
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Register the admin menu page under Appearance.
 *
 * @return void
 */
function godevs_portfolio_register_admin_page(): void {
        add_theme_page(
                __( 'GoDevs Demos', 'godevs-portfolio' ),
                __( 'GoDevs Demos', 'godevs-portfolio' ),
                'manage_options',
                'godevs-portfolio-demos',
                'godevs_portfolio_render_admin_page'
        );
}
add_action( 'admin_menu', 'godevs_portfolio_register_admin_page' );

/**
 * Render the admin page.
 *
 * @return void
 */
function godevs_portfolio_render_admin_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'You do not have permission to access this page.', 'godevs-portfolio' ) );
        }

        require_once get_template_directory() . '/inc/admin/views/admin-demos.php';
}

/**
 * Enqueue admin assets on the demo library page only.
 *
 * @param string $hook Current admin page hook suffix.
 * @return void
 */
function godevs_portfolio_enqueue_admin_assets( string $hook ): void {
        if ( 'appearance_page_godevs-portfolio-demos' !== $hook ) {
                return;
        }

        wp_enqueue_style(
                'godevs-portfolio-admin-demos',
                get_template_directory_uri() . '/assets/css/admin-demos.css',
                array(),
                (string) filemtime( get_template_directory() . '/assets/css/admin-demos.css' )
        );

        wp_enqueue_script(
                'godevs-portfolio-admin-demos',
                get_template_directory_uri() . '/assets/js/admin-demos.js',
                array(),
                (string) filemtime( get_template_directory() . '/assets/js/admin-demos.js' ),
                array( 'in_footer' => true )
        );

        wp_localize_script(
                'godevs-portfolio-admin-demos',
                'GODEVS_DEMOS_API',
                array(
                        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
                        'ajaxNonce' => wp_create_nonce( 'godevs_demo_admin' ),
                        'previewUrl' => add_query_arg( array( 'godevs_preview' => '1' ), home_url( '/' ) ),
                )
        );
}
add_action( 'admin_enqueue_scripts', 'godevs_portfolio_enqueue_admin_assets' );

/**
 * AJAX: Get import confirmation details for a demo.
 *
 * Returns the demo metadata + the list of pages that will be created.
 *
 * @return void
 */
function godevs_portfolio_ajax_get_import_details(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $is_imported = godevs_portfolio_tracker_is_imported( $demo_id );

        wp_send_json_success(
                array(
                        'demo'       => array(
                                'id'          => $demo['id'],
                                'name'        => $demo['name'],
                                'category'    => $demo['category'],
                                'style'       => $demo['style'],
                                'description' => $demo['description'],
                                'pages'       => $demo['pages'],
                        ),
                        'isImported' => $is_imported,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_get_import_details', 'godevs_portfolio_ajax_get_import_details' );

/**
 * AJAX: Import a demo.
 *
 * Creates the demo's recommended pages, populates the homepage with the
 * demo's pattern markup, creates a navigation menu linking to the pages,
 * and (optionally) sets the homepage + applies the recommended style variation.
 *
 * Two modes:
 *   - 'starter': For fresh sites — sets homepage, applies style variation.
 *   - 'safe': For existing sites — creates pages but does not change homepage or style.
 *
 * @return void
 */
function godevs_portfolio_ajax_import_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        $mode    = isset( $_POST['mode'] ) ? sanitize_key( wp_unslash( $_POST['mode'] ) ) : 'safe';
        // The JS sends apply_style as '1' or '0'. Cast to int first, then bool —
        // (bool) '0' is TRUE in PHP because non-empty strings are truthy.
        $apply_style = isset( $_POST['apply_style'] ) ? ( '1' === (string) $_POST['apply_style'] ) : false;

        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        if ( ! in_array( $mode, array( 'starter', 'safe' ), true ) ) {
                wp_send_json_error( array( 'message' => __( 'Invalid import mode.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        // Block imports for non-ready (Coming Soon) demos.
        if ( empty( $demo['is_ready'] ) ) {
                wp_send_json_error( array( 'message' => __( 'This demo is coming soon and cannot be imported yet.', 'godevs-portfolio' ) ), 403 );
        }

        $steps = array(
                array( 'id' => 'prepare', 'label' => __( 'Preparing demo', 'godevs-portfolio' ) ),
                array( 'id' => 'pages',   'label' => __( 'Creating pages', 'godevs-portfolio' ) ),
                array( 'id' => 'nav',     'label' => __( 'Creating navigation', 'godevs-portfolio' ) ),
        );

        if ( 'starter' === $mode ) {
                $steps[] = array( 'id' => 'homepage', 'label' => __( 'Applying homepage', 'godevs-portfolio' ) );
        }

        $steps[] = array( 'id' => 'content', 'label' => __( 'Applying demo layout', 'godevs-portfolio' ) );

        if ( $apply_style && $demo['style'] ) {
                $steps[] = array( 'id' => 'style', 'label' => __( 'Applying style variation', 'godevs-portfolio' ) );
        }

        $steps[] = array( 'id' => 'complete', 'label' => __( 'Complete', 'godevs-portfolio' ) );

        // Begin import.
        $created_pages   = array();
        $nav_menu_id     = 0;
        $homepage_id     = 0;
        $style_applied   = '';
        $errors          = array();
        $replaced_demos  = array();

        // ═══ AUTO-CLEANUP: Remove ALL previously imported demos ═══
        // This ensures only ONE demo's pages are visible on the site at any
        // time. When a new demo is imported, all previously imported demo
        // pages, navigation menus, and homepage settings are cleanly removed
        // so the user sees ONLY the newly imported demo's content.
        $previous_imports = godevs_portfolio_tracker_get_all();
        foreach ( $previous_imports as $prev_demo_id => $prev_record ) {
                // Skip the demo being imported (in case it's a re-import).
                if ( $prev_demo_id === $demo_id ) {
                        continue;
                }

                // Remove the previous demo (trashes its pages, deletes its nav menu).
                $remove_result = godevs_portfolio_tracker_remove( $prev_demo_id, true );
                if ( ! empty( $remove_result['success'] ) ) {
                        $replaced_demos[] = $prev_demo_id;
                }
        }

        // Also clean up any orphaned demo menus (from failed imports, etc.).
        // Delete any nav menu whose name ends with "— Navigation" that isn't
        // currently assigned to a location. This catches stale menus.
        $existing_menus = wp_get_nav_menus();
        $current_locations = get_theme_mod( 'nav_menu_locations', array() );
        foreach ( $existing_menus as $menu ) {
                // Skip menus assigned to a location.
                if ( in_array( (int) $menu->term_id, array_map( 'absint', array_values( $current_locations ) ), true ) ) {
                        continue;
                }
                // Only delete menus created by our demo importer.
                if ( false !== strpos( $menu->name, '— Navigation' ) ) {
                        wp_delete_nav_menu( $menu->term_id );
                }
        }

        // Also handle re-import of the SAME demo — remove its old pages first
        // so we don't get duplicate pages with suffix slugs (home-director-2).
        if ( isset( $previous_imports[ $demo_id ] ) ) {
                $remove_result = godevs_portfolio_tracker_remove( $demo_id, true );
                if ( ! empty( $remove_result['success'] ) ) {
                        $replaced_demos[] = $demo_id;
                }
        }

        // 1. Read the demo pattern markup (the homepage content).
        $homepage_markup = godevs_portfolio_render_demo_markup( $demo );
        if ( '' === $homepage_markup ) {
                wp_send_json_error(
                        array(
                                'message' => __( 'Could not read demo markup.', 'godevs-portfolio' ),
                                'steps'   => $steps,
                        ),
                        500
                );
        }

        // 2. Create the pages.
        $page_titles = array(
                'home'        => __( 'Home', 'godevs-portfolio' ),
                'about'       => __( 'About', 'godevs-portfolio' ),
                'work'        => __( 'Work', 'godevs-portfolio' ),
                'portfolio'   => __( 'Portfolio', 'godevs-portfolio' ),
                'services'    => __( 'Services', 'godevs-portfolio' ),
                'case-studies' => __( 'Case Studies', 'godevs-portfolio' ),
                'journal'     => __( 'Journal', 'godevs-portfolio' ),
                'blog'        => __( 'Blog', 'godevs-portfolio' ),
                'insights'    => __( 'Insights', 'godevs-portfolio' ),
                'research'    => __( 'Research', 'godevs-portfolio' ),
                'teaching'    => __( 'Teaching', 'godevs-portfolio' ),
                'experience'  => __( 'Experience', 'godevs-portfolio' ),
                'contact'     => __( 'Contact', 'godevs-portfolio' ),
        );

        foreach ( $demo['pages'] as $page_slug ) {
                $title = $page_titles[ $page_slug ] ?? ucfirst( $page_slug );

                // CRITICAL FIX: Populate ALL pages, not just the homepage.
                // For each inner page, render the corresponding pattern file
                // (e.g., patterns/demos/<demo-slug>-about.php) and use its
                // markup as the page content. This closes the bug where only
                // the homepage got content and all inner pages were blank.
                if ( 'home' === $page_slug ) {
                        $content = $homepage_markup;
                } else {
                        // Try to load the inner-page pattern file.
                        $page_file = godevs_portfolio_get_demo_page_file( $demo_id, $page_slug );
                        if ( null !== $page_file && file_exists( $page_file ) ) {
                                ob_start();
                                include $page_file; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup.
                                $content = (string) ob_get_clean();
                        } else {
                                // Fallback: empty content if no pattern file exists.
                                $content = '';
                        }
                }

                // CRITICAL FIX (v2.4.1): Strip embedded `<!-- wp:template-part -->`
                // references from the page content. The demo pattern files
                // include their own header/footer template-part references
                // (e.g. `header-dark`, `footer-minimal`), but when this content
                // becomes `post_content` on a real page, WordPress wraps it in
                // the active `page.html` template — which ALSO has its own
                // header/footer template-part references. That produces a
                // double-header + double-footer on the rendered page.
                //
                // Solution: remove all `wp:template-part` blocks from the
                // imported page content. The active theme template's header
                // and footer will be used instead. The Header/Footer Builder
                // override (if any) takes precedence via the render_block filter.
                $content = godevs_portfolio_strip_template_parts_from_content( $content );

                $page_id = wp_insert_post(
                        array(
                                'post_title'   => $title,
                                'post_name'    => $page_slug . '-' . $demo_id, // unique slug.
                                'post_status'   => 'publish',
                                'post_type'     => 'page',
                                'post_content'  => $content,
                                'post_excerpt'  => '',
                                'comment_status' => 'closed',
                                'ping_status'   => 'closed',
                        ),
                        true
                );

                if ( is_wp_error( $page_id ) ) {
                        $errors[] = sprintf(
                                /* translators: 1: page slug, 2: error message. */
                                __( 'Page "%1$s": %2$s', 'godevs-portfolio' ),
                                $page_slug,
                                $page_id->get_error_message()
                        );
                } else {
                        $created_pages[ $page_slug ] = (int) $page_id;
                        if ( 'home' === $page_slug ) {
                                $homepage_id = (int) $page_id;
                        }
                }
        }

        // 3. Create the navigation menu.
        $menu_name = sprintf(
                /* translators: %s: demo name. */
                __( '%s — Navigation', 'godevs-portfolio' ),
                $demo['name']
        );
        $menu_exists = wp_get_nav_menu_object( $menu_name );
        if ( $menu_exists ) {
                $nav_menu_id = $menu_exists->term_id;
        } else {
                $menu_id = wp_create_nav_menu( $menu_name );
                if ( is_wp_error( $menu_id ) ) {
                        $errors[] = sprintf(
                                /* translators: %s: error message. */
                                __( 'Navigation: %s', 'godevs-portfolio' ),
                                $menu_id->get_error_message()
                        );
                } else {
                        $nav_menu_id = (int) $menu_id;

                        // Add menu items for each created page.
                        foreach ( $created_pages as $page_slug => $page_id ) {
                                wp_update_nav_menu_item(
                                        $nav_menu_id,
                                        0,
                                        array(
                                                'menu-item-title'     => ucfirst( $page_slug ),
                                                'menu-item-object'     => 'page',
                                                'menu-item-object-id' => $page_id,
                                                'menu-item-type'       => 'post_type',
                                                'menu-item-status'     => 'publish',
                                        )
                                );
                        }
                }
        }

        // 4. Apply homepage setting (starter mode only).
        if ( 'starter' === $mode && $homepage_id ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $homepage_id );
                update_option( 'page_for_posts', 0 );
        }

        // 4b. Assign the created nav menu to the `primary` menu location.
        // Previously the menu was created but never assigned, so the demo's
        // header navigation appeared empty (or fell back to the default site
        // menu, if any). This makes the imported menu show up in the header
        // navigation block automatically.
        if ( $nav_menu_id ) {
                $locations                 = get_theme_mod( 'nav_menu_locations', array() );
                $locations['primary']      = (int) $nav_menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );
        }

        // 5. Apply the recommended style variation (if requested).
        if ( $apply_style && $demo['style'] ) {
                // Map the style name (e.g., "Dark") to the corresponding style file slug.
                $style_lower = strtolower( $demo['style'] );
                $style_file  = get_template_directory() . '/styles/' . $style_lower . '.json';
                if ( file_exists( $style_file ) ) {
                        // CRITICAL FIX: Actually apply the style variation programmatically.
                        // WordPress 6.0+ stores the active style variation in the
                        // wp_global_styles custom post type. We write to it directly.
                        $style_applied = godevs_portfolio_apply_style_variation( $style_lower );

                        // Also store the user's choice via user meta (for reference).
                        $user_id = get_current_user_id();
                        update_user_meta( $user_id, 'godevs-portfolio-applied-style', $demo['style'] );

                        if ( ! $style_applied ) {
                                $style_applied = $demo['style']; // Record the intent even if application failed.
                        }
                }
        }

        // 6. Record the import in the tracker.
        godevs_portfolio_tracker_record(
                $demo_id,
                $demo['name'],
                $mode,
                array_values( $created_pages ),
                $nav_menu_id,
                $homepage_id,
                $style_applied
        );

        // 7. Return the result.
        wp_send_json_success(
                array(
                        'demo'        => array(
                                'id'   => $demo['id'],
                                'name' => $demo['name'],
                        ),
                        'mode'        => $mode,
                        'pages'       => $created_pages,
                        'nav_menu_id' => $nav_menu_id,
                        'homepage_id' => $homepage_id,
                        'style'       => $style_applied,
                        'errors'      => $errors,
                        'steps'       => $steps,
                        'replaced_demos' => $replaced_demos,
                        'editHomepageUrl' => $homepage_id ? admin_url( 'post.php?post=' . $homepage_id . '&action=edit' ) : '',
                        'editSiteUrl'      => admin_url( 'site-editor.php' ),
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_import_demo', 'godevs_portfolio_ajax_import_demo' );

/**
 * AJAX: Remove an imported demo.
 *
 * Trashes the imported pages and deletes the imported navigation menu.
 * Does NOT delete user content unrelated to the demo.
 *
 * @return void
 */
function godevs_portfolio_ajax_remove_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $result = godevs_portfolio_tracker_remove( $demo_id, true );

        if ( ! $result['success'] ) {
                wp_send_json_error(
                        array(
                                'message' => $result['errors'] ? $result['errors'][0] : __( 'Could not remove demo.', 'godevs-portfolio' ),
                        ),
                        500
                );
        }

        wp_send_json_success(
                array(
                        'demo'    => array( 'id' => $demo_id ),
                        'deleted' => $result['deleted'],
                        'errors'  => $result['errors'],
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_remove_demo', 'godevs_portfolio_ajax_remove_demo' );

/**
 * Render the demo markup from the demo pattern file.
 *
 * Executes the PHP pattern file (output buffering) to capture the
 * rendered block markup. This is the same mechanism WordPress core
 * uses to load theme-bundled patterns.
 *
 * @param array $demo Demo definition.
 * @return string Rendered markup, or empty string on failure.
 */
function godevs_portfolio_render_demo_markup( array $demo ): string {
        if ( empty( $demo['file'] ) || ! file_exists( $demo['file'] ) ) {
                return '';
        }

        ob_start();
        include $demo['file']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup, not user input.
        return (string) ob_get_clean();
}

/**
 * Strip `<!-- wp:template-part ... /-->` blocks from imported page content.
 *
 * Demo pattern files (patterns/demos/*.php) embed their own header/footer
 * template-part references (e.g. `header-dark`, `footer-minimal`). When this
 * content becomes the `post_content` of an imported page, WordPress wraps
 * it in the active `page.html` template — which ALSO has its own header and
 * footer template-part references. That produces a double-header +
 * double-footer on the rendered page (and a TRIPLE header if a Header/Footer
 * Builder layout is also active).
 *
 * This function removes every `wp:template-part` block from the markup
 * (both self-closing `<!-- wp:template-part {...} /-->` and paired
 * `<!-- wp:template-part {...} --> ... <!-- /wp:template-part -->` forms).
 * The active theme template's header and footer will be used instead.
 *
 * @param string $content The raw pattern markup (may contain PHP-processed HTML).
 * @return string Markup with all `wp:template-part` references removed.
 * @since 2.4.1
 */
function godevs_portfolio_strip_template_parts_from_content( string $content ): string {
        if ( '' === $content ) {
                return $content;
        }

        // Remove self-closing template-part blocks: `<!-- wp:template-part {...} /-->`
        $content = preg_replace(
                '/<!--\s*wp:template-part\b[^>]*?\/-->\s*/s',
                '',
                $content
        );

        // Remove paired template-part blocks (with content between open and close):
        // `<!-- wp:template-part {...} --> ... <!-- /wp:template-part -->`
        $content = preg_replace(
                '/<!--\s*wp:template-part\b[^>]*?-->.*?<!--\s*\/wp:template-part\s*-->\s*/s',
                '',
                $content
        );

        return $content;
}

/**
 * Apply a style variation programmatically.
 *
 * WordPress 6.0+ stores the active style variation in the wp_global_styles
 * custom post type. This function writes the variation's JSON content
 * to that post so the variation is actually applied on the front end.
 *
 * @param string $style_slug The style variation slug (e.g., 'dark', 'minimal').
 * @return bool True on success, false on failure.
 * @since 2.0.0
 */
function godevs_portfolio_apply_style_variation( string $style_slug ): bool {
        $style_file = get_template_directory() . '/styles/' . $style_slug . '.json';
        if ( ! file_exists( $style_file ) ) {
                return false;
        }

        $style_content = file_get_contents( $style_file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
        if ( empty( $style_content ) ) {
                return false;
        }

        $style_data = json_decode( $style_content, true );
        if ( ! is_array( $style_data ) ) {
                return false;
        }

        // Get the active theme's stylesheet (theme slug).
        $stylesheet = get_stylesheet();

        // Find the existing wp_global_styles post for this theme.
        $args = array(
                'post_type'      => 'wp_global_styles',
                'post_status'    => 'publish',
                'posts_per_page' => 1,
                'tax_query'      => array(
                        array(
                                'taxonomy' => 'wp_theme',
                                'field'    => 'name',
                                'terms'    => $stylesheet,
                        ),
                ),
        );

        $query = new WP_Query( $args );
        $post_id = 0;

        if ( $query->have_posts() ) {
                $query->the_post();
                $post_id = get_the_ID();
                wp_reset_postdata();
        }

        // Build the global styles post content.
        // This merges the variation's styles into the theme's global styles.
        $global_styles = array(
                'version'  => 3,
                'styles'   => $style_data['styles'] ?? array(),
                'settings' => $style_data['settings'] ?? array(),
        );

        $post_content = wp_json_encode( $global_styles );

        if ( $post_id ) {
                // Update existing post.
                wp_update_post(
                        array(
                                'ID'           => $post_id,
                                'post_content' => $post_content,
                        )
                );
        } else {
                // Create new post.
                $post_id = wp_insert_post(
                        array(
                                'post_title'   => 'Global Styles',
                                'post_status'  => 'publish',
                                'post_type'    => 'wp_global_styles',
                                'post_content' => $post_content,
                                'post_name'    => 'global-styles-' . $stylesheet,
                        )
                );

                if ( is_wp_error( $post_id ) ) {
                        return false;
                }

                // Assign the wp_theme taxonomy term.
                wp_set_object_terms( $post_id, $stylesheet, 'wp_theme' );
        }

        // Clear the WP_Theme_JSON_Resolver cache.
        // This forces WordPress to re-read the global styles on the next request.
        if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
                // The resolver has a static cache that needs to be cleared.
                // We use reflection to access the private $cache property.
                $reflection = new ReflectionClass( 'WP_Theme_JSON_Resolver' );
                if ( $reflection->hasProperty( 'cache' ) ) {
                        $cache_prop = $reflection->getProperty( 'cache' );
                        $cache_prop->setAccessible( true );
                        $cache_prop->setValue( null, array() );
                }
        }

        return true;
}

/**
 * AJAX: Get demo preview markup.
 *
 * Returns the rendered block markup for the demo. The JS uses this to
 * render a preview in a modal without modifying the site.
 *
 * @return void
 */
function godevs_portfolio_ajax_preview_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $markup = godevs_portfolio_render_demo_markup( $demo );
        if ( '' === $markup ) {
                wp_send_json_error( array( 'message' => __( 'Could not render demo.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success(
                array(
                        'demo'   => array(
                                'id'       => $demo['id'],
                                'name'     => $demo['name'],
                                'style'    => $demo['style'],
                        ),
                        'markup' => $markup,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_preview_demo', 'godevs_portfolio_ajax_preview_demo' );

/**
 * AJAX: Get the list of available pages for a demo (for preview navigation).
 *
 * Returns an array of page definitions, each with slug, title, and whether
 * a pattern file exists for that page. Used by the preview modal to build
 * the page-navigation bar.
 *
 * @return void
 * @since 1.3.0
 */
function godevs_portfolio_ajax_get_demo_pages(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $pages = godevs_portfolio_get_demo_pages( $demo_id );

        // Format for JSON response.
        $formatted = array();
        foreach ( $pages as $page ) {
                $formatted[] = array(
                        'slug'  => $page['slug'],
                        'title' => $page['title'],
                );
        }

        wp_send_json_success(
                array(
                        'demo'  => array(
                                'id'       => $demo['id'],
                                'name'     => $demo['name'],
                                'category' => $demo['category'],
                                'style'    => $demo['style'],
                        ),
                        'pages' => $formatted,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_get_demo_pages', 'godevs_portfolio_ajax_get_demo_pages' );

/**
 * AJAX: Preview a specific demo page (not just the homepage).
 *
 * Renders the markup for a given demo + page slug, for use in the
 * preview modal's page-navigation feature.
 *
 * @return void
 * @since 1.3.0
 */
function godevs_portfolio_ajax_preview_demo_page(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        $page    = isset( $_POST['page'] ) ? sanitize_file_name( wp_unslash( $_POST['page'] ) ) : 'home';

        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        // Resolve the page file.
        $file = godevs_portfolio_get_demo_page_file( $demo_id, $page );
        if ( null === $file ) {
                wp_send_json_error( array( 'message' => __( 'Page not found for this demo.', 'godevs-portfolio' ) ), 404 );
        }

        // Render the markup.
        $markup = '';
        if ( file_exists( $file ) ) {
                ob_start();
                include $file; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup.
                $markup = (string) ob_get_clean();
        }

        if ( '' === $markup ) {
                wp_send_json_error( array( 'message' => __( 'Could not render page.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success(
                array(
                        'demo'   => array(
                                'id'   => $demo['id'],
                                'name' => $demo['name'],
                                'page' => $page,
                        ),
                        'markup' => $markup,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_preview_demo_page', 'godevs_portfolio_ajax_preview_demo_page' );
