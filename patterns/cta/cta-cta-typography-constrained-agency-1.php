<?php
/**
 * Title: CTA — Newsletter Capture
 * Slug: godevs-portfolio/cta-cta-typography-constrained-agency-1
 * Description: A newsletter-specific CTA with a styled email input and submit button as a single horizontal unit. Type-led personality with a large display label above the form. For portfolio bloggers and editorial sites that want to build a mailing list.
 * Categories: godevs-portfolio-cta
 * Keywords: cta, newsletter, email, subscribe, capture, form
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Notes from the studio</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">A monthly letter on the work, the craft, and what I'm learning.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium);max-width:520px">No promo pushes, no affiliate links. One letter a month, written the same week it ships. Unsubscribe in one click.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"0"},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--pill, 999px)","width":"1px"},"layout":{"selfStretch":"fit","flexSize":"480px"}},"backgroundColor":"surface","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide has-surface-background-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:999px;margin-top:var(--wp--preset--spacing--50);max-width:480px">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fill"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20)">you@studio.com</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-pill","style":{"border":{"radius":"var(--wp--custom--radius--pill, 999px)"}}} -->
				<div class="wp-block-button is-style-pill"><a href="#subscribe" class="wp-block-button__link wp-element-button">Subscribe</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30)">Note: This is a placeholder form. Replace with a Mailchimp, ConvertKit, or Jetpack Subscriptions block before going live.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
