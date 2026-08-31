<?php
/**
 * Demo library view — embedded in GoDevs Settings → Demo Library tab.
 *
 * Also used as the standalone Appearance → GoDevs Demos page.
 *
 * Renders the premium demo browser with:
 *   - Hero header with stats
 *   - Filter bar (search + category + style + clear)
 *   - "Ready Demos" section (complete demos with real screenshot thumbnails)
 *   - "Coming Soon" section (incomplete demos, faded)
 *   - Live preview modal (iframe with rendered HTML)
 *   - Import progress overlay
 *
 * @package GoDevs_Portfolio
 * @since   2.5.0  Redesigned with modern UI + iframe preview.
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/** @var array $demos List of demo definitions from godevs_portfolio_get_demos(). */
$demos       = godevs_portfolio_get_demos();
$categories  = godevs_portfolio_get_demo_categories();
$styles      = godevs_portfolio_get_demo_styles();
$imported    = godevs_portfolio_tracker_get_imported();
$ajax_url    = admin_url( 'admin-ajax.php' );
$ajax_nonce  = wp_create_nonce( 'godevs_demo_admin' );
$total_demos = count( $demos );

$complete_demos = array_filter( $demos, static fn( $d ) => ! empty( $d['is_complete'] ) );
$coming_demos   = array_filter( $demos, static fn( $d ) => empty( $d['is_complete'] ) );
$ready_count    = count( $complete_demos );
$coming_count   = count( $coming_demos );
$imported_count = count( $imported );
?>

<div class="godevs-demos-wrap" data-total="<?php echo esc_attr( (string) $total_demos ); ?>" data-ready="<?php echo esc_attr( (string) $ready_count ); ?>" data-coming="<?php echo esc_attr( (string) $coming_count ); ?>">

        <!-- ═══ HERO HEADER ═══ -->
        <header class="godevs-demos-hero">
                <div class="godevs-demos-hero-inner">
                        <div class="godevs-demos-hero-text">
                                <span class="godevs-demos-hero-badge">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                        <?php esc_html_e( 'Premium Demo Library', 'godevs-portfolio' ); ?>
                                </span>
                                <h2 class="godevs-demos-hero-title">
                                        <?php esc_html_e( 'Production-ready websites.', 'godevs-portfolio' ); ?><br>
                                        <?php esc_html_e( 'One click to import.', 'godevs-portfolio' ); ?>
                                </h2>
                                <p class="godevs-demos-hero-subtitle">
                                        <?php esc_html_e( 'Browse complete portfolio sites, preview them live in the browser, and import with all pages, navigation, and the recommended style variation applied. Your existing content is never deleted.', 'godevs-portfolio' ); ?>
                                </p>
                        </div>
                        <div class="godevs-demos-hero-stats">
                                <div class="godevs-demos-stat">
                                        <span class="godevs-demos-stat-num"><?php echo esc_html( (string) $ready_count ); ?></span>
                                        <span class="godevs-demos-stat-label"><?php esc_html_e( 'Ready demos', 'godevs-portfolio' ); ?></span>
                                </div>
                                <div class="godevs-demos-stat">
                                        <span class="godevs-demos-stat-num"><?php echo esc_html( (string) $coming_count ); ?></span>
                                        <span class="godevs-demos-stat-label"><?php esc_html_e( 'Coming soon', 'godevs-portfolio' ); ?></span>
                                </div>
                                <div class="godevs-demos-stat">
                                        <span class="godevs-demos-stat-num"><?php echo esc_html( (string) $imported_count ); ?></span>
                                        <span class="godevs-demos-stat-label"><?php esc_html_e( 'Imported', 'godevs-portfolio' ); ?></span>
                                </div>
                        </div>
                </div>
        </header>

        <!-- ═══ FILTER BAR ═══ -->
        <div class="godevs-demos-filters" role="search">
                <div class="godevs-filter-group godevs-filter-search">
                        <label for="godevs-search-input" class="screen-reader-text"><?php esc_html_e( 'Search demos', 'godevs-portfolio' ); ?></label>
                        <span class="godevs-search-icon" aria-hidden="true">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </span>
                        <input
                                type="search"
                                id="godevs-search-input"
                                class="godevs-search-input"
                                placeholder="<?php esc_attr_e( 'Search demos by name, category, or style…', 'godevs-portfolio' ); ?>"
                                autocomplete="off"
                        />
                </div>

                <div class="godevs-filter-group">
                        <label for="godevs-category-filter" class="screen-reader-text"><?php esc_html_e( 'Filter by category', 'godevs-portfolio' ); ?></label>
                        <select id="godevs-category-filter" class="godevs-select">
                                <option value=""><?php esc_html_e( 'All categories', 'godevs-portfolio' ); ?></option>
                                <?php foreach ( $categories as $slug => $label ) : ?>
                                        <option value="<?php echo esc_attr( $slug ); ?>"><?php echo esc_html( $label ); ?></option>
                                <?php endforeach; ?>
                        </select>
                </div>

                <div class="godevs-filter-group">
                        <label for="godevs-style-filter" class="screen-reader-text"><?php esc_html_e( 'Filter by style variation', 'godevs-portfolio' ); ?></label>
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

                <div class="godevs-filter-group godevs-filter-count" id="godevs-demos-count">
                        <?php
                        echo esc_html(
                                sprintf(
                                        /* translators: 1: ready demo count, 2: total demo count. */
                                        __( '%1$d ready · %2$d total', 'godevs-portfolio' ),
                                        $ready_count,
                                        $total_demos
                                )
                        );
                        ?>
                </div>
        </div>

        <!-- ═══ READY DEMOS SECTION ═══ -->
        <section class="godevs-demos-section" data-section="ready">
                <header class="godevs-demos-section-header">
                        <h3 class="godevs-demos-section-title">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                <?php esc_html_e( 'Ready Demos', 'godevs-portfolio' ); ?>
                                <span class="godevs-demos-section-count"><?php echo esc_html( (string) $ready_count ); ?></span>
                        </h3>
                        <p class="godevs-demos-section-subtitle"><?php esc_html_e( 'Fully designed home + inner pages — ready to import with one click.', 'godevs-portfolio' ); ?></p>
                </header>
                <div class="godevs-demos-grid" id="godevs-demos-grid-ready">
                        <?php foreach ( $complete_demos as $demo ) : ?>
                                <?php
                                // phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped below.
                                $card_html = godevs_portfolio_render_demo_card( $demo, $imported );
                                echo $card_html;
                                // phpcs:enable
                                ?>
                        <?php endforeach; ?>
                </div>
        </section>

        <!-- ═══ COMING SOON SECTION ═══ -->
        <?php if ( $coming_count > 0 ) : ?>
        <section class="godevs-demos-section godevs-demos-section-coming" data-section="coming">
                <header class="godevs-demos-section-header">
                        <h3 class="godevs-demos-section-title">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <?php esc_html_e( 'Coming Soon', 'godevs-portfolio' ); ?>
                                <span class="godevs-demos-section-count"><?php echo esc_html( (string) $coming_count ); ?></span>
                        </h3>
                        <p class="godevs-demos-section-subtitle"><?php esc_html_e( 'Homepage patterns available — inner pages are being designed.', 'godevs-portfolio' ); ?></p>
                </header>
                <div class="godevs-demos-grid godevs-demos-grid-coming" id="godevs-demos-grid-coming">
                        <?php foreach ( $coming_demos as $demo ) : ?>
                                <?php
                                // phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped below.
                                $card_html = godevs_portfolio_render_demo_card( $demo, $imported );
                                echo $card_html;
                                // phpcs:enable
                                ?>
                        <?php endforeach; ?>
                </div>
        </section>
        <?php endif; ?>

        <!-- ═══ EMPTY STATE ═══ -->
        <div class="godevs-demos-empty" id="godevs-demos-empty" hidden>
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <h3><?php esc_html_e( 'No demos found', 'godevs-portfolio' ); ?></h3>
                <p><?php esc_html_e( 'No demos match your current filters. Try adjusting your search or category.', 'godevs-portfolio' ); ?></p>
                <button type="button" class="button" id="godevs-empty-reset"><?php esc_html_e( 'Clear all filters', 'godevs-portfolio' ); ?></button>
        </div>
</div>

<!-- ═══ LIVE PREVIEW MODAL (iframe-based) ═══ -->
<div class="godevs-modal godevs-preview-modal" id="godevs-modal" hidden role="dialog" aria-modal="true" aria-labelledby="godevs-modal-title">
        <div class="godevs-modal-backdrop" data-action="close-modal"></div>
        <div class="godevs-modal-panel godevs-preview-panel">
                <!-- Modal header -->
                <header class="godevs-modal-header">
                        <div class="godevs-modal-header-left">
                                <h2 class="godevs-modal-title" id="godevs-modal-title"></h2>
                                <span class="godevs-modal-category" id="godevs-modal-category"></span>
                        </div>
                        <div class="godevs-modal-header-right">
                                <!-- Device switcher -->
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

                <!-- Preview viewport — iframe-based for real rendered page -->
                <div class="godevs-modal-body godevs-preview-body">
                        <div class="godevs-preview-viewport" id="godevs-preview-viewport">
                                <div class="godevs-preview-loading" id="godevs-preview-loading">
                                        <span class="godevs-spinner"></span>
                                        <p><?php esc_html_e( 'Loading live preview…', 'godevs-portfolio' ); ?></p>
                                </div>
                                <iframe
                                        id="godevs-preview-iframe"
                                        class="godevs-preview-iframe"
                                        title="<?php esc_attr_e( 'Demo live preview', 'godevs-portfolio' ); ?>"
                                        src="about:blank"
                                        sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
                                        loading="lazy"
                                ></iframe>
                        </div>
                </div>

                <!-- Page navigation + import button -->
                <footer class="godevs-modal-footer godevs-preview-footer">
                        <div class="godevs-page-nav" id="godevs-page-nav">
                                <!-- Page buttons populated by JS -->
                        </div>
                        <div class="godevs-preview-actions">
                                <a href="#" target="_blank" rel="noopener" class="button godevs-preview-open-new" id="godevs-preview-open-new" title="<?php esc_attr_e( 'Open in new tab', 'godevs-portfolio' ); ?>">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                        <span class="screen-reader-text"><?php esc_html_e( 'Open in new tab', 'godevs-portfolio' ); ?></span>
                                </a>
                                <button type="button" class="button button-primary godevs-preview-import-btn" id="godevs-preview-import-btn">
                                        <?php esc_html_e( 'Import Demo', 'godevs-portfolio' ); ?>
                                </button>
                        </div>
                </footer>
        </div>
</div>

<!-- ═══ IMPORT PROGRESS OVERLAY ═══ -->
<div class="godevs-progress" id="godevs-progress" hidden role="status" aria-live="polite">
        <div class="godevs-progress-backdrop"></div>
        <div class="godevs-progress-panel">
                <h3 class="godevs-progress-title"><?php esc_html_e( 'Importing demo…', 'godevs-portfolio' ); ?></h3>
                <ol class="godevs-progress-steps" id="godevs-progress-steps"></ol>
        </div>
</div>

<!-- ═══ JS CONFIG ═══ -->
<script>
window.GODEVS_DEMOS = {
        ajaxUrl: <?php echo wp_json_encode( $ajax_url ); ?>,
        ajaxNonce: <?php echo wp_json_encode( $ajax_nonce ); ?>,
        renderNonce: <?php echo wp_json_encode( wp_create_nonce( 'godevs_render_demo_page' ) ); ?>,
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
                loadingPreview: <?php echo wp_json_encode( __( 'Loading live preview…', 'godevs-portfolio' ) ); ?>,
                networkError: <?php echo wp_json_encode( __( 'Network error. Please try again.', 'godevs-portfolio' ) ); ?>,
                home: <?php echo wp_json_encode( __( 'Home', 'godevs-portfolio' ) ); ?>,
        },
};
</script>

<?php
/**
 * Render a single demo card.
 *
 * Extracted as a function so it can be reused for both Ready and Coming Soon sections.
 *
 * @param array    $demo     Demo definition.
 * @param string[] $imported List of imported demo IDs.
 * @return string HTML card markup.
 */
function godevs_portfolio_render_demo_card( array $demo, array $imported ): string {
        $is_imported = in_array( $demo['id'], $imported, true );
        $is_ready    = ! empty( $demo['is_ready'] );
        $is_complete = ! empty( $demo['is_complete'] );
        $preview_uri = $demo['preview_image_uri'] ?? '';
        $preview_alt = $demo['preview_alt'] ?? sprintf( 'Homepage preview of the %s demo', $demo['name'] );
        $page_count  = $demo['page_count'] ?? count( $demo['pages'] );

        $card_classes = 'godevs-demo-card';
        if ( $is_imported ) {
                $card_classes .= ' is-imported';
        }
        if ( ! $is_ready ) {
                $card_classes .= ' is-coming-soon';
        }
        if ( $is_complete ) {
                $card_classes .= ' is-complete';
        }

        // Build the preview image or placeholder.
        $preview_html = '';
        if ( $preview_uri ) {
                $preview_html = sprintf(
                        '<img src="%s" alt="%s" class="godevs-demo-card-preview-img" loading="lazy" />',
                        esc_url( $preview_uri ),
                        esc_attr( $preview_alt )
                );
        } else {
                $preview_html = sprintf(
                        '<span class="godevs-demo-card-preview-name">%s</span>',
                        esc_html( $demo['name'] )
                );
        }

        // Build the status badge.
        $status_badge = '';
        if ( $is_complete ) {
                $status_badge = '<span class="godevs-demo-card-status-badge is-complete"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' . esc_html__( 'Complete', 'godevs-portfolio' ) . '</span>';
        } elseif ( $is_ready ) {
                $status_badge = '<span class="godevs-demo-card-status-badge is-ready">' . esc_html__( 'Ready', 'godevs-portfolio' ) . '</span>';
        } else {
                $status_badge = '<span class="godevs-demo-card-status-badge is-coming">' . esc_html__( 'Coming Soon', 'godevs-portfolio' ) . '</span>';
        }

        // Build the imported badge.
        $imported_badge = '';
        if ( $is_imported ) {
                $imported_badge = '<span class="godevs-demo-card-imported-badge"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' . esc_html__( 'Imported', 'godevs-portfolio' ) . '</span>';
        }

        // Build the action buttons.
        $actions_html = '';
        if ( $is_ready ) {
                $import_label = $is_imported ? __( 'Re-import', 'godevs-portfolio' ) : __( 'Import', 'godevs-portfolio' );
                $actions_html = sprintf(
                        '<button type="button" class="button godevs-demo-preview-btn" data-action="preview" data-demo-id="%s">%s</button>'
                        . '<button type="button" class="button button-primary godevs-demo-import-btn" data-action="import" data-demo-id="%s">%s</button>',
                        esc_attr( $demo['id'] ),
                        esc_html__( 'Preview', 'godevs-portfolio' ),
                        esc_attr( $demo['id'] ),
                        esc_html( $import_label )
                );
                if ( $is_imported ) {
                        $actions_html .= sprintf(
                                '<button type="button" class="button button-link-delete godevs-demo-remove-btn" data-action="remove" data-demo-id="%s" aria-label="%s"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></button>',
                                esc_attr( $demo['id'] ),
                                esc_attr__( 'Remove demo', 'godevs-portfolio' )
                        );
                }
        } else {
                $actions_html = sprintf(
                        '<button type="button" class="button godevs-demo-coming-soon-btn" disabled aria-disabled="true">%s</button>',
                        esc_html__( 'Coming Soon', 'godevs-portfolio' )
                );
        }

        return sprintf(
                '<article class="%1$s" data-demo-id="%2$s" data-demo-name="%3$s" data-demo-category="%4$s" data-demo-style="%5$s" data-demo-complete="%6$s" data-demo-keywords="%7$s">'
                . '<div class="godevs-demo-card-preview">'
                . '<div class="godevs-browser-frame" aria-hidden="true"><div class="godevs-browser-dots"><span></span><span></span><span></span></div><div class="godevs-browser-bar">%8$s</div></div>'
                . '<div class="godevs-demo-card-preview-inner">%9$s'
                . '<div class="godevs-demo-card-hover-overlay"><button type="button" class="button button-primary godevs-demo-preview-btn godevs-demo-preview-cta" data-action="preview" data-demo-id="%10$s"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>%11$s</button></div>'
                . '</div>'
                . '%12$s%13$s'
                . '</div>'
                . '<div class="godevs-demo-card-body">'
                . '<div class="godevs-demo-card-header">'
                . '<div class="godevs-demo-card-meta-top">'
                . '<span class="godevs-demo-card-category-badge">%14$s</span>'
                . ( $demo['style'] ? '<span class="godevs-demo-card-style">' . esc_html( $demo['style'] ) . '</span>' : '' )
                . '</div>'
                . '<h4 class="godevs-demo-card-title">%15$s</h4>'
                . '</div>'
                . '<p class="godevs-demo-card-description">%16$s</p>'
                . '<div class="godevs-demo-card-info">'
                . '<span class="godevs-demo-card-pages"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>%17$s</span>'
                . '%18$s'
                . '</div>'
                . '<div class="godevs-demo-card-actions">%19$s</div>'
                . '</div>'
                . '</article>',
                esc_attr( $card_classes ),
                esc_attr( $demo['id'] ),
                esc_attr( $demo['name'] ),
                esc_attr( $demo['cat_slug'] ),
                esc_attr( $demo['style'] ),
                $is_complete ? '1' : '0',
                esc_attr( strtolower( $demo['name'] . ' ' . $demo['category'] . ' ' . $demo['style'] ) ),
                esc_html( $demo['name'] ),
                $preview_html, // already escaped above
                esc_attr( $demo['id'] ),
                esc_html__( 'Preview Demo', 'godevs-portfolio' ),
                $imported_badge, // already escaped
                $status_badge,   // already escaped
                esc_html( $demo['category'] ),
                esc_html( $demo['name'] ),
                esc_html( $demo['description'] ),
                esc_html(
                        sprintf(
                                /* translators: %d: page count. */
                                _n( '%d page', '%d pages', $page_count, 'godevs-portfolio' ),
                                $page_count
                        )
                ),
                $is_complete ? '<span class="godevs-demo-card-pages-complete"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>' . esc_html__( 'All pages', 'godevs-portfolio' ) . '</span>' : '',
                $actions_html // already escaped
        );
}
