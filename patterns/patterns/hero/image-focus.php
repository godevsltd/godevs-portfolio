<?php
/**
 * Title: Hero — Image Focus
 * Slug: godevs-portfolio/hero-image-focus
 * Description: A full-bleed cover image hero with overlaid eyebrow, headline, and a single CTA. Image-led presentation favored by photographers and visual creators.
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, image, cover, full-bleed, photography
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-image-focus godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-image-focus alignfull">
	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>","dimRatio":50,"overlayColor":"primary","minHeight":680,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-cover alignfull" style="min-height:680px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-0" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast"} -->
		<p class="is-style-eyebrow has-contrast-color has-text-color">Photographer · Portfolio</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
		<h1 class="wp-block-heading has-contrast-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.05;letter-spacing:-0.02em">Long-form photography, slowly made.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p class="has-contrast-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--40)">Editorial photography, series, and field work from the last several years.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
			<div class="wp-block-button is-style-outline"><a href="/work" class="wp-block-button__link wp-element-button">View the series</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div></div>
	<!-- /wp:cover -->
</section>
<!-- /wp:group -->
