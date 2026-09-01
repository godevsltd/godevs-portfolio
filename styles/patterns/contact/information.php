<?php
/**
 * Title: Contact — Information
 * Slug: godevs-portfolio/contact-information
 * Description: A centered contact information display with email, location, and a small set of social links. Distinct in its information-led, no-form composition.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, information, email, location, social
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-contact-information godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-contact-information alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Email</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium)"><a href="mailto:hello@example.com">hello@example.com</a></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Reply within two working days.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Studio</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium)">Berlin, Germany</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Working with clients worldwide.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Follow</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium)">Elsewhere</h3>
					<!-- /wp:heading -->
					<!-- wp:social-icons -->
					<ul class="wp-block-social-icons">
						<!-- wp:social-link {"url":"https://twitter.com/example","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://github.com/example","service":"github"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com/in/example","service":"linkedin"} /-->
					</ul>
					<!-- /wp:social-icons -->
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
