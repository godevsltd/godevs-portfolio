<?php
/**
 * Test: pattern smoke.
 *
 * Verifies that every PHP file in /patterns/ has a valid file header with
 * at least Title and Slug declared, that the slug is prefixed with
 * "godevs-portfolio/", and that the file parses without PHP syntax
 * errors. Also verifies the file contains at least one block comment
 * (`<!-- wp:`) so the pattern actually ships markup.
 *
 * @package GoDevs_Portfolio
 */

/**
 * @return array<int, array{0:bool, 1:string}>
 */
function test_pattern_smoke(): array {
	$results = array();
	$root    = dirname( __DIR__ );
	$dir     = $root . '/patterns';

	$files = glob( $dir . '/*.php' );

	// 1. At least 8 patterns shipped.
	$results[] = array(
		count( $files ) >= 8,
		'/patterns/ must contain at least 8 pattern files (found ' . count( $files ) . ')',
	);

	foreach ( $files as $file ) {
		$name = basename( $file );

		// 2. PHP syntax valid.
		$lint = shell_exec( 'php -l ' . escapeshellarg( $file ) . ' 2>&1' );
		$results[] = array(
			false !== strpos( (string) $lint, 'No syntax errors detected' ),
			"$name has PHP syntax errors: " . trim( (string) $lint ),
		);

		$src = file_get_contents( $file );

		// 3. Title header.
		$results[] = array(
			1 === preg_match( '/\*\s+Title:\s+.+/', $src ),
			"$name missing 'Title:' header",
		);

		// 4. Slug header.
		$results[] = array(
			1 === preg_match( '/\*\s+Slug:\s+.+/', $src ),
			"$name missing 'Slug:' header",
		);

		// 5. Slug prefixed with godevs-portfolio/.
		if ( 1 === preg_match( '/\*\s+Slug:\s+([^\s\n]+)/', $src, $matches ) ) {
			$slug = trim( $matches[1] );
			$results[] = array(
				0 === strpos( $slug, 'godevs-portfolio/' ),
				"$name slug '$slug' must be prefixed with 'godevs-portfolio/'",
			);
		}

		// 6. At least one block comment.
		$results[] = array(
			false !== strpos( $src, '<!-- wp:' ),
			"$name must contain at least one block comment (<!-- wp:)",
		);

		// 7. Categories header.
		$results[] = array(
			1 === preg_match( '/\*\s+Categories:\s+.+/', $src ),
			"$name missing 'Categories:' header",
		);

		// 8. No forbidden functions.
		$forbidden = array( 'eval(', 'base64_decode(', 'file_get_contents( "http', 'wp_remote_get(', 'wp_remote_post(' );
		foreach ( $forbidden as $bad ) {
			$results[] = array(
				false === strpos( $src, $bad ),
				"$name contains forbidden pattern: $bad",
			);
		}
	}

	return $results;
}
