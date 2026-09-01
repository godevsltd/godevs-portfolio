<?php
/**
 * Title: CTA — Footer Bridge
 * Slug: godevs-portfolio/cta-cta-split-constrained-agency-1
 * Description: A footer-preceding CTA designed to visually bridge into the footer — full-bleed band with rounded bottom corners that overlap the footer, color-matched for a seamless handoff. Looks wrong placed mid-page; looks right placed directly above the footer. Pairs with footer-cta.html.
 * Categories: godevs-portfolio-cta
 * Keywords: cta, footer, bridge, handoff, bottom, precede, rounded
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"},"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"margin":{"bottom":"calc(-1 * var(--wp--preset--spacing--80))"}},"border":{"radius":{"bottomLeft":"var(--wp--custom--radius--lg, 12px)","bottomRight":"var(--wp--custom--radius--lg, 12px)"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background" style="margin-bottom:calc(-1 * var(--wp--preset--spacing--80));border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- wp:column {"width":"60%","verticalAlignment":"center"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow">One more thing</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4vw, 3rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4vw, 3rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">If you scrolled this far, let's talk.</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
				<p style="font-size:var(--wp--preset--font-size--medium);max-width:480px">The footer below has the details — email, social, the works. Or skip straight to the brief.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"vertical"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":{"type":"full","size":100}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project →</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-text-link","width":{"type":"full","size":100}} -->
					<div class="wp-block-button is-style-text-link has-custom-width wp-block-button__width-100"><a href="#work" class="wp-block-button__link wp-element-button">Browse the portfolio</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
