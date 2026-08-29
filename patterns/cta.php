<?php
/**
 * Title: Call to Action
 * Slug: godevs-portfolio/cta
 * Categories: featured, call-to-action
 * Description: A full-width navy CTA band with a display headline, supporting paragraph, and a single button. Designed to sit between sections.
 * Keywords: cta, banner, call-to-action, contact, conversion
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-cta","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|background"}}} -->
<section class="wp-block-group godevs-cta">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"rgba(255,255,255,0.6)"}}} -->
			<p class="has-caption-font-size" style="color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:0.1em">Start a project</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xxx-large)","lineHeight":"1.1","letterSpacing":"-0.02em"},"color":{"text":"var(--wp--preset--color--background)"}}} -->
			<h2 class="wp-block-heading" style="color:var(--wp--preset--color--background);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.1;letter-spacing:-0.02em">Have a project worth doing well?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large","style":{"color":{"text":"rgba(255,255,255,0.8)"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}}} -->
			<p class="has-large-font-size" style="color:rgba(255,255,255,0.8);margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60)">We are taking on a small number of new engagements for next quarter. Tell us a little about what you are building.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"typography":{"fontWeight":"500"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background has-background-color has-text-color wp-element-button" href="/contact" style="font-weight:500">Start a project</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","textColor":"background"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="/work">See the work first</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
