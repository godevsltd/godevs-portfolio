<?php
/**
 * Title: Portfolio — Editorial
 * Slug: godevs-portfolio/portfolio-editorial
 * Description: An editorial portfolio list with full-width project images stacked vertically, each with year, title, and a one-line description below. Magazine-style composition.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, editorial, magazine, list, full-width, vertical
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-portfolio-editorial godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-portfolio-editorial alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)">
                        <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
                        <p class="is-style-eyebrow">Selected work</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
                        <h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">Recent projects, in order.</h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":25,"query":{"perPage":5,"postType":"godevs_project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
                <div class="wp-block-query">
                        <!-- wp:post-template -->
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"21/9"} /-->
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
                                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
                                                <!-- wp:post-date /-->
                                                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} /-->
                                                <!-- wp:post-excerpt {"excerptLength":30} /-->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                                <!-- wp:paragraph -->
                                <p>No projects found yet.</p>
                                <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
</section>
<!-- /wp:group -->
