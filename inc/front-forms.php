<?php
/**
 * Front-end Booking & Proposal Forms.
 *
 * Provides two shortcodes for front-end user interaction:
 *
 *   [godevs_booking_form]  — A booking request form that creates a
 *     godevs_booking post when submitted. Used for appointment/service
 *     bookings. Sends an email notification to the admin on submission.
 *
 *   [godevs_proposal_form] — A project proposal/contact form that sends
 *     an email to the site admin. Does NOT create a post — it's a
 *     lightweight contact form for project inquiries.
 *
 * Both forms are self-contained: they handle their own submission via
 * admin-ajax.php, nonce verification, sanitization, and success/error
 * display. No plugins required.
 *
 * @package GoDevs_Portfolio
 * @since   2.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Enqueue front-end form styles.
 */
function godevs_forms_enqueue_styles(): void {
        if ( ! is_singular() ) {
                return;
        }
        // Only enqueue if the post content contains our shortcodes.
        $post = get_post();
        if ( ! $post || ! has_shortcode( $post->post_content ?? '', 'godevs_booking_form' )
                && ! has_shortcode( $post->post_content ?? '', 'godevs_proposal_form' ) ) {
                return;
        }

        $css_path = get_template_directory() . '/assets/css/front-forms.css';
        $css_uri  = get_template_directory_uri() . '/assets/css/front-forms.css';
        if ( file_exists( $css_path ) ) {
                wp_enqueue_style( 'godevs-front-forms', $css_uri, array(), '2.9.0' );
        }

        wp_enqueue_script( 'godevs-front-forms', get_template_directory_uri() . '/assets/js/front-forms.js', array(), '2.9.0', true );
        wp_localize_script(
                'godevs-front-forms',
                'GODEVS_FORMS',
                array(
                        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
                        'bookingNonce' => wp_create_nonce( 'godevs_booking_form' ),
                        'proposalNonce' => wp_create_nonce( 'godevs_proposal_form' ),
                        'i18n'     => array(
                                'submitting' => __( 'Sending…', 'godevs-portfolio' ),
                                'successBooking' => __( 'Booking request sent! We\'ll get back to you shortly.', 'godevs-portfolio' ),
                                'successProposal' => __( 'Proposal sent! We\'ll review and respond within 48 hours.', 'godevs-portfolio' ),
                                'error' => __( 'Something went wrong. Please try again or email us directly.', 'godevs-portfolio' ),
                                'required' => __( 'Please fill in all required fields.', 'godevs-portfolio' ),
                                'invalidEmail' => __( 'Please enter a valid email address.', 'godevs-portfolio' ),
                        ),
                )
        );
}
add_action( 'wp_enqueue_scripts', 'godevs_forms_enqueue_styles' );

/**
 * Shortcode: Booking Form.
 *
 * Renders a front-end booking request form. On submission, creates a
 * `godevs_booking` post with status `pending` and sends an email
 * notification to the site admin.
 *
 * Usage: [godevs_booking_form service="Consultation"]
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML form.
 */
function godevs_booking_form_shortcode( array $atts = array() ): string {
        $atts = shortcode_atts(
                array(
                        'service' => '',
                ),
                $atts,
                'godevs_booking_form'
        );

        // If the booking module is disabled, show a message.
        if ( function_exists( 'godevs_portfolio_module_enabled' ) && ! godevs_portfolio_module_enabled( 'bookings' ) ) {
                return '<p class="godevs-form-disabled">' . esc_html__( 'Bookings are currently disabled.', 'godevs-portfolio' ) . '</p>';
        }

        $services = array();
        if ( post_type_exists( 'godevs_service' ) ) {
                $services_query = get_posts(
                        array(
                                'post_type'      => 'godevs_service',
                                'posts_per_page' => -1,
                                'orderby'        => 'title',
                                'order'          => 'ASC',
                        )
                );
                foreach ( $services_query as $s ) {
                        $services[ $s->ID ] = $s->post_title;
                }
        }

        ob_start();
        ?>
        <div class="godevs-form-wrap godevs-booking-form-wrap" id="godevs-booking-form">
                <form class="godevs-form" method="post" autocomplete="on" novalidate>
                        <?php wp_nonce_field( 'godevs_booking_form', 'godevs_booking_nonce' ); ?>
                        <input type="hidden" name="action" value="godevs_submit_booking" />
                        <!-- Honeypot anti-spam field — hidden from real users via CSS. -->
                        <div style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
                                <label><?php esc_html_e( 'Leave this field empty', 'godevs-portfolio' ); ?>
                                        <input type="text" name="godevs_hp" tabindex="-1" autocomplete="off" />
                                </label>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-name"><?php esc_html_e( 'Your Name', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="text" id="godevs-booking-name" name="booking_name" required autocomplete="name" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-email"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="email" id="godevs-booking-email" name="booking_email" required autocomplete="email" />
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-phone"><?php esc_html_e( 'Phone', 'godevs-portfolio' ); ?></label>
                                        <input type="tel" id="godevs-booking-phone" name="booking_phone" autocomplete="tel" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-service"><?php esc_html_e( 'Service', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-booking-service" name="booking_service">
                                                <option value=""><?php esc_html_e( '— Select a service —', 'godevs-portfolio' ); ?></option>
                                                <?php foreach ( $services as $id => $title ) : ?>
                                                        <option value="<?php echo esc_attr( $title ); ?>"<?php selected( $atts['service'], $title ); ?>><?php echo esc_html( $title ); ?></option>
                                                <?php endforeach; ?>
                                                <?php if ( $atts['service'] && ! in_array( $atts['service'], $services, true ) ) : ?>
                                                        <option value="<?php echo esc_attr( $atts['service'] ); ?>" selected><?php echo esc_html( $atts['service'] ); ?></option>
                                                <?php endif; ?>
                                        </select>
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-date"><?php esc_html_e( 'Preferred Date', 'godevs-portfolio' ); ?></label>
                                        <input type="date" id="godevs-booking-date" name="booking_date" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-time"><?php esc_html_e( 'Preferred Time', 'godevs-portfolio' ); ?></label>
                                        <input type="time" id="godevs-booking-time" name="booking_time" />
                                </div>
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-booking-message"><?php esc_html_e( 'Message', 'godevs-portfolio' ); ?></label>
                                <textarea id="godevs-booking-message" name="booking_message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your project or what you need…', 'godevs-portfolio' ); ?>"></textarea>
                        </div>

                        <button type="submit" class="godevs-form-submit wp-element-button">
                                <?php esc_html_e( 'Request Booking', 'godevs-portfolio' ); ?>
                        </button>

                        <div class="godevs-form-message" role="alert" aria-live="polite"></div>
                </form>
        </div>
        <?php
        return ob_get_clean();
}
add_shortcode( 'godevs_booking_form', 'godevs_booking_form_shortcode' );

/**
 * Shortcode: Proposal / Contact Form.
 *
 * Renders a project proposal form. On submission, sends an email to the
 * site admin with the proposal details. Does NOT create a post.
 *
 * Usage: [godevs_proposal_form]
 *
 * @return string HTML form.
 */
function godevs_proposal_form_shortcode(): string {
        ob_start();
        ?>
        <div class="godevs-form-wrap godevs-proposal-form-wrap" id="godevs-proposal-form">
                <form class="godevs-form" method="post" autocomplete="on" novalidate>
                        <?php wp_nonce_field( 'godevs_proposal_form', 'godevs_proposal_nonce' ); ?>
                        <input type="hidden" name="action" value="godevs_submit_proposal" />
                        <!-- Honeypot anti-spam field. -->
                        <div style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
                                <label><?php esc_html_e( 'Leave this field empty', 'godevs-portfolio' ); ?>
                                        <input type="text" name="godevs_hp" tabindex="-1" autocomplete="off" />
                                </label>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-name"><?php esc_html_e( 'Your Name', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="text" id="godevs-proposal-name" name="proposal_name" required autocomplete="name" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-email"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="email" id="godevs-proposal-email" name="proposal_email" required autocomplete="email" />
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-company"><?php esc_html_e( 'Company / Organization', 'godevs-portfolio' ); ?></label>
                                        <input type="text" id="godevs-proposal-company" name="proposal_company" autocomplete="organization" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-budget"><?php esc_html_e( 'Budget Range', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-proposal-budget" name="proposal_budget">
                                                <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Under $5,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Under $5,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$5,000 — $15,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$5,000 — $15,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$15,000 — $50,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$15,000 — $50,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$50,000+', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$50,000+', 'godevs-portfolio' ); ?></option>
                                        </select>
                                </div>
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-proposal-type"><?php esc_html_e( 'Project Type', 'godevs-portfolio' ); ?></label>
                                <select id="godevs-proposal-type" name="proposal_type">
                                        <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                        <option value="<?php esc_attr_e( 'Website Design', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Website Design', 'godevs-portfolio' ); ?></option>
                                        <option value="<?php esc_attr_e( 'Web Development', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Web Development', 'godevs-portfolio' ); ?></option>
                                        <option value="<?php esc_attr_e( 'Branding / Identity', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Branding / Identity', 'godevs-portfolio' ); ?></option>
                                        <option value="<?php esc_attr_e( 'Consulting', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Consulting', 'godevs-portfolio' ); ?></option>
                                        <option value="<?php esc_attr_e( 'Other', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Other', 'godevs-portfolio' ); ?></option>
                                </select>
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-proposal-message"><?php esc_html_e( 'Project Details', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                <textarea id="godevs-proposal-message" name="proposal_message" rows="6" required placeholder="<?php esc_attr_e( 'Tell us about your project — goals, timeline, scope, anything that helps us understand what you need.', 'godevs-portfolio' ); ?>"></textarea>
                        </div>

                        <button type="submit" class="godevs-form-submit wp-element-button">
                                <?php esc_html_e( 'Send Proposal', 'godevs-portfolio' ); ?>
                        </button>

                        <div class="godevs-form-message" role="alert" aria-live="polite"></div>
                </form>
        </div>
        <?php
        return ob_get_clean();
}
add_shortcode( 'godevs_proposal_form', 'godevs_proposal_form_shortcode' );

/**
 * AJAX handler: Submit booking form.
 *
 * Creates a `godevs_booking` post with status `pending` and sends an
 * email notification to the site admin.
 */
function godevs_ajax_submit_booking(): void {
        check_ajax_referer( 'godevs_booking_form', 'nonce' );

        // Honeypot anti-spam check — if filled, silently fail.
        // Note: we intentionally do NOT read or use the honeypot value — we only
        // check whether the field was filled by a bot. No sanitization needed.
        if ( isset( $_POST['godevs_hp'] ) && '' !== wp_unslash( $_POST['godevs_hp'] ) ) {
                wp_send_json_error( array( 'message' => __( 'Spam detected.', 'godevs-portfolio' ) ), 400 );
        }

        // Sanitize and validate input.
        // phpcs:disable WordPress.Security.NonceVerification.Recommended -- verified above via check_ajax_referer().
        $name    = isset( $_POST['booking_name'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_name'] ) ) : '';
        $email   = isset( $_POST['booking_email'] ) ? sanitize_email( wp_unslash( $_POST['booking_email'] ) ) : '';
        $phone   = isset( $_POST['booking_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_phone'] ) ) : '';
        $service = isset( $_POST['booking_service'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_service'] ) ) : '';
        $date    = isset( $_POST['booking_date'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_date'] ) ) : '';
        $time    = isset( $_POST['booking_time'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_time'] ) ) : '';
        $message = isset( $_POST['booking_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['booking_message'] ) ) : '';
        // phpcs:enable WordPress.Security.NonceVerification.Recommended.

        // Validate required fields.
        if ( empty( $name ) || empty( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide your name and email.', 'godevs-portfolio' ) ), 400 );
        }
        if ( ! is_email( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide a valid email address.', 'godevs-portfolio' ) ), 400 );
        }

        // Create the booking post.
        $post_id = wp_insert_post(
                array(
                        'post_type'   => 'godevs_booking',
                        'post_title'  => sprintf( '%s — %s', $name, $service ?: __( 'General Booking', 'godevs-portfolio' ) ),
                        'post_status' => 'pending',
                        'post_content' => $message,
                ),
                true
        );

        if ( is_wp_error( $post_id ) ) {
                wp_send_json_error( array( 'message' => __( 'Could not create booking. Please try again.', 'godevs-portfolio' ) ), 500 );
        }

        // Save meta fields.
        update_post_meta( $post_id, '_godevs_booking_name', $name );
        update_post_meta( $post_id, '_godevs_booking_email', $email );
        update_post_meta( $post_id, '_godevs_booking_phone', $phone );
        update_post_meta( $post_id, '_godevs_booking_service', $service );
        update_post_meta( $post_id, '_godevs_booking_date', $date );
        update_post_meta( $post_id, '_godevs_booking_time', $time );
        update_post_meta( $post_id, '_godevs_booking_message', $message );
        update_post_meta( $post_id, '_godevs_booking_status', 'pending' );

        // Send admin notification email.
        $admin_email = get_bloginfo( 'admin_email' );
        $site_name   = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );
        $subject     = sprintf( '[%s] New Booking: %s', $site_name, $name );

        $email_body  = __( "New booking request received:\n\n", 'godevs-portfolio' );
        $email_body .= sprintf( __( "Name: %s\n", 'godevs-portfolio' ), $name );
        $email_body .= sprintf( __( "Email: %s\n", 'godevs-portfolio' ), $email );
        if ( $phone ) {
                $email_body .= sprintf( __( "Phone: %s\n", 'godevs-portfolio' ), $phone );
        }
        if ( $service ) {
                $email_body .= sprintf( __( "Service: %s\n", 'godevs-portfolio' ), $service );
        }
        if ( $date ) {
                $email_body .= sprintf( __( "Preferred Date: %s\n", 'godevs-portfolio' ), $date );
        }
        if ( $time ) {
                $email_body .= sprintf( __( "Preferred Time: %s\n", 'godevs-portfolio' ), $time );
        }
        if ( $message ) {
                $email_body .= sprintf( __( "\nMessage:\n%s\n", 'godevs-portfolio' ), $message );
        }
        $email_body .= sprintf( "\n" . __( "Manage booking: %s\n", 'godevs-portfolio' ), admin_url( 'post.php?post=' . $post_id . '&action=edit' ) );

        // Sanitize name for email header — strip <, >, newlines to prevent header injection.
        $reply_name = str_replace( array( '<', '>', "\r", "\n", "%0d", "%0a" ), '', $name );

        $headers = array(
                'From: ' . $site_name . ' <' . $admin_email . '>',
                'Content-Type: text/plain; charset=UTF-8',
                'Reply-To: ' . $reply_name . ' <' . $email . '>',
        );

        wp_mail( $admin_email, $subject, $email_body, $headers );

        wp_send_json_success( array( 'message' => __( 'Booking request sent! We\'ll get back to you shortly.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_submit_booking', 'godevs_ajax_submit_booking' );
add_action( 'wp_ajax_nopriv_godevs_submit_booking', 'godevs_ajax_submit_booking' );

/**
 * AJAX handler: Submit proposal form.
 *
 * Sends an email to the site admin with the proposal details.
 * Does NOT create a post.
 */
function godevs_ajax_submit_proposal(): void {
        check_ajax_referer( 'godevs_proposal_form', 'nonce' );

        // Honeypot anti-spam check.
        // We intentionally do NOT read or use the honeypot value — we only check
        // whether the field was filled by a bot. No sanitization needed.
        if ( isset( $_POST['godevs_hp'] ) && '' !== wp_unslash( $_POST['godevs_hp'] ) ) {
                wp_send_json_error( array( 'message' => __( 'Spam detected.', 'godevs-portfolio' ) ), 400 );
        }

        // Sanitize and validate input.
        // phpcs:disable WordPress.Security.NonceVerification.Recommended -- verified above via check_ajax_referer().
        $name     = isset( $_POST['proposal_name'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_name'] ) ) : '';
        $email    = isset( $_POST['proposal_email'] ) ? sanitize_email( wp_unslash( $_POST['proposal_email'] ) ) : '';
        $company  = isset( $_POST['proposal_company'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_company'] ) ) : '';
        $budget   = isset( $_POST['proposal_budget'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_budget'] ) ) : '';
        $type     = isset( $_POST['proposal_type'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_type'] ) ) : '';
        $message  = isset( $_POST['proposal_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['proposal_message'] ) ) : '';
        // phpcs:enable WordPress.Security.NonceVerification.Recommended.

        // Validate required fields.
        if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
                wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'godevs-portfolio' ) ), 400 );
        }
        if ( ! is_email( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide a valid email address.', 'godevs-portfolio' ) ), 400 );
        }

        // Send admin email.
        $admin_email = get_bloginfo( 'admin_email' );
        $site_name   = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );
        $subject     = sprintf( '[%s] New Proposal: %s', $site_name, $name );

        $email_body  = __( "New project proposal received:\n\n", 'godevs-portfolio' );
        $email_body .= sprintf( __( "Name: %s\n", 'godevs-portfolio' ), $name );
        $email_body .= sprintf( __( "Email: %s\n", 'godevs-portfolio' ), $email );
        if ( $company ) {
                $email_body .= sprintf( __( "Company: %s\n", 'godevs-portfolio' ), $company );
        }
        if ( $type ) {
                $email_body .= sprintf( __( "Project Type: %s\n", 'godevs-portfolio' ), $type );
        }
        if ( $budget ) {
                $email_body .= sprintf( __( "Budget: %s\n", 'godevs-portfolio' ), $budget );
        }
        $email_body .= sprintf( "\n" . __( "Project Details:\n%s\n", 'godevs-portfolio' ), $message );

        // Sanitize name for email header — strip <, >, newlines to prevent header injection.
        $reply_name = str_replace( array( '<', '>', "\r", "\n", "%0d", "%0a" ), '', $name );

        $headers = array(
                'From: ' . $site_name . ' <' . $admin_email . '>',
                'Content-Type: text/plain; charset=UTF-8',
                'Reply-To: ' . $reply_name . ' <' . $email . '>',
        );

        $sent = wp_mail( $admin_email, $subject, $email_body, $headers );

        if ( ! $sent ) {
                wp_send_json_error( array( 'message' => __( 'Could not send proposal. Please try again or email us directly.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success( array( 'message' => __( 'Proposal sent! We\'ll review and respond within 48 hours.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_submit_proposal', 'godevs_ajax_submit_proposal' );
add_action( 'wp_ajax_nopriv_godevs_submit_proposal', 'godevs_ajax_submit_proposal' );
