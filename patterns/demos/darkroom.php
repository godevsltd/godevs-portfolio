<?php
/**
 * Title: Demo — Darkroom (Dark)
 * Slug: godevs-portfolio/demo-darkroom
 * Description: Dark-mode photographer portfolio. Dark creative hero, large showcase portfolio, full-width dark CTA. Recommended style variation: Dark.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, photography,, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-darkroom godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-darkroom alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- Hero -->

<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                <p class="is-style-eyebrow">Photography / Dark</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 8vw, 6rem)","lineHeight":"1","letterSpacing":"-0.025em","fontWeight":"700"}}} -->
                <h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 8vw, 6rem);line-height:1;letter-spacing:-0.025em;font-weight:700">Darkroom — selected work.</h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
                <p style="font-size:var(--wp--preset--font-size--medium)">A working portfolio, kept current.</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
                        <div class="wp-block-button is-style-outline"><a href="#work" class="wp-block-button__link wp-element-button">See selected work</a></div>
                        <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
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

<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
                <!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
                <p class="is-style-eyebrow has-text-align-center">Available for new work</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
                <h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.1;letter-spacing:-0.02em">Let's build something good together.</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
                <p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Currently taking on new engagements.</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
                        <div class="wp-block-button is-style-outline"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
                        <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
