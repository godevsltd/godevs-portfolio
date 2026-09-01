<?php
/**
 * Title: Contact — Form + Map Placeholder
 * Slug: godevs-portfolio/contact-contact-split-dark-agency-1
 * Description: A split contact layout with form on the left and a map placeholder on the right. Dark surface. Distinct from the standard split: this one includes a visual map block (placeholder image styled as a map) rather than just an info sidebar.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, form, map, split, dark, placeholder, location
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
\texit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
\t<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
\t<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

\t\t<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
\t\t<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
\t\t\t<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Studio</p>
\t\t\t<!-- /wp:paragraph -->
\t\t\t<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
\t\t\t<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Visit the studio.</h2>
\t\t\t<!-- /wp:heading -->
\t\t</div>
\t\t<!-- /wp:group -->

\t\t<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
\t\t<div class="wp-block-columns are-vertically-aligned-top">

\t\t\t<!-- Left: Form -->
\t\t\t<!-- wp:column {"width":"55%","verticalAlignment":"top"} -->
\t\t\t<div class="wp-block-column" style="flex-basis:55%">
\t\t\t\t<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface","textColor":"primary"} -->
\t\t\t\t<div class="wp-block-group is-style-card-bordered has-surface-background-color has-text-color has-background has-primary-color" style="color:var(--wp--preset--color--primary);background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
\t\t\t\t\t<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
\t\t\t\t\t<p class="is-style-eyebrow">Send a message</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Name</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small);margin-top:var(--wp--preset--spacing--20)">Email</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@studio.com</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
\t\t\t\t\t<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
\t\t\t\t\t\t<!-- wp:button {"width":{"type":"full","size":100}} -->
\t\t\t\t\t\t<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#send" class="wp-block-button__link wp-element-button">Send message</a></div>
\t\t\t\t\t\t<!-- /wp:button -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:buttons -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)">Note: Placeholder form. Replace with CF7/WPForms/Jetpack.</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:group -->
\t\t\t</div>
\t\t\t<!-- /wp:column -->

\t\t\t<!-- Right: Map placeholder -->
\t\t\t<!-- wp:column {"width":"45%","verticalAlignment":"top"} -->
\t\t\t<div class="wp-block-column" style="flex-basis:45%">
\t\t\t\t<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"border":{"radius":"var(--wp--custom--radius--lg, 12px)"},"layout":{"type":"default"}},"backgroundColor":"surface-muted"} -->
\t\t\t\t<div class="wp-block-group has-surface-muted-background-color has-background" style="border-radius:12px">
\t\t\t\t\t<!-- wp:html -->
\t\t\t\t\t<div style="background:linear-gradient(135deg, var(--wp--preset--color--surface-muted) 0%, var(--wp--preset--color--border) 100%);border-radius:12px;height:320px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;">
\t\t\t\t\t\t<svg width="100%" height="100%" viewBox="0 0 400 320" fill="none" style="position:absolute;top:0;left:0;opacity:0.3;">
\t\t\t\t\t\t\t<path d="M0 80 L400 80 M0 160 L400 160 M0 240 L400 240 M80 0 L80 320 M160 0 L160 320 M240 0 L240 320 M320 0 L320 320" stroke="var(--wp--preset--color--muted)" stroke-width="1"/>
\t\t\t\t\t\t\t<path d="M50 50 Q150 100 200 150 T350 250" stroke="var(--wp--preset--color--accent)" stroke-width="2" fill="none"/>
\t\t\t\t\t\t\t<circle cx="200" cy="150" r="8" fill="var(--wp--preset--color--accent)"/>
\t\t\t\t\t\t\t<circle cx="200" cy="150" r="20" fill="var(--wp--preset--color--accent)" opacity="0.2"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<p style="position:relative;font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|small);color:var(--wp--preset--color--muted);text-align:center;padding:20px;">Berlin · 52.5200° N, 13.4050° E</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:html -->
\t\t\t\t\t<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|0"}}}} -->
\t\t\t\t\t<p class="is-style-eyebrow">Studio location</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t\t<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Kreuzberg, Berlin<br>By appointment only</p>
\t\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t</div>
\t\t\t\t<!-- /wp:group -->
\t\t\t</div>
\t\t\t<!-- /wp:column -->

\t\t</div>
\t\t<!-- /wp:columns -->

\t</div>
\t<!-- /wp:group -->
</section>
<!-- /wp:group -->
