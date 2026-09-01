<?php
/**
 * Title: Hero — Split Profile
 * Slug: godevs-portfolio/hero-split-profile
 * Description: A two-column hero with an editorial portrait on one side and a bold display headline plus CTA on the other.
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, split, profile, intro, about
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-split-profile godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-split-profile alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}},"className":"godevs-reveal-stagger"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Portfolio</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","lineHeight":"1.05"}}} -->
					<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);line-height:1.05">Designing and building thoughtful digital products.</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<p style="margin-top:var(--wp--preset--spacing--10);font-size:var(--wp--preset--font-size--medium)">I'm a designer-developer working at the intersection of editorial design, accessibility, and modern WordPress engineering. This is a selection of recent work.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
						<!-- wp:button -->
						<div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button">View selected work</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-text-link"} -->
						<div class="wp-block-button is-style-text-link"><a href="/about" class="wp-block-button__link wp-element-button">About me</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"8px"}},"className":"size-full"} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial portrait of the site author" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
