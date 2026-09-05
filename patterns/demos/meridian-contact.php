<?php
/**
 * Title: Demo — Meridian (Contact)
 * Slug: godevs-portfolio/demo-meridian-contact
 * Description: Contact page for the Meridian demo. Split form + info with consultation booking. Uses the Corporate style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, meridian, contact, consultation, form
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Contact</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Schedule a consultation.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:520px">Free 30-minute consultation. No pitch — just an honest conversation about your challenge.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)"><a href="mailto:hello@meridian.consulting">hello@meridian.consulting</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">Office</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)">Berlin, Germany<br>UTC+1 · by appointment</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">Availability</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|medium)">2 slots open for Q3</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">LinkedIn</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)"><a href="#">Connect on LinkedIn →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Request a consultation</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@company.com</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","minHeight":"100px","margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);min-height:100px;margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">What challenge are you facing? What's your timeline?</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#send" class="wp-block-button__link wp-element-button">Request consultation</a></div>
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
