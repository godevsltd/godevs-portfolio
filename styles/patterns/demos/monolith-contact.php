<?php
/**
 * Title: Demo — Monolith (Contact)
 * Slug: godevs-portfolio/demo-monolith-contact
 * Description: Contact page for the Monolith demo. Terminal-style contact form with mono-font labels and a commit-message framing. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, monolith, contact, form, terminal, dark
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

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ open --new contact</code></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Open an issue.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:520px">For new projects, architecture reviews, or a quick question. I read every message personally and reply within two business days.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">

<!-- Left: Contact info -->
<!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">// email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--medium)"><a href="mailto:hello@monolith.studio">hello@monolith.studio</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--40)">// location</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--medium)">Berlin, Germany<br>UTC+1 · by appointment</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--40)">// availability</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--medium)">2 slots open for Q3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--40)">// social</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|medium"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--medium)"><a href="#">GitHub</a> · <a href="#">LinkedIn</a> · <a href="#">RSS</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- Right: Form -->
<!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%">
<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|50","blockGap":"var:preset|spacing|30"},"border":{"color":"var:preset|color|secondary","radius":"8px","width":"1px"}}} -->
<div class="wp-block-group is-style-card-bordered" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ git commit -m "your message"</code></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-bottom:var(--wp--preset--spacing--10)">// name</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--10)">// email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@studio.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--10)">// message</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"6px"},"spacing":{"padding":"var:preset|spacing|20","minHeight":"120px"},"color":{"text":"var:preset|color|muted"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);min-height:120px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Tell me about your system, timeline, and what you're trying to achieve.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button {"width":{"type":"full","size":100}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#send" class="wp-block-button__link wp-element-button">→ git push origin message</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)">// Placeholder form. Replace with Contact Form 7 or WPForms.</p>
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

<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->
