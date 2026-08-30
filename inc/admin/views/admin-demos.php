<?php
/**
 * Demo library admin page.
 *
 * Renders the demo browser at Appearance → GoDevs Demos.
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
?>

<div class="wrap godevs-demos-wrap">
	<header class="godevs-demos-header">
		<div class="godevs-demos-header-inner">
			<h1 class="godevs-demos-title">
				<?php esc_html_e( 'GoDevs Demo Library', 'godevs-portfolio' ); ?>
			</h1>
			<p class="godevs-demos-subtitle">
				<?php
				echo esc_html(
					sprintf(
						/* translators: %d: total demo count. */
						__( 'Browse %d ready portfolio websites. Preview a demo before importing — your existing content is never deleted.', 'godevs-portfolio' ),
						count( $demos )
					)
				);
				?>
			</p>
		</div>
	</header>

	<div class="godevs-demos-filters" role="search">
		<div class="godevs-filter-group">
			<label for="godevs-search-input" class="screen-reader-text">
				<?php esc_html_e( 'Search demos', 'godevs-portfolio' ); ?>
			</label>
			<input
				type="search"
				id="godevs-search-input"
				class="godevs-search-input"
				placeholder="<?php esc_attr_e( 'Search demos by name, category, or keyword…', 'godevs-portfolio' ); ?>"
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
	</div>

	<div class="godevs-demos-grid" id="godevs-demos-grid">
		<?php foreach ( $demos as $demo ) : ?>
			<?php
			$is_imported = in_array( $demo['id'], $imported, true );
			?>
			<article
				class="godevs-demo-card<?php echo $is_imported ? ' is-imported' : ''; ?>"
				data-demo-id="<?php echo esc_attr( $demo['id'] ); ?>"
				data-demo-name="<?php echo esc_attr( $demo['name'] ); ?>"
				data-demo-category="<?php echo esc_attr( $demo['cat_slug'] ); ?>"
				data-demo-style="<?php echo esc_attr( $demo['style'] ); ?>"
				data-demo-keywords="<?php echo esc_attr( strtolower( $demo['name'] . ' ' . $demo['category'] . ' ' . $demo['style'] ) ); ?>"
			>
				<div class="godevs-demo-card-preview">
					<div class="godevs-demo-card-preview-inner" aria-hidden="true">
						<span class="godevs-demo-card-preview-name"><?php echo esc_html( $demo['name'] ); ?></span>
					</div>
				</div>
				<div class="godevs-demo-card-body">
					<h2 class="godevs-demo-card-title"><?php echo esc_html( $demo['name'] ); ?></h2>
					<div class="godevs-demo-card-meta">
						<span class="godevs-demo-card-category"><?php echo esc_html( $demo['category'] ); ?></span>
						<?php if ( $demo['style'] ) : ?>
							<span class="godevs-demo-card-separator" aria-hidden="true">·</span>
							<span class="godevs-demo-card-style"><?php echo esc_html( $demo['style'] ); ?></span>
						<?php endif; ?>
					</div>
					<p class="godevs-demo-card-description"><?php echo esc_html( $demo['description'] ); ?></p>
					<div class="godevs-demo-card-actions">
						<button
							type="button"
							class="button button-secondary godevs-demo-preview-btn"
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
							>
								<?php esc_html_e( 'Remove', 'godevs-portfolio' ); ?>
							</button>
						<?php endif; ?>
					</div>
				</div>
			</article>
		<?php endforeach; ?>
	</div>

	<p class="godevs-demos-empty" id="godevs-demos-empty" hidden>
		<?php esc_html_e( 'No demos match your filters.', 'godevs-portfolio' ); ?>
	</p>
</div>

<!-- Confirmation modal -->
<div class="godevs-modal" id="godevs-modal" hidden role="dialog" aria-modal="true" aria-labelledby="godevs-modal-title">
	<div class="godevs-modal-backdrop" data-action="close-modal"></div>
	<div class="godevs-modal-panel">
		<header class="godevs-modal-header">
			<h2 class="godevs-modal-title" id="godevs-modal-title"></h2>
			<button type="button" class="godevs-modal-close" data-action="close-modal" aria-label="<?php esc_attr_e( 'Close', 'godevs-portfolio' ); ?>">&times;</button>
		</header>
		<div class="godevs-modal-body" id="godevs-modal-body"></div>
		<footer class="godevs-modal-footer" id="godevs-modal-footer"></footer>
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
	},
};
</script>
