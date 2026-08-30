<?php
/**
 * Title: About — Image and Stats
 * Slug: godevs-portfolio/about-image-and-stats
 * Description: A two-column about section with a portrait image and a headline, paragraph, and a small row of stat blocks beneath.
 * Categories: godevs-portfolio-about
 * Keywords: about, bio, stats, profile, intro
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-about-image-and-stats","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-about-image-and-stats alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-top">
                        <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
                        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
                                <!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                <figure class="wp-block-image has-custom-border">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of the author in studio" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover"/>
                                </figure>
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
                                        <h2 class="wp-block-heading">A designer-developer focused on the parts others skip.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                        <p>I work with founders and editorial teams to ship portfolio and product sites that feel considered — fast, accessible, and grounded in a real point of view. The work below spans the last several years.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|40"}}}} -->
                                <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                        <!-- wp:column -->
                                        <div class="wp-block-column">
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">12</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
                                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Years of practice</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:column -->
                                        <!-- wp:column -->
                                        <div class="wp-block-column">
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">80+</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
                                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Sites shipped</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:column -->
                                        <!-- wp:column -->
                                        <div class="wp-block-column">
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                                <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">5</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"typography":{"fontSize":"var:preset|font-size|small"}} -->
                                                <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Open-source projects</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->
