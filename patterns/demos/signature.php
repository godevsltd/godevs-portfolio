<?php
/**
 * Title: Demo — Signature (Brand)
 * Slug: godevs-portfolio/demo-signature
 * Description: Personal brand site. Split hero with portrait, about then services, split CTA. Elegant tone. Recommended style variation: Elegant.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, personal,, brand
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-signature godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-signature alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- Hero -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}},"className":"godevs-reveal-stagger"} -->
                <div class="wp-block-columns are-vertically-aligned-center">
                        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                        <p class="is-style-eyebrow">Personal / Brand</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
                                        <h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.1;letter-spacing:-0.02em">Signature — selected work.</h1>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
                                        <p style="font-size:var(--wp--preset--font-size--medium)">A working portfolio, kept current.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons -->
                                        <div class="wp-block-buttons">
                                                <!-- wp:button -->
                                                <div class="wp-block-button"><a href="#work" class="wp-block-button__link wp-element-button">See selected work</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
                                <!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Portrait of the author" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Body section -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-top">
                        <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
                        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
                                <!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Portrait of the author" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
                        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                        <p class="is-style-eyebrow">About</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2} -->
                                        <h2 class="wp-block-heading">A small studio practice.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>I work at the intersection of editorial design, accessibility, and modern WordPress engineering.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

	<!-- Next section -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
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
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
                <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Project one</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Project two</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Project three</h3>
                                <!-- /wp:heading -->
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
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                        <p class="is-style-eyebrow">Let's talk</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                        <h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Have a project in mind?</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
                        <div class="wp-block-button is-style-outline"><a href="#contact" class="wp-block-button__link wp-element-button">Start a conversation</a></div>
                        <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-portfolio","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
