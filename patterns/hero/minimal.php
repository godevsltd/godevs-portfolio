<?php
/**
 * Title: Hero — Minimal
 * Slug: godevs-portfolio/hero-minimal
 * Description: An ultra-restrained hero with a single line of large display type, a thin divider, and a one-line caption. Gallery-like presentation.
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, minimal, restrained, gallery, sparse
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-minimal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-minimal alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 5.5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
		<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5.5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">Selected work, 2014—2024.</h1>
		<!-- /wp:heading -->
		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /-->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
		<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Portfolio · Identity · Editorial · Engineering</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
