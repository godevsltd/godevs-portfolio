<?php
/**
 * Title: Demo — Studio Craft (Work)
 * Slug: godevs-portfolio/demo-studio-craft-work
 * Description: Work page for the Studio Craft demo. 2-column portfolio grid with selected projects. Uses the Editorial style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, studio-craft, work, portfolio, grid, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Selected work</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Recent projects.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:560px">A selection from the last several years — kept current, archived honestly. Click any project for the full case study.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-columns godevs-reveal-stagger">
<!-- wp:column -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Project: Studio Field — Identity" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Identity</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Studio Field — Identity</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Project: Long-form Journal — Redesign" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Editorial</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Long-form Journal — Redesign</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Project: Foundry Co. — Product" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Product</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Foundry Co. — Product</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Project: Northbound — Dashboard" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Identity</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Northbound — Dashboard</h3>
<!-- /wp:heading -->
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

<!-- wp:template-part {"slug":"footer-multi-column","theme":"godevs-portfolio","tagName":"footer"} /-->
