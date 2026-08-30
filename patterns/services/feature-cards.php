<?php
/**
 * Title: Services — Feature Cards
 * Slug: godevs-portfolio/services-feature-cards
 * Description: A three-column grid of feature cards with an eyebrow, title, and description per service, anchored by a section header.
 * Categories: godevs-portfolio-services
 * Keywords: services, features, offerings, cards, grid
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-services-feature-cards","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-services-feature-cards alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Services</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">What I do</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium)">Three areas of practice, often combined into one engagement.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-default" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--large)">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Brand &amp; Visual Identity</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Identity systems, type pairings, and visual languages that hold up across formats — from a one-person portfolio to a multi-author publication.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-default" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--large)">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Editorial Web Design</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Long-form layouts, magazine systems, and component libraries built on Gutenberg and Full Site Editing — readable, maintainable, fast.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-default" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--large)">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Engineering &amp; Build</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Performance audits, accessibility passes, and front-end engineering — turning a design into a site that holds up at scale.</p>
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
