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
                        'label'       => __( 'Hero', 'godevs-portfolio' ),
                        'description' => __( 'Top-of-page introductions and opening sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-about',
                        'label'       => __( 'About', 'godevs-portfolio' ),
                        'description' => __( 'Bio and about sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-services',
                        'label'       => __( 'Services', 'godevs-portfolio' ),
                        'description' => __( 'Service offerings and feature lists.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-portfolio',
                        'label'       => __( 'Portfolio', 'godevs-portfolio' ),
                        'description' => __( 'Project showcases and portfolio grids.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-projects',
                        'label'       => __( 'Projects', 'godevs-portfolio' ),
                        'description' => __( 'Case study openers and project deep-dives.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-skills',
                        'label'       => __( 'Skills', 'godevs-portfolio' ),
                        'description' => __( 'Skill lists and proficiency displays.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-experience',
                        'label'       => __( 'Experience', 'godevs-portfolio' ),
                        'description' => __( 'Work history, timelines, and résumé sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-education',
                        'label'       => __( 'Education', 'godevs-portfolio' ),
                        'description' => __( 'Education and certification sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-testimonials',
                        'label'       => __( 'Testimonials', 'godevs-portfolio' ),
                        'description' => __( 'Client and peer endorsements.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-team',
                        'label'       => __( 'Team', 'godevs-portfolio' ),
                        'description' => __( 'Team grids and member profiles.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-pricing',
                        'label'       => __( 'Pricing', 'godevs-portfolio' ),
                        'description' => __( 'Pricing tables and plan comparisons.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-stats',
                        'label'       => __( 'Stats', 'godevs-portfolio' ),
                        'description' => __( 'Numerical highlights, statistics, and metric grids.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-blog',
                        'label'       => __( 'Blog', 'godevs-portfolio' ),
                        'description' => __( 'Post lists, featured posts, and magazine layouts.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-case-study',
                        'label'       => __( 'Case Study', 'godevs-portfolio' ),
                        'description' => __( 'Long-form case study sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-cta',
                        'label'       => __( 'CTA', 'godevs-portfolio' ),
                        'description' => __( 'Call-to-action bands and sections.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-contact',
                        'label'       => __( 'Contact', 'godevs-portfolio' ),
                        'description' => __( 'Contact sections and contact CTAs.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-header',
                        'label'       => __( 'Header', 'godevs-portfolio' ),
                        'description' => __( 'Site header variations.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-footer',
                        'label'       => __( 'Footer', 'godevs-portfolio' ),
                        'description' => __( 'Site footer variations.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-pages',
                        'label'       => __( 'Pages', 'godevs-portfolio' ),
                        'description' => __( 'Full-page compositions for landing and key pages.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-faq',
                        'label'       => __( 'FAQ', 'godevs-portfolio' ),
                        'description' => __( 'Frequently asked question sections using native Details blocks.', 'godevs-portfolio' ),
                ),
                array(
                        'slug'        => 'godevs-portfolio-demos',
                        'label'       => __( 'Demos', 'godevs-portfolio' ),
                        'description' => __( 'Ready-made portfolio websites - each a distinct composition of patterns and a chosen style variation. Insert one to start a new portfolio site instantly.', 'godevs-portfolio' ),
                ),
        );

        foreach ( $categories as $category ) {
                if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $category['slug'] ) ) {
                        register_block_pattern_category( $category['slug'], $category );
                }
        }
}
add_action( 'init', 'godevs_portfolio_register_pattern_categories' );

/**
 * Register block patterns from subdirectories of the patterns/ folder.
 *
 * WordPress core only auto-discovers patterns in the top-level patterns/
 * directory (via glob). Patterns in subdirectories (patterns/demos/,
 * patterns/services/, patterns/stats/, patterns/dynamic/) are NOT
 * auto-registered. This function recursively scans the patterns directory
 * and registers any pattern files that have a valid pattern header.
 *
 * Patterns already registered (by core or by an earlier call) are
 * skipped to avoid conflicts.
 *
 * @return void
 * @since 1.0.0
 */
function godevs_portfolio_register_subdirectory_patterns(): void {
        $registry  = WP_Block_Patterns_Registry::get_instance();
        $patterns_dir = get_template_directory() . '/patterns';
        $text_domain = 'godevs-portfolio';

        if ( ! is_dir( $patterns_dir ) ) {
                return;
        }

        // Recursively find all .php files in the patterns directory.
        $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator( $patterns_dir, FilesystemIterator::SKIP_DOTS ),
                RecursiveIteratorIterator::LEAVES_ONLY
        );

        $default_headers = array(
                'title'         => 'Title',
                'slug'          => 'Slug',
                'description'   => 'Description',
                'viewportWidth' => 'Viewport Width',
                'inserter'      => 'Inserter',
                'categories'    => 'Categories',
                'keywords'      => 'Keywords',
                'blockTypes'    => 'Block Types',
                'postTypes'     => 'Post Types',
                'templateTypes' => 'Template Types',
        );

        foreach ( $iterator as $file ) {
                // Only process .php files.
                if ( $file->getExtension() !== 'php' ) {
                        continue;
                }

                // Skip index.php (silence is golden).
                if ( $file->getFilename() === 'index.php' ) {
                        continue;
                }

                $file_path = $file->getPathname();
                $pattern   = get_file_data( $file_path, $default_headers );

                // Skip files without a slug (not a pattern).
                if ( empty( $pattern['slug'] ) ) {
                        continue;
                }

                // Skip if already registered (core auto-discovers top-level patterns).
                if ( $registry->is_registered( $pattern['slug'] ) ) {
                        continue;
                }

                // Validate slug format.
                if ( ! preg_match( '/^[A-Za-z0-9\/_-]+$/', $pattern['slug'] ) ) {
                        continue;
                }

                // Parse comma-separated properties.
                $properties_to_parse = array( 'categories', 'keywords', 'blockTypes', 'postTypes', 'templateTypes' );
                foreach ( $properties_to_parse as $property ) {
                        if ( ! empty( $pattern[ $property ] ) ) {
                                $pattern[ $property ] = array_filter( array_map( 'trim', explode( ',', $pattern[ $property ] ) ) );
                        } else {
                                unset( $pattern[ $property ] );
                        }
                }

                // Render the pattern file to capture its markup. The files are
                // PHP (they echo asset URLs), so the content must be executed
                // at registration time - a raw filePath would ship un-executed
                // PHP fragments inside the block JSON.
                ob_start();
                include $file_path; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped - pattern files output block markup only.
                $pattern['content'] = (string) ob_get_clean();

                // Translate title and description.
                $pattern['title'] = translate_with_gettext_context( $pattern['title'], 'Pattern title', $text_domain );
                if ( ! empty( $pattern['description'] ) ) {
                        $pattern['description'] = translate_with_gettext_context( $pattern['description'], 'Pattern description', $text_domain );
                }

                register_block_pattern( $pattern['slug'], $pattern );
        }
}
add_action( 'init', 'godevs_portfolio_register_subdirectory_patterns', 20 );
