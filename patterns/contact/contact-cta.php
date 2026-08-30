<?php
/**
 * Title: Contact — Inline CTA
 * Slug: godevs-portfolio/contact-inline-cta
 * Description: A centered contact section with a short headline, a one-line instruction, an email link, and a small group of secondary links.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, cta, email, reach-out, inline
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-contact-inline-cta","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-contact-inline-cta alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow has-text-align-center">Contact</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--xx-large)">Let's talk about what you're building.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">For new projects, collaborations, or a quick question — email is the fastest way to reach me.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--60);font-size:var(--wp--preset--font-size--x-large)"><a href="mailto:hello@example.com">hello@example.com</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} /-->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
			<p style="margin-right:var(--wp--preset--spacing--50)"><a href="/work">Selected work</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
			<p style="margin-right:var(--wp--preset--spacing--50)"><a href="/about">About</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="/journal">Journal</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
