<?php
/**
 * Title: Blog — Editorial Magazine
 * Slug: godevs-portfolio/blog-editorial-magazine
 * Description: A magazine-style blog layout with a large featured post, a horizontal mid-row of two secondary posts, and a numbered list of recent posts below. Distinct in its publication-style multi-tier composition.
 * Categories: godevs-portfolio-blog
 * Keywords: blog, magazine, editorial, multi-tier, featured, publication
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-blog-editorial-magazine","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-blog-editorial-magazine alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Journal</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">Recent writing.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":32,"query":{"perPage":5,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
					<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
					<div class="wp-block-columns are-vertically-aligned-center">
						<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
						</div>
						<!-- /wp:column -->
						<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
								<p class="is-style-eyebrow">Featured</p>
								<!-- /wp:paragraph -->
								<!-- wp:post-date /-->
								<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} /-->
								<!-- wp:post-excerpt {"excerptLength":40} /-->
								<!-- wp:read-more {"content":"Read article →","style":{"typography":{"textDecoration":"underline"}}} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph -->
				<p>No posts found yet.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->

		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"}}}} /-->

		<!-- wp:query {"queryId":33,"query":{"perPage":5,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","offset":1,"inherit":false,"taxQuery":null,"parents":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:post-title {"level":4,"isLink":true} /-->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
