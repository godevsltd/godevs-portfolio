<?php
/**
 * Title: Contact — Minimal
 * Slug: godevs-portfolio/contact-minimal
 * Description: An ultra-restrained contact section with just a centered email link and a one-line context. Distinct in its single-action, gallery-like composition.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, minimal, email, restrained, centered
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-contact-minimal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-contact-minimal alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Contact</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.1;letter-spacing:-0.02em">Get in touch.</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Reply within two working days.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--large);margin-top:var(--wp--preset--spacing--30)"><a href="mailto:hello@example.com">hello@example.com</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
