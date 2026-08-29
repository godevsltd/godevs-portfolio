<?php
/**
 * GoDevs Portfolio test runner.
 *
 * Runs all test files in this directory and prints a PASS / FAIL summary.
 * Tests are designed to run standalone (without WordPress core) so they
 * can be executed via `php tests/run.php` in any environment.
 *
 * Exit codes:
 *   0 — all tests passed.
 *   1 — one or more tests failed.
 *
 * @package GoDevs_Portfolio
 */

if ( 'cli' !== php_sapi_name() ) {
	fwrite( STDERR, "Run this script from the CLI: php tests/run.php\n" );
	exit( 1 );
}

$root = dirname( __DIR__ );
$tests_dir = __DIR__;

// Collect test files (any file matching test-*.php).
$test_files = glob( $tests_dir . '/test-*.php' );
sort( $test_files );

if ( empty( $test_files ) ) {
	fwrite( STDERR, "No test files found.\n" );
	exit( 1 );
}

$total = 0;
$passed = 0;
$failed = 0;
$failures = array();

foreach ( $test_files as $file ) {
	$total++;
	$name = basename( $file, '.php' );
	$name = substr( $name, 5 ); // strip "test-".

	// Each test file defines a function named test_<name>() that returns
	// an array of [pass:bool, message:string] entries.
	require $file;

	$func = 'test_' . str_replace( '-', '_', $name );
	if ( ! function_exists( $func ) ) {
		$failures[] = "$name — test function $func not defined";
		$failed++;
		continue;
	}

	$results = call_user_func( $func );
	$test_failed = false;
	foreach ( $results as $result ) {
		if ( ! $result[0] ) {
			$test_failed = true;
			$failures[] = "$name — " . $result[1];
		}
	}

	if ( $test_failed ) {
		$failed++;
		echo "FAIL  test-$name\n";
	} else {
		$passed++;
		echo "PASS  test-$name\n";
	}
}

echo "\n";
echo "Results: $passed passed, $failed failed, $total total\n";

if ( $failed > 0 ) {
	echo "\nFailures:\n";
	foreach ( $failures as $failure ) {
		echo "  - $failure\n";
	}
	exit( 1 );
}

exit( 0 );
