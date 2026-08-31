<?php
/**
 * Title: Demo — Canvas (Case Studies)
 * Slug: godevs-portfolio/demo-canvas-case-studies
 * Description: Case studies page for the Canvas demo. Three case-study preview cards with result metrics. Uses the Creative style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, canvas, case studies, results, metrics, designer
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Case studies · Results</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Outcomes, not just screenshots.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:520px">Each case study pairs the design work with the measurable result it produced.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Case study: Studio Field brand identity" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">2024 · Brand Identity</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Studio Field</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:600">3× brand recognition</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Complete identity system for a design studio. The new visual language tripled unaided brand recall in their target market.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Case study: Foundry Co. component library" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">2024 · Design System</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Foundry Co.</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:600">40% faster shipping</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Component library and design tokens for a B2B platform. Reduced design-to-dev handoff time by 40%.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Case study: Long-form Journal editorial redesign" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">2023 · Editorial</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Long-form Journal</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:600">-30% bounce rate</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Editorial redesign for a journalism site. Doubled reader retention and cut bounce rate by 30%.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->
