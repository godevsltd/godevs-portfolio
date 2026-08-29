<?php
/**
 * Title: Minimal Footer
 * Slug: godevs-portfolio/footer
 * Categories: footer
 * Description: A minimal three-row footer — logo and tagline, navigation row, copyright row. Lighter than the default footer template part; useful for landing pages.
 * Keywords: footer, minimal, copyright, navigation
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"footer","className":"godevs-footer-minimal","style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group godevs-footer-minimal">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":96,"shouldSyncEmoji":false} /-->
			<!-- wp:site-tagline {"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"typography":{"fontSize":"var(--wp--preset--font-size--small)"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} /-->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"caption","style":{"color":{"text":"var(--wp--preset--color--muted)"}}} -->
		<p class="has-caption-font-size" style="color:var(--wp--preset--color--muted)">© GoDevs. All rights reserved.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"caption","style":{"color":{"text":"var(--wp--preset--color--muted)"}}} -->
		<p class="has-caption-font-size" style="color:var(--wp--preset--color--muted)">Built with the Site Editor.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
