<?php
/**
 * Title: Portfolio — Large Showcase
 * Slug: godevs-portfolio/portfolio-large-showcase
 * Description: A large-format portfolio showcase with one full-bleed image taking center stage, accompanied by minimal caption text below. Distinct in its gallery-like single-image emphasis.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, large, showcase, gallery, single-image, full-bleed
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-portfolio-large-showcase godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-portfolio-large-showcase alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Showcase</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">One project at a time.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":27,"query":{"perPage":1,"postType":"godevs_project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"21/9","style":{"border":{"radius":"8px"}}} /-->
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
							<p class="is-style-eyebrow">Featured · Most recent</p>
							<!-- /wp:paragraph -->
							<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:post-terms {"term":"category"} /-->
							<!-- wp:post-date /-->
						</div>
						<!-- /wp:group -->
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
