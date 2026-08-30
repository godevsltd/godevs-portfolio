<?php
/**
 * Demo registry — loads demo metadata from the existing pattern files.
 *
 * Each demo is already registered as a WordPress block pattern in
 * patterns/demos/*.php with metadata in the PHP docblock:
 *   - Title
 *   - Slug
 *   - Description
 *   - Categories
 *   - Keywords
 *   - Viewport Width
 *
 * This registry extracts that metadata and augments it with demo-specific
 * properties:
 *   - name            (display name)
 *   - slug            (pattern slug)
 *   - category        (extracted from the Categories header)
 *   - description     (from the Description header)
 *   - style           (extracted from the Description "Recommended style variation: X" suffix)
 *   - pages           (recommended pages for this demo — derived from category)
 *   - preview         (URL to the demo preview — uses the block preview endpoint)
 *
 * The registry is data-driven — adding a new demo pattern file in
 * patterns/demos/ automatically adds it to the registry. No hardcoded
 * demo UI is needed.
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Recommended pages per demo category.
 *
 * Used by the importer when the user selects "Starter Import" — the
 * importer creates these pages and populates the homepage with the
 * demo's pattern markup.
 *
 * Categories are matched by the demo's first Categories header value.
 *
 * @return array<string,string[]> Map of category slug → page slugs.
 */
function godevs_portfolio_demo_pages_per_category(): array {
	return array(
		'godevs-portfolio-demos-developer'    => array( 'home', 'about', 'work', 'journal', 'contact' ),
		'godevs-portfolio-demos-designer'    => array( 'home', 'work', 'about', 'services', 'case-studies', 'contact' ),
		'godevs-portfolio-demos-creative'    => array( 'home', 'work', 'about', 'contact' ),
		'godevs-portfolio-demos-photography'  => array( 'home', 'portfolio', 'about', 'journal', 'contact' ),
		'godevs-portfolio-demos-agency'      => array( 'home', 'work', 'services', 'about', 'contact' ),
		'godevs-portfolio-demos-business'    => array( 'home', 'about', 'services', 'insights', 'contact' ),
		'godevs-portfolio-demos-architecture' => array( 'home', 'work', 'about', 'services', 'contact' ),
		'godevs-portfolio-demos-personal'    => array( 'home', 'about', 'work', 'journal', 'contact' ),
		'godevs-portfolio-demos-education'  => array( 'home', 'about', 'research', 'teaching', 'contact' ),
		'godevs-portfolio-demos-lifestyle'   => array( 'home', 'about', 'work', 'journal', 'contact' ),
		'godevs-portfolio-demos-specialized' => array( 'home', 'about', 'work', 'contact' ),
	);
}

/**
 * Get the list of all demos.
 *
 * Reads every PHP file in patterns/demos/, extracts the pattern metadata
 * from the docblock, and returns an array of demo definitions.
 *
 * The result is cached for the duration of the request.
 *
 * @return array<int,array> List of demo definitions.
 */
function godevs_portfolio_get_demos(): array {
	static $demos = null;
	if ( null !== $demos ) {
		return $demos;
	}

	$demos_dir = get_template_directory() . '/patterns/demos';
	if ( ! is_dir( $demos_dir ) ) {
		$demos = array();
		return $demos;
	}

	$demos = array();
	foreach ( glob( $demos_dir . '/*.php' ) as $file ) {
		$demo = godevs_portfolio_parse_demo_file( $file );
		if ( $demo ) {
			$demos[] = $demo;
		}
	}

	// Sort by name for predictable display.
	usort(
		$demos,
		static function ( $a, $b ) {
			return strcmp( $a['name'], $b['name'] );
		}
	);

	return $demos;
}

/**
 * Parse a single demo pattern file.
 *
 * Extracts metadata from the PHP docblock and augments with demo-specific
 * properties (category, recommended style, recommended pages).
 *
 * @param string $file Absolute path to the demo pattern PHP file.
 * @return array|null Demo definition, or null if the file is invalid.
 */
function godevs_portfolio_parse_demo_file( string $file ): ?array {
	$contents = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents — reading a theme file, not user input.
	if ( false === $contents ) {
		return null;
	}

	// Extract the docblock.
	if ( ! preg_match( '/\/\*\*(.*?)\*\//s', $contents, $m ) ) {
		return null;
	}
	$doc = $m[1];

	$meta = array();
	foreach ( explode( "\n", $doc ) as $line ) {
		if ( preg_match( '/^\s*\*\s*(\w+)\s*:\s*(.*)$/', $line, $m ) ) {
			$key = $m[1];
			$val = trim( $m[2] );
			if ( isset( $meta[ $key ] ) ) {
				if ( ! is_array( $meta[ $key ] ) ) {
					$meta[ $key ] = array( $meta[ $key ] );
				}
				$meta[ $key ][] = $val;
			} else {
				$meta[ $key ] = $val;
			}
		}
	}

	if ( empty( $meta['Slug'] ) || empty( $meta['Title'] ) ) {
		return null;
	}

	// Title format: "Demo — <Name> (<Category>)"
	// Extract name and category from the title.
	$title   = $meta['Title'];
	$name    = $title;
	$cat_raw = '';
	if ( preg_match( '/^Demo\s+[-—]\s+(.+?)\s*\(([^)]+)\)\s*$/', $title, $m ) ) {
		$name    = $m[1];
		$cat_raw = $m[2];
	}

	// Categories: extract first one (used for filtering).
	$categories_raw = $meta['Categories'] ?? array();
	if ( ! is_array( $categories_raw ) ) {
		$categories_raw = array( $categories_raw );
	}
	$first_cat = '';
	foreach ( $categories_raw as $c ) {
		foreach ( explode( ',', $c ) as $part ) {
			$part = trim( $part );
			if ( $part ) {
				$first_cat = $part;
				break 2;
			}
		}
	}

	// Recommended style variation — extract from Description suffix.
	$description = $meta['Description'] ?? '';
	$style       = '';
	if ( preg_match( '/Recommended style variation:\s*([A-Za-z]+)\.?/i', $description, $m ) ) {
		$style = ucfirst( strtolower( $m[1] ) );
	}

	// Recommended pages — based on the category suffix.
	$pages = array( 'home', 'about', 'work', 'contact' ); // default
	$cat_to_pages = godevs_portfolio_demo_pages_per_category();
	// Demo categories use the slug suffix (developer/designer/...) — extract.
	$category_suffix = '';
	if ( preg_match( '/-([a-z]+)$/', $first_cat, $m ) ) {
		$category_suffix = $m[1];
	}
	if ( isset( $cat_to_pages[ 'godevs-portfolio-demos-' . $category_suffix ] ) ) {
		$pages = $cat_to_pages[ 'godevs-portfolio-demos-' . $category_suffix ];
	}

	// Preview URL — uses the WordPress pattern preview endpoint.
	$slug     = $meta['Slug'];
	$basename = basename( $file, '.php' );

	return array(
		'id'          => $basename,                              // demo ID (filename without .php)
		'name'        => $name,                                   // display name
		'slug'        => $slug,                                   // pattern slug
		'category'    => $cat_raw ?: $category_suffix ?: 'demo',  // category label
		'cat_slug'    => $first_cat,                              // category slug
		'description' => $description,
		'style'       => $style,                                  // recommended style variation
		'pages'       => $pages,                                  // recommended pages
		'file'        => $file,                                   // absolute file path
		'preview_url' => add_query_arg(
			array(
				'godevs_preview' => $basename,
				'_wpnonce'        => wp_create_nonce( 'godevs_preview_' . $basename ),
			),
			home_url( '/' )
		),
	);
}

/**
 * Get a single demo by ID.
 *
 * @param string $demo_id Demo ID (filename without .php).
 * @return array|null Demo definition, or null if not found.
 */
function godevs_portfolio_get_demo( string $demo_id ): ?array {
	$demo_id = sanitize_file_name( $demo_id );
	foreach ( godevs_portfolio_get_demos() as $demo ) {
		if ( $demo['id'] === $demo_id ) {
			return $demo;
		}
	}
	return null;
}

/**
 * Get the list of distinct demo categories for filtering.
 *
 * @return array<string,string> Map of category slug → category label.
 */
function godevs_portfolio_get_demo_categories(): array {
	$cats = array();
	foreach ( godevs_portfolio_get_demos() as $demo ) {
		$slug = $demo['cat_slug'];
		$label = $demo['category'];
		if ( $slug && ! isset( $cats[ $slug ] ) ) {
			$cats[ $slug ] = $label;
		}
	}
	return $cats;
}

/**
 * Get the list of distinct recommended style variations for filtering.
 *
 * @return array<string> List of style names.
 */
function godevs_portfolio_get_demo_styles(): array {
	$styles = array();
	foreach ( godevs_portfolio_get_demos() as $demo ) {
		if ( $demo['style'] && ! in_array( $demo['style'], $styles, true ) ) {
			$styles[] = $demo['style'];
		}
	}
	sort( $styles );
	return $styles;
}
