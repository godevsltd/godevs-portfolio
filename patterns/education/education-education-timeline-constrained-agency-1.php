<?php
/**
 * Title: Education — Inline List
 * Slug: godevs-portfolio/education-education-timeline-constrained-agency-1
 * Description: A simple inline list of education credentials for a minimal About page — credentials displayed as a single horizontal flow with dot separators, no cards or borders. The most compact education composition.
 * Categories: godevs-portfolio-education
 * Keywords: education, inline, list, minimal, compact, horizontal
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow">Education</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p style="font-size:var(--wp--preset--font-size|medium)"><strong>M.A. Interaction Design</strong>, Royal College of Art</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium)">·</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p style="font-size:var(--wp--preset--font-size|medium)"><strong>B.A. Design</strong>, Rhode Island School of Design</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"className":"is-style-thin"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2014—2016 · 2010—2014</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
