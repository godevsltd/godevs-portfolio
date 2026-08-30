<?php
/**
 * GoDevs Portfolio functions and definitions.
 *
 * @package GoDevs_Portfolio
 * @since   0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access.
}

/**
 * Theme version.
 */
if ( ! defined( 'GODEVS_PORTFOLIO_VERSION' ) ) {
        define( 'GODEVS_PORTFOLIO_VERSION', '0.8.0' );
}

/**
 * Theme setup.
 *
 * Block themes enable most theme supports automatically. We register
 * the few that are not auto-enabled and that this theme relies on.
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_setup(): void {
        // Make theme available for translation.
        load_theme_textdomain( 'godevs-portfolio', get_template_directory() . '/languages' );

        // Add support for <title> tag output by WordPress core.
        add_theme_support( 'title-tag' );

        // Add support for automatic feed links in <head>.
        add_theme_support( 'automatic-feed-links' );

        // Add support for responsive embedded content (embeds wrap in container).
        add_theme_support( 'responsive-embeds' );

        // Add support for HTML5 markup on the listed elements.
        add_theme_support(
                'html5',
                array(
                        'search-form',
                        'comment-form',
                        'comment-list',
                        'gallery',
                        'caption',
                        'style',
                        'script',
                )
        );

        // Add support for editor styles — assets/css/theme.css is loaded in the editor.
        add_editor_style( 'assets/css/theme.css' );

        // Register nav menus used by core/navigation (location-based).
        register_nav_menus(
                array(
                        'primary' => __( 'Primary Menu', 'godevs-portfolio' ),
                        'footer'  => __( 'Footer Menu', 'godevs-portfolio' ),
                )
        );
}
add_action( 'after_setup_theme', 'godevs_portfolio_setup' );

/**
 * Enqueue front-end styles.
 *
 * WordPress core enqueues the block styles and the styles emitted from theme.json.
 * We enqueue a small supplementary stylesheet for items theme.json cannot express
 * (focus rings, reduced motion overrides, custom block style classes).
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_enqueue_styles(): void {
        // Supplementary styles (focus rings, reduced motion, block style classes).
        $theme_css_path = get_template_directory() . '/assets/css/theme.css';
        $theme_css_ver  = file_exists( $theme_css_path ) ? (string) filemtime( $theme_css_path ) : GODEVS_PORTFOLIO_VERSION;

        wp_enqueue_style(
                'godevs-portfolio-theme',
                get_template_directory_uri() . '/assets/css/theme.css',
                array(),
                $theme_css_ver
        );

        // Theme stylesheet (the WordPress theme header file — holds no CSS in Phase 1).
        wp_enqueue_style(
                'godevs-portfolio-style',
                get_stylesheet_uri(),
                array(),
                GODEVS_PORTFOLIO_VERSION
        );
}
add_action( 'wp_enqueue_scripts', 'godevs_portfolio_enqueue_styles' );

/**
 * Include theme components.
 *
 * Pattern category registration, block style registration, and any future
 * theme components live in the inc/ directory. They are included here so
 * functions.php remains small and navigable.
 */
require_once get_template_directory() . '/inc/block-patterns.php';
require_once get_template_directory() . '/inc/block-styles.php';

// Dynamic Content Management System (Phase 8) — CPTs, taxonomies, meta fields.
require_once get_template_directory() . '/inc/content/cpt.php';
require_once get_template_directory() . '/inc/content/taxonomies.php';
require_once get_template_directory() . '/inc/content/meta-fields.php';

// Demo Import System (Phase 4) — admin UI, importer, tracker.
// Loaded only in admin context to keep the front end lightweight.
if ( is_admin() ) {
        require_once get_template_directory() . '/inc/demo-registry.php';
        require_once get_template_directory() . '/inc/demo-tracker.php';
        require_once get_template_directory() . '/inc/demo-importer.php';
        require_once get_template_directory() . '/inc/theme-settings.php';
}
