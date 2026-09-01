<?php
/**
 * Title: Demo — Vivid (About)
 * Slug: godevs-portfolio/demo-vivid-about
 * Description: About page for the Vivid demo. Bio intro, practice areas, and a closing CTA. Uses the Creative style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, vivid, about, bio, creative
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">About</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">The creative practice.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:560px">Vivid is a design practice focused on identity, editorial, and product work.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-thin"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Practice areas</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.02em;font-weight:600">What I work on.</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:520px">Identity systems, editorial layouts, and the front-end engineering that makes them real. Each engagement is scoped in writing, shipped on schedule, and built to be edited by the client after handoff.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Get in touch</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#work" class="wp-block-button__link wp-element-button">See recent work</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->
