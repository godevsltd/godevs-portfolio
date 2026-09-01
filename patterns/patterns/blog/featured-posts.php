<?php
/**
 * Title: Blog — Featured Posts
 * Slug: godevs-portfolio/blog-featured-posts
 * Description: A two-column featured posts layout with one large lead post and a stacked list of secondary posts, anchored by a section header.
 * Categories: godevs-portfolio-blog
 * Keywords: blog, featured, posts, journal, latest
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-blog-featured-posts godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-blog-featured-posts alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow">Journal</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Recent writing</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p style="font-size:var(--wp--preset--font-size--small)"><a href="/journal">All posts</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}},"className":"godevs-reveal-stagger"} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:query {"queryId":12,"query":{"perPage":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"taxQuery":null,"parents":[]}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
							<!-- wp:post-date /-->
							<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} /-->
							<!-- wp:post-excerpt {"excerptLength":40} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:query {"queryId":13,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","offset":1,"inherit":false,"taxQuery":null,"parents":[]}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
						<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
							<!-- wp:post-date /-->
							<!-- wp:post-title {"level":4,"isLink":true} /-->
							<!-- wp:post-excerpt {"excerptLength":20} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
