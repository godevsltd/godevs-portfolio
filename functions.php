<?php
/**
 * GoDevs Portfolio functions and definitions.
 *
 * @package GoDevs_Portfolio
 * @since   0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access.
}

/**
 * Theme version.
 */
if ( ! defined( 'GODEVS_PORTFOLIO_VERSION' ) ) {
        define( 'GODEVS_PORTFOLIO_VERSION', '1.0.0' );
}

/**
 * Theme setup.
 *
 * Block themes enable most theme supports automatically. We register
 * the few that are not auto-enabled and that this theme relies on.
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_setup(): void {
        // Make theme available for translation.
        load_theme_textdomain( 'godevs-portfolio', get_template_directory() . '/languages' );

        // Add support for <title> tag output by WordPress core.
        add_theme_support( 'title-tag' );

        // Add support for automatic feed links in <head>.
        add_theme_support( 'automatic-feed-links' );

        // Add support for responsive embedded content (embeds wrap in container).
        add_theme_support( 'responsive-embeds' );

        // Add support for HTML5 markup on the listed elements.
        add_theme_support(
                'html5',
                array(
                        'search-form',
                        'comment-form',
                        'comment-list',
                        'gallery',
                        'caption',
                        'style',
                        'script',
                )
        );

        // Add support for editor styles — assets/css/theme.css is loaded in the editor.
        add_editor_style( 'assets/css/theme.css' );

        // Register nav menus used by core/navigation (location-based).
        register_nav_menus(
                array(
                        'primary' => __( 'Primary Menu', 'godevs-portfolio' ),
                        'footer'  => __( 'Footer Menu', 'godevs-portfolio' ),
                )
        );
}
add_action( 'after_setup_theme', 'godevs_portfolio_setup' );

/**
 * Enqueue front-end styles.
 *
 * WordPress core enqueues the block styles and the styles emitted from theme.json.
 * We enqueue a small supplementary stylesheet for items theme.json cannot express
 * (focus rings, reduced motion overrides, custom block style classes).
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_enqueue_styles(): void {
        // Supplementary styles (focus rings, reduced motion, block style classes).
        $theme_css_path = get_template_directory() . '/assets/css/theme.css';
        $theme_css_ver  = file_exists( $theme_css_path ) ? (string) filemtime( $theme_css_path ) : GODEVS_PORTFOLIO_VERSION;

        wp_enqueue_style(
                'godevs-portfolio-theme',
                get_template_directory_uri() . '/assets/css/theme.css',
                array(),
                $theme_css_ver
        );

        // Theme stylesheet (the WordPress theme header file — holds no CSS in Phase 1).
        wp_enqueue_style(
                'godevs-portfolio-style',
                get_stylesheet_uri(),
                array(),
                GODEVS_PORTFOLIO_VERSION
        );

        // Scroll-reveal + header scroll-state (vanilla JS, enqueued site-wide but lightweight)
        $reveal_js_path = get_template_directory() . '/assets/js/reveal.js';
        $reveal_js_ver  = file_exists( $reveal_js_path ) ? (string) filemtime( $reveal_js_path ) : GODEVS_PORTFOLIO_VERSION;

        wp_enqueue_script(
                'godevs-portfolio-reveal',
                get_template_directory_uri() . '/assets/js/reveal.js',
                array(),
                $reveal_js_ver,
                array( 'in_footer' => true, 'strategy' => 'defer' )
        );
}
add_action( 'wp_enqueue_scripts', 'godevs_portfolio_enqueue_styles' );

/**
 * Include theme components.
 *
 * ALL component files are loaded UNCONDITIONALLY on every request.
 * We previously gated theme-settings.php and demo-importer.php behind
 * is_admin(), but that function is not always reliable at the moment
 * functions.php loads (it can return false on multisite, custom admin
 * URLs, or when a security plugin rewrites the admin path). Loading
 * everything unconditionally is slightly less efficient but eliminates
 * a class of "admin page never appears" bugs.
 *
 * The admin-only files register their hooks via add_action('admin_menu', ...)
 * and add_action('admin_init', ...) — these hooks ONLY fire on admin
 * pages, so the callbacks are never executed on front-end requests.
 *
 * Each require_once is guarded by file_exists() so that if a file is
 * accidentally deleted or the ZIP is incomplete, the theme still loads
 * (with reduced functionality) instead of white-screening. The load
 * status is recorded in $GLOBALS['godevs_portfolio_loaded_files'] so
 * the diagnostic admin notice can report exactly what happened.
 */
$_godevs_inc = get_template_directory() . '/inc';

$_godevs_files = array(
        '/block-patterns.php',
        '/block-styles.php',
        '/content/cpt.php',
        '/content/taxonomies.php',
        '/content/meta-fields.php',
        '/content/case-study.php',
        '/booking-system.php',
        '/front-forms.php',
        '/settings-integration.php',
        '/demo-registry.php',
        '/demo-tracker.php',
        '/demo-renderer.php',
        '/cpt-archives.php',
        '/cpt-admin.php',
        '/theme-settings.php',
        '/demo-importer.php',
        '/header-footer-builder.php',
);

foreach ( $_godevs_files as $_godevs_rel ) {
        $_godevs_full = $_godevs_inc . $_godevs_rel;
        if ( file_exists( $_godevs_full ) ) {
                require_once $_godevs_full;
                $GLOBALS['godevs_portfolio_loaded_files'][ $_godevs_rel ] = true;
        } else {
                $GLOBALS['godevs_portfolio_loaded_files'][ $_godevs_rel ] = false;
        }
}

unset( $_godevs_inc, $_godevs_files, $_godevs_rel, $_godevs_full );

/**
 * Diagnostic admin notice.
 *
 * Shows on the WordPress dashboard for users with 'manage_options' capability.
 * Displays which inc/ files loaded successfully and which CPT registration
 * functions exist. This helps diagnose "CPTs not showing" issues — if you
 * see this notice, functions.php IS loading correctly. If CPTs still don't
 * appear in the admin menu, the issue is with CPT registration itself (not
 * with file loading).
 *
 * The notice auto-dismisses after the first time it's viewed, but can be
 * re-shown by clicking the "Show diagnostics" link on the Settings page.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_diagnostic_notice(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                return;
        }

        // Only show on the dashboard and the themes page.
        $screen = get_current_screen();
        if ( ! $screen ) {
                return;
        }
        if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
                return;
        }

        // Check if the user has dismissed this notice.
        if ( get_user_meta( get_current_user_id(), 'godevs_portfolio_diag_dismissed', true ) ) {
                return;
        }

        $loaded = $GLOBALS['godevs_portfolio_loaded_files'] ?? array();
        $missing = array_keys( array_filter( $loaded, static fn( $v ) => ! $v ) );

        // Check if CPT registration functions exist.
        $cpt_functions = array(
                'godevs_portfolio_register_post_types',
                'godevs_portfolio_register_taxonomies',
                'godevs_portfolio_register_meta_fields',
                'godevs_portfolio_register_case_study_cpt',
        );
        $missing_functions = array_filter( $cpt_functions, static fn( $f ) => ! function_exists( $f ) );

        // Check if CPTs are actually registered.
        $cpts = array(
                'godevs_project',
                'godevs_service',
                'godevs_team',
                'godevs_testimonial',
                'godevs_booking',
                'godevs_experience',
                'godevs_education',
                'godevs_faq',
                'godevs_case_study',
        );
        $unregistered_cpts = array_filter( $cpts, static fn( $c ) => ! post_type_exists( $c ) );

        echo '<div class="notice notice-info is-dismissible godevs-diag-notice" style="padding:12px 16px;">';
        echo '<h3 style="margin:0 0 8px 0;">' . esc_html__( 'GoDevs Portfolio — Diagnostic Status', 'godevs-portfolio' ) . '</h3>';

        echo '<p style="margin:4px 0;"><strong>' . esc_html__( 'Theme version:', 'godevs-portfolio' ) . '</strong> ' . esc_html( GODEVS_PORTFOLIO_VERSION ) . '</p>';

        echo '<p style="margin:4px 0;"><strong>' . esc_html__( 'Files loaded:', 'godevs-portfolio' ) . '</strong> ';
        if ( empty( $missing ) ) {
                echo '<span style="color:green;">' . esc_html__( 'All 10 component files loaded ✓', 'godevs-portfolio' ) . '</span>';
        } else {
                echo '<span style="color:red;">' . esc_html__( 'Missing files:', 'godevs-portfolio' ) . '</span> ';
                echo '<code>' . esc_html( implode( ', ', $missing ) ) . '</code>';
        }
        echo '</p>';

        echo '<p style="margin:4px 0;"><strong>' . esc_html__( 'CPT functions:', 'godevs-portfolio' ) . '</strong> ';
        if ( empty( $missing_functions ) ) {
                echo '<span style="color:green;">' . esc_html__( 'All registration functions exist ✓', 'godevs-portfolio' ) . '</span>';
        } else {
                echo '<span style="color:red;">' . esc_html__( 'Missing functions:', 'godevs-portfolio' ) . '</span> ';
                echo '<code>' . esc_html( implode( ', ', $missing_functions ) ) . '</code>';
        }
        echo '</p>';

        echo '<p style="margin:4px 0;"><strong>' . esc_html__( 'CPTs registered:', 'godevs-portfolio' ) . '</strong> ';
        if ( empty( $unregistered_cpts ) ) {
                echo '<span style="color:green;">' . esc_html__( 'All 9 CPTs registered ✓', 'godevs-portfolio' ) . '</span>';
        } else {
                echo '<span style="color:red;">' . esc_html__( 'Not yet registered:', 'godevs-portfolio' ) . '</span> ';
                echo '<code>' . esc_html( implode( ', ', $unregistered_cpts ) ) . '</code>';
                echo '<br><em>' . esc_html__( '(CPTs register on the init hook — visit any admin page to trigger it.)', 'godevs-portfolio' ) . '</em>';
        }
        echo '</p>';

        echo '<p style="margin:4px 0;"><strong>' . esc_html__( 'Demo import page:', 'godevs-portfolio' ) . '</strong> ';
        if ( function_exists( 'godevs_portfolio_register_admin_page' ) ) {
                echo '<span style="color:green;">' . esc_html__( 'Demo importer loaded — look under Appearance → GoDevs Demos ✓', 'godevs-portfolio' ) . '</span>';
        } else {
                echo '<span style="color:red;">' . esc_html__( 'Demo importer NOT loaded', 'godevs-portfolio' ) . '</span>';
        }
        echo '</p>';

        echo '<p style="margin:8px 0 0 0;font-size:12px;color:#666;">' . esc_html__( 'If CPTs are not registered, visit Settings → Permalinks and click Save Changes to flush rewrite rules.', 'godevs-portfolio' ) . '</p>';

        echo '</div>';

        // AJAX handler for dismissal.
        ?>
        <script>
        (function() {
                var notice = document.querySelector('.godevs-diag-notice');
                if (!notice) return;
                notice.addEventListener('click', function(e) {
                        if (e.target.classList.contains('notice-dismiss')) {
                                fetch(ajaxurl, {
                                        method: 'POST',
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                        body: 'action=godevs_portfolio_dismiss_diag&_ajax_nonce=' + '<?php echo esc_js( wp_create_nonce( 'godevs_diag_dismiss' ) ); ?>'
                                });
                        }
                });
        })();
        </script>
        <?php
}
add_action( 'admin_notices', 'godevs_portfolio_diagnostic_notice' );

/**
 * AJAX handler to dismiss the diagnostic notice.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_dismiss_diag_ajax(): void {
        check_ajax_referer( 'godevs_diag_dismiss', '_ajax_nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => 'Insufficient permissions.' ), 403 );
        }
        update_user_meta( get_current_user_id(), 'godevs_portfolio_diag_dismissed', '1' );
        wp_send_json_success();
}
add_action( 'wp_ajax_godevs_portfolio_dismiss_diag', 'godevs_portfolio_dismiss_diag_ajax' );

/**
 * Seed default module settings on theme activation.
 *
 * The CPT "module visibility" helper reads from the `godevs_portfolio_settings`
 * option. On theme activation, we:
 *   1. DELETE any existing option (to clear stale data from previous versions)
 *   2. Re-seed with fresh defaults (all modules enabled)
 *
 * This ensures CPTs always work after activation, even if a previous broken
 * version left corrupted settings in the database.
 *
 * This runs on `after_switch_theme` (fires once, immediately after the theme
 * is activated in the admin). It is idempotent.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_seed_default_settings(): void {
        // Delete any stale option first — ensures a clean slate after upgrade.
        delete_option( 'godevs_portfolio_settings' );

        // Get defaults from theme-settings.php if available, else use fallback.
        if ( function_exists( 'godevs_portfolio_get_default_settings' ) ) {
                $defaults = godevs_portfolio_get_default_settings();
        } else {
                $defaults = array(
                        'header_sticky'         => '1',
                        'footer_copyright'      => '1',
                        'footer_social_visible' => '1',
                        'blog_show_author'      => '1',
                        'blog_show_date'        => '1',
                        'blog_show_categories'  => '1',
                        'blog_show_featured'    => '1',
                        'module_projects'       => '1',
                        'module_services'       => '1',
                        'module_team'           => '1',
                        'module_testimonials'   => '1',
                        'module_bookings'       => '1',
                        'module_experience'     => '1',
                        'module_education'      => '1',
                        'module_faqs'           => '1',
                        'module_case_studies'   => '1',
                );
        }
        update_option( 'godevs_portfolio_settings', $defaults, false );

        // Also reset the rewrite version so the version-bump flusher re-runs.
        delete_option( 'godevs_portfolio_rewrite_version' );
}
add_action( 'after_switch_theme', 'godevs_portfolio_seed_default_settings' );

/**
 * Flush rewrite rules on theme activation and deactivation.
 *
 * CPTs register custom rewrite slugs (e.g., /projects/, /case-studies/).
 * Without a flush, those URLs will 404 until the admin manually re-saves
 * permalinks. We flush on activation (after_switch_theme) and deactivation
 * (switch_theme) to keep the rewrite rules in sync.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_flush_rewrites_on_switch(): void {
        // CPTs are registered on `init` which fires before this hook on the
        // next request, but the rewrite rules need an explicit flush to be
        // persisted to the options table.
        godevs_portfolio_register_post_types();
        godevs_portfolio_register_taxonomies();
        if ( function_exists( 'godevs_portfolio_register_case_study_cpt' ) ) {
                godevs_portfolio_register_case_study_cpt();
        }
        if ( function_exists( 'godevs_portfolio_register_case_study_taxonomies' ) ) {
                godevs_portfolio_register_case_study_taxonomies();
        }
        flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'godevs_portfolio_flush_rewrites_on_switch' );

/**
 * Flush rewrite rules on theme deactivation.
 *
 * Without this, deactivated CPT rewrites remain in the rewrite rules until
 * the next manual flush, which can cause phantom 404s on the new theme.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_flush_rewrites_on_deactivation(): void {
        flush_rewrite_rules();
}
add_action( 'switch_theme', 'godevs_portfolio_flush_rewrites_on_deactivation' );

/**
 * Version-aware upgrade handler on admin requests.
 *
 * `after_switch_theme` only fires when the theme is freshly activated. When
 * a user upgrades the theme in place (upload new ZIP over existing), the
 * hook does NOT fire. This handler runs on `admin_init` and performs a
 * one-time upgrade whenever the recorded theme version differs from the
 * running version. It:
 *
 *   1. Re-seeds the `godevs_portfolio_settings` option with fresh defaults
 *      (deleting any stale data from a previous broken version).
 *   2. Re-registers all CPTs + taxonomies (idempotent).
 *   3. Flushes rewrite rules so CPT archives (/projects/, /case-studies/,
 *      /services/, …) are immediately queryable.
 *   4. Records the current version so the handler doesn't re-run until the
 *      next version bump.
 *
 * This handler also serves as the FIRST-RUN initializer — if the recorded
 * version is empty (fresh install), it runs all the setup steps.
 *
 * @return void
 * @since 1.1.0
 */
function godevs_portfolio_upgrade_handler(): void {
        if ( ! is_admin() ) {
                return;
        }
        $recorded = get_option( 'godevs_portfolio_rewrite_version', '' );
        if ( $recorded === GODEVS_PORTFOLIO_VERSION ) {
                return;
        }

        // 1. Re-seed settings with fresh defaults (clears stale data).
        if ( function_exists( 'godevs_portfolio_get_default_settings' ) ) {
                $defaults = godevs_portfolio_get_default_settings();
        } else {
                $defaults = array(
                        'header_sticky'         => '1',
                        'footer_copyright'      => '1',
                        'footer_social_visible' => '1',
                        'blog_show_author'      => '1',
                        'blog_show_date'        => '1',
                        'blog_show_categories'  => '1',
                        'blog_show_featured'    => '1',
                        'module_projects'       => '1',
                        'module_services'       => '1',
                        'module_team'           => '1',
                        'module_testimonials'   => '1',
                        'module_bookings'       => '1',
                        'module_experience'     => '1',
                        'module_education'      => '1',
                        'module_faqs'           => '1',
                        'module_case_studies'   => '1',
                );
        }
        // Only overwrite if the option is missing OR contains empty/stale values.
        $existing = get_option( 'godevs_portfolio_settings', array() );
        if ( ! is_array( $existing ) || empty( $existing ) ) {
                update_option( 'godevs_portfolio_settings', $defaults, false );
        } else {
                // Merge: ensure every module key exists with a default if missing.
                $merged = array_merge( $defaults, $existing );
                // Any empty-string module values → reset to '1' (fixes stale disable).
                foreach ( $defaults as $key => $default_val ) {
                        if ( 0 === strpos( $key, 'module_' ) ) {
                                if ( ! isset( $merged[ $key ] ) || '' === $merged[ $key ] ) {
                                        $merged[ $key ] = '1';
                                }
                        }
                }
                update_option( 'godevs_portfolio_settings', $merged, false );
        }

        // 2. Re-register CPTs + taxonomies (idempotent).
        if ( function_exists( 'godevs_portfolio_register_post_types' ) ) {
                godevs_portfolio_register_post_types();
        }
        if ( function_exists( 'godevs_portfolio_register_taxonomies' ) ) {
                godevs_portfolio_register_taxonomies();
        }
        if ( function_exists( 'godevs_portfolio_register_case_study_cpt' ) ) {
                godevs_portfolio_register_case_study_cpt();
        }
        if ( function_exists( 'godevs_portfolio_register_case_study_taxonomies' ) ) {
                godevs_portfolio_register_case_study_taxonomies();
        }

        // 3. Flush rewrite rules.
        flush_rewrite_rules();

        // 4. Record the version so this handler doesn't re-run.
        update_option( 'godevs_portfolio_rewrite_version', GODEVS_PORTFOLIO_VERSION, false );
}
add_action( 'admin_init', 'godevs_portfolio_upgrade_handler' );
