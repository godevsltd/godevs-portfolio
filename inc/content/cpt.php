<?php
/**
 * Custom Post Type registration for GoDevs Portfolio.
 *
 * Registers:
 *   - godevs_project  (Projects)
 *   - godevs_service  (Services)
 *   - godevs_team      (Team Members)
 *   - godevs_testimonial (Testimonials)
 *   - godevs_booking   (Bookings — private, not publicly queryable)
 *   - godevs_experience (Experience)
 *   - godevs_education (Education)
 *   - godevs_faq       (FAQs)
 *
 * Each CPT respects the module visibility system — when a module is disabled,
 * the CPT is not registered, but existing content is preserved in the database.
 *
 * @package GoDevs_Portfolio
 * @since   0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Check if a content module is enabled.
 *
 * @param string $module Module key (e.g., 'projects', 'services', 'team').
 * @return bool True if enabled.
 */
function godevs_portfolio_module_enabled( string $module ): bool {
        $settings = get_option( 'godevs_portfolio_settings', array() );
        if ( ! is_array( $settings ) ) {
                return true; // Default to enabled if settings not yet saved.
        }
        $key = 'module_' . $module;
        // Default to enabled if not explicitly set.
        return ! isset( $settings[ $key ] ) || '1' === $settings[ $key ];
}

/**
 * Register all custom post types.
 *
 * Each CPT is only registered if its module is enabled.
 * This allows admins to disable unused modules without deleting content.
 *
 * @return void
 */
function godevs_portfolio_register_post_types(): void {

        // ── Projects ──────────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'projects' ) ) {
                register_post_type(
                        'godevs_project',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Projects', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Project', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New Project', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Project', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Project', 'godevs-portfolio' ),
                                        'new_item'           => __( 'New Project', 'godevs-portfolio' ),
                                        'view_item'          => __( 'View Project', 'godevs-portfolio' ),
                                        'search_items'       => __( 'Search Projects', 'godevs-portfolio' ),
                                        'not_found'          => __( 'No projects found.', 'godevs-portfolio' ),
                                        'not_found_in_trash' => __( 'No projects found in trash.', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Projects', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Projects', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => true,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 5,
                                'menu_icon'           => 'dashicons-portfolio',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'projects' ),
                                'hierarchical'        => false,
                        )
                );
        }

        // ── Services ──────────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'services' ) ) {
                register_post_type(
                        'godevs_service',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Services', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Service', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New Service', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Service', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Service', 'godevs-portfolio' ),
                                        'new_item'           => __( 'New Service', 'godevs-portfolio' ),
                                        'view_item'          => __( 'View Service', 'godevs-portfolio' ),
                                        'search_items'       => __( 'Search Services', 'godevs-portfolio' ),
                                        'not_found'          => __( 'No services found.', 'godevs-portfolio' ),
                                        'not_found_in_trash' => __( 'No services found in trash.', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Services', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Services', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => true,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 6,
                                'menu_icon'           => 'dashicons-admin-tools',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'services' ),
                                'hierarchical'        => false,
                        )
                );
        }

        // ── Team ──────────────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'team' ) ) {
                register_post_type(
                        'godevs_team',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Team', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Team Member', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New Member', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Team Member', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Team Member', 'godevs-portfolio' ),
                                        'new_item'           => __( 'New Team Member', 'godevs-portfolio' ),
                                        'view_item'          => __( 'View Team Member', 'godevs-portfolio' ),
                                        'search_items'       => __( 'Search Team', 'godevs-portfolio' ),
                                        'not_found'          => __( 'No team members found.', 'godevs-portfolio' ),
                                        'not_found_in_trash' => __( 'No team members found in trash.', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Team Members', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Team', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => true,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 7,
                                'menu_icon'           => 'dashicons-groups',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'team' ),
                                'hierarchical'        => false,
                        )
                );
        }

        // ── Testimonials ──────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'testimonials' ) ) {
                register_post_type(
                        'godevs_testimonial',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Testimonials', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Testimonial', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New Testimonial', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Testimonial', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Testimonial', 'godevs-portfolio' ),
                                        'new_item'           => __( 'New Testimonial', 'godevs-portfolio' ),
                                        'view_item'          => __( 'View Testimonial', 'godevs-portfolio' ),
                                        'search_items'       => __( 'Search Testimonials', 'godevs-portfolio' ),
                                        'not_found'          => __( 'No testimonials found.', 'godevs-portfolio' ),
                                        'not_found_in_trash' => __( 'No testimonials found in trash.', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Testimonials', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Testimonials', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => false,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 8,
                                'menu_icon'           => 'dashicons-format-quote',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'testimonials' ),
                                'hierarchical'        => false,
                        )
                );
        }

        // ── Experience ───────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'experience' ) ) {
                register_post_type(
                        'godevs_experience',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Experience', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Experience', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Experience', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Experience', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Experience', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Experience', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => false,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 9,
                                'menu_icon'           => 'dashicons-businessperson',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'experience' ),
                        )
                );
        }

        // ── Education ────────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'education' ) ) {
                register_post_type(
                        'godevs_education',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Education', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Education', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Education', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Education', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Education', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Education', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => false,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 10,
                                'menu_icon'           => 'dashicons-welcome-learn-more',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'education' ),
                        )
                );
        }

        // ── FAQs ──────────────────────────────────────────────────
        if ( godevs_portfolio_module_enabled( 'faqs' ) ) {
                register_post_type(
                        'godevs_faq',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'FAQs', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'FAQ', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New FAQ', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New FAQ', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit FAQ', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All FAQs', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'FAQs', 'godevs-portfolio' ),
                                ),
                                'public'              => true,
                                'has_archive'         => false,
                                'show_in_rest'        => true,
                                'show_in_menu'        => true,
                                'menu_position'       => 11,
                                'menu_icon'           => 'dashicons-editor-help',
                                'supports'            => array( 'title', 'editor', 'excerpt', 'page-attributes', 'custom-fields' ),
                                'rewrite'             => array( 'slug' => 'faq' ),
                        )
                );
        }

        // ── Bookings (PRIVATE — not publicly queryable) ──────────
        if ( godevs_portfolio_module_enabled( 'bookings' ) ) {
                register_post_type(
                        'godevs_booking',
                        array(
                                'labels'              => array(
                                        'name'               => __( 'Bookings', 'godevs-portfolio' ),
                                        'singular_name'      => __( 'Booking', 'godevs-portfolio' ),
                                        'add_new'            => __( 'Add New Booking', 'godevs-portfolio' ),
                                        'add_new_item'       => __( 'Add New Booking', 'godevs-portfolio' ),
                                        'edit_item'          => __( 'Edit Booking', 'godevs-portfolio' ),
                                        'all_items'          => __( 'All Bookings', 'godevs-portfolio' ),
                                        'menu_name'          => __( 'Bookings', 'godevs-portfolio' ),
                                ),
                                'public'              => false,
                                'show_ui'             => true,
                                'show_in_menu'        => true,
                                'show_in_rest'        => false,
                                'has_archive'         => false,
                                'publicly_queryable'  => false,
                                'exclude_from_search'  => true,
                                'menu_position'       => 12,
                                'menu_icon'           => 'dashicons-calendar-alt',
                                'supports'            => array( 'title', 'editor', 'custom-fields' ),
                                'capability_type'     => 'post',
                                'map_meta_cap'        => true,
                        )
                );
        }
}
add_action( 'init', 'godevs_portfolio_register_post_types' );
