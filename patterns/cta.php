<?php
/**
 * Title: Call to Action
 * Slug: godevs-portfolio/cta
 * Categories: featured, call-to-action
 * Description: A full-width dark CTA band with a display headline, supporting paragraph, and a primary plus outline button. Designed to sit between sections.
 * Keywords: cta, banner, call-to-action, contact, conversion
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-cta","backgroundColor":"primary","textColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group godevs-cta has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Start a project</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.025em;font-weight:700">Have a project worth doing well?</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);opacity:0.78">We are taking on a small number of new engagements for next quarter. Tell us a little about what you are building.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"backgroundColor":"accent","textColor":"contrast"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background has-contrast-color has-text-color wp-element-button" href="/contact">Start a project</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","textColor":"contrast"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" href="/work">See the work first</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
