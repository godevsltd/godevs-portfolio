<?php
/**
 * Title: Demo - Luxe (Fashion) - 404
 * Slug: godevs-portfolio/demo-luxe-404
 * Description: LUXE 404 - editorial not-found. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, 404, error
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Error 404</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Not Found · Page Off the Collection</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric hero: typography / quiet copy -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top","width":"68%"} -->
				<div class="wp-block-column" style="flex-basis:68%">
					<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 8vw, 8rem)"}}} -->
					<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 8vw, 8rem)">Lost between <span class="luxe-italic">seasons.</span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"32%"} -->
				<div class="wp-block-column" style="flex-basis:32%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.75;margin-top:var(--wp--preset--spacing--40)">The page you're looking for isn't here - it may have been moved, archived, or never existed. Let's return to the work.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - NAVIGATION BUTTONS === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Return</p>
			<!-- /wp:paragraph -->

			<!-- Buttons -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.2em"}}} -->
				<div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.2em">Back to home →</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.2em"}}} -->
				<div class="wp-block-button is-style-outline"><a href="/collections" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.2em">Explore collections →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
