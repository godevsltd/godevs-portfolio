<?php
/**
 * Title: Contact
 * Slug: godevs-portfolio/contact
 * Categories: featured, contact, call-to-action
 * Description: A two-column contact section — direct contact details on the left, a contact brief CTA on the right. Designed for a light background.
 * Keywords: contact, get-in-touch, hire, brief, email
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-contact" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Contact</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.1;letter-spacing:-0.025em;font-weight:700">Tell us about the project.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">The fastest way to reach us is by email. Drop a short note about your project, timeline, and budget range — we reply within two working days.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top">
			<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-x-small-font-size has-text-color" style="color:var(--wp--preset--color--muted);text-transform:uppercase;letter-spacing:0.1em;font-weight:600">Email</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium);font-weight:600;margin-bottom:var(--wp--preset--spacing--50)"><a href="mailto:hello@godevs.example">hello@godevs.example</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-x-small-font-size has-text-color" style="color:var(--wp--preset--color--muted);text-transform:uppercase;letter-spacing:0.1em;font-weight:600">Studio</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.6"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--normal);line-height:1.6">Sample address line 1<br>Sample city, 00000</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">
				<!-- wp:group {"className":"is-style-card-bordered","backgroundColor":"surface-muted","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group is-style-card-bordered has-surface-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.2;letter-spacing:-0.01em;font-weight:600">Send a brief.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--normal);line-height:1.7">Drop a short note about your project, timeline, and budget range. We reply within two working days. Add a Contact Form block here to accept submissions on-page.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex"}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@godevs.example">Send a brief →</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
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
