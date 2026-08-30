<?php
/**
 * Title: Demo — Curator (Art Curator)
 * Slug: godevs-portfolio/demo-curator
 * Description: Art curator portfolio. Editorial typography hero, asymmetric portfolio, typography CTA. Recommended style variation: Editorial.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, specialized,, art, curator
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-curator godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-curator alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-editorial","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- wp:group {"tagName":"section","className":"godevs-reveal","style":__BG_STYLE__,"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull __BG_CLASS__">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Specialized / Art Curator</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 7vw, 4.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 7vw, 4.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">Curator.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:520px">Art curator portfolio. Editorial typography hero, asymmetric portfolio, typography CTA.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a href="#work" class="wp-block-button__link wp-element-button">See work</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#contact" class="wp-block-button__link wp-element-button">Get in touch →</a></div>
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
                        <p class="is-style-eyebrow">Recent projects</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2} -->
                        <h2 class="wp-block-heading">Selected work.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Curator — Film Project" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
                                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                        <p class="is-style-eyebrow">01 · 2024</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                        <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Film Project</h3>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>A short description of the project. The work that went into it. What it became.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
                                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                                        <p class="is-style-eyebrow">02 · 2024</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                        <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Music Production</h3>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>A short description of the project. The work that went into it. What it became.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Curator — Music Production" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- CTA -->

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
                <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                <p class="is-style-eyebrow">Get in touch</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 7rem)","lineHeight":"1","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 7rem);line-height:1;letter-spacing:-0.035em;font-weight:700"><a href="#contact">Get in touch →</a></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">Available for new projects, collaborations, and conversations.</p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-editorial","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
