<?php
/**
 * Title: Hero — With Inline Testimonial
 * Slug: godevs-portfolio/hero-hero-minimal-constrained-agency-1
 * Description: A restrained editorial hero with a one-line italic pull-quote testimonial directly beneath the headline — social proof in the fold, without a separate testimonial section. Best for solo practitioners who want a single confident signal above the fold.
 * Categories: godevs-portfolio-hero
 * Keywords: hero, testimonial, quote, social proof, editorial, inline
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow">Portfolio · 2014—2024</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 5.5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
		<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5.5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">A decade of considered work, kept current.</h1>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
		<!-- /wp:separator -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontStyle":"italic","fontWeight":"400","lineHeight":"1.3"}},"color":{"text":"var:preset|color|secondary"},"layout":{"selfStretch":"fit","flexSize":"480px"}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);font-style:italic;font-weight:400;line-height:1.3;max-width:480px">"One of the few designers who reads the brief twice before opening Figma."</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30)">— Maya Okonkwo, Founder at Studio Field</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|60"}},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--60)">Identity · Editorial · Engineering — Berlin</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
