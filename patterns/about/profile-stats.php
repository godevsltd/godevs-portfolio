<?php
/**
 * Title: About — Profile and Stats
 * Slug: godevs-portfolio/about-profile-stats
 * Description: A vertical-stack about section with a centered portrait, a one-line bio, and a horizontal stat row. Distinct from Image and Stats in its vertical, centered composition.
 * Categories: godevs-portfolio-about
 * Keywords: about, profile, bio, stats, centered
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-about-profile-stats","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-about-profile-stats alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:image {"width":160,"height":160,"style":{"border":{"radius":"9999px"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"size-full is-style-default"} -->
                <figure class="wp-block-image size-full is-style-default has-custom-border" style="width:160px;height:160px;align-self:center">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of the author" style="border-radius:9999px;width:160px;height:160px;object-fit:cover"/>
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
                <p class="is-style-eyebrow has-text-align-center">About</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.15"}}} -->
                <h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--x-large);line-height:1.15">A small studio practice focused on the parts of the work that compound.</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
                <p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Identity, editorial, and front-end engineering. Each project is an opportunity to make the next one better — clearer typography, more considered spacing, faster load, deeper accessibility.</p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70)">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","selfStretch":"fit","flexSize":"180px"}} -->
                        <div class="wp-block-group" style="width:180px">
                                <!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--x-large)">12</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p class="has-text-align-center" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Years of practice</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","selfStretch":"fit","flexSize":"180px"}} -->
                        <div class="wp-block-group" style="width:180px">
                                <!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--x-large)">80+</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p class="has-text-align-center" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Sites shipped</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","selfStretch":"fit","flexSize":"180px"}} -->
                        <div class="wp-block-group" style="width:180px">
                                <!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--x-large)">5</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
                                <p class="has-text-align-center" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Open-source projects</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->
