<?php
/**
 * Demo import tracker.
 *
 * Records what the importer created, so that:
 *   - Duplicate imports can be detected and warned about.
 *   - Imports can be cleanly removed (only deletes content created by the importer).
 *
 * Tracking uses a single WordPress option `godevs_portfolio_imports`:
 *
 *   array(
 *       '<demo_id>' => array(
 *           'demo_id'      => 'atelier',
 *           'demo_name'    => 'Atelier',
 *           'imported_at'  => '2024-08-30 12:34:56',
 *           'import_version' => '0.4.0',
 *           'mode'         => 'starter' | 'safe',
 *           'page_ids'     => array( 12, 34, 56 ),
 *           'nav_menu_id'  => 7,
 *           'homepage_id'  => 12,
 *           'style_applied' => 'Dark',
 *       ),
 *       ...
 *   )
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Option key under which imports are stored.
 */
define( 'GODEVS_PORTFOLIO_TRACKER_OPTION', 'godevs_portfolio_imports' );

/**
 * Get all tracked imports.
 *
 * @return array<string,array> Map of demo_id → import metadata.
 */
function godevs_portfolio_tracker_get_all(): array {
	$imports = get_option( GODEVS_PORTFOLIO_TRACKER_OPTION, array() );
	if ( ! is_array( $imports ) ) {
		return array();
	}
	return $imports;
}

/**
 * Get the list of imported demo IDs.
 *
 * @return string[] List of demo IDs that have been imported.
 */
function godevs_portfolio_tracker_get_imported(): array {
	$imports = godevs_portfolio_tracker_get_all();
	return array_keys( $imports );
}

/**
 * Get a single import record by demo ID.
 *
 * @param string $demo_id Demo ID.
 * @return array|null Import record, or null if not imported.
 */
function godevs_portfolio_tracker_get( string $demo_id ): ?array {
	$imports = godevs_portfolio_tracker_get_all();
	return $imports[ $demo_id ] ?? null;
}

/**
 * Check if a demo has already been imported.
 *
 * @param string $demo_id Demo ID.
 * @return bool True if imported.
 */
function godevs_portfolio_tracker_is_imported( string $demo_id ): bool {
	return null !== godevs_portfolio_tracker_get( $demo_id );
}

/**
 * Record a successful import.
 *
 * @param string $demo_id      Demo ID.
 * @param string $demo_name    Demo display name.
 * @param string $mode         Import mode ('starter' or 'safe').
 * @param array  $page_ids     List of created page IDs.
 * @param int    $nav_menu_id  Created navigation menu ID (0 if none).
 * @param int    $homepage_id  Set-as-homepage page ID (0 if not set).
 * @param string $style_applied Style variation name applied (empty if none).
 * @return bool True on success.
 */
function godevs_portfolio_tracker_record(
	string $demo_id,
	string $demo_name,
	string $mode,
	array $page_ids,
	int $nav_menu_id,
	int $homepage_id,
	string $style_applied
): bool {
	$imports = godevs_portfolio_tracker_get_all();

	$imports[ $demo_id ] = array(
		'demo_id'        => $demo_id,
		'demo_name'      => $demo_name,
		'imported_at'    => current_time( 'mysql' ),
		'import_version' => GODEVS_PORTFOLIO_VERSION,
		'mode'           => $mode,
		'page_ids'       => array_values( $page_ids ),
		'nav_menu_id'    => $nav_menu_id,
		'homepage_id'    => $homepage_id,
		'style_applied'  => $style_applied,
	);

	return update_option( GODEVS_PORTFOLIO_TRACKER_OPTION, $imports, false );
}

/**
 * Remove an import record (and optionally delete the imported content).
 *
 * @param string $demo_id      Demo ID.
 * @param bool   $delete_content Whether to delete the imported pages, navigation, etc.
 * @return array{success: bool, deleted: array, errors: array} Result summary.
 */
function godevs_portfolio_tracker_remove( string $demo_id, bool $delete_content = false ): array {
	$record = godevs_portfolio_tracker_get( $demo_id );
	if ( null === $record ) {
		return array(
			'success' => false,
			'deleted' => array(),
			'errors'  => array( __( 'Demo is not imported.', 'godevs-portfolio' ) ),
		);
	}

	$deleted = array( 'pages' => 0, 'nav_menu' => 0, 'homepage_reset' => false );
	$errors  = array();

	if ( $delete_content ) {
		// Delete imported pages.
		foreach ( $record['page_ids'] as $page_id ) {
			$page_id = absint( $page_id );
			if ( $page_id && get_post( $page_id ) ) {
				// Use wp_trash_post instead of wp_delete_post to be safe —
				// user can restore from trash if needed.
				$result = wp_trash_post( $page_id );
				if ( false === $result ) {
					$errors[] = sprintf(
						/* translators: %d: page ID. */
						__( 'Could not trash page ID %d.', 'godevs-portfolio' ),
						$page_id
					);
				} else {
					++$deleted['pages'];
				}
			}
		}

		// Delete imported navigation menu.
		if ( ! empty( $record['nav_menu_id'] ) ) {
			$menu_id = absint( $record['nav_menu_id'] );
			if ( $menu_id && is_nav_menu( $menu_id ) ) {
				$result = wp_delete_nav_menu( $menu_id );
				if ( is_wp_error( $result ) ) {
					$errors[] = $result->get_error_message();
				} else {
					++$deleted['nav_menu'];
				}
			}
		}

		// Reset homepage if it was set by the importer.
		if ( ! empty( $record['homepage_id'] ) ) {
			$current_home = (int) get_option( 'page_on_front', 0 );
			if ( $current_home === absint( $record['homepage_id'] ) ) {
				update_option( 'show_on_front', 'posts' );
				update_option( 'page_on_front', 0 );
				$deleted['homepage_reset'] = true;
			}
		}

		// Reset the active style variation if it was applied by the importer.
		if ( ! empty( $record['style_applied'] ) ) {
			$user_id = get_current_user_id();
			$current_style = get_user_meta( $user_id, 'godevs-portfolio-applied-style', true );
			if ( $current_style === $record['style_applied'] ) {
				delete_user_meta( $user_id, 'godevs-portfolio-applied-style' );
			}
		}
	}

	// Remove the import record from the tracker.
	$imports = godevs_portfolio_tracker_get_all();
	unset( $imports[ $demo_id ] );
	update_option( GODEVS_PORTFOLIO_TRACKER_OPTION, $imports, false );

	return array(
		'success' => true,
		'deleted' => $deleted,
		'errors'  => $errors,
	);
}
