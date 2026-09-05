<?php
/**
 * Title: Demo — Northbound (Contact)
 * Slug: godevs-portfolio/demo-northbound-contact
 * Description: Contact page for the Northbound demo. Split form + info with agency details. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, northbound, contact, agency, form
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Contact</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Let's talk.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:520px">We take on 4 projects per quarter. Tell us about yours and we'll send a proposal within a week.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)"><a href="mailto:hello@northbound.studio">hello@northbound.studio</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">Studio</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)">Berlin, Germany<br>By appointment</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">Social</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)"><a href="#">Instagram</a> · <a href="#">Dribbble</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Send a brief</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@company.com</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","minHeight":"100px","margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);min-height:100px;margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Tell us about your project, timeline, and budget.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#send" class="wp-block-button__link wp-element-button">Send brief</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small);margin-top:var(--wp--preset--spacing--20)">Note: This is a visual placeholder. Edit this page in the Site Editor to add your contact details and links.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-multi-column","theme":"godevs-portfolio","tagName":"footer"} /-->
