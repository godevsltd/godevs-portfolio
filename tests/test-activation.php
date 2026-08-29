<?php
/**
 * Test: activation.
 *
 * Verifies that functions.php parses without PHP errors and that the
 * theme's setup function and constants are declared as expected. This
 * test does not require WordPress core; it relies on PHP's tokenizer
 * and a small set of reflection-style checks.
 *
 * @package GoDevs_Portfolio
 */

/**
 * @return array<int, array{0:bool, 1:string}>
 */
function test_activation(): array {
	$results = array();
	$root    = dirname( __DIR__ );
	$file    = $root . '/functions.php';

	// 1. File exists.
	$results[] = array(
		file_exists( $file ),
		'functions.php not found at ' . $file,
	);

	// 2. PHP syntax valid (lint via php -l).
	if ( file_exists( $file ) ) {
		$lint = shell_exec( 'php -l ' . escapeshellarg( $file ) . ' 2>&1' );
		$ok   = false !== strpos( (string) $lint, 'No syntax errors detected' );
		$results[] = array(
			$ok,
			'functions.php has PHP syntax errors: ' . trim( (string) $lint ),
		);
	}

	// 3. Theme version constant defined.
	$src = file_get_contents( $file );
	$results[] = array(
		false !== strpos( $src, "define( 'GODEVS_PORTFOLIO_VERSION'" ) || false !== strpos( $src, 'define( "GODEVS_PORTFOLIO_VERSION"' ),
		'GODEVS_PORTFOLIO_VERSION constant not defined in functions.php',
	);

	// 4. Setup function declared.
	$results[] = array(
		false !== strpos( $src, 'function godevs_portfolio_setup' ),
		'godevs_portfolio_setup() function not declared in functions.php',
	);

	// 5. Setup hooked to after_setup_theme.
	$results[] = array(
		false !== strpos( $src, "add_action( 'after_setup_theme', 'godevs_portfolio_setup'" ) || false !== strpos( $src, 'add_action( "after_setup_theme", "godevs_portfolio_setup"' ),
		'godevs_portfolio_setup() not hooked to after_setup_theme',
	);

	// 6. Text domain loaded.
	$results[] = array(
		false !== strpos( $src, "load_theme_textdomain( 'godevs-portfolio'" ) || false !== strpos( $src, 'load_theme_textdomain( "godevs-portfolio"' ),
		'load_theme_textdomain() not called with the godevs-portfolio text domain',
	);

	// 7. Plugin detection present.
	$results[] = array(
		false !== strpos( $src, 'GODEVS_CORE_VERSION' ),
		'GoDevs Core plugin detection (GODEVS_CORE_VERSION constant) not present',
	);

	// 8. GODEVS_PORTFOLIO_CORE_ACTIVE defined.
	$results[] = array(
		false !== strpos( $src, "define( 'GODEVS_PORTFOLIO_CORE_ACTIVE'" ) || false !== strpos( $src, 'define( "GODEVS_PORTFOLIO_CORE_ACTIVE"' ),
		'GODEVS_PORTFOLIO_CORE_ACTIVE constant not defined in functions.php',
	);

	// 9. No forbidden functions.
	$forbidden = array( 'eval(', 'base64_decode(', 'file_get_contents( "http', 'wp_remote_get(', 'wp_remote_post(' );
	foreach ( $forbidden as $bad ) {
		$results[] = array(
			false === strpos( $src, $bad ),
			"Forbidden pattern '$bad' found in functions.php",
		);
	}

	// 10. No external URL references.
	$external_pattern = '/https?:\/\/(?!www\.w3\.org|schemas\.wp\.org|developer\.wordpress\.org|make\.wordpress\.org|www\.gnu\.org)/';
	$matches_external = preg_match( $external_pattern, $src );
	$results[] = array(
		1 !== $matches_external,
		'External URL reference found in functions.php (allowed: w3.org, schemas.wp.org, wordpress.org docs)',
	);

	// 11. Style.css exists and has the WordPress theme header.
	$style_css = $root . '/style.css';
	$style_ok = file_exists( $style_css );
	$results[] = array(
		$style_ok,
		'style.css not found at ' . $style_css,
	);
	if ( $style_ok ) {
		$style_src = file_get_contents( $style_css );
		$results[] = array(
			false !== strpos( $style_src, 'Theme Name: GoDevs Portfolio' ),
			'style.css missing "Theme Name: GoDevs Portfolio" header',
		);
		$results[] = array(
			false !== strpos( $style_src, 'Text Domain: godevs-portfolio' ),
			'style.css missing "Text Domain: godevs-portfolio" header',
		);
		$results[] = array(
			false !== strpos( $style_css, 'License: GNU General Public License v2 or later' ),
			'style.css missing GPL v2+ license header',
		);
	}

	return $results;
}
