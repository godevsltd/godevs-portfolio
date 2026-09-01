<?php
/**
 * Taxonomy registration for GoDevs Portfolio CPTs.
 *
 * Registers:
 *   - godevs_project_category (hierarchical)
 *   - godevs_project_tag (flat)
 *   - godevs_service_category (hierarchical)
 *   - godevs_team_department (hierarchical)
 *   - godevs_testimonial_category (hierarchical)
 *   - godevs_faq_category (hierarchical)
 *
 * @package GoDevs_Portfolio
 * @since   0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register all custom taxonomies.
 *
 * Each taxonomy is only registered if its parent CPT's module is enabled.
 *
 * @return void
 */
function godevs_portfolio_register_taxonomies(): void {

	// ── Project Categories ───────────────────────────────────
	if ( godevs_portfolio_module_enabled( 'projects' ) ) {
		register_taxonomy(
			'godevs_project_category',
			'godevs_project',
			array(
				'labels'            => array(
					'name'              => __( 'Project Categories', 'godevs-portfolio' ),
					'singular_name'     => __( 'Project Category', 'godevs-portfolio' ),
					'search_items'      => __( 'Search Categories', 'godevs-portfolio' ),
					'all_items'         => __( 'All Categories', 'godevs-portfolio' ),
					'edit_item'         => __( 'Edit Category', 'godevs-portfolio' ),
					'update_item'       => __( 'Update Category', 'godevs-portfolio' ),
					'add_new_item'      => __( 'Add New Category', 'godevs-portfolio' ),
					'new_item_name'    => __( 'New Category Name', 'godevs-portfolio' ),
					'menu_name'         => __( 'Categories', 'godevs-portfolio' ),
				),
				'public'            => true,
				'hierarchical'      => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'project-category' ),
			)
		);

		register_taxonomy(
			'godevs_project_tag',
			'godevs_project',
			array(
				'labels'            => array(
					'name'              => __( 'Project Tags', 'godevs-portfolio' ),
					'singular_name'     => __( 'Project Tag', 'godevs-portfolio' ),
					'search_items'      => __( 'Search Tags', 'godevs-portfolio' ),
					'all_items'         => __( 'All Tags', 'godevs-portfolio' ),
					'edit_item'         => __( 'Edit Tag', 'godevs-portfolio' ),
					'add_new_item'      => __( 'Add New Tag', 'godevs-portfolio' ),
					'menu_name'         => __( 'Tags', 'godevs-portfolio' ),
				),
				'public'            => true,
				'hierarchical'      => false,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'project-tag' ),
			)
		);
	}

	// ── Service Categories ───────────────────────────────────
	if ( godevs_portfolio_module_enabled( 'services' ) ) {
		register_taxonomy(
			'godevs_service_category',
			'godevs_service',
			array(
				'labels'            => array(
					'name'              => __( 'Service Categories', 'godevs-portfolio' ),
					'singular_name'     => __( 'Service Category', 'godevs-portfolio' ),
					'menu_name'         => __( 'Categories', 'godevs-portfolio' ),
					'all_items'         => __( 'All Categories', 'godevs-portfolio' ),
					'edit_item'         => __( 'Edit Category', 'godevs-portfolio' ),
					'add_new_item'      => __( 'Add New Category', 'godevs-portfolio' ),
				),
				'public'            => true,
				'hierarchical'      => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'service-category' ),
			)
		);
	}

	// ── Team Departments ─────────────────────────────────────
	if ( godevs_portfolio_module_enabled( 'team' ) ) {
		register_taxonomy(
			'godevs_team_department',
			'godevs_team',
			array(
				'labels'            => array(
					'name'              => __( 'Departments', 'godevs-portfolio' ),
					'singular_name'     => __( 'Department', 'godevs-portfolio' ),
					'menu_name'         => __( 'Departments', 'godevs-portfolio' ),
					'all_items'         => __( 'All Departments', 'godevs-portfolio' ),
					'edit_item'         => __( 'Edit Department', 'godevs-portfolio' ),
					'add_new_item'      => __( 'Add New Department', 'godevs-portfolio' ),
				),
				'public'            => true,
				'hierarchical'      => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'team-department' ),
			)
		);
	}

	// ── FAQ Categories ──────────────────────────────────────
	if ( godevs_portfolio_module_enabled( 'faqs' ) ) {
		register_taxonomy(
			'godevs_faq_category',
			'godevs_faq',
			array(
				'labels'            => array(
					'name'              => __( 'FAQ Categories', 'godevs-portfolio' ),
					'singular_name'     => __( 'FAQ Category', 'godevs-portfolio' ),
					'menu_name'         => __( 'Categories', 'godevs-portfolio' ),
					'all_items'         => __( 'All Categories', 'godevs-portfolio' ),
					'edit_item'         => __( 'Edit Category', 'godevs-portfolio' ),
					'add_new_item'      => __( 'Add New Category', 'godevs-portfolio' ),
				),
				'public'            => true,
				'hierarchical'      => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'faq-category' ),
			)
		);
	}
}
add_action( 'init', 'godevs_portfolio_register_taxonomies' );
