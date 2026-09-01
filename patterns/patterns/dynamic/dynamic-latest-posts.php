<?php
/**
 * Title: Dynamic — Latest Blog Posts
 * Slug: godevs-portfolio/dynamic-latest-posts
 * Description: Live grid of the 3 most recent blog posts. Updates automatically when you publish new content.
 * Categories: godevs-portfolio-blog, godevs-portfolio-demos
 * Keywords: dynamic, blog, posts, latest, grid, query, loop
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Journal</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Latest notes.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"8px"}}} /-->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)"><!-- wp:post-date /--> · <!-- wp:post-terms {"term":"category"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->
<!-- wp:post-excerpt {"moreText":"Read more →","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No posts yet. Publish your first post to see it here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
