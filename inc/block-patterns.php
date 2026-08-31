<?php
/**
 * Pattern category registration.
 *
 * CRITICAL FALLBACK: This file is one of the 3 files that the OLD version
 * of functions.php (v1.0.0–v1.1.0) loaded on EVERY request. We use this
 * file as a fallback loader to pull in the CPT stack even if the user is
 * running an OLD functions.php that doesn't load those files directly.
 *
 * @package GoDevs_Portfolio
 * @since   0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ── FALLBACK LOADER ──────────────────────────────────────────────────────
// Load ALL inc/ content modules from here as a fallback. This ensures CPTs
// register on EVERY request even if the user is running an OLD functions.php.
// require_once guarantees no double-loading if functions.php also loads them.
$_godevs_bp_dir = get_template_directory() . '/inc';

$_godevs_bp_files = array(
        '/content/cpt.php',
        '/content/taxonomies.php',
        '/content/meta-fields.php',
        '/content/case-study.php',
        '/demo-registry.php',
        '/demo-tracker.php',
);

foreach ( $_godevs_bp_files as $_godevs_bp_rel ) {
        $_godevs_bp_full = $_godevs_bp_dir . $_godevs_bp_rel;
        if ( file_exists( $_godevs_bp_full ) ) {
                require_once $_godevs_bp_full;
        }
}

unset( $_godevs_bp_dir, $_godevs_bp_files, $_godevs_bp_rel, $_godevs_bp_full );

/**
 * Register GoDevs Portfolio pattern categories.
 *
 * WordPress block themes auto-register the default pattern categories
 * (Buttons, Columns, Gallery, etc.). We register portfolio-specific
 * categories to organize the long-term pattern library.
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_register_pattern_categories(): void {
        $categories = array(
                array(
                        'slug'        => 'godevs-portfolio-hero',
                        'title'       => __( 'Hero', 'godevs-portfolio' ),
                        'description' => __( 'Top-of-page introductions and opening sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-about',
                        'title'       => __( 'About', 'godevs-portfolio' ),
                        'description' => __( 'Bio and about sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-services',
                        'title'       => __( 'Services', 'godevs-portfolio' ),
                        'description' => __( 'Service offerings and feature lists.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-portfolio',
                        'title'       => __( 'Portfolio', 'godevs-portfolio' ),
                        'description' => __( 'Project showcases and portfolio grids.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-projects',
                        'title'       => __( 'Projects', 'godevs-portfolio' ),
                        'description' => __( 'Case study openers and project deep-dives.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-skills',
                        'title'       => __( 'Skills', 'godevs-portfolio' ),
                        'description' => __( 'Skill lists and proficiency displays.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-experience',
                        'title'       => __( 'Experience', 'godevs-portfolio' ),
                        'description' => __( 'Work history, timelines, and résumé sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-education',
                        'title'       => __( 'Education', 'godevs-portfolio' ),
                        'description' => __( 'Education and certification sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-testimonials',
                        'title'       => __( 'Testimonials', 'godevs-portfolio' ),
                        'description' => __( 'Client and peer endorsements.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-team',
                        'title'       => __( 'Team', 'godevs-portfolio' ),
                        'description' => __( 'Team grids and member profiles.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-pricing',
                        'title'       => __( 'Pricing', 'godevs-portfolio' ),
                        'description' => __( 'Pricing tables and plan comparisons.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-stats',
                        'title'       => __( 'Stats', 'godevs-portfolio' ),
                        'description' => __( 'Numerical highlights, statistics, and metric grids.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-blog',
                        'title'       => __( 'Blog', 'godevs-portfolio' ),
                        'description' => __( 'Post lists, featured posts, and magazine layouts.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-case-study',
                        'title'       => __( 'Case Study', 'godevs-portfolio' ),
                        'description' => __( 'Long-form case study sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-cta',
                        'title'       => __( 'CTA', 'godevs-portfolio' ),
                        'description' => __( 'Call-to-action bands and sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-contact',
                        'title'       => __( 'Contact', 'godevs-portfolio' ),
                        'description' => __( 'Contact sections and contact CTAs.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-header',
                        'title'       => __( 'Header', 'godevs-portfolio' ),
                        'description' => __( 'Site header variations.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-footer',
                        'title'       => __( 'Footer', 'godevs-portfolio' ),
                        'description' => __( 'Site footer variations.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-pages',
                        'title'       => __( 'Pages', 'godevs-portfolio' ),
                        'description' => __( 'Full-page compositions for landing and key pages.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-faq',
                        'title'       => __( 'FAQ', 'godevs-portfolio' ),
                        'description' => __( 'Frequently asked question sections using native Details blocks.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-demos',
                        'title'       => __( 'Demos', 'godevs-portfolio' ),
                        'description' => __( 'Ready-made portfolio websites — each a distinct composition of patterns and a chosen style variation. Insert one to start a new portfolio site instantly.', 'godevs-portfolio' ),
                ),
        );

        foreach ( $categories as $category ) {
                if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $category['slug'] ) ) {
                        register_block_pattern_category( $category['slug'], $category );
                }
        }
}
add_action( 'init', 'godevs_portfolio_register_pattern_categories' );
