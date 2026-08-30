<?php
/**
 * Theme Settings System for GoDevs Portfolio.
 *
 * Provides a professional admin settings page at Appearance → GoDevs Settings
 * using the WordPress Settings API. Settings are stored as theme mod options
 * with proper sanitization, capability checks, and nonce verification.
 *
 * Settings sections:
 *   - General: container width, content width, button radius, card radius
 *   - Typography: display font family, body font family, heading weight
 *   - Colors: accent color, accent hover
 *   - Layout: section spacing, card spacing
 *   - Header: sticky toggle, CTA visibility
 *   - Footer: copyright visibility, social visibility
 *   - Blog: layout, metadata visibility
 *
 * @package GoDevs_Portfolio
 * @since   0.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Default settings values.
 *
 * @return array<string,mixed> Default settings.
 */
function godevs_portfolio_get_default_settings(): array {
        return array(
                'container_width'      => '1280',
                'content_width'         => '640',
                'button_radius'         => '4',
                'card_radius'           => '8',
                'display_font'          => 'display',
                'body_font'             => 'body',
                'heading_weight'        => '700',
                'accent_color'          => '#2563EB',
                'accent_hover'          => '#1D4ED8',
                'section_spacing'       => '80',
                'card_spacing'          => '50',
                'header_sticky'         => '1',
                'header_cta_visible'    => '1',
                'footer_copyright'      => '1',
                'footer_social_visible' => '1',
                'blog_layout'           => 'grid',
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
        );
}

/**
 * Get a single setting value.
 *
 * @param string $key Setting key.
 * @return mixed Setting value, or default if not set.
 */
function godevs_portfolio_get_setting( string $key ) {
        $defaults = godevs_portfolio_get_default_settings();
        $value    = get_theme_mod( 'godevs_portfolio_' . $key, $defaults[ $key ] ?? '' );
        return $value;
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
 * Register settings, sections, and fields.
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

        // General section.
        add_settings_section(
                'godevs_general',
                __( 'General', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'container_width', __( 'Container Width (px)', 'godevs-portfolio' ), 'godevs_portfolio_settings_number_field', 'godevs-portfolio-settings', 'godevs_general', array( 'key' => 'container_width', 'min' => 1024, 'max' => 1600, 'desc' => __( 'Wide content width in pixels (1024–1600).', 'godevs-portfolio' ) ) );
        add_settings_field( 'content_width', __( 'Content Width (px)', 'godevs-portfolio' ), 'godevs_portfolio_settings_number_field', 'godevs-portfolio-settings', 'godevs_general', array( 'key' => 'content_width', 'min' => 560, 'max' => 800, 'desc' => __( 'Reading width in pixels (560–800).', 'godevs-portfolio' ) ) );
        add_settings_field( 'button_radius', __( 'Button Radius (px)', 'godevs-portfolio' ), 'godevs_portfolio_settings_number_field', 'godevs-portfolio-settings', 'godevs_general', array( 'key' => 'button_radius', 'min' => 0, 'max' => 24, 'desc' => __( 'Border radius for buttons (0–24).', 'godevs-portfolio' ) ) );
        add_settings_field( 'card_radius', __( 'Card Radius (px)', 'godevs-portfolio' ), 'godevs_portfolio_settings_number_field', 'godevs-portfolio-settings', 'godevs_general', array( 'key' => 'card_radius', 'min' => 0, 'max' => 24, 'desc' => __( 'Border radius for cards (0–24).', 'godevs-portfolio' ) ) );

        // Typography section.
        add_settings_section(
                'godevs_typography',
                __( 'Typography', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'display_font', __( 'Display Font Family', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_typography', array( 'key' => 'display_font', 'options' => array( 'display' => 'Display (Sans)', 'serif' => 'Serif', 'mono' => 'Monospace' ) ) );
        add_settings_field( 'body_font', __( 'Body Font Family', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_typography', array( 'key' => 'body_font', 'options' => array( 'body' => 'Body (Sans)', 'serif' => 'Serif' ) ) );
        add_settings_field( 'heading_weight', __( 'Heading Weight', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_typography', array( 'key' => 'heading_weight', 'options' => array( '600' => 'Semibold (600)', '700' => 'Bold (700)', '800' => 'Extra Bold (800)' ) ) );

        // Colors section.
        add_settings_section(
                'godevs_colors',
                __( 'Colors', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'accent_color', __( 'Accent Color', 'godevs-portfolio' ), 'godevs_portfolio_settings_color_field', 'godevs-portfolio-settings', 'godevs_colors', array( 'key' => 'accent_color' ) );
        add_settings_field( 'accent_hover', __( 'Accent Hover Color', 'godevs-portfolio' ), 'godevs_portfolio_settings_color_field', 'godevs-portfolio-settings', 'godevs_colors', array( 'key' => 'accent_hover' ) );

        // Layout section.
        add_settings_section(
                'godevs_layout',
                __( 'Layout', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'section_spacing', __( 'Section Spacing', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_layout', array( 'key' => 'section_spacing', 'options' => array( '60' => 'Compact (60)', '80' => 'Default (80)', '90' => 'Spacious (90)' ) ) );
        add_settings_field( 'card_spacing', __( 'Card Spacing', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_layout', array( 'key' => 'card_spacing', 'options' => array( '40' => 'Compact (40)', '50' => 'Default (50)', '60' => 'Spacious (60)' ) ) );

        // Header section.
        add_settings_section(
                'godevs_header',
                __( 'Header', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'header_sticky', __( 'Sticky Header', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_header', array( 'key' => 'header_sticky', 'desc' => __( 'Keep the header sticky on scroll.', 'godevs-portfolio' ) ) );
        add_settings_field( 'header_cta_visible', __( 'Header CTA Button', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_header', array( 'key' => 'header_cta_visible', 'desc' => __( 'Show the CTA button in the header.', 'godevs-portfolio' ) ) );

        // Footer section.
        add_settings_section(
                'godevs_footer',
                __( 'Footer', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'footer_copyright', __( 'Copyright Text', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_footer', array( 'key' => 'footer_copyright', 'desc' => __( 'Show copyright text in footer.', 'godevs-portfolio' ) ) );
        add_settings_field( 'footer_social_visible', __( 'Social Links', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_footer', array( 'key' => 'footer_social_visible', 'desc' => __( 'Show social links in footer.', 'godevs-portfolio' ) ) );

        // Blog section.
        add_settings_section(
                'godevs_blog',
                __( 'Blog', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'blog_layout', __( 'Blog Layout', 'godevs-portfolio' ), 'godevs_portfolio_settings_select_field', 'godevs-portfolio-settings', 'godevs_blog', array( 'key' => 'blog_layout', 'options' => array( 'grid' => 'Grid', 'list' => 'List' ) ) );
        add_settings_field( 'blog_show_author', __( 'Show Author', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_blog', array( 'key' => 'blog_show_author', 'desc' => __( 'Show author name on posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_date', __( 'Show Date', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_blog', array( 'key' => 'blog_show_date', 'desc' => __( 'Show date on posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_categories', __( 'Show Categories', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_blog', array( 'key' => 'blog_show_categories', 'desc' => __( 'Show categories on posts.', 'godevs-portfolio' ) ) );
        add_settings_field( 'blog_show_featured', __( 'Show Featured Image', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_blog', array( 'key' => 'blog_show_featured', 'desc' => __( 'Show featured image on posts.', 'godevs-portfolio' ) ) );

        // Content Modules section.
        add_settings_section(
                'godevs_modules',
                __( 'Content Modules', 'godevs-portfolio' ),
                '__return_empty_string',
                'godevs-portfolio-settings'
        );

        add_settings_field( 'module_projects', __( 'Projects', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_projects', 'desc' => __( 'Enable the Projects custom post type for portfolio management.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_services', __( 'Services', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_services', 'desc' => __( 'Enable the Services custom post type.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_team', __( 'Team', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_team', 'desc' => __( 'Enable the Team custom post type for team member profiles.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_testimonials', __( 'Testimonials', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_testimonials', 'desc' => __( 'Enable the Testimonials custom post type.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_bookings', __( 'Bookings', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_bookings', 'desc' => __( 'Enable the Bookings custom post type for appointment requests. Booking data is private and not publicly accessible.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_experience', __( 'Experience', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_experience', 'desc' => __( 'Enable the Experience custom post type for career history.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_education', __( 'Education', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_education', 'desc' => __( 'Enable the Education custom post type for academic history.', 'godevs-portfolio' ) ) );
        add_settings_field( 'module_faqs', __( 'FAQs', 'godevs-portfolio' ), 'godevs_portfolio_settings_checkbox_field', 'godevs-portfolio-settings', 'godevs_modules', array( 'key' => 'module_faqs', 'desc' => __( 'Enable the FAQs custom post type for structured FAQ management.', 'godevs-portfolio' ) ) );
}
add_action( 'admin_init', 'godevs_portfolio_settings_register' );

/**
 * Sanitize settings input.
 *
 * @param array $input Raw input from the form.
 * @return array<string,mixed> Sanitized settings.
 */
function godevs_portfolio_settings_sanitize( array $input ): array {
        $defaults = godevs_portfolio_get_default_settings();
        $output   = array();

        foreach ( $defaults as $key => $default ) {
                $val = $input[ $key ] ?? $default;

                // Numeric fields — clamp to safe range.
                if ( in_array( $key, array( 'container_width', 'content_width', 'button_radius', 'card_radius', 'section_spacing', 'card_spacing' ), true ) ) {
                        $val = absint( $val );
                }

                // Color fields — validate hex.
                if ( in_array( $key, array( 'accent_color', 'accent_hover' ), true ) ) {
                        $val = sanitize_hex_color( $val ) ?: $default;
                }

                // Select fields — validate against allowed options.
                if ( in_array( $key, array( 'display_font', 'body_font', 'heading_weight', 'blog_layout' ), true ) ) {
                        $val = sanitize_key( $val );
                }

                // Checkbox fields — convert to '1' or ''.
                if ( in_array( $key, array( 'header_sticky', 'header_cta_visible', 'footer_copyright', 'footer_social_visible', 'blog_show_author', 'blog_show_date', 'blog_show_categories', 'blog_show_featured', 'module_projects', 'module_services', 'module_team', 'module_testimonials', 'module_bookings', 'module_experience', 'module_education', 'module_faqs' ), true ) ) {
                        $val = ! empty( $val ) ? '1' : '';
                }

                $output[ $key ] = $val;
        }

        return $output;
}

/**
 * Render a number input field.
 *
 * @param array $args Field arguments.
 * @return void
 */
function godevs_portfolio_settings_number_field( array $args ): void {
        $key  = $args['key'];
        $min  = $args['min'] ?? 0;
        $max  = $args['max'] ?? 9999;
        $desc = $args['desc'] ?? '';
        $val  = godevs_portfolio_get_setting( $key );

        printf(
                '<input type="number" id="godevs_%1$s" name="godevs_portfolio_settings[%1$s]" value="%2$s" min="%3$d" max="%4$d" class="regular-text" />',
                esc_attr( $key ),
                esc_attr( (string) $val ),
                esc_attr( (string) $min ),
                esc_attr( (string) $max )
        );
        if ( $desc ) {
                printf( '<p class="description">%s</p>', esc_html( $desc ) );
        }
}

/**
 * Render a select field.
 *
 * @param array $args Field arguments.
 * @return void
 */
function godevs_portfolio_settings_select_field( array $args ): void {
        $key     = $args['key'];
        $options = $args['options'] ?? array();
        $val     = godevs_portfolio_get_setting( $key );

        printf( '<select id="godevs_%1$s" name="godevs_portfolio_settings[%1$s]">', esc_attr( $key ) );
        foreach ( $options as $opt_val => $opt_label ) {
                printf(
                        '<option value="%1$s" %2$s>%3$s</option>',
                        esc_attr( $opt_val ),
                        selected( (string) $val, (string) $opt_val, false ),
                        esc_html( $opt_label )
                );
        }
        echo '</select>';
}

/**
 * Render a color picker field.
 *
 * @param array $args Field arguments.
 * @return void
 */
function godevs_portfolio_settings_color_field( array $args ): void {
        $key = $args['key'];
        $val = godevs_portfolio_get_setting( $key );

        printf(
                '<input type="text" id="godevs_%1$s" name="godevs_portfolio_settings[%1$s]" value="%2$s" class="godevs-color-picker" />',
                esc_attr( $key ),
                esc_attr( (string) $val )
        );
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
 * Render the settings page.
 *
 * @return void
 */
function godevs_portfolio_settings_render_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'You do not have permission to access this page.', 'godevs-portfolio' ) );
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

        // Store settings to theme mods when saved.
        $settings = get_option( 'godevs_portfolio_settings' );
        if ( is_array( $settings ) ) {
                foreach ( $settings as $key => $val ) {
                        set_theme_mod( 'godevs_portfolio_' . $key, $val );
                }
        }

        ?>
        <div class="wrap godevs-settings-wrap">
                <h1><?php esc_html_e( 'GoDevs Settings', 'godevs-portfolio' ); ?></h1>
                <p class="description"><?php esc_html_e( 'Configure the GoDevs Portfolio theme appearance and behavior.', 'godevs-portfolio' ); ?></p>

                <div class="godevs-settings-tabs">
                        <a href="#godevs-general" class="godevs-tab is-active"><?php esc_html_e( 'General', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-typography" class="godevs-tab"><?php esc_html_e( 'Typography', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-colors" class="godevs-tab"><?php esc_html_e( 'Colors', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-layout" class="godevs-tab"><?php esc_html_e( 'Layout', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-header" class="godevs-tab"><?php esc_html_e( 'Header', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-footer" class="godevs-tab"><?php esc_html_e( 'Footer', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-blog" class="godevs-tab"><?php esc_html_e( 'Blog', 'godevs-portfolio' ); ?></a>
                        <a href="#godevs-modules" class="godevs-tab"><?php esc_html_e( 'Content Modules', 'godevs-portfolio' ); ?></a>
                </div>

                <form method="post" action="options.php">
                        <?php settings_fields( 'godevs_portfolio_settings_group' ); ?>

                        <div id="godevs-general" class="godevs-tab-panel is-active">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_general' ); ?>
                        </div>
                        <div id="godevs-typography" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_typography' ); ?>
                        </div>
                        <div id="godevs-colors" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_colors' ); ?>
                        </div>
                        <div id="godevs-layout" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_layout' ); ?>
                        </div>
                        <div id="godevs-header" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_header' ); ?>
                        </div>
                        <div id="godevs-footer" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_footer' ); ?>
                        </div>
                        <div id="godevs-blog" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_blog' ); ?>
                        </div>
                        <div id="godevs-modules" class="godevs-tab-panel">
                                <?php do_settings_fields( 'godevs-portfolio-settings', 'godevs_modules' ); ?>
                        </div>

                        <?php submit_button( __( 'Save Settings', 'godevs-portfolio' ) ); ?>
                </form>

                <form method="post" action="" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dcdcde;">
                        <h3><?php esc_html_e( 'Reset Settings', 'godevs-portfolio' ); ?></h3>
                        <p class="description"><?php esc_html_e( 'Reset all theme settings to their default values. This will not delete any content, pages, or imported demos.', 'godevs-portfolio' ); ?></p>
                        <?php wp_nonce_field( 'godevs_reset_settings', 'godevs_reset_nonce' ); ?>
                        <button type="submit" class="button button-link-delete" onclick="return confirm('<?php esc_attr_e( 'Are you sure you want to reset all settings to defaults?', 'godevs-portfolio' ); ?>');">
                                <?php esc_html_e( 'Reset to Defaults', 'godevs-portfolio' ); ?>
                        </button>
                </form>
        </div>

        <script>
        (function() {
                var tabs = document.querySelectorAll('.godevs-tab');
                var panels = document.querySelectorAll('.godevs-tab-panel');
                tabs.forEach(function(tab) {
                        tab.addEventListener('click', function(e) {
                                e.preventDefault();
                                tabs.forEach(function(t) { t.classList.remove('is-active'); });
                                panels.forEach(function(p) { p.classList.remove('is-active'); });
                                tab.classList.add('is-active');
                                var target = document.querySelector(tab.getAttribute('href'));
                                if (target) { target.classList.add('is-active'); }
                        });
                });
        })();
        </script>
        <?php
}

/**
 * Enqueue settings page assets.
 *
 * @param string $hook Current admin page hook suffix.
 * @return void
 */
function godevs_portfolio_settings_enqueue_assets( string $hook ): void {
        if ( 'appearance_page_godevs-portfolio-settings' !== $hook ) {
                return;
        }

        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );

        // Inline CSS for the settings page — premium dashboard look.
        echo '<style>
        .godevs-settings-wrap { max-width: 860px; }
        .godevs-settings-wrap h1 { font-size: 24px; font-weight: 700; letter-spacing: -0.02em; margin-bottom: 4px; }
        .godevs-settings-wrap .description { margin-bottom: 24px; color: #50575e; }
        .godevs-settings-tabs {
                display: flex; flex-wrap: wrap; gap: 2px; margin: 0 0 -1px; padding: 0;
                border-bottom: 2px solid #c3c4c7;
        }
        .godevs-tab {
                padding: 10px 20px; text-decoration: none; border: 1px solid transparent;
                border-bottom: 2px solid transparent; margin-bottom: -2px;
                color: #2271b1; font-weight: 600; font-size: 13px;
                background: #f6f7f7; border-radius: 4px 4px 0 0;
                transition: background 0.15s ease, color 0.15s ease;
        }
        .godevs-tab:hover { background: #e0e0e0; color: #135e96; }
        .godevs-tab.is-active {
                background: #fff; border-color: #c3c4c7; border-bottom-color: #fff;
                color: #1d2327;
        }
        .godevs-tab-panel {
                display: none; background: #fff; border: 1px solid #c3c4c7; border-top: none;
                padding: 24px 28px; border-radius: 0 0 4px 4px;
        }
        .godevs-tab-panel.is-active { display: block; }
        .godevs-tab-panel table { width: 100%; }
        .godevs-tab-panel table th { padding: 16px 12px 16px 0; text-align: left; font-weight: 600; color: #1d2327; width: 200px; vertical-align: top; }
        .godevs-tab-panel table td { padding: 16px 0; vertical-align: top; }
        .godevs-tab-panel .description { color: #50575e; font-size: 12px; margin-top: 4px; }
        .godevs-color-picker { width: 80px; height: 30px; }
        .godevs-tab-panel input[type="number"] { width: 100px; }
        .godevs-tab-panel select { min-width: 180px; }
        .godevs-settings-wrap .submit { padding-top: 16px; }
        .godevs-settings-wrap h3 { margin-top: 32px; padding-top: 20px; border-top: 1px solid #dcdcde; }
        </style>';

        echo '<script>
        jQuery(function($) {
                $(".godevs-color-picker").wpColorPicker();
        });
        </script>';
}
add_action( 'admin_enqueue_scripts', 'godevs_portfolio_settings_enqueue_assets' );

/**
 * Apply theme settings to the front-end via CSS custom properties.
 *
 * This function runs on wp_head and injects a <style> block with CSS
 * custom properties derived from the validated theme settings. This
 * makes the settings actually affect the front-end rendering.
 *
 * Security: all values are validated/sanitized when saved. This function
 * only reads already-sanitized values from theme_mods and outputs them
 * as CSS custom properties. No user input is trusted directly.
 *
 * @return void
 * @since 0.8.0
 */
function godevs_portfolio_apply_settings_css(): void {
        $container_width = absint( godevs_portfolio_get_setting( 'container_width' ) );
        $content_width   = absint( godevs_portfolio_get_setting( 'content_width' ) );
        $button_radius   = absint( godevs_portfolio_get_setting( 'button_radius' ) );
        $card_radius     = absint( godevs_portfolio_get_setting( 'card_radius' ) );
        $accent_color    = sanitize_hex_color( (string) godevs_portfolio_get_setting( 'accent_color' ) );
        $accent_hover    = sanitize_hex_color( (string) godevs_portfolio_get_setting( 'accent_hover' ) );
        $section_spacing = absint( godevs_portfolio_get_setting( 'section_spacing' ) );
        $header_sticky   = (string) godevs_portfolio_get_setting( 'header_sticky' );

        // Build the CSS custom properties.
        $css = ':root {';
        $css .= '--godevs-container-width: ' . $container_width . 'px;';
        $css .= '--godevs-content-width: ' . $content_width . 'px;';
        $css .= '--godevs-button-radius: ' . $button_radius . 'px;';
        $css .= '--godevs-card-radius: ' . $card_radius . 'px;';
        if ( $accent_color ) {
                $css .= '--godevs-accent: ' . $accent_color . ';';
        }
        if ( $accent_hover ) {
                $css .= '--godevs-accent-hover: ' . $accent_hover . ';';
        }
        $css .= '--godevs-section-spacing: ' . $section_spacing . 'px;';
        $css .= '}';

        // Apply container width — override WordPress layout settings.
        $css .= 'body .wp-block-group.alignwide { max-width: ' . $container_width . 'px; }';
        $css .= 'body .wp-container-core-group-layout-1.wp-container-core-group-layout-1 > * { max-width: ' . $container_width . 'px; }';

        // Apply content width — reading width.
        $css .= 'body .entry-content, body .wp-block-post-content { max-width: ' . $content_width . 'px; margin-left: auto; margin-right: auto; }';

        // Apply button radius.
        $css .= '.wp-block-button .wp-block-button__link { border-radius: ' . $button_radius . 'px; }';
        $css .= '.wp-block-button.is-style-outline .wp-block-button__link { border-radius: ' . $button_radius . 'px; }';
        $css .= '.wp-block-button.is-style-pill .wp-block-button__link { border-radius: 9999px; }';

        // Apply card radius.
        $css .= '.wp-block-group.is-style-card-default { border-radius: ' . $card_radius . 'px; }';
        $css .= '.wp-block-group.is-style-card-bordered { border-radius: ' . $card_radius . 'px; }';
        $css .= '.wp-block-group.is-style-card-elevated { border-radius: ' . $card_radius . 'px; }';
        $css .= '.wp-block-group.is-style-card-featured { border-radius: ' . $card_radius . 'px; }';

        // Apply accent color overrides if set.
        if ( $accent_color ) {
                $css .= '.wp-block-button .wp-block-button__link { background-color: ' . $accent_color . '; }';
                $css .= 'a { color: ' . $accent_color . '; }';
                $css .= '.wp-block-button.is-style-outline .wp-block-button__link { border-color: ' . $accent_color . '; color: ' . $accent_color . '; }';
        }

        if ( $accent_hover ) {
                $css .= '.wp-block-button .wp-block-button__link:hover { background-color: ' . $accent_hover . '; }';
        }

        // Apply header sticky.
        if ( '1' !== $header_sticky ) {
                $css .= '.site-header { position: relative; }';
        }

        // Output the CSS.
        echo '<style id="godevs-portfolio-dynamic-css">' . $css . '</style>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — all values are sanitized integers and hex colors.
}
add_action( 'wp_head', 'godevs_portfolio_apply_settings_css', 99 );
