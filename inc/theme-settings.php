<?php
/**
 * Theme Settings for GoDevs Portfolio.
 *
 * A simplified settings page with only non-visual, non-theme.json-expressible
 * toggles. All visual design tokens (colors, typography, spacing, radii) are
 * controlled via theme.json and the WordPress Global Styles editor.
 *
 * Settings stored as a single theme_mod array for simplicity.
 *
 * CRITICAL FALLBACK: This file also loads ALL other inc/ modules. In older
 * versions of the theme (v1.0.0–v1.1.0), functions.php only loaded 3 files:
 *   - inc/block-patterns.php
 *   - inc/block-styles.php
 *   - inc/theme-settings.php (this file — loaded only inside is_admin())
 *
 * This meant CPTs, taxonomies, meta fields, case-study, demo-registry,
 * demo-tracker, and demo-importer were NEVER loaded, so CPTs didn't
 * register and the demo import page didn't appear.
 *
 * To fix this for users who haven't properly replaced their old theme files
 * (WordPress sometimes doesn't overwrite existing theme folders on upload),
 * we load ALL required modules from HERE as well. Loading a file twice is
 * safe because every file uses `if ( ! defined( 'ABSPATH' ) ) exit;` guards
 * and all function declarations use unique names. The require_once call
 * ensures each file is only loaded once per request, even if functions.php
 * also tries to load it.
 *
 * @package GoDevs_Portfolio
 * @since   1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ── FALLBACK LOADER ──────────────────────────────────────────────────────
// Load ALL inc/ modules from here as a fallback. This ensures CPTs and the
// demo importer load even if the user is running an OLD version of
// functions.php that doesn't include the require_once calls for these files.
// require_once guarantees no double-loading.
$_godevs_fallback_dir = get_template_directory() . '/inc';

$_godevs_fallback_files = array(
        '/content/cpt.php',
        '/content/taxonomies.php',
        '/content/meta-fields.php',
        '/content/case-study.php',
        '/demo-registry.php',
        '/demo-tracker.php',
        '/demo-importer.php',
);

foreach ( $_godevs_fallback_files as $_godevs_fallback_rel ) {
        $_godevs_fallback_full = $_godevs_fallback_dir . $_godevs_fallback_rel;
        if ( file_exists( $_godevs_fallback_full ) ) {
                require_once $_godevs_fallback_full;
        }
}

unset( $_godevs_fallback_dir, $_godevs_fallback_files, $_godevs_fallback_rel, $_godevs_fallback_full );

/**
 * Default settings values.
 *
 * @return array<string,string> Default settings.
 */
function godevs_portfolio_get_default_settings(): array {
        return array(
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

/**
 * Get a single setting value via theme_mod.
 *
 * @param string $key Setting key.
 * @return string Setting value.
 */
function godevs_portfolio_get_setting( string $key ): string {
        $defaults = godevs_portfolio_get_default_settings();
        return (string) get_theme_mod( 'godevs_portfolio_' . $key, $defaults[ $key ] ?? '' );
}

/**
 * Register the admin menu page.
 *
 * @return void
 */
function godevs_portfolio_settings_register_menu(): void {
        add_theme_page(
                __( 'GoDevs Settings', 'godevs-portfolio' ),
                __( 'GoDevs Settings', 'godevs-portfolio' ),
                'manage_options',
                'godevs-portfolio-settings',
                'godevs_portfolio_settings_render_page'
        );
}
add_action( 'admin_menu', 'godevs_portfolio_settings_register_menu' );

/**
 * Register settings via the Settings API.
 *
 * @return void
 */
function godevs_portfolio_settings_register(): void {
        register_setting(
                'godevs_portfolio_settings_group',
                'godevs_portfolio_settings',
                array(
                        'type'              => 'array',
                        'sanitize_callback' => 'godevs_portfolio_settings_sanitize',
                        'default'           => godevs_portfolio_get_default_settings(),
                )
        );

        add_settings_section(
                'godevs_settings',
                __( 'Theme Options', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        // Header settings.
        add_settings_field( 'header_sticky', __( 'Sticky Header', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'header_sticky', 'desc' => __( 'Keep the header sticky on scroll.', 'godevs-portfolio' ) ) );

        // Footer settings.
        add_settings_field( 'footer_copyright', __( 'Footer Copyright', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'footer_copyright', 'desc' => __( 'Show copyright text in footer.', 'godevs-portfolio' ) ) );
        add_settings_field( 'footer_social_visible', __( 'Footer Social Links', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'footer_social_visible', 'desc' => __( 'Show social links in footer.', 'godevs-portfolio' ) ) );

        // Blog settings.
        add_settings_field( 'blog_show_author', __( 'Show Author', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'blog_show_author', 'desc' => __( 'Show author name on blog posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_date', __( 'Show Date', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'blog_show_date', 'desc' => __( 'Show date on blog posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_categories', __( 'Show Categories', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'blog_show_categories', 'desc' => __( 'Show categories on blog posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_featured', __( 'Show Featured Image', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'blog_show_featured', 'desc' => __( 'Show featured image on blog posts.', 'godevs-portfolio' ) ) );

        // Content module toggles.
        add_settings_field( 'module_projects', __( 'Projects Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_projects', 'desc' => __( 'Enable the Projects custom post type (homepage portfolio, single project pages, project categories and tags).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_services', __( 'Services Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_services', 'desc' => __( 'Enable the Services custom post type (service listings, pricing, call-to-action links).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_team', __( 'Team Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_team', 'desc' => __( 'Enable the Team custom post type (team member profiles, departments, social links).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_testimonials', __( 'Testimonials Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_testimonials', 'desc' => __( 'Enable the Testimonials custom post type (client quotes, ratings, featured testimonials).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_bookings', __( 'Bookings Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_bookings', 'desc' => __( 'Enable the Bookings custom post type (private — admin-only, intake form submissions are not exposed publicly).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_experience', __( 'Experience Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_experience', 'desc' => __( 'Enable the Experience custom post type (work history timeline, résumé sections, career cards).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_education', __( 'Education Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_education', 'desc' => __( 'Enable the Education custom post type (degrees, institutions, academic timeline sections).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_faqs', __( 'FAQs Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_faqs', 'desc' => __( 'Enable the FAQs custom post type (frequently asked questions with categories, used by native Details blocks).', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_case_studies', __( 'Case Studies Module', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_settings', array( 'key' => 'module_case_studies', 'desc' => __( 'Enable the Case Studies custom post type (project deep-dives with challenge, solution, process, results, and link meta boxes).', 'godevs-portfolio' ) ) );
}
add_action( 'admin_init', 'godevs_portfolio_settings_register' );

/**
 * Sanitize settings input.
 *
 * Checkboxes that are unchecked are NOT submitted in the POST body (this is
 * standard HTML form behavior). We must therefore treat "missing key" as
 * "unchecked", NOT as "use the default" — otherwise unticking a module
 * toggle would silently re-enable it on the next save.
 *
 * @param array $input Raw input.
 * @return array<string,string> Sanitized settings.
 */
function godevs_portfolio_settings_sanitize( array $input ): array {
        $defaults = godevs_portfolio_get_default_settings();
        $output   = array();

        foreach ( $defaults as $key => $default ) {
                // Treat an absent key as "unchecked" — do NOT fall back to the default.
                // The default '1' is only used when the option is first created (via
                // the activation seed in functions.php), not when the user actively
                // unticks a checkbox and saves.
                $val = $input[ $key ] ?? '';
                $output[ $key ] = ! empty( $val ) ? '1' : '';
        }

        return $output;
}

/**
 * Render a checkbox field.
 *
 * @param array $args Field arguments.
 * @return void
 */
function godevs_portfolio_settings_checkbox_field( array $args ): void {
        $key  = $args['key'];
        $desc = $args['desc'] ?? '';
        $val  = godevs_portfolio_get_setting( $key );

        printf(
                '<label><input type="checkbox" id="godevs_%1$s" name="godevs_portfolio_settings[%1$s]" value="1" %2$s /> %3$s</label>',
                esc_attr( $key ),
                checked( (string) $val, '1', false ),
                esc_html( $desc )
        );
}

/**
 * Render the settings page — single tab, simplified.
 *
 * @return void
 */
function godevs_portfolio_settings_render_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'You do not have permission to access this page.', 'godevs-portfolio' ) );
        }

        // Store settings to theme_mods when saved.
        $settings = get_option( 'godevs_portfolio_settings' );
        if ( is_array( $settings ) ) {
                foreach ( $settings as $key => $val ) {
                        set_theme_mod( 'godevs_portfolio_' . $key, $val );
                }
        }

        // Handle reset.
        if ( isset( $_POST['godevs_reset_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['godevs_reset_nonce'] ) ), 'godevs_reset_settings' ) ) {
                if ( current_user_can( 'manage_options' ) ) {
                        $defaults = godevs_portfolio_get_default_settings();
                        foreach ( $defaults as $key => $default ) {
                                set_theme_mod( 'godevs_portfolio_' . $key, $default );
                        }
                        echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Settings reset to defaults.', 'godevs-portfolio' ) . '</p></div>';
                }
        }

        // Handle Force Fix button.
        $force_fix_result = '';
        if ( isset( $_POST['godevs_force_fix_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['godevs_force_fix_nonce'] ) ), 'godevs_force_fix' ) ) {
                if ( current_user_can( 'manage_options' ) ) {
                        $force_fix_result = godevs_portfolio_run_force_fix();
                }
        }

        ?>
        <div class="wrap godevs-settings-wrap">
                <h1><?php esc_html_e( 'GoDevs Settings', 'godevs-portfolio' ); ?></h1>
                <p class="description"><?php esc_html_e( 'Configure theme behavior options. Visual design (colors, typography, spacing) is managed through the WordPress Site Editor under Appearance → Editor → Styles.', 'godevs-portfolio' ); ?></p>

                <?php if ( $force_fix_result ) : ?>
                        <div class="notice notice-success is-dismissible"><p><?php echo $force_fix_result; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pre-escaped HTML. ?></p></div>
                <?php endif; ?>

                <?php
                // ── SYSTEM STATUS PANEL ──────────────────────────────────
                // This panel is ALWAYS visible on the settings page and shows
                // the exact state of the theme's CPT system. It helps diagnose
                // "CPTs not showing" issues without needing to visit the dashboard.
                $version = defined( 'GODEVS_PORTFOLIO_VERSION' ) ? GODEVS_PORTFOLIO_VERSION : 'UNKNOWN';

                // Check which files loaded.
                $loaded_files = $GLOBALS['godevs_portfolio_loaded_files'] ?? array();
                $expected_files = array(
                        '/block-patterns.php',
                        '/block-styles.php',
                        '/content/cpt.php',
                        '/content/taxonomies.php',
                        '/content/meta-fields.php',
                        '/content/case-study.php',
                        '/demo-registry.php',
                        '/demo-tracker.php',
                        '/theme-settings.php',
                        '/demo-importer.php',
                );

                // Check CPT functions.
                $cpt_functions = array(
                        'godevs_portfolio_register_post_types' => 'Projects/Services/Team/etc CPT registration',
                        'godevs_portfolio_register_taxonomies' => 'Taxonomy registration',
                        'godevs_portfolio_register_meta_fields' => 'Meta field registration',
                        'godevs_portfolio_register_case_study_cpt' => 'Case Study CPT registration',
                        'godevs_portfolio_register_admin_page' => 'Demo importer admin page',
                );

                // Check registered CPTs.
                $cpts = array(
                        'godevs_project'     => 'Projects',
                        'godevs_service'     => 'Services',
                        'godevs_team'        => 'Team',
                        'godevs_testimonial' => 'Testimonials',
                        'godevs_booking'     => 'Bookings',
                        'godevs_experience'  => 'Experience',
                        'godevs_education'   => 'Education',
                        'godevs_faq'         => 'FAQs',
                        'godevs_case_study'  => 'Case Studies',
                );
                ?>
                <div class="godevs-system-status" style="background: #fff; border: 1px solid #c3c4c7; border-radius: 4px; padding: 16px; margin: 20px 0;">
                        <h2 style="margin-top:0;">
                                <?php esc_html_e( 'System Status', 'godevs-portfolio' ); ?>
                                <span style="font-size:14px;font-weight:normal;color:#666;">
                                        <?php esc_html_e( 'Theme Version:', 'godevs-portfolio' ); ?>
                                        <strong style="color:<?php echo esc_attr( version_compare( $version, '1.1.1', '>=' ) ? 'green' : 'red' ); ?>;">
                                                <?php echo esc_html( $version ); ?>
                                        </strong>
                                </span>
                        </h2>

                        <?php if ( version_compare( $version, '1.1.1', '<' ) ) : ?>
                                <div class="notice notice-error inline" style="margin:0 0 16px 0;">
                                        <p>
                                                <strong><?php esc_html_e( 'OUTDATED THEME VERSION DETECTED', 'godevs-portfolio' ); ?></strong><br>
                                                <?php esc_html_e( 'You are running an older version of GoDevs Portfolio that does not include the CPT loading fix. Please install the latest version (1.1.1 or later) to get the CPTs and Demo Importer.', 'godevs-portfolio' ); ?>
                                        </p>
                                </div>
                        <?php endif; ?>

                        <table class="widefat striped" style="border:none;">
                                <thead>
                                        <tr>
                                                <th style="width:40%;"><?php esc_html_e( 'Component', 'godevs-portfolio' ); ?></th>
                                                <th style="width:15%;"><?php esc_html_e( 'Status', 'godevs-portfolio' ); ?></th>
                                                <th><?php esc_html_e( 'Details', 'godevs-portfolio' ); ?></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ( $expected_files as $rel ) : ?>
                                                <?php $is_loaded = $loaded_files[ $rel ] ?? null; ?>
                                                <tr>
                                                        <td><code>inc<?php echo esc_html( $rel ); ?></code></td>
                                                        <td>
                                                                <?php if ( true === $is_loaded ) : ?>
                                                                        <span style="color:green;">✓ <?php esc_html_e( 'Loaded', 'godevs-portfolio' ); ?></span>
                                                                <?php elseif ( false === $is_loaded ) : ?>
                                                                        <span style="color:red;">✗ <?php esc_html_e( 'Missing', 'godevs-portfolio' ); ?></span>
                                                                <?php else : ?>
                                                                        <span style="color:#999;">? <?php esc_html_e( 'Not checked', 'godevs-portfolio' ); ?></span>
                                                                <?php endif; ?>
                                                        </td>
                                                        <td>
                                                                <?php if ( false === $is_loaded ) : ?>
                                                                        <?php esc_html_e( 'File does not exist or is unreadable.', 'godevs-portfolio' ); ?>
                                                                <?php elseif ( null === $is_loaded ) : ?>
                                                                        <?php esc_html_e( 'The loading tracker was not initialized — you may be running an older theme version.', 'godevs-portfolio' ); ?>
                                                                <?php else : ?>
                                                                        <?php esc_html_e( 'OK', 'godevs-portfolio' ); ?>
                                                                <?php endif; ?>
                                                        </td>
                                                </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>

                        <h3 style="margin-top:20px;"><?php esc_html_e( 'CPT Registration Functions', 'godevs-portfolio' ); ?></h3>
                        <table class="widefat striped" style="border:none;">
                                <tbody>
                                        <?php foreach ( $cpt_functions as $fn => $desc ) : ?>
                                                <tr>
                                                        <td style="width:40%;"><code><?php echo esc_html( $fn ); ?>()</code></td>
                                                        <td style="width:15%;">
                                                                <?php if ( function_exists( $fn ) ) : ?>
                                                                        <span style="color:green;">✓ <?php esc_html_e( 'Exists', 'godevs-portfolio' ); ?></span>
                                                                <?php else : ?>
                                                                        <span style="color:red;">✗ <?php esc_html_e( 'Missing', 'godevs-portfolio' ); ?></span>
                                                                <?php endif; ?>
                                                        </td>
                                                        <td><?php echo esc_html( $desc ); ?></td>
                                                </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>

                        <h3 style="margin-top:20px;"><?php esc_html_e( 'Registered Custom Post Types', 'godevs-portfolio' ); ?></h3>
                        <table class="widefat striped" style="border:none;">
                                <thead>
                                        <tr>
                                                <th style="width:30%;"><?php esc_html_e( 'CPT Slug', 'godevs-portfolio' ); ?></th>
                                                <th style="width:30%;"><?php esc_html_e( 'Label', 'godevs-portfolio' ); ?></th>
                                                <th style="width:15%;"><?php esc_html_e( 'Status', 'godevs-portfolio' ); ?></th>
                                                <th><?php esc_html_e( 'Admin Menu', 'godevs-portfolio' ); ?></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ( $cpts as $slug => $label ) : ?>
                                                <?php
                                                $exists = post_type_exists( $slug );
                                                $obj = $exists ? get_post_type_object( $slug ) : null;
                                                $in_menu = $obj && isset( $obj->show_in_menu ) && $obj->show_in_menu;
                                                $menu_label = '';
                                                if ( $obj && isset( $obj->labels->menu_name ) ) {
                                                        $menu_label = $obj->labels->menu_name;
                                                }
                                                ?>
                                                <tr>
                                                        <td><code><?php echo esc_html( $slug ); ?></code></td>
                                                        <td><?php echo esc_html( $label ); ?></td>
                                                        <td>
                                                                <?php if ( $exists ) : ?>
                                                                        <span style="color:green;">✓ <?php esc_html_e( 'Registered', 'godevs-portfolio' ); ?></span>
                                                                <?php else : ?>
                                                                        <span style="color:red;">✗ <?php esc_html_e( 'NOT Registered', 'godevs-portfolio' ); ?></span>
                                                                <?php endif; ?>
                                                        </td>
                                                        <td>
                                                                <?php if ( $in_menu ) : ?>
                                                                        <?php esc_html_e( 'Shows in sidebar as: ', 'godevs-portfolio' ); ?>
                                                                        <strong><?php echo esc_html( $menu_label ); ?></strong>
                                                                <?php else : ?>
                                                                        <span style="color:red;"><?php esc_html_e( 'Not in admin menu', 'godevs-portfolio' ); ?></span>
                                                                <?php endif; ?>
                                                        </td>
                                                </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>

                        <h3 style="margin-top:20px;"><?php esc_html_e( 'Demo Importer', 'godevs-portfolio' ); ?></h3>
                        <table class="widefat striped" style="border:none;">
                                <tbody>
                                        <tr>
                                                <td style="width:40%;"><code>godevs_portfolio_register_admin_page()</code></td>
                                                <td style="width:15%;">
                                                        <?php if ( function_exists( 'godevs_portfolio_register_admin_page' ) ) : ?>
                                                                <span style="color:green;">✓ <?php esc_html_e( 'Loaded', 'godevs-portfolio' ); ?></span>
                                                        <?php else : ?>
                                                                <span style="color:red;">✗ <?php esc_html_e( 'Missing', 'godevs-portfolio' ); ?></span>
                                                        <?php endif; ?>
                                                </td>
                                                <td>
                                                        <?php if ( function_exists( 'godevs_portfolio_register_admin_page' ) ) : ?>
                                                                <?php esc_html_e( 'Demo importer loaded. Look under Appearance → GoDevs Demos.', 'godevs-portfolio' ); ?>
                                                        <?php else : ?>
                                                                <?php esc_html_e( 'Demo importer is NOT loaded. The file inc/demo-importer.php failed to load.', 'godevs-portfolio' ); ?>
                                                        <?php endif; ?>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
                </div>

                <?php
                // ── FORCE FIX BUTTON ──────────────────────────────────────
                // This button manually triggers the CPT registration, settings
                // re-seed, and rewrite flush. It's a manual override that works
                // even if the automatic hooks failed.
                ?>
                <div class="godevs-force-fix" style="background: #fff; border: 1px solid #c3c4c7; border-radius: 4px; padding: 16px; margin: 20px 0;">
                        <h2 style="margin-top:0;"><?php esc_html_e( 'Force Fix & Reset', 'godevs-portfolio' ); ?></h2>
                        <p class="description">
                                <?php esc_html_e( 'If CPTs (Projects, Services, Team, etc.) or the Demo Importer are not showing in the admin menu, click this button. It will:', 'godevs-portfolio' ); ?>
                        </p>
                        <ol style="margin-left: 20px;">
                                <li><?php esc_html_e( 'Delete and re-seed the module settings option with fresh defaults (all CPTs enabled)', 'godevs-portfolio' ); ?></li>
                                <li><?php esc_html_e( 'Re-register all 9 custom post types and their taxonomies', 'godevs-portfolio' ); ?></li>
                                <li><?php esc_html_e( 'Flush rewrite rules so CPT archive URLs (/projects/, /case-studies/, etc.) work', 'godevs-portfolio' ); ?></li>
                        </ol>
                        <form method="post" action="">
                                <?php wp_nonce_field( 'godevs_force_fix', 'godevs_force_fix_nonce' ); ?>
                                <button type="submit" class="button button-primary button-large" onclick="return confirm('<?php esc_attr_e( 'This will reset module settings and flush rewrite rules. Continue?', 'godevs-portfolio' ); ?>');">
                                        <?php esc_html_e( 'Force Fix: Re-register CPTs + Flush Rewrites', 'godevs-portfolio' ); ?>
                                </button>
                        </form>
                </div>

                <form method="post" action="options.php">
                        <?php settings_fields( 'godevs_portfolio_settings_group' ); ?>
                        <table class="form-table" role="presentation">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_settings' ); ?>
                        </table>
                        <?php submit_button( __( 'Save Settings', 'godevs-portfolio' ) ); ?>
                </form>

                <form method="post" action="" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dcdcde;">
                        <h3><?php esc_html_e( 'Reset Settings', 'godevs-portfolio' ); ?></h3>
                        <p class="description"><?php esc_html_e( 'Reset all settings to defaults. This will not delete any content, pages, posts, or imported demos.', 'godevs-portfolio' ); ?></p>
                        <?php wp_nonce_field( 'godevs_reset_settings', 'godevs_reset_nonce' ); ?>
                        <button type="submit" class="button button-link-delete" onclick="return confirm('<?php esc_attr_e( 'Are you sure you want to reset all settings to defaults?', 'godevs-portfolio' ); ?>');">
                                <?php esc_html_e( 'Reset to Defaults', 'godevs-portfolio' ); ?>
                        </button>
                </form>
        </div>
        <?php
}

/**
 * Run the force fix: re-seed settings, re-register CPTs, flush rewrites.
 *
 * This is a manual override that can be triggered from the Settings page.
 * It does the same thing as the upgrade_handler, but runs on-demand.
 *
 * @return string HTML status message (pre-escaped).
 * @since 1.1.1
 */
function godevs_portfolio_run_force_fix(): string {
        $messages = array();

        // 1. Delete and re-seed settings.
        delete_option( 'godevs_portfolio_settings' );
        $defaults = function_exists( 'godevs_portfolio_get_default_settings' )
                ? godevs_portfolio_get_default_settings()
                : array(
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
        update_option( 'godevs_portfolio_settings', $defaults, false );
        $messages[] = __( '✓ Module settings re-seeded with fresh defaults (all CPTs enabled).', 'godevs-portfolio' );

        // 2. Re-register CPTs + taxonomies.
        if ( function_exists( 'godevs_portfolio_register_post_types' ) ) {
                godevs_portfolio_register_post_types();
                $messages[] = __( '✓ Custom post types re-registered.', 'godevs-portfolio' );
        } else {
                $messages[] = __( '✗ CPT registration function not found — the theme file inc/content/cpt.php is not loaded.', 'godevs-portfolio' );
        }

        if ( function_exists( 'godevs_portfolio_register_taxonomies' ) ) {
                godevs_portfolio_register_taxonomies();
                $messages[] = __( '✓ Taxonomies re-registered.', 'godevs-portfolio' );
        }

        if ( function_exists( 'godevs_portfolio_register_case_study_cpt' ) ) {
                godevs_portfolio_register_case_study_cpt();
        }
        if ( function_exists( 'godevs_portfolio_register_case_study_taxonomies' ) ) {
                godevs_portfolio_register_case_study_taxonomies();
        }
        if ( function_exists( 'godevs_portfolio_register_case_study_meta' ) ) {
                godevs_portfolio_register_case_study_meta();
        }
        if ( function_exists( 'godevs_portfolio_register_meta_fields' ) ) {
                godevs_portfolio_register_meta_fields();
        }

        // 3. Flush rewrite rules.
        flush_rewrite_rules( true );
        $messages[] = __( '✓ Rewrite rules flushed. CPT archive URLs (/projects/, /case-studies/, etc.) should now work.', 'godevs-portfolio' );

        // 4. Record the version so the upgrade handler doesn't re-run.
        if ( defined( 'GODEVS_PORTFOLIO_VERSION' ) ) {
                update_option( 'godevs_portfolio_rewrite_version', GODEVS_PORTFOLIO_VERSION, false );
        }

        // 5. Check final state.
        $cpts_check = array(
                'godevs_project', 'godevs_service', 'godevs_team', 'godevs_testimonial',
                'godevs_booking', 'godevs_experience', 'godevs_education', 'godevs_faq',
                'godevs_case_study',
        );
        $registered = array_filter( $cpts_check, 'post_type_exists' );
        $count = count( $registered );

        $messages[] = sprintf(
                /* translators: %d: number of CPTs registered. */
                __( '✓ %d of 9 CPTs are now registered. %s', 'godevs-portfolio' ),
                $count,
                $count === 9
                        ? __( 'All CPTs should appear in the admin sidebar.', 'godevs-portfolio' )
                        : __( 'Some CPTs failed to register — check the System Status table above.', 'godevs-portfolio' )
        );

        return '<strong>' . esc_html__( 'Force fix completed:', 'godevs-portfolio' ) . '</strong><br>' . implode( '<br>', array_map( 'esc_html', $messages ) );
}
