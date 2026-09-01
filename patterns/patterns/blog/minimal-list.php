<?php
/**
 * Title: Blog — Minimal List
 * Slug: godevs-portfolio/blog-minimal-list
 * Description: An ultra-minimal blog list with only post title and date, separated by hairline borders. Distinct in its restrained, text-only list composition.
 * Categories: godevs-portfolio-blog
 * Keywords: blog, minimal, list, posts, restrained
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-blog-minimal-list godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-blog-minimal-list alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Journal</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Recent writing.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":34,"query":{"perPage":10,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} /-->
					<!-- wp:post-date /-->
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
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
