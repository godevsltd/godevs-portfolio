<?php
/**
 * Title: Portfolio — Case Study Cards
 * Slug: godevs-portfolio/portfolio-portfolio-2col-surface-agency-1
 * Description: Case-study preview cards — image + title + one-line result metric (e.g., "Redesigned checkout · +18% conversion"). For portfolios that want to show impact, not just images. Surface-muted background for section contrast. Two-column layout.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, case study, cards, results, metrics, impact, 2col
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Selected work · Results</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Outcomes, not just screenshots.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:560px">Each card pairs the work with the measurable result it produced. Click through for the full case study.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
				<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Checkout redesign for an e-commerce platform" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">2024 · E-commerce</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;font-weight:600">Checkout Redesign</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">+18% conversion</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Redesigned the checkout flow for a mid-size retailer. Reduced cart abandonment by 18% over 90 days.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
				<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Headless WordPress migration for a publishing site" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">2023 · Publishing</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;font-weight:600">Headless Migration</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">3.2× faster TTI</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Migrated a 2,000-post publishing site from classic WP to headless WP + Next.js. Time-to-interactive dropped from 4.1s to 1.3s.</p>
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
