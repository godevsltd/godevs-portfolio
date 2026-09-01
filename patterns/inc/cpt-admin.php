<?php
/**
 * CPT Management Admin Page.
 *
 * Provides a unified dashboard for managing all theme CPT items:
 *   - Overview dashboard with counts per CPT
 *   - List view with edit/add/view links
 *   - Quick-add buttons for each CPT
 *
 * @package GoDevs_Portfolio
 * @since   2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Register the CPT Management admin page under Appearance.
 */
function godevs_cpt_admin_register_page(): void {
        add_theme_page(
                __( 'Content Manager', 'godevs-portfolio' ),
                __( 'Content Manager', 'godevs-portfolio' ),
                'manage_options',
                'godevs-portfolio-cpt-manager',
                'godevs_cpt_admin_render_page'
        );
}
add_action( 'admin_menu', 'godevs_cpt_admin_register_page' );

/**
 * Enqueue admin styles for the CPT manager.
 */
function godevs_cpt_admin_enqueue_styles( string $hook ): void {
        if ( 'appearance_page_godevs-portfolio-cpt-manager' !== $hook ) {
                return;
        }
        $css_path = get_template_directory() . '/assets/css/admin-cpt-manager.css';
        $css_uri  = get_template_directory_uri() . '/assets/css/admin-cpt-manager.css';
        if ( file_exists( $css_path ) ) {
                wp_enqueue_style( 'godevs-cpt-manager', $css_uri, array(), '2.6.0' );
        }
}
add_action( 'admin_enqueue_scripts', 'godevs_cpt_admin_enqueue_styles' );

/**
 * Render the CPT Management admin page.
 */
function godevs_cpt_admin_render_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'Insufficient permissions.', 'godevs-portfolio' ) );
        }

        // Get all registered CPTs from the theme.
        $theme_cpts = godevs_cpt_admin_get_theme_cpts();

        // Get the currently selected CPT (from query param).
        $current_cpt = isset( $_GET['cpt'] ) ? sanitize_key( wp_unslash( $_GET['cpt'] ) ) : '';
        if ( ! $current_cpt || ! isset( $theme_cpts[ $current_cpt ] ) ) {
                // Default to the first CPT.
                $current_cpt = '';
        }

        // Include the view.
        require_once __DIR__ . '/admin/views/admin-cpt-manager.php';
}

/**
 * Get all theme-registered CPTs with their metadata.
 *
 * @return array<string,array> Map of CPT slug → CPT info.
 */
function godevs_cpt_admin_get_theme_cpts(): array {
        $cpts = array(
                'godevs_project'     => array(
                        'label'        => __( 'Projects', 'godevs-portfolio' ),
                        'singular'     => __( 'Project', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-portfolio',
                        'edit_url'     => 'edit.php?post_type=godevs_project',
                        'add_url'      => 'post-new.php?post_type=godevs_project',
                        'archive_url'  => home_url( '/projects/' ),
                        'settings_key' => 'portfolio_',
                        'module_key'   => 'projects',
                ),
                'godevs_service'     => array(
                        'label'        => __( 'Services', 'godevs-portfolio' ),
                        'singular'     => __( 'Service', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-admin-tools',
                        'edit_url'     => 'edit.php?post_type=godevs_service',
                        'add_url'      => 'post-new.php?post_type=godevs_service',
                        'archive_url'  => home_url( '/services/' ),
                        'settings_key' => 'services_',
                        'module_key'   => 'services',
                ),
                'godevs_team'        => array(
                        'label'        => __( 'Team', 'godevs-portfolio' ),
                        'singular'     => __( 'Team Member', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-groups',
                        'edit_url'     => 'edit.php?post_type=godevs_team',
                        'add_url'      => 'post-new.php?post_type=godevs_team',
                        'archive_url'  => home_url( '/team/' ),
                        'settings_key' => 'team_',
                        'module_key'   => 'team',
                ),
                'godevs_testimonial' => array(
                        'label'        => __( 'Testimonials', 'godevs-portfolio' ),
                        'singular'     => __( 'Testimonial', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-format-quote',
                        'edit_url'     => 'edit.php?post_type=godevs_testimonial',
                        'add_url'      => 'post-new.php?post_type=godevs_testimonial',
                        'archive_url'  => home_url( '/testimonials/' ),
                        'settings_key' => 'testimonials_',
                        'module_key'   => 'testimonials',
                ),
                'godevs_experience'  => array(
                        'label'        => __( 'Experience', 'godevs-portfolio' ),
                        'singular'     => __( 'Experience', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-businessperson',
                        'edit_url'     => 'edit.php?post_type=godevs_experience',
                        'add_url'      => 'post-new.php?post_type=godevs_experience',
                        'archive_url'  => home_url( '/experience/' ),
                        'settings_key' => 'experience_',
                        'module_key'   => 'experience',
                ),
                'godevs_education'   => array(
                        'label'        => __( 'Education', 'godevs-portfolio' ),
                        'singular'     => __( 'Education', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-welcome-learn-more',
                        'edit_url'     => 'edit.php?post_type=godevs_education',
                        'add_url'      => 'post-new.php?post_type=godevs_education',
                        'archive_url'  => home_url( '/education/' ),
                        'settings_key' => 'education_',
                        'module_key'   => 'education',
                ),
                'godevs_case_study'  => array(
                        'label'        => __( 'Case Studies', 'godevs-portfolio' ),
                        'singular'     => __( 'Case Study', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-media-document',
                        'edit_url'     => 'edit.php?post_type=godevs_case_study',
                        'add_url'      => 'post-new.php?post_type=godevs_case_study',
                        'archive_url'  => home_url( '/case-studies/' ),
                        'settings_key' => 'case_studies_',
                        'module_key'   => 'case_studies',
                ),
                'godevs_faq'         => array(
                        'label'        => __( 'FAQs', 'godevs-portfolio' ),
                        'singular'     => __( 'FAQ', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-editor-help',
                        'edit_url'     => 'edit.php?post_type=godevs_faq',
                        'add_url'      => 'post-new.php?post_type=godevs_faq',
                        'archive_url'  => '', // publicly_queryable=false — no archive.
                        'settings_key' => '',
                        'module_key'   => 'faqs',
                ),
                'godevs_booking'     => array(
                        'label'        => __( 'Bookings', 'godevs-portfolio' ),
                        'singular'     => __( 'Booking', 'godevs-portfolio' ),
                        'icon'         => 'dashicons-calendar-alt',
                        'edit_url'     => 'edit.php?post_type=godevs_booking',
                        'add_url'      => '', // Bookings are submitted via front-end form, not manually added.
                        'archive_url'  => '', // privately_queryable=false — no archive.
                        'settings_key' => '',
                        'module_key'   => 'bookings',
                ),
        );

        // Filter out CPTs whose modules are disabled.
        // NOTE: godevs_portfolio_module_enabled() already prepends 'module_',
        // so we pass the bare module name (e.g., 'projects', not 'module_projects').
        foreach ( $cpts as $slug => $info ) {
                if ( function_exists( 'godevs_portfolio_module_enabled' ) && ! empty( $info['module_key'] ) ) {
                        if ( ! godevs_portfolio_module_enabled( $info['module_key'] ) ) {
                                unset( $cpts[ $slug ] );
                        }
                }
        }

        return $cpts;
}

/**
 * Get the count of published posts for a CPT.
 *
 * @param string $cpt_slug CPT slug.
 * @return int Post count.
 */
function godevs_cpt_admin_get_count( string $cpt_slug ): int {
        $counts = wp_count_posts( $cpt_slug );
        return isset( $counts->publish ) ? (int) $counts->publish : 0;
}

/**
 * Get recent posts for a CPT.
 *
 * @param string $cpt_slug CPT slug.
 * @param int    $limit    Number of posts to retrieve.
 * @return array<int,WP_Post> Array of post objects.
 */
function godevs_cpt_admin_get_recent( string $cpt_slug, int $limit = 10 ): array {
        $posts = get_posts(
                array(
                        'post_type'      => $cpt_slug,
                        'post_status'    => 'any',
                        'posts_per_page' => $limit,
                        'orderby'        => 'modified',
                        'order'          => 'DESC',
                )
        );
        return $posts;
}
