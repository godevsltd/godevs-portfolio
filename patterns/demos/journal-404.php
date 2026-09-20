<?php
/**
 * Title: Demo - Journal (Writing) - 404
 * Slug: godevs-portfolio/demo-journal-404
 * Description: JOURNAL 404 - editorial not-found. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, 404, error
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-journal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-journal alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-journal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Error 404</p>
			<!-- /wp:paragraph -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
			<h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 9vw, 8rem)">Lost in the <span class="jour-italic">archive.</span></h1>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - SUPPORTING COPY + NAV === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|140","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--140);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- 30/70 columns - empty left, copy + nav right -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Not Found</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:paragraph {"className":"jour-lead","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.5vw, 1.75rem)","lineHeight":"1.5","letterSpacing":"-0.005em","fontWeight":"400"}}} -->
					<p class="jour-lead" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 1.75rem);line-height:1.5;letter-spacing:-0.005em;font-weight:400;max-width:42ch">The page you're looking for isn't here - it may have been archived, renamed, or never written. Let's get you back to the reading.</p>
					<!-- /wp:paragraph -->

					<!-- Navigation buttons -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
						<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} -->
						<div class="wp-block-button"><a href="/" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em;text-transform:uppercase">Back to home →</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} -->
						<div class="wp-block-button is-style-outline"><a href="/archive" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em;text-transform:uppercase">Read the journal →</a></div>
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

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
