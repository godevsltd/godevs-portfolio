<?php
/**
 * Demo library admin page.
 *
 * Renders the premium demo browser at Appearance → GoDevs Demos.
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $demos List of demo definitions from godevs_portfolio_get_demos(). */
$demos      = godevs_portfolio_get_demos();
$categories = godevs_portfolio_get_demo_categories();
$styles     = godevs_portfolio_get_demo_styles();
$imported   = godevs_portfolio_tracker_get_imported();
$ajax_url   = admin_url( 'admin-ajax.php' );
$ajax_nonce = wp_create_nonce( 'godevs_demo_admin' );
$total_demos = count( $demos );
?>

<div class="wrap godevs-demos-wrap">
	<!-- Premium Header -->
	<header class="godevs-demos-header">
		<div class="godevs-demos-header-inner">
			<div class="godevs-demos-header-content">
				<span class="godevs-demos-badge"><?php esc_html_e( 'Premium Demo Library', 'godevs-portfolio' ); ?></span>
				<h1 class="godevs-demos-title">
					<?php esc_html_e( 'Explore Premium Demos', 'godevs-portfolio' ); ?>
				</h1>
				<p class="godevs-demos-subtitle">
					<?php
					echo esc_html(
						sprintf(
							/* translators: %d: total demo count. */
							__( 'Browse %d complete portfolio websites. Preview any demo on desktop, tablet, or mobile — then import with one click. Your existing content is never deleted.', 'godevs-portfolio' ),
							$total_demos
						)
					);
					?>
				</p>
			</div>
		</div>
	</header>

	<!-- Filters -->
	<div class="godevs-demos-filters" role="search">
		<div class="godevs-filter-group godevs-filter-search">
			<label for="godevs-search-input" class="screen-reader-text">
				<?php esc_html_e( 'Search demos', 'godevs-portfolio' ); ?>
			</label>
			<span class="godevs-search-icon" aria-hidden="true">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
			</span>
			<input
				type="search"
				id="godevs-search-input"
				class="godevs-search-input"
				placeholder="<?php esc_attr_e( 'Search demos by name or category…', 'godevs-portfolio' ); ?>"
				autocomplete="off"
			/>
		</div>

		<div class="godevs-filter-group">
			<label for="godevs-category-filter" class="screen-reader-text">
				<?php esc_html_e( 'Filter by category', 'godevs-portfolio' ); ?>
			</label>
			<select id="godevs-category-filter" class="godevs-select">
				<option value=""><?php esc_html_e( 'All categories', 'godevs-portfolio' ); ?></option>
				<?php foreach ( $categories as $slug => $label ) : ?>
					<option value="<?php echo esc_attr( $slug ); ?>"><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="godevs-filter-group">
			<label for="godevs-style-filter" class="screen-reader-text">
				<?php esc_html_e( 'Filter by style variation', 'godevs-portfolio' ); ?>
			</label>
			<select id="godevs-style-filter" class="godevs-select">
				<option value=""><?php esc_html_e( 'All styles', 'godevs-portfolio' ); ?></option>
				<?php foreach ( $styles as $style ) : ?>
					<option value="<?php echo esc_attr( $style ); ?>"><?php echo esc_html( $style ); ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="godevs-filter-group godevs-filter-actions">
			<button type="button" class="button godevs-clear-filters" id="godevs-clear-filters">
				<?php esc_html_e( 'Clear filters', 'godevs-portfolio' ); ?>
			</button>
		</div>
	</div>

	<!-- Results count -->
	<div class="godevs-demos-count" id="godevs-demos-count">
		<?php
		echo esc_html(
			sprintf(
				/* translators: %d: visible demo count. */
				_n( '%d demo', '%d demos', $total_demos, 'godevs-portfolio' ),
				$total_demos
			)
		);
		?>
	</div>

	<!-- Demo Grid -->
	<div class="godevs-demos-grid" id="godevs-demos-grid">
		<?php foreach ( $demos as $demo ) : ?>
			<?php
			$is_imported = in_array( $demo['id'], $imported, true );
			$preview_uri = $demo['preview_image_uri'] ?? '';
			$preview_alt = $demo['preview_alt'] ?? sprintf( 'Homepage preview of the %s demo', $demo['name'] );
			$page_count  = $demo['page_count'] ?? count( $demo['pages'] );
			?>
			<article
				class="godevs-demo-card<?php echo $is_imported ? ' is-imported' : ''; ?>"
				data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
				data-demo-name="<?php echo esc_attr( $demo['name'] ); ?>"
				data-demo-category="<?php echo esc_attr( $demo['cat_slug'] ); ?>"
				data-demo-style="<?php echo esc_attr( $demo['style'] ); ?>"
				data-demo-keywords="<?php echo esc_attr( strtolower( $demo['name'] . ' ' . $demo['category'] . ' ' . $demo['style'] ) ); ?>"
			>
				<!-- Browser frame + preview image -->
				<div class="godevs-demo-card-preview">
					<div class="godevs-browser-frame" aria-hidden="true">
						<div class="godevs-browser-dots">
							<span></span><span></span><span></span>
						</div>
						<div class="godevs-browser-bar"><?php echo esc_html( $demo['name'] ); ?></div>
					</div>
					<div class="godevs-demo-card-preview-inner">
						<?php if ( $preview_uri ) : ?>
							<img
								src="<?php echo esc_url( $preview_uri ); ?>"
								alt="<?php echo esc_attr( $preview_alt ); ?>"
								class="godevs-demo-card-preview-img"
								loading="lazy"
							/>
						<?php else : ?>
							<span class="godevs-demo-card-preview-name"><?php echo esc_html( $demo['name'] ); ?></span>
						<?php endif; ?>
						<!-- Hover overlay with Preview button -->
						<div class="godevs-demo-card-hover-overlay">
							<button
								type="button"
								class="button button-primary godevs-demo-preview-btn godevs-demo-preview-cta"
								data-action="preview"
								data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
							>
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
								<?php esc_html_e( 'Preview Demo', 'godevs-portfolio' ); ?>
							</button>
						</div>
					</div>
					<?php if ( $is_imported ) : ?>
						<span class="godevs-demo-card-imported-badge">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
							<?php esc_html_e( 'Imported', 'godevs-portfolio' ); ?>
						</span>
					<?php endif; ?>
				</div>

				<!-- Card body -->
				<div class="godevs-demo-card-body">
					<div class="godevs-demo-card-header">
						<div class="godevs-demo-card-meta-top">
							<span class="godevs-demo-card-category-badge"><?php echo esc_html( $demo['category'] ); ?></span>
							<?php if ( $demo['style'] ) : ?>
								<span class="godevs-demo-card-style"><?php echo esc_html( $demo['style'] ); ?></span>
							<?php endif; ?>
						</div>
						<h2 class="godevs-demo-card-title"><?php echo esc_html( $demo['name'] ); ?></h2>
					</div>

					<p class="godevs-demo-card-description"><?php echo esc_html( $demo['description'] ); ?></p>

					<div class="godevs-demo-card-info">
						<span class="godevs-demo-card-pages">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
							<?php
							echo esc_html(
								sprintf(
									/* translators: %d: page count. */
									_n( '%d page', '%d pages', $page_count, 'godevs-portfolio' ),
									$page_count
								)
							);
							?>
						</span>
					</div>

					<div class="godevs-demo-card-actions">
						<button
							type="button"
							class="button godevs-demo-preview-btn"
							data-action="preview"
							data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
						>
							<?php esc_html_e( 'Preview', 'godevs-portfolio' ); ?>
						</button>
						<button
							type="button"
							class="button button-primary godevs-demo-import-btn"
							data-action="import"
							data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
						>
							<?php $is_imported ? esc_html_e( 'Re-import', 'godevs-portfolio' ) : esc_html_e( 'Import', 'godevs-portfolio' ); ?>
						</button>
						<?php if ( $is_imported ) : ?>
							<button
								type="button"
								class="button button-link-delete godevs-demo-remove-btn"
								data-action="remove"
								data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
								aria-label="<?php esc_attr_e( 'Remove demo', 'godevs-portfolio' ); ?>"
							>
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
							</button>
						<?php endif; ?>
					</div>
				</div>
			</article>
		<?php endforeach; ?>
	</div>

	<!-- Empty state -->
	<div class="godevs-demos-empty" id="godevs-demos-empty" hidden>
		<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
		<h3><?php esc_html_e( 'No demos found', 'godevs-portfolio' ); ?></h3>
		<p><?php esc_html_e( 'No demos match your current filters. Try adjusting your search or category.', 'godevs-portfolio' ); ?></p>
		<button type="button" class="button" id="godevs-empty-reset"><?php esc_html_e( 'Clear all filters', 'godevs-portfolio' ); ?></button>
	</div>
</div>

<!-- Preview Modal -->
<div class="godevs-modal godevs-preview-modal" id="godevs-modal" hidden role="dialog" aria-modal="true" aria-labelledby="godevs-modal-title">
	<div class="godevs-modal-backdrop" data-action="close-modal"></div>
	<div class="godevs-modal-panel godevs-preview-panel">
		<!-- Modal header with device switcher -->
		<header class="godevs-modal-header">
			<div class="godevs-modal-header-left">
				<h2 class="godevs-modal-title" id="godevs-modal-title"></h2>
				<span class="godevs-modal-category" id="godevs-modal-category"></span>
			</div>
			<div class="godevs-modal-header-right">
				<div class="godevs-device-switcher" role="tablist" aria-label="<?php esc_attr_e( 'Preview device', 'godevs-portfolio' ); ?>">
					<button type="button" class="godevs-device-btn is-active" data-device="desktop" role="tab" aria-selected="true" title="<?php esc_attr_e( 'Desktop', 'godevs-portfolio' ); ?>">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
						<span class="godevs-device-label"><?php esc_html_e( 'Desktop', 'godevs-portfolio' ); ?></span>
					</button>
					<button type="button" class="godevs-device-btn" data-device="tablet" role="tab" aria-selected="false" title="<?php esc_attr_e( 'Tablet', 'godevs-portfolio' ); ?>">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
						<span class="godevs-device-label"><?php esc_html_e( 'Tablet', 'godevs-portfolio' ); ?></span>
					</button>
					<button type="button" class="godevs-device-btn" data-device="mobile" role="tab" aria-selected="false" title="<?php esc_attr_e( 'Mobile', 'godevs-portfolio' ); ?>">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
						<span class="godevs-device-label"><?php esc_html_e( 'Mobile', 'godevs-portfolio' ); ?></span>
					</button>
				</div>
				<button type="button" class="godevs-modal-close" data-action="close-modal" aria-label="<?php esc_attr_e( 'Close preview', 'godevs-portfolio' ); ?>">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
				</button>
			</div>
		</header>

		<!-- Preview viewport -->
		<div class="godevs-modal-body godevs-preview-body">
			<div class="godevs-preview-viewport" id="godevs-preview-viewport">
				<div class="godevs-preview-loading" id="godevs-preview-loading">
					<span class="godevs-spinner"></span>
					<p><?php esc_html_e( 'Loading preview…', 'godevs-portfolio' ); ?></p>
				</div>
				<div class="godevs-preview-content" id="godevs-preview-content"></div>
			</div>
		</div>

		<!-- Page navigation -->
		<footer class="godevs-modal-footer godevs-preview-footer">
			<div class="godevs-page-nav" id="godevs-page-nav">
				<!-- Page buttons populated by JS -->
			</div>
			<div class="godevs-preview-actions">
				<button type="button" class="button button-primary godevs-preview-import-btn" id="godevs-preview-import-btn">
					<?php esc_html_e( 'Import Demo', 'godevs-portfolio' ); ?>
				</button>
			</div>
		</footer>
	</div>
</div>

<!-- Import progress indicator -->
<div class="godevs-progress" id="godevs-progress" hidden role="status" aria-live="polite">
	<div class="godevs-progress-backdrop"></div>
	<div class="godevs-progress-panel">
		<h3 class="godevs-progress-title"><?php esc_html_e( 'Importing demo…', 'godevs-portfolio' ); ?></h3>
		<ol class="godevs-progress-steps" id="godevs-progress-steps"></ol>
	</div>
</div>

<script>
window.GODEVS_DEMOS = {
	ajaxUrl: <?php echo wp_json_encode( $ajax_url ); ?>,
	ajaxNonce: <?php echo wp_json_encode( $ajax_nonce ); ?>,
	imported: <?php echo wp_json_encode( array_values( $imported ) ); ?>,
	i18n: {
		confirmStarterTitle: <?php echo wp_json_encode( __( 'Import Demo — Starter', 'godevs-portfolio' ) ); ?>,
		confirmSafeTitle: <?php echo wp_json_encode( __( 'Import Demo — Safe', 'godevs-portfolio' ) ); ?>,
		cancel: <?php echo wp_json_encode( __( 'Cancel', 'godevs-portfolio' ) ); ?>,
		importDemo: <?php echo wp_json_encode( __( 'Import Demo', 'godevs-portfolio' ) ); ?>,
		importing: <?php echo wp_json_encode( __( 'Importing…', 'godevs-portfolio' ) ); ?>,
		importComplete: <?php echo wp_json_encode( __( 'Import complete', 'godevs-portfolio' ) ); ?>,
		importFailed: <?php echo wp_json_encode( __( 'Import failed', 'godevs-portfolio' ) ); ?>,
		removeDemo: <?php echo wp_json_encode( __( 'Remove Demo', 'godevs-portfolio' ) ); ?>,
		confirmRemove: <?php echo wp_json_encode( __( 'Confirm Removal', 'godevs-portfolio' ) ); ?>,
		loadingPreview: <?php echo wp_json_encode( __( 'Loading preview…', 'godevs-portfolio' ) ); ?>,
		networkError: <?php echo wp_json_encode( __( 'Network error. Please try again.', 'godevs-portfolio' ) ); ?>,
		home: <?php echo wp_json_encode( __( 'Home', 'godevs-portfolio' ) ); ?>,
	},
};
</script>
