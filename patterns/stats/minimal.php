<?php
/**
 * Title: Stats — Minimal
 * Slug: godevs-portfolio/stats-minimal
 * Description: An ultra-restrained stats section with a single centered number, label, and one-line context. Distinct in its single-stat emphasis and spare composition.
 * Categories: godevs-portfolio-stats
 * Keywords: stats, minimal, single, restrained, centered
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-stats-minimal godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-stats-minimal alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">A working summary</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(4rem, 12vw, 8rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(4rem, 12vw, 8rem);line-height:1;letter-spacing:-0.03em;font-weight:700">100%</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Lighthouse accessibility score on every site shipped since 2022.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
