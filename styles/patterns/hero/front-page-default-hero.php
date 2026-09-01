<?php
/**
 * Title: Front Page — Default Hero
 * Slug: godevs-portfolio/front-page-default-hero
 * Description: The default homepage hero section for the GoDevs Portfolio theme when no demo is imported.
 * Categories: godevs-portfolio-hero
 * Keywords: front-page, homepage, hero, default
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-front-hero","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-front-hero alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.15em","textTransform":"uppercase"}}} -->
		<p class="is-style-eyebrow has-text-align-center has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.15em;text-transform:uppercase">Portfolio · 2014 — 2024</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.02em;font-weight:600">Building considered portfolio sites that hold up over time.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium);line-height:1.7">A decade of editorial design, accessibility, and front-end engineering. The work spans identity systems, publications, and product portfolios.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:button -->
			<div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button">Browse the portfolio</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-text-link"} -->
			<div class="wp-block-button is-style-text-link"><a href="/about" class="wp-block-button__link wp-element-button">About the practice</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
