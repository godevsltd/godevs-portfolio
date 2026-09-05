<?php
/**
 * Title: Demo — Technologist (Creative Technologist)
 * Slug: godevs-portfolio/demo-technologist
 * Description: Creative technologist portfolio. Dark mono hero, portfolio then stats, full-width dark CTA. Recommended style variation: Dark.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, specialized,, creative, technologist
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-technologist godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-technologist alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">Specialized / Creative Technologist</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|huge","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400","fontStyle":"italic"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2rem, 5vw, 4rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400;font-style:italic">Technologist</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|large","lineHeight":"1.5"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--large);line-height:1.5;max-width:520px">Creative technologist portfolio. Dark mono hero, portfolio then stats, full-width dark CTA.</p>
<!-- /wp:paragraph -->
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
                        <!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-eyebrow">Recent projects</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700"}}} -->
                        <h2 class="wp-block-heading">Selected creative work.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
                <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Technologist — Art Direction" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading">Art Direction</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Technologist — Visual Identity" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading">Visual Identity</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Technologist — Editorial Series" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading">Editorial Series</h3>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

	<!-- Next section -->

<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">80+</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="font-size:var(--wp--preset--font-size--small)">Projects shipped</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">12</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="font-size:var(--wp--preset--font-size--small)">Years</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">5</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="font-size:var(--wp--preset--font-size--small)">Open-source</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">100%</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p style="font-size:var(--wp--preset--font-size--small)">Lighthouse perf</p>
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
                <!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                <p class="is-style-eyebrow has-text-align-center">Available for new work</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
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
