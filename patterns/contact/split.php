<?php
/**
 * Title: Contact — Split
 * Slug: godevs-portfolio/contact-split
 * Description: A two-column contact section with a left column for heading + contact details and a right column for a contact form area. Distinct in its two-column composition pairing information with action.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, split, two-column, details, form-area
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-contact-split","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-contact-split alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
						<p class="is-style-eyebrow">Contact</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large","lineHeight":"1.15"}}} -->
						<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large);line-height:1.15">Let's talk.</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>For new projects, collaborations, or a quick question. Email is the fastest way to reach me.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
						<p class="is-style-eyebrow">Email</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="mailto:hello@example.com">hello@example.com</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
						<p class="is-style-eyebrow">Studio</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>Berlin, Germany<br>Working with clients worldwide</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Send a message</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p>Drop a short note below — what you're building, your timeline, and what you're hoping for. I'll reply within two working days.</p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Message","showLabel":false,"placeholder":"Your message…","buttonText":"Send message","buttonPosition":"button-inside","buttonUseIcon":false,"style":{"border":{"radius":"4px"}}} /-->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Note: This is a placeholder. Replace with a Contact Form 7 or WPForms block.</p>
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
