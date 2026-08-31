<?php
/**
 * Title: Demo — Monolith (Journal)
 * Slug: godevs-portfolio/demo-monolith-journal
 * Description: Journal page for the Monolith demo. Terminal-style changelog entries with date, commit hash, and read link. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, monolith, journal, blog, writing, dark, changelog
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
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ git log --oneline --journal</code></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Notes from the system.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:520px">Occasional writing on backend engineering, systems design, and running an independent practice. Not a publishing schedule — just when there's something worth saying.</p>
<!-- /wp:paragraph -->

<!-- Journal entries (changelog style) -->
<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--60)">

<!-- Entry 1 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">2024-03-15 · commit a3f2b1c</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em">On Reading Briefs Twice</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">A note on the discipline of re-reading a brief before opening the IDE — and what changes the second time through.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#post">→ diff</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Entry 2 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">2024-02-28 · commit 7d9e0a2</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em">The Component Library Tax</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Why most component libraries fail, and what a small team can do differently. A working hypothesis, not a framework.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#post">→ diff</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Entry 3 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">2024-01-12 · commit 4c1b8f3</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em">Shipping Imperfect Things</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">A shipped imperfect thing teaches more than a perfect unshipped one. A working principle, with examples.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#post">→ diff</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Entry 4 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">2023-12-05 · commit 9e2a7d1</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em">Archive Honestly</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Old work stays visible, even when I'd do it differently now. Here's why — and what it costs.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#post">→ diff</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Entry 5 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">2023-11-20 · commit 1b5c3e8</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em">The 30-Day Defect Window</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Why every contract should have one, and what it actually covers when a client calls at 3am.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#post">→ diff</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->
