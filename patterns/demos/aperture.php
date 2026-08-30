<?php
/**
 * Title: Demo — Aperture (General)
 * Slug: godevs-portfolio/demo-aperture
 * Description: Photographer portfolio. Full-bleed image hero, large showcase portfolio, minimal CTA. Image-first. Recommended style variation: Minimal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, photography,, general
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-aperture godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-aperture alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- Hero -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>","dimRatio":50,"overlayColor":"primary","minHeight":680,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
        <div class="wp-block-cover alignfull" style="min-height:680px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-0" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast"} -->
                <p class="is-style-eyebrow has-contrast-color has-text-color">Photography / General</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
                <h1 class="wp-block-heading has-contrast-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.02em">Aperture — selected work.</h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <p class="has-contrast-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">A working portfolio, kept current.</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
                        <div class="wp-block-button is-style-outline"><a href="#work" class="wp-block-button__link wp-element-button">See selected work</a></div>
                        <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
        </div></div>
        <!-- /wp:cover -->
</section>
<!-- /wp:group -->

        <!-- Body section -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                        <p class="is-style-eyebrow">Showcase</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2} -->
                        <h2 class="wp-block-heading">Featured project.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" alt="Featured project cover" style="border-radius:8px;aspect-ratio:21/9;object-fit:cover"/></figure>
                <!-- /wp:image -->
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                <p class="is-style-eyebrow">Featured</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Project title</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}}} -->
                        <p style="color:var(--wp--preset--color--muted)">2024 · Category</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- CTA -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:separator {"className":"is-style-thin"} /-->
                <!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                <h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Available for new work.</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                <p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--small)"><a href="#contact">Start a conversation →</a></p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
