<?php
/**
 * Title: About — Editorial
 * Slug: godevs-portfolio/about-editorial
 * Description: A two-column editorial about layout with a left-column eyebrow + heading + body, and a right-column pull quote. Publication-style composition.
 * Categories: godevs-portfolio-about
 * Keywords: about, editorial, publication, pull-quote, two-column
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-about-editorial","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-about-editorial alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">About the practice</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.15"}}} -->
					<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large);line-height:1.15">The practice started in 2014 — a single freelancer figuring out identity work for studios. It grew into something more deliberate.</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>The work that holds up is rarely the work that wins awards. It's the work that's read carefully, that loads quickly, that stays accessible on a five-year-old phone, that the client can update themselves a year later without breaking anything.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p>That's the practice — design, write, build, ship, repeat. The portfolio below is what came out of those cycles.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:quote {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.4"}}} -->
				<blockquote class="wp-block-quote is-style-default" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.4;margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph -->
					<p>Slow is a feature, not a bug. Most of the work that lasts took longer than the brief allowed.</p>
					<!-- /wp:paragraph -->
					<!-- wp:cite -->
					<cite>— working note, 2023</cite>
					<!-- /wp:cite -->
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
