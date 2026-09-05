<?php
/**
 * Title: Demo — Gridline (WordPress)
 * Slug: godevs-portfolio/demo-gridline
 * Description: WordPress developer portfolio. Typography-led hero, numbered services grid, text-link CTA. Recommended style variation: Minimal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, developer,, wordpress
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-gridline godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-gridline alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Developer / WordPress</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|huge","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 7vw, 4.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">Gridline.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-size:var(--wp--preset--font-size--medium);max-width:520px">WordPress developer portfolio. Typography-led hero, numbered services grid, text-link CTA.</p>
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
                        <!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-eyebrow">Services</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700"}}} -->
                        <h2 class="wp-block-heading">What I do.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
                <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xxx-large","fontFamily":"var:preset|font-family|display","fontWeight":"700","lineHeight":"1"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);font-weight:700;line-height:1">01</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading">Strategy</h3>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>Positioning and voice.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-color:var(--wp--preset--color--border);border-right-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-color:var(--wp--preset--color--border);border-left-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xxx-large","fontFamily":"var:preset|font-family|display","fontWeight":"700","lineHeight":"1"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);font-weight:700;line-height:1">02</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading">Design</h3>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>Identity and system.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-color:var(--wp--preset--color--border);border-right-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-color:var(--wp--preset--color--border);border-left-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xxx-large","fontFamily":"var:preset|font-family|display","fontWeight":"700","lineHeight":"1"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);font-weight:700;line-height:1">03</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading">Build</h3>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>Engineering and ship.</p>
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

<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
                <!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                <p class="is-style-eyebrow">Get in touch</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 7rem)","lineHeight":"1","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 7rem);line-height:1;letter-spacing:-0.035em;font-weight:700"><a href="#contact">Start a conversation →</a></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">Available for new projects, collaborations, and conversations.</p>
                <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
