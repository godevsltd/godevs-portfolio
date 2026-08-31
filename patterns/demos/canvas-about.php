<?php
/**
 * Title: Demo — Canvas (About)
 * Slug: godevs-portfolio/demo-canvas-about
 * Description: About page for the Canvas demo. Split bio with portrait, design philosophy, and skills showcase. Uses the Creative style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, canvas, about, bio, designer, creative
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of the designer in their studio workspace" style="aspect-ratio:4/5;object-fit:cover;border-radius:12px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">About</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">A designer who builds, not just draws.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:520px">Ten years of designing digital products — from early-stage startup MVPs to enterprise design systems. I work at the intersection of design and engineering, which means the interfaces I design actually get built the way I intended.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:520px">Currently independent, taking on two design engagements per quarter. Previously senior product designer at Foundry Co., where I built the component library still powering their platform today.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Let's collaborate</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#work" class="wp-block-button__link wp-element-button">See my work →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Toolkit</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Tools I design with.</h2>
<!-- /wp:heading -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-columns godevs-reveal-stagger">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Design</h3>
<!-- /wp:heading -->
<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
<ul class="wp-block-list" style="font-size:var(--wp--preset--font-size|small)">
<!-- wp:list-item -->
<li>Figma — UI + prototyping</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Adobe Illustrator — identity</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>After Effects — motion</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Build</h3>
<!-- /wp:heading -->
<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
<ul class="wp-block-list" style="font-size:var(--wp--preset--font-size|small)">
<!-- wp:list-item -->
<li>React + TypeScript</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>CSS Grid + Flexbox</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Storybook — component dev</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Systems</h3>
<!-- /wp:heading -->
<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
<ul class="wp-block-list" style="font-size:var(--wp--preset--font-size|small)">
<!-- wp:list-item -->
<li>Design tokens</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Component documentation</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Accessibility audits</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->
