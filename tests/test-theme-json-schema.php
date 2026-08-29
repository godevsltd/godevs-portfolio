<?php
/**
 * Test: theme.json schema validation.
 *
 * Verifies that theme.json and every style variation in /styles/ are valid
 * JSON, declare the correct schema version, and ship the required settings.
 * Does not validate against the full WP schema (would require a schema
 * file); instead it checks the structural requirements the v0.1 theme
 * promises in docs/FEATURE-SPECIFICATION.md.
 *
 * @package GoDevs_Portfolio
 */

/**
 * @return array<int, array{0:bool, 1:string}>
 */
function test_theme_json_schema(): array {
	$results = array();
	$root    = dirname( __DIR__ );
	$file    = $root . '/theme.json';

	// 1. File exists.
	$exists = file_exists( $file );
	$results[] = array(
		$exists,
		'theme.json not found at ' . $file,
	);
	if ( ! $exists ) {
		return $results;
	}

	// 2. Valid JSON.
	$decoded = json_decode( (string) file_get_contents( $file ), true );
	$results[] = array(
		null !== $decoded && JSON_ERROR_NONE === json_last_error(),
		'theme.json is not valid JSON: ' . json_last_error_msg(),
	);
	if ( null === $decoded ) {
		return $results;
	}

	// 3. Version 2.
	$results[] = array(
		isset( $decoded['version'] ) && 2 === $decoded['version'],
		'theme.json must declare "version": 2',
	);

	// 4. Color palette present and has at least 11 entries.
	$palette = $decoded['settings']['color']['palette'] ?? array();
	$results[] = array(
		count( $palette ) >= 11,
		'theme.json color palette must have at least 11 entries (found ' . count( $palette ) . ')',
	);

	// 5. Required palette slugs present.
	$required_slugs = array( 'primary', 'secondary', 'accent', 'background', 'surface', 'text', 'muted', 'border', 'success', 'warning', 'error' );
	$have_slugs     = array_column( $palette, 'slug' );
	foreach ( $required_slugs as $slug ) {
		$results[] = array(
			in_array( $slug, $have_slugs, true ),
			"theme.json palette missing required slug: $slug",
		);
	}

	// 6. Font families present (body, heading).
	$families = $decoded['settings']['typography']['fontFamilies'] ?? array();
	$have_fam = array_column( $families, 'slug' );
	$results[] = array(
		in_array( 'body', $have_fam, true ),
		'theme.json missing font family with slug "body"',
	);
	$results[] = array(
		in_array( 'heading', $have_fam, true ),
		'theme.json missing font family with slug "heading"',
	);

	// 7. Font sizes present (at least 8).
	$sizes = $decoded['settings']['typography']['fontSizes'] ?? array();
	$results[] = array(
		count( $sizes ) >= 8,
		'theme.json fontSizes must have at least 8 entries (found ' . count( $sizes ) . ')',
	);

	// 8. Spacing sizes present (at least 8).
	$spacing = $decoded['settings']['spacing']['spacingSizes'] ?? array();
	$results[] = array(
		count( $spacing ) >= 8,
		'theme.json spacingSizes must have at least 8 entries (found ' . count( $spacing ) . ')',
	);

	// 9. Layout contentSize and wideSize present.
	$results[] = array(
		isset( $decoded['settings']['layout']['contentSize'] ) && isset( $decoded['settings']['layout']['wideSize'] ),
		'theme.json layout must declare contentSize and wideSize',
	);

	// 10. Template parts declared.
	$parts = $decoded['templateParts'] ?? array();
	$have_parts = array_column( $parts, 'name' );
	foreach ( array( 'header', 'footer', 'mobile-menu' ) as $part ) {
		$results[] = array(
			in_array( $part, $have_parts, true ),
			"theme.json templateParts missing entry for: $part",
		);
	}

	// 11. Custom templates declared.
	$templates = $decoded['customTemplates'] ?? array();
	$have_tpl  = array_column( $templates, 'name' );
	$results[] = array(
		in_array( 'page-no-title', $have_tpl, true ),
		'theme.json customTemplates missing "page-no-title" entry',
	);

	// 12. Element styles present (link, button, heading, h1).
	$elements = $decoded['styles']['elements'] ?? array();
	foreach ( array( 'link', 'button', 'heading', 'h1' ) as $el ) {
		$results[] = array(
			isset( $elements[ $el ] ),
			"theme.json styles.elements missing entry for: $el",
		);
	}

	// 13. Style variations in /styles/.
	$styles_dir = $root . '/styles';
	$variations = glob( $styles_dir . '/*.json' );
	$results[] = array(
		count( $variations ) >= 2,
		'/styles/ must contain at least 2 style variations (found ' . count( $variations ) . ')',
	);

	if ( is_array( $variations ) ) {
		foreach ( $variations as $variation ) {
			$decoded_v = json_decode( (string) file_get_contents( $variation ), true );
			$vname = basename( $variation );
			$results[] = array(
				null !== $decoded_v,
				"$vname is not valid JSON: " . json_last_error_msg(),
			);
			if ( null === $decoded_v ) {
				continue;
			}
			$results[] = array(
				isset( $decoded_v['version'] ) && 2 === $decoded_v['version'],
				"$vname must declare version: 2",
			);
			$results[] = array(
				isset( $decoded_v['title'] ) && is_string( $decoded_v['title'] ) && '' !== $decoded_v['title'],
				"$vname must declare a non-empty title",
			);
		}
	}

	return $results;
}
