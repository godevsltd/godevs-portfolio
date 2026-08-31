<?php
/**
 * Theme Settings — Modern Dynamic Dashboard for GoDevs Portfolio.
 *
 * @package GoDevs_Portfolio
 * @since   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ── FALLBACK LOADER ──────────────────────────────────────────────────────────
$_godevs_fb_dir = get_template_directory() . '/inc';
foreach ( array( '/content/cpt.php', '/content/taxonomies.php', '/content/meta-fields.php', '/content/case-study.php', '/demo-registry.php', '/demo-tracker.php', '/demo-importer.php' ) as $_fb ) {
        $_p = $_godevs_fb_dir . $_fb;
        if ( file_exists( $_p ) ) { require_once $_p; }
}
unset( $_godevs_fb_dir, $_fb, $_p );

// ════════════════════════════════════════════════════════════════════════════
// DEFAULT SETTINGS
// ════════════════════════════════════════════════════════════════════════════

function godevs_portfolio_get_default_settings(): array {
        return array(
                // General
                'brand_name'              => get_bloginfo( 'name' ),
                'brand_tagline'           => get_bloginfo( 'description' ),
                // Typography
                'display_font'            => 'display',
                'body_font'               => 'body',
                'heading_weight'          => '600',
                'type_scale'              => 'fluid',
                // Colors
                'accent_color'            => '#2563EB',
                'accent_hover'            => '#1d4ed8',
                'surface_color'           => '#FFFFFF',
                'background_color'        => '#FAFAF7',
                'text_color'              => '#0A0A0A',
                'muted_color'             => '#6B7280',
                // Layout
                'container_width'         => '1280',
                'content_width'           => '640',
                'card_radius'             => '8',
                'button_radius'           => '6',
                'global_spacing'          => 'normal',
                // Header
                'header_style'            => 'default',
                'header_sticky'           => '1',
                'header_cta_text'         => '',
                'header_cta_link'         => '',
                // Footer
                'footer_style'            => 'default',
                'footer_copyright'        => '1',
                'footer_social'           => '1',
                'footer_cta'              => '0',
                // Blog
                'blog_layout'             => 'grid',
                'blog_columns'            => '3',
                'blog_show_author'        => '1',
                'blog_show_date'          => '1',
                'blog_show_categories'    => '1',
                'blog_show_featured'      => '1',
                // Portfolio
                'portfolio_layout'       => 'grid',
                'portfolio_columns'      => '3',
                'portfolio_show_client'   => '1',
                'portfolio_show_year'     => '1',
                'portfolio_show_type'     => '1',
                // Services
                'services_layout'         => 'grid',
                'services_show_price'     => '0',
                'services_show_cta'       => '1',
                // Team
                'team_layout'             => 'grid',
                'team_show_social'        => '1',
                'team_show_bio'           => '1',
                // Testimonials
                'testimonials_layout'     => 'grid',
                'testimonials_show_avatar' => '1',
                'testimonials_show_rating' => '1',
                // Demo
                'demo_card_density'      => 'comfortable',
                'demo_preview_ratio'     => '16/10',
                // Performance
                'motion_enabled'         => '1',
                'reduced_motion'         => '0',
                'lazy_images'            => '1',
                // Modules
                'module_projects'        => '1',
                'module_services'        => '1',
                'module_team'            => '1',
                'module_testimonials'    => '1',
                'module_bookings'        => '1',
                'module_experience'      => '1',
                'module_education'       => '1',
                'module_faqs'            => '1',
                'module_case_studies'    => '1',
        );
}

function godevs_portfolio_get_setting( string $key ): string {
        $defaults = godevs_portfolio_get_default_settings();
        return (string) get_option( 'godevs_portfolio_' . $key, $defaults[ $key ] ?? '' );
}

// ════════════════════════════════════════════════════════════════════════════
// REGISTER MENU + SETTINGS
// ════════════════════════════════════════════════════════════════════════════

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

function godevs_portfolio_settings_register(): void {
        $defaults = godevs_portfolio_get_default_settings();
        foreach ( $defaults as $key => $val ) {
                register_setting( 'godevs_portfolio_settings_group', 'godevs_portfolio_' . $key, array(
                        'type'              => 'string',
                        'sanitize_callback' => 'sanitize_text_field',
                        'default'           => $val,
                ) );
        }
}
add_action( 'admin_init', 'godevs_portfolio_settings_register' );

// ════════════════════════════════════════════════════════════════════════════
// ENQUEUE ASSETS
// ════════════════════════════════════════════════════════════════════════════

function godevs_portfolio_settings_enqueue( string $hook ): void {
        if ( 'appearance_page_godevs-portfolio-settings' !== $hook ) return;

        $css = get_template_directory() . '/assets/css/admin-settings.css';
        $css_hf = get_template_directory() . '/assets/css/admin-hf-builder.css';
        $js  = get_template_directory() . '/assets/js/admin-settings.js';
        $js_hf = get_template_directory() . '/assets/js/admin-hf-builder.js';

        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_style( 'godevs-admin-settings', get_template_directory_uri() . '/assets/css/admin-settings.css', array( 'wp-color-picker' ), (string) filemtime( $css ) );
        wp_enqueue_style( 'godevs-admin-hf-builder', get_template_directory_uri() . '/assets/css/admin-hf-builder.css', array( 'godevs-admin-settings' ), (string) filemtime( $css_hf ) );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'godevs-admin-settings', get_template_directory_uri() . '/assets/js/admin-settings.js', array( 'wp-color-picker', 'jquery' ), (string) filemtime( $js ), true );
        wp_enqueue_script( 'godevs-admin-hf-builder', get_template_directory_uri() . '/assets/js/admin-hf-builder.js', array( 'jquery', 'godevs-admin-settings' ), (string) filemtime( $js_hf ), true );
        wp_localize_script( 'godevs-admin-settings', 'GODEVS_SETTINGS', array(
                'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
                'ajaxNonce' => wp_create_nonce( 'godevs_settings_save' ),
                'i18n'      => array(
                        'saved'      => __( 'Settings saved successfully.', 'godevs-portfolio' ),
                        'error'      => __( 'Error saving settings.', 'godevs-portfolio' ),
                        'resetConf'  => __( 'Reset all settings to defaults? This cannot be undone.', 'godevs-portfolio' ),
                        'resetDone'  => __( 'Settings reset to defaults.', 'godevs-portfolio' ),
                ),
        ) );
}
add_action( 'admin_enqueue_scripts', 'godevs_portfolio_settings_enqueue' );

// ════════════════════════════════════════════════════════════════════════════
// AJAX SAVE
// ════════════════════════════════════════════════════════════════════════════

function godevs_portfolio_ajax_save_settings(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $defaults = godevs_portfolio_get_default_settings();
        $saved    = 0;

        foreach ( $defaults as $key => $default ) {
                $val = isset( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : $default;
                update_option( 'godevs_portfolio_' . $key, $val );
                $saved++;
        }

        // Generate dynamic CSS
        godevs_portfolio_generate_dynamic_css();

        wp_send_json_success( array(
                'message' => sprintf( __( 'Saved %d settings.', 'godevs-portfolio' ), $saved ),
        ) );
}
add_action( 'wp_ajax_godevs_portfolio_save_settings', 'godevs_portfolio_ajax_save_settings' );

function godevs_portfolio_ajax_reset_settings(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $defaults = godevs_portfolio_get_default_settings();
        foreach ( $defaults as $key => $val ) {
                delete_option( 'godevs_portfolio_' . $key );
        }

        godevs_portfolio_generate_dynamic_css();

        wp_send_json_success( array( 'message' => __( 'Settings reset to defaults.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_portfolio_reset_settings', 'godevs_portfolio_ajax_reset_settings' );

/**
 * Generate dynamic CSS from settings and inject via wp_head.
 */
function godevs_portfolio_generate_dynamic_css(): void {
        $accent   = godevs_portfolio_get_setting( 'accent_color' );
        $bg       = godevs_portfolio_get_setting( 'background_color' );
        $surface  = godevs_portfolio_get_setting( 'surface_color' );
        $text     = godevs_portfolio_get_setting( 'text_color' );
        $muted    = godevs_portfolio_get_setting( 'muted_color' );
        $card_r   = godevs_portfolio_get_setting( 'card_radius' );
        $btn_r    = godevs_portfolio_get_setting( 'button_radius' );
        $container = godevs_portfolio_get_setting( 'container_width' );
        $content  = godevs_portfolio_get_setting( 'content_width' );

        $css = ":root{";
        $css .= "--wp--preset--color--accent:{$accent};";
        $css .= "--wp--preset--color--base:{$bg};";
        $css .= "--wp--preset--color--surface:{$surface};";
        $css .= "--wp--preset--color--foreground:{$text};";
        $css .= "--wp--preset--color--muted:{$muted};";
        $css .= "--wp--custom--radius--md:{$card_r}px;";
        $css .= "--wp--custom--radius--sm:{$btn_r}px;";
        $css .= "--wp--style--root--content-size:{$content}px;";
        $css .= "--wp--style--root--wide-size:{$container}px;";
        $css .= "}";

        update_option( 'godevs_portfolio_dynamic_css', $css );
}

function godevs_portfolio_output_dynamic_css(): void {
        $css = get_option( 'godevs_portfolio_dynamic_css', '' );
        if ( $css ) {
                echo '<style id="godevs-dynamic-settings">' . $css . '</style>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
}
add_action( 'wp_head', 'godevs_portfolio_output_dynamic_css', 5 );

// ════════════════════════════════════════════════════════════════════════════
// RENDER PAGE
// ════════════════════════════════════════════════════════════════════════════

function godevs_portfolio_settings_render_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'You do not have permission to access this page.', 'godevs-portfolio' ) );
        }

        // Generate CSS on first visit
        if ( ! get_option( 'godevs_portfolio_dynamic_css' ) ) {
                godevs_portfolio_generate_dynamic_css();
        }

        $version = defined( 'GODEVS_PORTFOLIO_VERSION' ) ? GODEVS_PORTFOLIO_VERSION : 'unknown';
        ?>
        <div class="wrap godevs-settings-wrap">
                <div class="godevs-settings-header">
                        <div class="godevs-settings-header-left">
                                <div class="godevs-settings-logo">G</div>
                                <div>
                                        <h1><?php esc_html_e( 'GoDevs Portfolio', 'godevs-portfolio' ); ?></h1>
                                        <p><?php esc_html_e( 'Theme Settings', 'godevs-portfolio' ); ?> · v<?php echo esc_html( $version ); ?></p>
                                </div>
                        </div>
                        <div class="godevs-settings-header-right">
                                <span class="godevs-save-indicator" id="godevs-save-indicator"></span>
                                <button type="button" class="button godevs-reset-btn" id="godevs-reset-btn">
                                        <?php esc_html_e( 'Reset', 'godevs-portfolio' ); ?>
                                </button>
                                <button type="button" class="button button-primary godevs-save-btn" id="godevs-save-btn">
                                        <?php esc_html_e( 'Save changes', 'godevs-portfolio' ); ?>
                                </button>
                        </div>
                </div>

                <div class="godevs-settings-body">
                        <!-- Sidebar Nav -->
                        <nav class="godevs-settings-nav" id="godevs-settings-nav">
                                <p class="godevs-nav-label"><?php esc_html_e( 'SETTINGS', 'godevs-portfolio' ); ?></p>
                                <ul>
                                        <li><a href="#general" class="is-active" data-section="general"><span class="dashicons dashicons-admin-generic"></span> <?php esc_html_e( 'General', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#typography" data-section="typography"><span class="dashicons dashicons-editor-textcolor"></span> <?php esc_html_e( 'Typography', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#colors" data-section="colors"><span class="dashicons dashicons-art"></span> <?php esc_html_e( 'Colors', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#layout" data-section="layout"><span class="dashicons dashicons-screenoptions"></span> <?php esc_html_e( 'Layout', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#header" data-section="header"><span class="dashicons dashicons-align-center"></span> <?php esc_html_e( 'Header', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#footer" data-section="footer"><span class="dashicons dashicons-feedback"></span> <?php esc_html_e( 'Footer', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#blog" data-section="blog"><span class="dashicons dashicons-format-aside"></span> <?php esc_html_e( 'Blog', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#portfolio" data-section="portfolio"><span class="dashicons dashicons-portfolio"></span> <?php esc_html_e( 'Portfolio', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#services" data-section="services"><span class="dashicons dashicons-admin-tools"></span> <?php esc_html_e( 'Services', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#team" data-section="team"><span class="dashicons dashicons-groups"></span> <?php esc_html_e( 'Team', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#testimonials" data-section="testimonials"><span class="dashicons dashicons-format-quote"></span> <?php esc_html_e( 'Testimonials', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#demo" data-section="demo"><span class="dashicons dashicons-images-alt"></span> <?php esc_html_e( 'Demo Library', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#builder" data-section="builder"><span class="dashicons dashicons-layout"></span> <?php esc_html_e( 'Header & Footer', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#performance" data-section="performance"><span class="dashicons dashicons-performance"></span> <?php esc_html_e( 'Performance', 'godevs-portfolio' ); ?></a></li>
                                        <li><a href="#advanced" data-section="advanced"><span class="dashicons dashicons-admin-network"></span> <?php esc_html_e( 'Advanced', 'godevs-portfolio' ); ?></a></li>
                                </ul>
                        </nav>

                        <!-- Content Panels -->
                        <div class="godevs-settings-content" id="godevs-settings-content">
                                <form id="godevs-settings-form" autocomplete="off">

                                        <!-- ═══ GENERAL ═══ -->
                                        <div class="godevs-panel is-active" id="panel-general">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'General', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure general settings for the GoDevs Portfolio theme.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_text( 'brand_name', __( 'Brand name', 'godevs-portfolio' ), __( 'Displayed in headers and footers.', 'godevs-portfolio' ) );
                                                godevs_setting_text( 'brand_tagline', __( 'Brand tagline', 'godevs-portfolio' ), __( 'Short description shown under the brand name.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ TYPOGRAPHY ═══ -->
                                        <div class="godevs-panel" id="panel-typography">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Typography', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Control fonts, weights, and type scaling.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'display_font', __( 'Display font', 'godevs-portfolio' ), array( 'display' => 'Inter (Display)', 'serif' => 'Georgia (Serif)', 'mono' => 'SF Mono (Mono)' ), __( 'Used for headings and hero text.', 'godevs-portfolio' ) );
                                                godevs_setting_select( 'body_font', __( 'Body font', 'godevs-portfolio' ), array( 'body' => 'Inter (Body)', 'serif' => 'Georgia (Serif)' ), __( 'Used for paragraph text.', 'godevs-portfolio' ) );
                                                godevs_setting_select( 'heading_weight', __( 'Heading weight', 'godevs-portfolio' ), array( '400' => 'Regular (400)', '500' => 'Medium (500)', '600' => 'Semibold (600)', '700' => 'Bold (700)' ), __( 'Font weight for all headings.', 'godevs-portfolio' ) );
                                                godevs_setting_select( 'type_scale', __( 'Type scale', 'godevs-portfolio' ), array( 'fluid' => 'Fluid (clamp)', 'fixed' => 'Fixed (rem)' ), __( 'Fluid scales with viewport; fixed uses static sizes.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ COLORS ═══ -->
                                        <div class="godevs-panel" id="panel-colors">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Colors', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Customize the color palette. Changes apply via CSS custom properties.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_color( 'accent_color', __( 'Accent color', 'godevs-portfolio' ), __( 'Used for links, buttons, and highlights.', 'godevs-portfolio' ) );
                                                godevs_setting_color( 'accent_hover', __( 'Accent hover', 'godevs-portfolio' ), __( 'Darker shade for hover states.', 'godevs-portfolio' ) );
                                                godevs_setting_color( 'surface_color', __( 'Surface', 'godevs-portfolio' ), __( 'Card and panel background.', 'godevs-portfolio' ) );
                                                godevs_setting_color( 'background_color', __( 'Background', 'godevs-portfolio' ), __( 'Main page background.', 'godevs-portfolio' ) );
                                                godevs_setting_color( 'text_color', __( 'Text', 'godevs-portfolio' ), __( 'Primary body text color.', 'godevs-portfolio' ) );
                                                godevs_setting_color( 'muted_color', __( 'Muted text', 'godevs-portfolio' ), __( 'Secondary/caption text.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ LAYOUT ═══ -->
                                        <div class="godevs-panel" id="panel-layout">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Layout', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Control container widths, radii, and spacing.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_text( 'container_width', __( 'Container width (px)', 'godevs-portfolio' ), __( 'Maximum wide content width.', 'godevs-portfolio' ), 'number' );
                                                godevs_setting_text( 'content_width', __( 'Content width (px)', 'godevs-portfolio' ), __( 'Maximum constrained text width.', 'godevs-portfolio' ), 'number' );
                                                godevs_setting_text( 'card_radius', __( 'Card radius (px)', 'godevs-portfolio' ), __( 'Border radius for cards.', 'godevs-portfolio' ), 'number' );
                                                godevs_setting_text( 'button_radius', __( 'Button radius (px)', 'godevs-portfolio' ), __( 'Border radius for buttons.', 'godevs-portfolio' ), 'number' );
                                                godevs_setting_select( 'global_spacing', __( 'Spacing scale', 'godevs-portfolio' ), array( 'compact' => 'Compact', 'normal' => 'Normal', 'spacious' => 'Spacious' ), __( 'Controls vertical rhythm between sections.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ HEADER ═══ -->
                                        <div class="godevs-panel" id="panel-header">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Header', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure the site header.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'header_style', __( 'Header style', 'godevs-portfolio' ), array( 'default' => 'Default', 'minimal' => 'Minimal', 'centered' => 'Centered', 'split' => 'Split', 'transparent' => 'Transparent', 'dark' => 'Dark' ), __( 'Which header template part to use.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'header_sticky', __( 'Sticky header', 'godevs-portfolio' ), __( 'Keep the header fixed on scroll.', 'godevs-portfolio' ) );
                                                godevs_setting_text( 'header_cta_text', __( 'Header CTA text', 'godevs-portfolio' ), __( 'Button text in the header (leave empty to hide).', 'godevs-portfolio' ) );
                                                godevs_setting_text( 'header_cta_link', __( 'Header CTA link', 'godevs-portfolio' ), __( 'URL for the header CTA button.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ FOOTER ═══ -->
                                        <div class="godevs-panel" id="panel-footer">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Footer', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure the site footer.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'footer_style', __( 'Footer style', 'godevs-portfolio' ), array( 'default' => 'Default', 'minimal' => 'Minimal', 'multi-column' => 'Multi-column', 'social' => 'Social-first', 'cta' => 'CTA footer', 'newsletter' => 'Newsletter', 'dark' => 'Dark' ), __( 'Which footer template part to use.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'footer_copyright', __( 'Show copyright', 'godevs-portfolio' ), __( 'Display copyright text in footer.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'footer_social', __( 'Show social links', 'godevs-portfolio' ), __( 'Display social media links in footer.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'footer_cta', __( 'Footer CTA', 'godevs-portfolio' ), __( 'Show a CTA band above the footer.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ BLOG ═══ -->
                                        <div class="godevs-panel" id="panel-blog">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Blog', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure blog archive and single post display.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'blog_layout', __( 'Blog layout', 'godevs-portfolio' ), array( 'grid' => 'Grid', 'list' => 'List', 'magazine' => 'Magazine' ), __( 'How posts are displayed on archive pages.', 'godevs-portfolio' ) );
                                                godevs_setting_select( 'blog_columns', __( 'Grid columns', 'godevs-portfolio' ), array( '2' => '2 columns', '3' => '3 columns', '4' => '4 columns' ), __( 'Column count for grid layout.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'blog_show_author', __( 'Show author', 'godevs-portfolio' ), __( 'Display author name on posts.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'blog_show_date', __( 'Show date', 'godevs-portfolio' ), __( 'Display publish date on posts.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'blog_show_categories', __( 'Show categories', 'godevs-portfolio' ), __( 'Display categories on posts.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'blog_show_featured', __( 'Show featured image', 'godevs-portfolio' ), __( 'Display featured image on posts.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ PORTFOLIO ═══ -->
                                        <div class="godevs-panel" id="panel-portfolio">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Portfolio', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure project archive and single display.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'portfolio_layout', __( 'Portfolio layout', 'godevs-portfolio' ), array( 'grid' => 'Grid', 'list' => 'List', 'masonry' => 'Masonry', 'showcase' => 'Showcase' ), __( 'How projects are displayed.', 'godevs-portfolio' ) );
                                                godevs_setting_select( 'portfolio_columns', __( 'Grid columns', 'godevs-portfolio' ), array( '2' => '2 columns', '3' => '3 columns', '4' => '4 columns' ), __( 'Column count for grid layout.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'portfolio_show_client', __( 'Show client', 'godevs-portfolio' ), __( 'Display client name on projects.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'portfolio_show_year', __( 'Show year', 'godevs-portfolio' ), __( 'Display project year.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'portfolio_show_type', __( 'Show project type', 'godevs-portfolio' ), __( 'Display project type/category.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ SERVICES ═══ -->
                                        <div class="godevs-panel" id="panel-services">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Services', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure service archive and single display.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'services_layout', __( 'Services layout', 'godevs-portfolio' ), array( 'grid' => 'Grid', 'list' => 'List', 'numbered' => 'Numbered' ), __( 'How services are displayed.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'services_show_price', __( 'Show price', 'godevs-portfolio' ), __( 'Display service price (if set).', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'services_show_cta', __( 'Show CTA', 'godevs-portfolio' ), __( 'Display call-to-action on service singles.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ TEAM ═══ -->
                                        <div class="godevs-panel" id="panel-team">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Team', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure team member display.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'team_layout', __( 'Team layout', 'godevs-portfolio' ), array( 'grid' => 'Grid', 'list' => 'List', 'featured' => 'Featured lead' ), __( 'How team members are displayed.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'team_show_social', __( 'Show social links', 'godevs-portfolio' ), __( 'Display social media links for team members.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'team_show_bio', __( 'Show bio', 'godevs-portfolio' ), __( 'Display short biography.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ TESTIMONIALS ═══ -->
                                        <div class="godevs-panel" id="panel-testimonials">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Testimonials', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Configure testimonial display.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_select( 'testimonials_layout', __( 'Testimonials layout', 'godevs-portfolio' ), array( 'grid' => 'Grid', 'single' => 'Single quote', 'slide' => 'Slide row' ), __( 'How testimonials are displayed.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'testimonials_show_avatar', __( 'Show avatar', 'godevs-portfolio' ), __( 'Display client avatar/photo.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'testimonials_show_rating', __( 'Show rating', 'godevs-portfolio' ), __( 'Display star rating.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ DEMO LIBRARY (embedded in settings) ═══ -->
                                        <div class="godevs-panel" id="panel-demo">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Demo Library', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Browse, preview, and import complete portfolio websites. Preview any demo live — then import with one click. Your existing content is never deleted.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                // Embed the full demo browser UI (filters, grid, modal, progress).
                                                require_once __DIR__ . '/admin/views/admin-demos.php';
                                                ?>
                                        </div>

                                        <!-- ═══ HEADER & FOOTER BUILDER ═══ -->
                                        <div class="godevs-panel" id="panel-builder">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Header & Footer Builder', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Visually build custom headers and footers with drag-and-drop elements. Choose a starter template or create your own.', 'godevs-portfolio' ); ?></p>

                                                <div class="godevs-hf-builder-wrap">
                                                        <div class="godevs-hf-tabs">
                                                                <button type="button" class="godevs-hf-tab is-active" data-hf-tab="header"><?php esc_html_e( 'Header Builder', 'godevs-portfolio' ); ?></button>
                                                                <button type="button" class="godevs-hf-tab" data-hf-tab="footer"><?php esc_html_e( 'Footer Builder', 'godevs-portfolio' ); ?></button>
                                                        </div>

                                                        <div class="godevs-hf-templates" id="godevs-hf-templates">
                                                                <p class="godevs-setting-group-title"><?php esc_html_e( 'Starter Templates', 'godevs-portfolio' ); ?></p>
                                                                <div class="godevs-hf-template-grid" id="godevs-hf-template-grid"></div>
                                                        </div>

                                                        <div class="godevs-hf-saved-layouts" id="godevs-hf-saved-layouts">
                                                                <p class="godevs-setting-group-title"><?php esc_html_e( 'Your Layouts', 'godevs-portfolio' ); ?></p>
                                                                <div id="godevs-hf-saved-list"></div>
                                                        </div>

                                                        <div class="godevs-hf-editor" id="godevs-hf-editor" style="display:none;">
                                                                <div class="godevs-hf-editor-header">
                                                                        <input type="text" id="godevs-hf-layout-name" placeholder="<?php esc_attr_e( 'Layout name', 'godevs-portfolio' ); ?>" class="godevs-input" />
                                                                        <div class="godevs-hf-device-controls">
                                                                                <button type="button" class="godevs-hf-device is-active" data-device="desktop"><span class="dashicons dashicons-desktop"></span></button>
                                                                                <button type="button" class="godevs-hf-device" data-device="tablet"><span class="dashicons dashicons-tablet"></span></button>
                                                                                <button type="button" class="godevs-hf-device" data-device="mobile"><span class="dashicons dashicons-smartphone"></span></button>
                                                                        </div>
                                                                        <button type="button" class="button button-primary" id="godevs-hf-save-layout"><?php esc_html_e( 'Save Layout', 'godevs-portfolio' ); ?></button>
                                                                </div>

                                                                <div class="godevs-hf-canvas" id="godevs-hf-canvas"></div>

                                                                <div class="godevs-hf-elements-panel">
                                                                        <p class="godevs-setting-group-title"><?php esc_html_e( 'Elements', 'godevs-portfolio' ); ?></p>
                                                                        <div class="godevs-hf-elements-list" id="godevs-hf-elements-list"></div>
                                                                </div>

                                                                <div class="godevs-hf-settings-panel" id="godevs-hf-settings-panel" style="display:none;">
                                                                        <p class="godevs-setting-group-title"><?php esc_html_e( 'Element Settings', 'godevs-portfolio' ); ?></p>
                                                                        <div id="godevs-hf-element-settings"></div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- ═══ PERFORMANCE ═══ -->
                                        <div class="godevs-panel" id="panel-performance">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Performance', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Control motion, loading, and optimization.', 'godevs-portfolio' ); ?></p>

                                                <?php
                                                godevs_setting_toggle( 'motion_enabled', __( 'Enable motion', 'godevs-portfolio' ), __( 'Scroll-reveal and hover animations.', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'reduced_motion', __( 'Force reduced motion', 'godevs-portfolio' ), __( 'Disable all animations site-wide (overrides user preference).', 'godevs-portfolio' ) );
                                                godevs_setting_toggle( 'lazy_images', __( 'Lazy load images', 'godevs-portfolio' ), __( 'Add loading="lazy" to all images.', 'godevs-portfolio' ) );
                                                ?>
                                        </div>

                                        <!-- ═══ ADVANCED ═══ -->
                                        <div class="godevs-panel" id="panel-advanced">
                                                <h2 class="godevs-panel-title"><?php esc_html_e( 'Advanced', 'godevs-portfolio' ); ?></h2>
                                                <p class="godevs-panel-desc"><?php esc_html_e( 'Module visibility and system controls.', 'godevs-portfolio' ); ?></p>

                                                <div class="godevs-setting-group">
                                                        <h3 class="godevs-setting-group-title"><?php esc_html_e( 'Content modules', 'godevs-portfolio' ); ?></h3>
                                                        <p class="godevs-setting-group-desc"><?php esc_html_e( 'Enable or disable custom post types. Disabled modules preserve existing content but hide admin menus.', 'godevs-portfolio' ); ?></p>
                                                        <?php
                                                        godevs_setting_toggle( 'module_projects', __( 'Projects', 'godevs-portfolio' ), __( 'Project portfolio CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_services', __( 'Services', 'godevs-portfolio' ), __( 'Services CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_team', __( 'Team', 'godevs-portfolio' ), __( 'Team members CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_testimonials', __( 'Testimonials', 'godevs-portfolio' ), __( 'Client testimonials CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_bookings', __( 'Bookings', 'godevs-portfolio' ), __( 'Private booking/appointment CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_experience', __( 'Experience', 'godevs-portfolio' ), __( 'Work history CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_education', __( 'Education', 'godevs-portfolio' ), __( 'Academic credentials CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_faqs', __( 'FAQs', 'godevs-portfolio' ), __( 'FAQ entries CPT.', 'godevs-portfolio' ) );
                                                        godevs_setting_toggle( 'module_case_studies', __( 'Case Studies', 'godevs-portfolio' ), __( 'Case study CPT with meta boxes.', 'godevs-portfolio' ) );
                                                        ?>
                                                </div>

                                                <div class="godevs-setting-group">
                                                        <h3 class="godevs-setting-group-title"><?php esc_html_e( 'System status', 'godevs-portfolio' ); ?></h3>
                                                        <?php
                                                        $loaded = $GLOBALS['godevs_portfolio_loaded_files'] ?? array();
                                                        $cpts = array( 'godevs_project', 'godevs_service', 'godevs_team', 'godevs_testimonial', 'godevs_case_study' );
                                                        $registered = array_filter( $cpts, 'post_type_exists' );
                                                        echo '<div class="godevs-status-row"><span>' . esc_html__( 'Theme version', 'godevs-portfolio' ) . '</span><strong>' . esc_html( $version ) . '</strong></div>';
                                                        echo '<div class="godevs-status-row"><span>' . esc_html__( 'CPTs registered', 'godevs-portfolio' ) . '</span><strong>' . esc_html( count( $registered ) . '/' . count( $cpts ) ) . '</strong></div>';
                                                        echo '<div class="godevs-status-row"><span>' . esc_html__( 'PHP version', 'godevs-portfolio' ) . '</span><strong>' . esc_html( PHP_VERSION ) . '</strong></div>';
                                                        echo '<div class="godevs-status-row"><span>' . esc_html__( 'WordPress version', 'godevs-portfolio' ) . '</span><strong>' . esc_html( get_bloginfo( 'version' ) ) . '</strong></div>';
                                                        ?>
                                                </div>
                                        </div>

                                </form>
                        </div>
                </div>
        </div>
        <?php
}

// ════════════════════════════════════════════════════════════════════════════
// SETTING CONTROL HELPERS
// ════════════════════════════════════════════════════════════════════════════

function godevs_setting_text( string $key, string $label, string $desc = '', string $type = 'text' ): void {
        $val = godevs_portfolio_get_setting( $key );
        ?>
        <div class="godevs-setting-row">
                <div class="godevs-setting-label">
                        <label for="godevs-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label>
                        <?php if ( $desc ) : ?><p class="godevs-setting-desc"><?php echo esc_html( $desc ); ?></p><?php endif; ?>
                </div>
                <div class="godevs-setting-control">
                        <input type="<?php echo esc_attr( $type ); ?>" id="godevs-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( $key ); ?>" value="<?php echo esc_attr( $val ); ?>" class="godevs-input" />
                </div>
        </div>
        <?php
}

function godevs_setting_select( string $key, string $label, array $options, string $desc = '' ): void {
        $val = godevs_portfolio_get_setting( $key );
        ?>
        <div class="godevs-setting-row">
                <div class="godevs-setting-label">
                        <label for="godevs-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label>
                        <?php if ( $desc ) : ?><p class="godevs-setting-desc"><?php echo esc_html( $desc ); ?></p><?php endif; ?>
                </div>
                <div class="godevs-setting-control">
                        <select id="godevs-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( $key ); ?>" class="godevs-select">
                                <?php foreach ( $options as $opt_val => $opt_label ) : ?>
                                        <option value="<?php echo esc_attr( $opt_val ); ?>" <?php selected( $val, $opt_val ); ?>><?php echo esc_html( $opt_label ); ?></option>
                                <?php endforeach; ?>
                        </select>
                </div>
        </div>
        <?php
}

function godevs_setting_toggle( string $key, string $label, string $desc = '' ): void {
        $val = godevs_portfolio_get_setting( $key );
        ?>
        <div class="godevs-setting-row">
                <div class="godevs-setting-label">
                        <label for="godevs-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label>
                        <?php if ( $desc ) : ?><p class="godevs-setting-desc"><?php echo esc_html( $desc ); ?></p><?php endif; ?>
                </div>
                <div class="godevs-setting-control">
                        <label class="godevs-toggle">
                                <input type="checkbox" id="godevs-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( $key ); ?>" value="1" <?php checked( $val, '1' ); ?> />
                                <span class="godevs-toggle-track"><span class="godevs-toggle-thumb"></span></span>
                        </label>
                </div>
        </div>
        <?php
}

function godevs_setting_color( string $key, string $label, string $desc = '' ): void {
        $val = godevs_portfolio_get_setting( $key );
        ?>
        <div class="godevs-setting-row">
                <div class="godevs-setting-label">
                        <label for="godevs-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label>
                        <?php if ( $desc ) : ?><p class="godevs-setting-desc"><?php echo esc_html( $desc ); ?></p><?php endif; ?>
                </div>
                <div class="godevs-setting-control">
                        <input type="text" id="godevs-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( $key ); ?>" value="<?php echo esc_attr( $val ); ?>" class="godevs-color-picker" data-default-color="<?php echo esc_attr( $val ); ?>" />
                </div>
        </div>
        <?php
}
