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
