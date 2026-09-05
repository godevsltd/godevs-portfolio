<?php
/**
 * Title: Services — Three Column List
 * Slug: godevs-portfolio/services-three-column-list
 * Description: A three-column services list with vertical hairline dividers between columns. Distinct from Feature Cards in its borderless, list-led composition.
 * Categories: godevs-portfolio-services
 * Keywords: services, three-column, list, minimal, offerings
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-services-three-column-list godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-services-three-column-list alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow">Services</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","fontFamily":"var:preset|font-family|display","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">What I do.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)">Identity</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Logo systems, typography pairing, color systems, and the visual vocabulary that holds identity together across formats.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)">Editorial</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Magazine systems, long-form layouts, and component libraries for publication sites — built on Gutenberg and Full Site Editing.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)">Engineering</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Performance audits, accessibility passes, and front-end engineering — turning design into a site that holds up at scale.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
