<?php
/**
 * Title: Hero — Split (Mirrored: Image Left)
 * Slug: godevs-portfolio/hero-hero-split-constrained-agency-1
 * Description: A split hero with the portrait image on the LEFT and text on the RIGHT — the mirror of the standard split-profile pattern. Provides compositional variety when a user places two split heroes on the same page (e.g., agency + founder).
 * Categories: godevs-portfolio-hero
 * Keywords: hero, split, mirrored, portrait, image left, profile
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
			<div class="wp-block-column" style="flex-basis:45%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="A portrait of the founder in a naturally lit studio" style="aspect-ratio:3/4;object-fit:cover;border-radius:12px"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"55%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:55%">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow">Independent practice · Berlin</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 4vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 4vw, 3.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">I help teams ship work they're proud of.</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
				<p style="font-size:var(--wp--preset--font-size--medium);max-width:480px">Ten years of independent practice — identity systems, editorial sites, and the front-end engineering that makes them real. Currently taking on two engagements for Q3.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button -->
					<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-text-link"} -->
					<div class="wp-block-button is-style-text-link"><a href="#work" class="wp-block-button__link wp-element-button">See recent work</a></div>
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
