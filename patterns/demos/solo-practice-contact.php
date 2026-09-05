<?php
/**
 * Title: Demo — Solo Practice (Contact)
 * Slug: godevs-portfolio/demo-solo-practice-contact
 * Description: Contact page for the Solo Practice demo. Split form + info layout with optional FAQ. Uses the Minimal style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, solo-practice, contact, form, email, minimal
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">Contact</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Get in touch.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:560px">For new projects, collaborations, or a quick question. Email is the fastest way to reach me.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">Email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)"><a href="mailto:hello@solo-practice.studio">hello@solo-practice.studio</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--40)">Studio</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-size:var(--wp--preset--font-size|medium)">Berlin, Germany<br>By appointment</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">Send a message</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@studio.com</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#send" class="wp-block-button__link wp-element-button">Send message</a></div>
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

<!-- wp:separator {"className":"is-style-thin"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">FAQ</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.02em;font-weight:600">Common questions.</h3>
<!-- /wp:heading -->

<!-- wp:details {"showContent":true,"style":{"spacing":{"padding":"var:preset|spacing|30","blockGap":"var:preset|spacing|20"},"border":{"color":"var:preset|color|border","radius":"8px","width":"1px"}}} -->
<details open class="wp-block-details" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<summary>What's your typical timeline?</summary>
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);margin-top:var(--wp--preset--spacing--20)">Identity systems take 6–8 weeks. Editorial sites 8–12. Performance audits 2–4. All scoped in writing before we start.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details {"style":{"spacing":{"padding":"var:preset|spacing|30","blockGap":"var:preset|spacing|20"},"border":{"color":"var:preset|color|border","radius":"8px","width":"1px"}}} -->
<details class="wp-block-details" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<summary>How do payments work?</summary>
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);margin-top:var(--wp--preset--spacing--20)">50% to start, 50% on delivery. Bank transfer or Stripe. Net-15 on invoices.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->
