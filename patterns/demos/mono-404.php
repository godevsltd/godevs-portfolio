<?php
/**
 * Title: Demo - Mono (Developer) - 404
 * Slug: godevs-portfolio/demo-mono-404
 * Description: MONO 404 - technical not-found. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, 404, error
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - 404 (technical, quiet) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + code accent -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Error 404</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Not found · 0 bytes returned</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display H1 -->
                        <!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">Page <span class="mono-accent-text">not found.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy + code accent -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"0","maxWidth":"60ch"}}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:0;max-width:60ch">The page you're looking for isn't here - it may have been moved, renamed, or never existed. Let's get you back on track.</p>
                                <!-- /wp:paragraph -->

                                <!-- Code accent -->
                                <!-- wp:html -->
                                <div class="mono-code" style="max-width: 38rem;">
<span class="mono-code-muted">// request</span>
<span class="mono-code-accent">GET</span> /this-page → <span class="mono-code-accent">404</span> Not Found
                                </div>
                                <!-- /wp:html -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Navigation buttons -->
                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}}} -->
                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:button {"style":{"border":{"radius":"4px"},"typography":{"fontSize":"0.875rem","fontWeight":"500","letterSpacing":"0.01em"}}} -->
                                <div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:4px;font-size:0.875rem;font-weight:500;letter-spacing:0.01em">Back to home →</a></div>
                                <!-- /wp:button -->
                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px"},"typography":{"fontSize":"0.875rem","fontWeight":"500","letterSpacing":"0.01em"}}} -->
                                <div class="wp-block-button is-style-outline"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:4px;font-size:0.875rem;font-weight:500;letter-spacing:0.01em">View work</a></div>
                                <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
