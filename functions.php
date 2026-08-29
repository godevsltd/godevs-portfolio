<?php
/**
 * GoDevs Portfolio functions and definitions.
 *
 * This file is intentionally minimal. Most of the design system (palette,
 * typography, spacing, layout) is configured declaratively in theme.json.
 * The functions here only handle what theme.json cannot:
 *   - Theme version constant
 *   - Translation loading
 *   - Editor-style enqueue
 *   - Front-end asset enqueue (navigation JS, print CSS)
 *   - Graceful detection of the optional GoDevs Core plugin
 *
 * @package GoDevs_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version, bumped alongside CHANGELOG.md.
 */
if ( ! defined( 'GODEVS_PORTFOLIO_VERSION' ) ) {
	define( 'GODEVS_PORTFOLIO_VERSION', '0.1.0' );
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 *
 * Note: block templates, template parts, patterns, and style variations are
 * auto-discovered from their respective directories and need no PHP registration
 * when shipped as .html / .php files in a block theme.
 *
 * @link https://developer.wordpress.org/themes/block-themes/
 */
function godevs_portfolio_setup(): void {
	/*
	 * Make the theme available for translation.
	 * Translations should be placed in /languages/godevs-portfolio-<locale>.mo
	 * The .pot file shipped in /languages/ is the source template.
	 */
	load_theme_textdomain( 'godevs-portfolio', get_template_directory() . '/languages' );

	/*
	 * Core post-format support is intentionally NOT declared — the theme does
	 * not style post formats. Adding support we do not use would only pollute
	 * the post editor UI.
	 */

	/*
	 * Optional GoDevs Core plugin integration.
	 * If the plugin is active we expose a `godevs_core_active` flag and a
	 * `godevs_portfolio_core_active` action hook so the plugin can register
	 * its CPTs and blocks without coupling the theme to it.
	 *
	 * If the plugin is NOT active the theme continues to work normally —
	 * portfolio/services/testimonials are simply authored as regular pages
	 * and posts using the patterns shipped in /patterns/.
	 */
	if ( defined( 'GODEVS_CORE_VERSION' ) ) {
		define( 'GODEVS_PORTFOLIO_CORE_ACTIVE', true );
		/**
		 * Fires once GoDevs Core has been detected as active.
		 *
		 * @since 0.1.0
		 */
		do_action( 'godevs_portfolio_core_active' );
	} else {
		define( 'GODEVS_PORTFOLIO_CORE_ACTIVE', false );
	}
}

add_action( 'after_setup_theme', 'godevs_portfolio_setup' );

/**
 * Enqueues editor-side styles for the Site Editor and block editor.
 *
 * Only the minimal `editor.css` is loaded — theme.json handles the bulk of
 * editor styling. The file is registered with the editor handle and a cache
 * buster derived from the file mtime to avoid CDN staleness.
 */
function godevs_portfolio_editor_assets(): void {
	$editor_css = get_template_directory() . '/assets/css/editor.css';
	if ( file_exists( $editor_css ) ) {
		wp_enqueue_style(
			'godevs-portfolio-editor',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			(string) filemtime( $editor_css )
		);
	}
}

add_action( 'enqueue_block_editor_assets', 'godevs_portfolio_editor_assets' );

/**
 * Enqueues front-end assets.
 *
 * WordPress automatically enqueues the styles generated from theme.json, so
 * we only enqueue a tiny navigation script and print styles here. We avoid
 * bundling a CSS framework; the front-end styling comes almost entirely from
 * theme.json.
 */
function godevs_portfolio_assets(): void {
	$nav_js = get_template_directory() . '/assets/js/navigation.js';
	if ( file_exists( $nav_js ) ) {
		wp_enqueue_script(
			'godevs-portfolio-navigation',
			get_template_directory_uri() . '/assets/js/navigation.js',
			array(),
			(string) filemtime( $nav_js ),
			array( 'strategy' => 'defer', 'in_footer' => true )
		);
	}

	$print_css = get_template_directory() . '/assets/css/print.css';
	if ( file_exists( $print_css ) ) {
		wp_enqueue_style(
			'godevs-portfolio-print',
			get_template_directory_uri() . '/assets/css/print.css',
			array(),
			(string) filemtime( $print_css ),
			'print'
		);
	}
}

add_action( 'wp_enqueue_scripts', 'godevs_portfolio_assets' );

/**
 * Preloads locally-hosted fonts to improve LCP.
 *
 * The font files in /assets/fonts/ are bundled with the theme and licensed
 * under the SIL Open Font License (Inter by Rasmus Andersson, Newsreader by
 * Production Type). See /assets/fonts/README.md for license details.
 */
function godevs_portfolio_preload_fonts(): void {
	$fonts = array(
		'inter-400.woff2'  => 'font/woff2',
		'inter-500.woff2'  => 'font/woff2',
		'newsreader-500.woff2' => 'font/woff2',
	);

	foreach ( $fonts as $filename => $type ) {
		$path = get_template_directory() . '/assets/fonts/' . $filename;
		if ( file_exists( $path ) ) {
			echo '<link rel="preload" href="' . esc_url( get_template_directory_uri() . '/assets/fonts/' . $filename ) . '" as="font" type="' . esc_attr( $type ) . '" crossorigin>' . "\n";
		}
	}
}

add_action( 'wp_head', 'godevs_portfolio_preload_fonts', 1 );

/**
 * Adds a `has-core` body class when GoDevs Core is active so templates and
 * patterns can conditionally render plugin-backed blocks.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function godevs_portfolio_body_class( array $classes ): array {
	if ( GODEVS_PORTFOLIO_CORE_ACTIVE ) {
		$classes[] = 'godevs-core-active';
	} else {
		$classes[] = 'godevs-core-inactive';
	}
	return $classes;
}

add_filter( 'body_class', 'godevs_portfolio_body_class' );
