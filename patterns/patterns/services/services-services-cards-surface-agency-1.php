<?php
/**
 * Title: Services — Alternating Rows
 * Slug: godevs-portfolio/services-services-cards-surface-agency-1
 * Description: Alternating image + text rows — one service per row, image side alternates left/right. Surface-muted background for section contrast. The only image-based services composition, for portfolios that want to show service context visually.
 * Categories: godevs-portfolio-services
 * Keywords: services, alternating, rows, image, text, split, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">What I do</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Three areas of practice.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
		<div class="wp-block-group godevs-reveal-stagger">

			<!-- Row 1: Image LEFT -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Identity design process — sketches, type specimens, and brand guidelines" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"55%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">01 · Identity</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Identity systems &amp; visual language</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium);max-width:480px">Wordmarks, type pairings, color systems, and the editorial templates that hold them together. Built to scale from a business card to a full site.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 2: Image RIGHT (mirrored) -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"55%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">02 · Editorial</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Editorial sites &amp; component libraries</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium);max-width:480px">Long-form layouts, magazine systems, and component libraries built on Gutenberg and Full Site Editing. Designed for editors who publish weekly.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial site layout — article grid with typographic hierarchy" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 3: Image LEFT -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Front-end engineering — code editor with component tests" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"55%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">03 · Engineering</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Performance audits &amp; front-end engineering</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium);max-width:480px">Accessibility passes, performance audits, and the front-end engineering that makes designs ship. Lighthouse 100 is the baseline, not the goal.</p>
					<!-- /wp:paragraph -->
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
