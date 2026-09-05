<?php
/**
 * Title: Demo — Frame (Web)
 * Slug: godevs-portfolio/demo-frame
 * Description: Web developer portfolio. Centered intro, dense four-column project grid, typography CTA. Recommended style variation: Modern.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, developer,, web
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow">Developer / Web</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|huge","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400","fontStyle":"italic"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400;font-style:italic">Frame</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|large","lineHeight":"1.5"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--large);line-height:1.5;max-width:520px">Web developer portfolio. Centered intro, dense four-column project grid, typography CTA.</p>
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
                        <p class="is-style-eyebrow">Recent builds</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700"}}} -->
                        <h2 class="wp-block-heading">Systems in production.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}},"className":"godevs-reveal-stagger"} -->
                <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"1/1","scale":"cover"} -->
                                <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Frame — Checkout Flow Redesign" style="aspect-ratio:1/1;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Checkout Flow Redesign</h4>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"1/1","scale":"cover"} -->
                                <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Frame — Headless CMS Migration" style="aspect-ratio:1/1;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Headless CMS Migration</h4>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"1/1","scale":"cover"} -->
                                <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Frame — Real-time Dashboard" style="aspect-ratio:1/1;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Real-time Dashboard</h4>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                                <!-- wp:image {"aspectRatio":"1/1","scale":"cover"} -->
                                <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Frame — API Gateway" style="aspect-ratio:1/1;object-fit:cover"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">API Gateway</h4>
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
