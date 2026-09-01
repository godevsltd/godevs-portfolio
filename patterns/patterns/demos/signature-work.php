<?php
/**
 * Title: Demo — Signature (Work)
 * Slug: godevs-portfolio/demo-signature-work
 * Description: Work page for the Signature demo. 3-column project grid. Uses the Elegant style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, signature, work, portfolio, personal
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Selected work</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"400","fontStyle":"italic"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:400;font-style:italic">Recent brand work.</h1>
<!-- /wp:heading -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Founder personal brand identity system" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024 · Personal Brand</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Founder Identity</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Executive thought-leadership platform" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024 · Content Strategy</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Executive Platform</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Creator brand refresh project" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2023 · Brand Refresh</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Creator Refresh</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-portfolio","theme":"godevs-portfolio","tagName":"footer"} /-->
