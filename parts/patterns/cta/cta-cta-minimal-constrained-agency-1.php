<?php
/**
 * Title: CTA — Card Mid-Page
 * Slug: godevs-portfolio/cta-cta-minimal-constrained-agency-1
 * Description: A bordered, elevated card CTA designed to drop mid-content between paragraphs — NOT full-bleed. Centered within a constrained 640px column with surface-muted background, border, and subtle elevation. The mid-page pause point for editorial portfolios.
 * Categories: godevs-portfolio-cta
 * Keywords: cta, card, mid-page, bordered, elevated, inline, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--lg, 12px)","width":"1px"},"shadow":"var:preset|shadow|raised"},"backgroundColor":"surface-muted","layout":{"type":"constrained","contentSize":"480px"}} -->
		<div class="wp-block-group has-surface-muted-background-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--raised)">

			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow has-text-align-center">Currently available</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Have a project in mind?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--small)">Two engagement slots open for Q3. Reply within two business days.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a conversation</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
