<?php
/**
 * Title: Demo — Scholar (About)
 * Slug: godevs-portfolio/demo-scholar-about
 * Description: About page for the Scholar demo. Academic bio with research interests. Uses the Minimal style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, scholar, about, academic, bio
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">About</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:400">A working academic practice.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|large","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size|large);line-height:1.7;max-width:560px">Ten years of research, teaching, and writing at the intersection of design and technology. Currently researching editorial systems for digital publishing, teaching courses on web design and front-end engineering, and writing about the history of typesetting on the web.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Research interests</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Editorial Systems</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">How digital publishing platforms shape the way we write and read online.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Design Systems</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">The history and future of component libraries in design and engineering.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Web Typography</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">From metal type to CSS — the evolution of typesetting on the web.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->
