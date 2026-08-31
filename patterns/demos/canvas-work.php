<?php
/**
 * Title: Demo — Canvas (Work)
 * Slug: godevs-portfolio/demo-canvas-work
 * Description: Work page for the Canvas demo. Editorial alternating split layout with large project images and descriptions. Uses the Creative style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, canvas, work, portfolio, editorial, designer
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Selected work</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Recent design work.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:520px">Selected from the last three years — each project shipped to production and is still in use today.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0"},"layout":{"type":"default"}}} -->
<section class="wp-block-group alignfull godevs-reveal-stagger">

<!-- Project 1 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Studio Field — complete brand identity system" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2024 · Brand Identity</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Studio Field</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">Complete visual identity — wordmark, type pairing, color system, and editorial templates. Built to scale from business card to full site.</p>
<!-- /wp:paragraph -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#" class="wp-block-button__link wp-element-button">View case study →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- Project 2 — reversed -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2024 · Product Design</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Foundry Co.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">Design system and component library for a B2B analytics platform. 60+ components with full documentation.</p>
<!-- /wp:paragraph -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#" class="wp-block-button__link wp-element-button">View case study →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Foundry Co. — component library and design system" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- Project 3 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Long-form Journal — editorial redesign" style="border-radius:12px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2023 · Editorial Design</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Long-form Journal</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">Magazine-style editorial redesign. Doubled reader retention and reduced bounce rate by 30%.</p>
<!-- /wp:paragraph -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#" class="wp-block-button__link wp-element-button">View case study →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->
