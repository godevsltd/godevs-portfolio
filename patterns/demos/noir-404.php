<?php
/**
 * Title: Demo - Noir (Film) - 404
 * Slug: godevs-portfolio/demo-noir-404
 * Description: NOIR 404 - cinematic not-found. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, 404, error
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

        <!-- Header (transparent over hero) -->
        <!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - CINEMATIC 404 (full-screen) === -->
        <!-- wp:cover {"useFeaturedImage":false,"dimRatio":60,"overlayColor":"primary","minHeight":90,"isDark":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover" style="min-height:90vh;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">
                <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="Cinematic empty film set - lone shaft of warm light across a dark, abandoned room with atmospheric haze" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-hero.webp' ); ?>" style="object-fit:cover;object-position:center" loading="eager"/>
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-cover__inner-container" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">

                        <!-- Inner wide container -->
                        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group alignwide">

                                <!-- Eyebrow + 404 -->
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","maxWidth":"72ch"}}} -->
                                <div class="wp-block-group" style="max-width:72ch">
                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Error 404</p>
                                        <!-- /wp:paragraph -->

                                        <!-- H1 -->
                                        <!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.92","fontSize":"clamp(3.5rem, 12vw, 12rem)","textTransform":"uppercase"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.04em;line-height:0.92;font-size:clamp(3.5rem, 12vw, 12rem);text-transform:uppercase">This scene doesn't <span class="noir-italic">exist.</span></h1>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:group -->

                                <!-- Supporting copy -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"},"maxWidth":"62ch"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--30);max-width:62ch">The page you're looking for isn't here - it may have been left on the cutting room floor. Let's get you back to the films.</p>
                                <!-- /wp:paragraph -->

                                <!-- Navigation buttons -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.2em"}}} -->
                                        <div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:600;letter-spacing:0.2em">Back to home →</a></div>
                                        <!-- /wp:button -->
                                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.2em"}}} -->
                                        <div class="wp-block-button is-style-outline"><a href="#showreel" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:600;letter-spacing:0.2em">Watch the reel</a></div>
                                        <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                        </div>
                        <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:cover -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-noir","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
