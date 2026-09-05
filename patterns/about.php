<?php
/**
 * Title: About
 * Slug: godevs-portfolio/about
 * Categories: featured, about
 * Description: A two-column about section — editorial copy on the left, a portrait-style image placeholder on the right. Use on studio and personal portfolio pages.
 * Keywords: about, bio, profile, studio, person
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-about","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-about" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">About the studio</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--70)">
			<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.15;letter-spacing:-0.02em;font-weight:700">A small team, deliberate about how we work.</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">The studio is a handful of designers and engineers who prefer long, focused engagements over fast turnaround work. We take on a small number of projects each year, and ship them carefully — design system first, content second, polish last.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--normal);line-height:1.7;margin-top:var(--wp--preset--spacing--40)">Most of what we make runs on WordPress, simply because it lets us hand the keys back to the team who owns the site. The Site Editor does most of the heavy lifting; we fill in the design system and the editorial patterns.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about">Read the full story</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img alt="" style="border-radius:var(--wp--custom--radius--lg, 12px);aspect-ratio:4/5;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
