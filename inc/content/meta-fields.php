<?php
/**
 * Custom meta fields for GoDevs Portfolio CPTs.
 *
 * Registers meta fields for:
 *   - Projects: client, URL, date, duration, role, status, featured
 *   - Services: icon, price, duration, featured, cta_label, cta_url
 *   - Team: job_title, email, phone, location, website, social links, featured
 *   - Testimonials: client_name, client_role, company, rating, featured
 *   - Bookings: name, email, phone, preferred_date, preferred_time, service, message, status, admin_notes
 *   - Experience: company, position, start_date, end_date, location, current
 *   - Education: institution, degree, field, start_date, end_date, location
 *
 * All fields are registered with proper sanitization callbacks.
 * Booking fields are NOT exposed via REST (privacy).
 *
 * @package GoDevs_Portfolio
 * @since   0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Register all custom meta fields.
 *
 * @return void
 */
function godevs_portfolio_register_meta_fields(): void {

        // ── Project Meta ─────────────────────────────────────────
        $project_fields = array(
                '_godevs_project_client'      => 'sanitize_text_field',
                '_godevs_project_url'         => 'esc_url_raw',
                '_godevs_project_date'        => 'sanitize_text_field',
                '_godevs_project_duration'   => 'sanitize_text_field',
                '_godevs_project_location'   => 'sanitize_text_field',
                '_godevs_project_role'       => 'sanitize_text_field',
                '_godevs_project_status'     => 'sanitize_text_field',
                '_godevs_project_featured'   => 'godevs_portfolio_sanitize_checkbox',
        );

        foreach ( $project_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_project',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Service Meta ──────────────────────────────────────────
        $service_fields = array(
                '_godevs_service_icon'        => 'sanitize_text_field',
                '_godevs_service_price'      => 'sanitize_text_field',
                '_godevs_service_duration'   => 'sanitize_text_field',
                '_godevs_service_featured'   => 'godevs_portfolio_sanitize_checkbox',
                '_godevs_service_cta_label'  => 'sanitize_text_field',
                '_godevs_service_cta_url'    => 'esc_url_raw',
        );

        foreach ( $service_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_service',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Team Meta ────────────────────────────────────────────
        $team_fields = array(
                '_godevs_team_job_title'   => 'sanitize_text_field',
                '_godevs_team_email'       => 'sanitize_email',
                '_godevs_team_phone'       => 'sanitize_text_field',
                '_godevs_team_location'    => 'sanitize_text_field',
                '_godevs_team_website'     => 'esc_url_raw',
                '_godevs_team_linkedin'    => 'esc_url_raw',
                '_godevs_team_twitter'     => 'esc_url_raw',
                '_godevs_team_facebook'    => 'esc_url_raw',
                '_godevs_team_instagram'   => 'esc_url_raw',
                '_godevs_team_featured'    => 'godevs_portfolio_sanitize_checkbox',
        );

        foreach ( $team_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_team',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Testimonial Meta ────────────────────────────────────
        $testimonial_fields = array(
                '_godevs_testimonial_client_name'  => 'sanitize_text_field',
                '_godevs_testimonial_client_role'  => 'sanitize_text_field',
                '_godevs_testimonial_company'      => 'sanitize_text_field',
                '_godevs_testimonial_rating'       => 'godevs_portfolio_sanitize_rating',
                '_godevs_testimonial_featured'    => 'godevs_portfolio_sanitize_checkbox',
        );

        foreach ( $testimonial_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_testimonial',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Booking Meta (NOT exposed via REST — privacy) ───────
        $booking_fields = array(
                '_godevs_booking_name'           => 'sanitize_text_field',
                '_godevs_booking_email'          => 'sanitize_email',
                '_godevs_booking_phone'          => 'sanitize_text_field',
                '_godevs_booking_date'          => 'sanitize_text_field',
                '_godevs_booking_time'          => 'sanitize_text_field',
                '_godevs_booking_service'       => 'sanitize_text_field',
                '_godevs_booking_message'       => 'sanitize_textarea_field',
                '_godevs_booking_status'        => 'sanitize_key',
                '_godevs_booking_admin_notes'   => 'sanitize_textarea_field',
        );

        foreach ( $booking_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_booking',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => false, // Privacy — do not expose via REST.
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'manage_options' );
                                },
                        )
                );
        }

        // ── Experience Meta ──────────────────────────────────────
        $experience_fields = array(
                '_godevs_experience_company'    => 'sanitize_text_field',
                '_godevs_experience_position'  => 'sanitize_text_field',
                '_godevs_experience_start'     => 'sanitize_text_field',
                '_godevs_experience_end'       => 'sanitize_text_field',
                '_godevs_experience_location'  => 'sanitize_text_field',
                '_godevs_experience_current'   => 'godevs_portfolio_sanitize_checkbox',
        );

        foreach ( $experience_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_experience',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Education Meta ──────────────────────────────────────
        $education_fields = array(
                '_godevs_education_institution' => 'sanitize_text_field',
                '_godevs_education_degree'      => 'sanitize_text_field',
                '_godevs_education_field'       => 'sanitize_text_field',
                '_godevs_education_start'      => 'sanitize_text_field',
                '_godevs_education_end'        => 'sanitize_text_field',
                '_godevs_education_location'   => 'sanitize_text_field',
        );

        foreach ( $education_fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_education',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }

        // ── Per-Post Header/Footer Layout Override ─────────────────────
        // Allows pages (and posts) to select a specific Header/Footer
        // Builder layout that overrides the site-wide active layout.
        // Values: a saved layout slug, 'default' (use site-wide), or 'none'
        // (explicitly disable the builder for this page).
        //
        // Registered for both `page` and `post` post types so the meta box
        // appears on every standard content screen. Custom post types can
        // opt in by adding their post-type slug to the array below.
        $hfp_post_types = array( 'page', 'post' );
        foreach ( $hfp_post_types as $pt ) {
                foreach ( array( 'header', 'footer' ) as $type ) {
                        register_post_meta(
                                $pt,
                                "_godevs_page_{$type}_layout",
                                array(
                                        'type'              => 'string',
                                        'single'            => true,
                                        'show_in_rest'      => true,
                                        'sanitize_callback' => 'sanitize_key',
                                        'auth_callback'     => static function () {
                                                return current_user_can( 'edit_posts' );
                                        },
                                )
                        );
                }
        }
}
add_action( 'init', 'godevs_portfolio_register_meta_fields' );

/**
 * Sanitize a checkbox value to '1' or ''.
 *
 * @param mixed $value Raw input.
 * @return string '1' or ''.
 */
function godevs_portfolio_sanitize_checkbox( $value ): string {
        return ! empty( $value ) ? '1' : '';
}

/**
 * Sanitize a rating value (1-5).
 *
 * @param mixed $value Raw input.
 * @return string Sanitized rating (1-5) or empty.
 */
function godevs_portfolio_sanitize_rating( $value ): string {
        $rating = absint( $value );
        if ( $rating < 1 ) {
                $rating = 1;
        }
        if ( $rating > 5 ) {
                $rating = 5;
        }
        return (string) $rating;
}

/**
 * Helper: get a post meta value safely.
 *
 * @param int    $post_id Post ID.
 * @param string $key     Meta key (without the _godevs_ prefix).
 * @param string $prefix  Optional prefix override.
 * @return string Meta value or empty.
 */
function godevs_portfolio_get_meta( int $post_id, string $key, string $prefix = '_godevs_' ): string {
        $value = get_post_meta( $post_id, $prefix . $key, true );
        return is_string( $value ) ? $value : '';
}

/**
 * Register the "Header & Footer Layout" meta box on the classic editor
 * for `page` and `post` post types.
 *
 * The Block Editor reads the registered post meta directly via REST, so
 * for FSE/block-aware users the field appears in the "Post" sidebar
 * under "Custom Fields" automatically. This meta box covers the classic
 * editor + classic-meta-box-on-block-editor cases.
 *
 * @param string $post_type The current post type.
 * @return void
 * @since 2.4.0
 */
function godevs_portfolio_add_hf_layout_meta_box( string $post_type ): void {
        if ( ! in_array( $post_type, array( 'page', 'post' ), true ) ) {
                return;
        }
        add_meta_box(
                'godevs-hf-layout',
                __( 'Header &amp; Footer Layout', 'godevs-portfolio' ),
                'godevs_portfolio_render_hf_layout_meta_box',
                $post_type,
                'side',
                'default'
        );
}
add_action( 'add_meta_boxes', 'godevs_portfolio_add_hf_layout_meta_box' );

/**
 * Render the "Header & Footer Layout" meta box.
 *
 * Shows two `<select>` dropdowns (Header / Footer) populated with all
 * saved Header/Footer Builder layouts, plus the special options:
 *   - "Use site-wide default" (value: `default`)
 *   - "Disable builder for this page" (value: `none`)
 *
 * @param WP_Post $post The post being edited.
 * @return void
 * @since 2.4.0
 */
function godevs_portfolio_render_hf_layout_meta_box( WP_Post $post ): void {
        wp_nonce_field( 'godevs_hf_layout_meta', 'godevs_hf_layout_nonce' );

        // Load saved values — fall back to 'default'.
        $header_layout = get_post_meta( $post->ID, '_godevs_page_header_layout', true ) ?: 'default';
        $footer_layout = get_post_meta( $post->ID, '_godevs_page_footer_layout', true ) ?: 'default';

        // Load all saved layouts from the Header/Footer Builder.
        // We do this defensively — the builder file may not be loaded on
        // the front-end of the edit screen if it's lazy-loaded.
        $layouts = function_exists( 'godevs_hf_get_layouts' ) ? godevs_hf_get_layouts() : array();

        foreach ( array( 'header', 'footer' ) as $type ) :
                $current = ( 'header' === $type ) ? $header_layout : $footer_layout;
                $saved   = $layouts[ $type ] ?? array();
                ?>
                <p style="margin:0 0 12px;">
                        <label for="_godevs_page_<?php echo esc_attr( $type ); ?>_layout" style="display:block;font-weight:600;margin-bottom:4px;">
                                <?php echo esc_html( ucfirst( $type ) . ' Layout' ); ?>
                        </label>
                        <select
                                name="_godevs_page_<?php echo esc_attr( $type ); ?>_layout"
                                id="_godevs_page_<?php echo esc_attr( $type ); ?>_layout"
                                class="widefat"
                        >
                                <option value="default"<?php selected( $current, 'default' ); ?>>
                                        <?php esc_html_e( 'Site-wide default', 'godevs-portfolio' ); ?>
                                </option>
                                <option value="none"<?php selected( $current, 'none' ); ?>>
                                        <?php esc_html_e( '— Disable builder (use theme parts)', 'godevs-portfolio' ); ?>
                                </option>
                                <?php if ( ! empty( $saved ) ) : ?>
                                        <optgroup label="<?php esc_attr_e( 'Saved layouts', 'godevs-portfolio' ); ?>">
                                                <?php foreach ( $saved as $slug => $data ) : ?>
                                                        <option value="<?php echo esc_attr( $slug ); ?>"<?php selected( $current, $slug ); ?>>
                                                                <?php echo esc_html( $data['label'] ?? $slug ); ?>
                                                        </option>
                                                <?php endforeach; ?>
                                        </optgroup>
                                <?php endif; ?>
                        </select>
                        <?php
                        if ( empty( $saved ) ) {
                                echo '<span style="display:block;margin-top:4px;font-size:11px;color:#666;">' .
                                        esc_html__( 'No saved layouts yet — create one in Appearance → GoDevs Settings → Header/Footer Builder.', 'godevs-portfolio' ) .
                                        '</span>';
                        }
                        ?>
                </p>
                <?php
        endforeach;
}

/**
 * Save the per-page header/footer layout override.
 *
 * @param int $post_id The post ID being saved.
 * @return void
 * @since 2.4.0
 */
function godevs_portfolio_save_hf_layout_meta( int $post_id ): void {
        // Bail on autosave.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
        // Verify nonce.
        if ( empty( $_POST['godevs_hf_layout_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['godevs_hf_layout_nonce'] ), 'godevs_hf_layout_meta' ) ) {
                return;
        }
        // Check capabilities.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
        }
        // Save each layout.
        foreach ( array( 'header', 'footer' ) as $type ) {
                $field = "_godevs_page_{$type}_layout";
                $val   = isset( $_POST[ $field ] ) ? sanitize_key( wp_unslash( $_POST[ $field ] ) ) : 'default';
                update_post_meta( $post_id, $field, $val );
        }
}
add_action( 'save_post', 'godevs_portfolio_save_hf_layout_meta' );
