<?php
/**
 * Title: Contact — Centered Minimal Form
 * Slug: godevs-portfolio/contact-contact-centered-dark-agency-1
 * Description: A centered minimal contact form — name, email, message, and send button in a clean vertical stack. Dark surface for a focused, editorial feel. Distinct from the split layout: this one is centered and form-first, no info sidebar.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, centered, minimal, form, dark, focused
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"520px"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
		<p class="is-style-eyebrow has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">Get in touch</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Send a message.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium)">I read every message personally and reply within two business days.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing|50)">

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted);margin-bottom:var(--wp--preset--spacing--10)">Name</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10)">Email</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@studio.com</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10)">Message</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20","minHeight":"120px"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:120px">Tell me about your project, timeline, and what you're trying to achieve.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"width":{"type":"full","size":100}} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#send" class="wp-block-button__link wp-element-button">Send message</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--40)">Note: Placeholder form. Replace with Contact Form 7, WPForms, or Jetpack Forms before going live.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
