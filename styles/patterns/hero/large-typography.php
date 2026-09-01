<?php
/**
 * Title: Hero — Large Typography
 * Slug: godevs-portfolio/hero-large-typography
 * Description: An editorial hero dominated by a single oversized display headline, with a small caption-style paragraph below. Designed to make typography the primary visual element.
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, large, typography, display, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-large-typography godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-large-typography alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow">Practice</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 7.5rem)","lineHeight":"0.95","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 7.5rem);line-height:0.95;letter-spacing:-0.035em;font-weight:700">Design. Write. Build. Ship. Repeat.</h1>
		<!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium)">A working portfolio. Notes on what I make, what I ship, and what I keep learning. Updated when there's something worth saying.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Based in Berlin — Working with clients worldwide</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
