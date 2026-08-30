<?php
/**
 * Title: Services — Bordered Cards
 * Slug: godevs-portfolio/services-bordered-cards
 * Description: A three-column grid of bordered cards with consistent padding, hairline borders, and a hover affordance via accent top-border. Distinct from Feature Cards in its strictly bordered, no-shadow composition.
 * Categories: godevs-portfolio-services
 * Keywords: services, bordered, cards, hairline, grid
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-services-bordered-cards","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-services-bordered-cards alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Services</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">What we offer.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent","width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="border-top-color:var(--wp--preset--color--accent);border-top-width:2px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">01 · Strategy</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Discovery &amp; positioning</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Audit, interviews, and the work that makes the brief sharper before design begins.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent","width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="border-top-color:var(--wp--preset--color--accent);border-top-width:2px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">02 · Design</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Identity &amp; system</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Logo, typography, color, and the design system that ties every page to the same idea.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent","width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="border-top-color:var(--wp--preset--color--accent);border-top-width:2px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">03 · Build</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Engineering &amp; ship</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>WordPress theme build, accessibility pass, performance budget, and a careful launch.</p>
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
