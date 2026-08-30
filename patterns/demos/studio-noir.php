<?php
/**
 * Title: Demo — Studio Noir (Studio Alt)
 * Slug: godevs-portfolio/demo-studio-noir
 * Description: Dark creative studio. Image-led dark hero, asymmetric portfolio, full-width dark CTA. Cinematic. Recommended style variation: Dark.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, creative,, studio, alt
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-studio-noir godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-studio-noir alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- Hero -->

<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
                <!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
                <p class="is-style-eyebrow has-text-align-center">Creative / Studio Alt</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
                <h1 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.02em">Studio Noir — selected work.</h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">A working portfolio, kept current.</p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Body section -->

<!-- wp:group {"tagName":"section","backgroundColor":"surface","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-background-color has-background">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                        <p class="is-style-eyebrow">Selected work</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2} -->
                        <h2 class="wp-block-heading">Recent projects.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
                <div class="wp-block-columns are-vertically-aligned-center">
                        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                                <!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                                <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                <p class="is-style-eyebrow">01 · 2024</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Project one</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph -->
                                <p>A short description. What it became.</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
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
