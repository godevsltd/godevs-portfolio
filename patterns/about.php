<?php
/**
 * Title: About
 * Slug: godevs-portfolio/about
 * Categories: featured, about
 * Description: A two-column about section — editorial copy on the left, a portrait-style image placeholder on the right.
 * Keywords: about, bio, profile, studio
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-about","layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-about">
	<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
	<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.1em">About the studio</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">A small team, deliberate about how we work.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">The studio is a handful of designers and engineers who prefer long, focused engagements over fast turnaround work. We take on a small number of projects each year, and ship them carefully — design system first, content second, polish last.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Most of what we make runs on WordPress, simply because it lets us hand the keys back to the team who owns the site. The Site Editor does most of the heavy lifting; we fill in the design system and the editorial patterns.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about">Read the full story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md)"}}} -->
			<figure class="wp-block-image">
				<img alt="" style="border-radius:var(--wp--custom--radius--md);aspect-ratio:4/5;object-fit:cover" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
