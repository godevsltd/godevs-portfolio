<?php
/**
 * Title: Demo — Minimal (Journal)
 * Slug: godevs-portfolio/demo-minimal-journal
 * Description: Journal page for the Minimal demo. Sparse list of notes and essays. Uses the Minimal style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, minimal, journal, blog, writing
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Journal</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Notes.</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--50)">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024-03-10</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)"><a href="#post">On living with less, ten years in.</a></h3>
<!-- /wp:heading -->
<!-- wp:separator {"className":"is-style-thin"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024-02-05</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)"><a href="#post">The objects I kept and the ones I didn't.</a></h3>
<!-- /wp:heading -->
<!-- wp:separator {"className":"is-style-thin"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024-01-15</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)"><a href="#post">A morning routine that survived January.</a></h3>
<!-- /wp:heading -->
<!-- wp:separator {"className":"is-style-thin"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2023-12-20</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)"><a href="#post">The case against the smart home.</a></h3>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->
