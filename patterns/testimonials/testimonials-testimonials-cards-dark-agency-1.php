<?php
/**
 * Title: Testimonials — Static Slide Row
 * Slug: godevs-portfolio/testimonials-testimonials-cards-dark-agency-1
 * Description: A static "slide"-look row — 3 full testimonial cards visible with a 4th card clipped at the right edge, giving a carousel feeling without any JS. Pagination dots beneath. Dark surface.
 * Categories: godevs-portfolio-testimonials
 * Keywords: testimonials, slide, carousel, row, peek, clip, dots, dark, static
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
\texit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
\t<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
\t<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

\t\t<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
\t\t<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
\t\t\t<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">What clients say</p>
\t\t\t<!-- /wp:paragraph -->
\t\t\t<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
\t\t\t<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">In their words.</h2>
\t\t\t<!-- /wp:heading -->
\t\t</div>
\t\t<!-- /wp:group -->

\t\t<!-- Slide row: overflow hidden, 3.3 cards visible -->
\t\t<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"type":"default"}}} -->
\t\t<div class="wp-block-group alignwide" style="overflow:hidden">

\t\t\t<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
\t\t\t<div class="wp-block-columns godevs-reveal-stagger">

\t\t\t\t<!-- Card 1 -->
\t\t\t\t<!-- wp:column {"width":"30%"} -->
\t\t\t\t<div class="wp-block-column" style="flex-basis:30%">
\t\t\t\t\t<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface","textColor":"primary"} -->
\t\t\t\t\t<div class="wp-block-group is-style-card-bordered has-surface-background-color has-text-color has-background has-primary-color" style="color:var(--wp--preset--color--primary);background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.4"}}} -->
\t\t\t\t\t\t<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.4">"One of the few designers who reads the brief twice before opening Figma."</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t\t<!-- wp:separator {"className":"is-style-thin"} -->
\t\t\t\t\t\t<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
\t\t\t\t\t\t<!-- /wp:separator -->
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
\t\t\t\t\t\t<p style="font-size:var(--wp--preset--font-size|small)"><strong>Maya Okonkwo</strong><br>Founder · Studio Field</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:column -->

\t\t\t\t<!-- Card 2 -->
\t\t\t\t<!-- wp:column {"width":"30%"} -->
\t\t\t\t<div class="wp-block-column" style="flex-basis:30%">
\t\t\t\t\t<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface","textColor":"primary"} -->
\t\t\t\t\t<div class="wp-block-group is-style-card-bordered has-surface-background-color has-text-color has-background has-primary-color" style="color:var(--wp--preset--color--primary);background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.4"}}} -->
\t\t\t\t\t\t<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.4">"Shipped faster than expected, and the accessibility pass found issues three previous audits missed."</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t\t<!-- wp:separator {"className":"is-style-thin"} -->
\t\t\t\t\t\t<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
\t\t\t\t\t\t<!-- /wp:separator -->
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
\t\t\t\t\t\t<p style="font-size:var(--wp--preset--font-size|small)"><strong>Daniel Reyes</strong><br>Editor · Long-form Journal</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:column -->

\t\t\t\t<!-- Card 3 -->
\t\t\t\t<!-- wp:column {"width":"30%"} -->
\t\t\t\t<div class="wp-block-column" style="flex-basis:30%">
\t\t\t\t\t<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface","textColor":"primary"} -->
\t\t\t\t\t<div class="wp-block-group is-style-card-bordered has-surface-background-color has-text-color has-background has-primary-color" style="color:var(--wp--preset--color--primary);background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.4"}}} -->
\t\t\t\t\t\t<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.4">"The component library still powers our publishing workflow three years later."</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t\t<!-- wp:separator {"className":"is-style-thin"} -->
\t\t\t\t\t\t<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
\t\t\t\t\t\t<!-- /wp:separator -->
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
\t\t\t\t\t\t<p style="font-size:var(--wp--preset--font-size|small)"><strong>Priya Sharma</strong><br>Product Lead · Foundry Co.</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:column -->

\t\t\t\t<!-- Card 4 (partially clipped — peek) -->
\t\t\t\t<!-- wp:column {"width":"30%"} -->
\t\t\t\t<div class="wp-block-column" style="flex-basis:30%">
\t\t\t\t\t<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface","textColor":"primary"} -->
\t\t\t\t\t<div class="wp-block-group is-style-card-bordered has-surface-background-color has-text-color has-background has-primary-color" style="color:var(--wp--preset--color--primary);background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
\t\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.4"}}} -->
\t\t\t\t\t\t<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.4">"A rare designer who thinks in systems, not just screens."</p>
\t\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:column -->

\t\t\t</div>
\t\t\t<!-- /wp:columns -->

\t\t</div>
\t\t<!-- /wp:group -->

\t\t<!-- Pagination dots -->
\t\t<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","justifyContent":"center"}} -->
\t\t<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)">
\t\t\t<!-- wp:html -->
\t\t\t<div style="display:flex;gap:8px;justify-content:center;">
\t\t\t\t<span style="width:8px;height:8px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t<span style="width:8px;height:8px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t<span style="width:8px;height:8px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t<span style="width:8px;height:8px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t</div>
\t\t\t<!-- /wp:html -->
\t\t</div>
\t\t<!-- /wp:group -->

\t</div>
\t<!-- /wp:group -->
</section>
<!-- /wp:group -->
