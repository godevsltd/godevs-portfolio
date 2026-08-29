<?php
/**
 * Title: Contact
 * Slug: godevs-portfolio/contact
 * Categories: featured, text
 * Description: A two-column contact section — direct contact details on the left, a contact form placeholder on the right. Designed to sit on a dark band.
 * Keywords: contact, get-in-touch, form, hire, brief
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-contact">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"text":"var(--wp--preset--color--background)"}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"rgba(255,255,255,0.6)"}}} -->
		<p class="has-caption-font-size" style="color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:0.1em">Contact</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xxx-large)","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
		<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xxx-large);line-height:1.1;letter-spacing:-0.02em">Tell us about the project.</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top">
			<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.7)"},"fontSize":"small","typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
				<p class="has-small-font-size" style="color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.05em">Email</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"large","style":{"color":{"text":"var(--wp--preset--color--background)"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
				<p class="has-large-font-size" style="color:var(--wp--preset--color--background);margin-bottom:var(--wp--preset--spacing--50)">hello@godevs.example</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.7)"},"fontSize":"small","typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
				<p class="has-small-font-size" style="color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.05em">Studio</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--background)"},"fontSize":"medium"}} -->
				<p class="has-medium-font-size" style="color:var(--wp--preset--color--background)">Sample address line 1<br>Sample city, 00000</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">
				<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.06)"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"var(--wp--custom--radius--md)"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.7)"},"fontSize":"small"}} -->
					<p class="has-small-font-size" style="color:rgba(255,255,255,0.7)">Drop a short note about your project, timeline, and budget range. We reply within two working days.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--background)"},"fontSize":"small","spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
					<p class="has-small-font-size" style="color:var(--wp--preset--color--background);margin-top:var(--wp--preset--spacing--40)">Add a Contact Form block here to accept submissions.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background has-background-color has-text-color wp-element-button" href="mailto:hello@godevs.example">Send a brief →</a></div>
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
