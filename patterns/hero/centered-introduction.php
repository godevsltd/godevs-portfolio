<?php
/**
 * Title: Hero — Centered Introduction
 * Slug: godevs-portfolio/hero-centered-introduction
 * Description: A vertically centered hero with eyebrow, large display heading, supporting paragraph, and a centered button group. Best for portfolios that lead with the work, not the imagery.
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, centered, intro, minimal, opening
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-centered-introduction godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-centered-introduction alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Selected Work · 2014 — 2024</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.02em">Building considered portfolio sites that hold up over time.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">A decade of editorial design, accessibility, and front-end engineering. The work below spans identity systems, publications, and product portfolios.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:button -->
			<div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button">Browse the portfolio</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
