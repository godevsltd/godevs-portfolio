<?php
/**
 * Title: Portfolio — Hover-Reveal Grid
 * Slug: godevs-portfolio/portfolio-portfolio-4col-surface-agency-1
 * Description: A dense 4-column portfolio grid with hover-reveal treatment — project titles and meta are hidden by default and reveal on hover/focus, keeping the grid visually clean. Images intensify (subtle scale) on hover. Touch devices always show meta (no hover available). Surface-muted background.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, hover, reveal, grid, 4col, dense, clean, interactive
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
			<p class="is-style-eyebrow">Selected work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Hover to explore.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:560px">A dense grid of recent work. Hover any card to reveal the project title and year.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group godevs-hover-reveal">
					<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial site redesign" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"godevs-hover-reveal-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}}} -->
					<div class="wp-block-group godevs-hover-reveal-meta" style="padding-top:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Editorial</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Long-form Journal</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group godevs-hover-reveal">
					<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Brand identity system" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"godevs-hover-reveal-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}}} -->
					<div class="wp-block-group godevs-hover-reveal-meta" style="padding-top:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Identity</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Studio Field</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group godevs-hover-reveal">
					<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Product photography" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"godevs-hover-reveal-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}}} -->
					<div class="wp-block-group godevs-hover-reveal-meta" style="padding-top:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Photography</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Foundry Co.</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group godevs-hover-reveal">
					<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Web application dashboard" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"godevs-hover-reveal-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}}} -->
					<div class="wp-block-group godevs-hover-reveal-meta" style="padding-top:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Product</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Northbound</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
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
