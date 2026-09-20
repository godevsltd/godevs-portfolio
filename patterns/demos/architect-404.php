<?php
/**
 * Title: Demo - Architect (Architecture) - 404
 * Slug: godevs-portfolio/demo-architect-404
 * Description: ARCHITECT 404 - editorial not-found. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, 404, error
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-architect","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-architect alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-architect","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - 404 (editorial, asymmetric, generous) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="min-height:80vh;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Asymmetric 60/40 columns: content left, breathing room right -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                                        <div class="wp-block-group">
                                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Error 404</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(3rem, 8vw, 7rem)"}},"layout":{"selfStretch":"fit","flexSize":"16ch"}} -->
                                                <h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(3rem, 8vw, 7rem);max-width:16ch">This page is off the <span class="arch-italic">plan.</span></h1>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"selfStretch":"fit","flexSize":"48ch"}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--40);max-width:48ch">The page you're looking for isn't here - it may have moved, or never existed. Let's get you back to the work.</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
                                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                                        <div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Back to home →</a></div>
                                                        <!-- /wp:button -->
                                                        <!-- wp:button {"className":"is-style-arch-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                                        <div class="wp-block-button is-style-arch-outline"><a href="/projects" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Explore projects →</a></div>
                                                        <!-- /wp:button -->
                                                </div>
                                                <!-- /wp:buttons -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:paragraph {"align":"right","className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(4rem, 12vw, 10rem)","lineHeight":"0.9","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|line"}}} -->
                                        <p class="arch-stat-num has-text-color has-text-align-right" style="color:var(--wp--preset--color--line);font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(4rem, 12vw, 10rem);line-height:0.9;letter-spacing:-0.04em">404</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
