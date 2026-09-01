<?php
/**
 * Title: Demo — Plan (Work)
 * Slug: godevs-portfolio/demo-plan-work
 * Description: Work page for the Plan demo. Asymmetric split project showcase. Uses the Minimal style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, plan, work, projects, architecture
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Selected work</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Built work.</h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0"},"layout":{"type":"default"}}} -->
<section class="wp-block-group alignfull godevs-reveal-stagger">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" alt="House on the Hill — residential project" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2024 · Residential</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">House on the Hill</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">Single-family residence sited into a south-facing slope. 240 m² of concrete, glass, and restraint.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2023 · Commercial</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Atelier Office</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">A design studio's workspace — 400 m² of adaptive reuse in a former textile factory.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" alt="Atelier Office — adaptive reuse of textile factory" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"layout":{"type":"default"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" alt="Public Library — community center" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2022 · Public</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Community Library</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">A 600 m² public library and community space. Timber structure, natural light, and a reading room that faces south.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->
