<?php
/**
 * Test: templates exist.
 *
 * Verifies that every template declared in theme.json customTemplates has a
 * corresponding file in /templates/, every template part declared in
 * theme.json templateParts has a corresponding file in /parts/, and the
 * nine core templates required by the block theme hierarchy exist.
 *
 * @package GoDevs_Portfolio
 */

/**
 * @return array<int, array{0:bool, 1:string}>
 */
function test_templates_exist(): array {
	$results = array();
	$root    = dirname( __DIR__ );
	$json    = $root . '/theme.json';

	if ( ! file_exists( $json ) ) {
		$results[] = array( false, 'theme.json not found' );
		return $results;
	}

	$decoded = json_decode( (string) file_get_contents( $json ), true );
	if ( null === $decoded ) {
		$results[] = array( false, 'theme.json is not valid JSON' );
		return $results;
	}

	// 1. Nine core templates exist.
	$core_templates = array(
		'index',
		'home',
		'front-page',
		'page',
		'single',
		'singular',
		'archive',
		'search',
		'404',
	);
	foreach ( $core_templates as $tpl ) {
		$path = $root . '/templates/' . $tpl . '.html';
		$results[] = array(
			file_exists( $path ),
			"Required template missing: templates/$tpl.html",
		);
	}

	// 2. Every custom template in theme.json has a file.
	$custom = $decoded['customTemplates'] ?? array();
	foreach ( $custom as $entry ) {
		if ( ! isset( $entry['name'] ) ) {
			$results[] = array( false, 'customTemplates entry missing "name"' );
			continue;
		}
		$path = $root . '/templates/' . $entry['name'] . '.html';
		$results[] = array(
			file_exists( $path ),
			"Custom template declared in theme.json but file missing: templates/{$entry['name']}.html",
		);
	}

	// 3. Every template part in theme.json has a file.
	$parts = $decoded['templateParts'] ?? array();
	foreach ( $parts as $entry ) {
		if ( ! isset( $entry['name'] ) ) {
			$results[] = array( false, 'templateParts entry missing "name"' );
			continue;
		}
		$path = $root . '/parts/' . $entry['name'] . '.html';
		$results[] = array(
			file_exists( $path ),
			"Template part declared in theme.json but file missing: parts/{$entry['name']}.html",
		);
	}

	// 4. Every template starts with the header template part (except 404 which we allow but expect header too).
	$all_templates = glob( $root . '/templates/*.html' );
	foreach ( $all_templates as $path ) {
		$name = basename( $path );
		$src  = file_get_contents( $path );

		// Every template should reference header template part.
		$results[] = array(
			false !== strpos( $src, '"slug":"header"' ) || false !== strpos( $src, '"slug": "header"' ),
			"$name does not reference the header template part",
		);

		// Every template should reference footer template part.
		$results[] = array(
			false !== strpos( $src, '"slug":"footer"' ) || false !== strpos( $src, '"slug": "footer"' ),
			"$name does not reference the footer template part",
		);

		// Every template should wrap main content in main landmark.
		$results[] = array(
			false !== strpos( $src, '"tagName":"main"' ) || false !== strpos( $src, '"tagName": "main"' ),
			"$name does not wrap main content in a main landmark",
		);
	}

	return $results;
}
