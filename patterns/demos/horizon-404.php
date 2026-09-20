<?php
/**
 * Title: Demo - Horizon (Photography) - 404
 * Slug: godevs-portfolio/demo-horizon-404
 * Description: HORIZON 404 - travel-themed not-found. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, 404, error, travel
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-horizon","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-horizon alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-horizon","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 404 === -->
        <!-- wp:cover {"useFeaturedImage":false,"dimRatio":50,"overlayColor":"primary","minHeight":80,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover" style="min-height:80vh;padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-50 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="Lost road - dramatic empty travel landscape at dusk" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-faroe.webp' ); ?>" style="object-fit:cover;object-position:center" loading="lazy"/>
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-cover__inner-container">
                        <div class="wp-block-group alignwide">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.08em;text-transform:uppercase;font-weight:500">- Error 404 · Off the map</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.96","fontSize":"clamp(3rem, 9vw, 8rem)"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h1 class="wp-block-heading hor-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.96;font-size:clamp(3rem, 9vw, 8rem)">Looks like we've taken the <span class="hor-accent-text">wrong road.</span></h1>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|contrast"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;max-width:46ch">The page you're looking for isn't here - it may have moved, been archived, or never existed. Let's get you back on the right path.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                        <div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Return Home →</a></div>
                                        <!-- /wp:button -->
                                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0","color":"var:preset|color|contrast"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                        <div class="wp-block-button is-style-outline"><a href="/journeys" class="wp-block-button__link wp-element-button has-text-color has-custom-font-size" style="border-color:var(--wp--preset--color--contrast);border-radius:0;color:var(--wp--preset--color--contrast);font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Explore Journeys</a></div>
                                        <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                        </div>
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:cover -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
