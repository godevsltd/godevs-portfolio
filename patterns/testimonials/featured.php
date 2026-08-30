<?php
/**
 * Title: Testimonials — Featured
 * Slug: godevs-portfolio/testimonials-featured
 * Description: A large featured testimonial with avatar, name, role, and a substantial quote. Distinct in its single-testimonial emphasis with portrait and substantial composition.
 * Categories: godevs-portfolio-testimonials
 * Keywords: testimonials, featured, single, large, portrait
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-testimonials-featured godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-testimonials-featured alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Featured testimonial</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}},"margin":{"top":"var:preset|spacing|60"}},"className":"godevs-reveal-stagger"} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:image {"width":240,"height":240,"style":{"border":{"radius":"9999px"}},"className":"size-full"} -->
				<figure class="wp-block-image size-full has-custom-border" style="width:240px;height:240px">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Maya Okonkwo" style="border-radius:9999px;width:240px;height:240px;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.3"}}} -->
					<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.3">"Working with this practice felt like adding a senior partner to the team — clear thinking, careful execution, and a real point of view on what makes a portfolio site worth visiting. The work held up better than anything we'd shipped before."</p>
					<!-- /wp:paragraph -->
					<!-- wp:separator {"className":"is-style-thin"} /-->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium)"><strong>Maya Okonkwo</strong> · Founder at Studio Field</p>
					<!-- /wp:paragraph -->
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
