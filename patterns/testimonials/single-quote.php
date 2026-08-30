<?php
/**
 * Title: Testimonials — Single Quote
 * Slug: godevs-portfolio/testimonials-single-quote
 * Description: A single large pull quote with attribution, anchored on a section header. Used to highlight one peer or client endorsement.
 * Categories: godevs-portfolio-testimonials
 * Keywords: testimonials, quote, endorsement, client, peer
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-testimonials-single-quote","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-testimonials-single-quote alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
			<p class="is-style-eyebrow has-text-align-center">Testimonial</p>
			<!-- /wp:paragraph -->

			<!-- wp:pullquote {"align":"wide","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-pullquote alignwide" style="padding-top:0;padding-bottom:0">
				<blockquote class="has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.3;letter-spacing:-0.01em">
					<p>Working with this practice felt like adding a senior partner to the team — clear thinking, careful execution, and a real point of view on what makes a portfolio site worth visiting.</p>
					<cite>— Maya Okonkwo, Founder at Studio Field</cite>
				</blockquote>
			</figure>
			<!-- /wp:pullquote -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)">
				<!-- wp:separator {"className":"is-style-thin"} /-->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="color:var(--wp--preset--color--muted)">Studio Field — Brand &amp; product design studio. Worked together 2020–2022.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
