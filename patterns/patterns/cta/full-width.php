<?php
/**
 * Title: CTA — Full Width
 * Slug: godevs-portfolio/cta-full-width
 * Description: A full-bleed CTA section with primary background, centered headline, supporting paragraph, and a centered button group. Distinct from Split Band in its centered, full-bleed composition.
 * Categories: godevs-portfolio-cta
 * Keywords: cta, full-width, full-bleed, centered, inverted
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-cta-full-width godevs-reveal","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-cta-full-width alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Available for new work</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.1;letter-spacing:-0.02em">Let's build something good together.</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Currently taking on two new engagements for Q3 — portfolio sites, product launches, and editorial work.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:button -->
			<div class="wp-block-button"><a href="/contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
			<div class="wp-block-button is-style-outline"><a href="/work" class="wp-block-button__link wp-element-button">See recent work</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
