<?php
/**
 * Title: Portfolio Grid
 * Slug: godevs-portfolio/portfolio-grid
 * Categories: featured, portfolio, query
 * Description: A three-column portfolio grid using the Query block to display featured projects with title, client, and discipline.
 * Keywords: portfolio, work, grid, projects, case studies
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-portfolio-grid","layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-portfolio-grid">
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
		<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.1em">Selected work</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xxx-large)"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xxx-large)">Recent projects.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/work">View all work →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":10,"query":{"perPage":6,"postType":"post","order":"desc","orderBy":"date","taxQuery":{"category":[],"post_tag":[]},"inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"aspectRatio":"4/3","style":{"border":{"radius":"var(--wp--custom--radius--md)"}}} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
					<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.05em">Project</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-title {"level":3,"isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p>Project posts will appear here once published. Tag posts with the <em>Portfolio</em> category to surface them in this grid.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
