<?php
/**
 * Title: Portfolio — Asymmetric
 * Slug: godevs-portfolio/portfolio-asymmetric
 * Description: An asymmetric portfolio grid with alternating image and text positions in each row. Distinct in its staggered, magazine-style composition.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, asymmetric, alternating, staggered, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-portfolio-asymmetric","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-portfolio-asymmetric alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Selected work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Recent projects.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Featured project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
						<p class="is-style-eyebrow">01 · Identity · 2024</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Studio Field — identity refresh</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>A new visual language for a small studio practice. Wordmark, type system, and a small component library.</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="font-size:var(--wp--preset--font-size--small)"><a href="#">View project →</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
						<p class="is-style-eyebrow">02 · Editorial · 2024</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)">Long-form Journal — publication system</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>A multi-author editorial site built Gutenberg-native — fluid typography, accessible color, and a clean reading column.</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="font-size:var(--wp--preset--font-size--small)"><a href="#">View project →</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial site preview" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
