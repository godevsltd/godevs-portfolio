<?php
/**
 * Title: Hero
 * Slug: godevs-portfolio/hero
 * Categories: featured, header
 * Description: A bold editorial hero section with display typography, a lead paragraph, and a primary plus outline CTA.
 * Keywords: hero, landing, intro, masthead
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"}},"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-hero">
	<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
	<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.1em">Portfolio · Studio</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"var(--wp--preset--font-size--huge)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
	<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--heading);font-size:var(--wp--preset--font-size--huge);line-height:1.05;letter-spacing:-0.03em;font-weight:600">We design and build websites that earn attention — and keep it.</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)">A small studio working on design systems, editorial portfolios, and the occasional ambitious marketing site for partners who care about the craft.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/work">See selected work</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact">Start a project</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
