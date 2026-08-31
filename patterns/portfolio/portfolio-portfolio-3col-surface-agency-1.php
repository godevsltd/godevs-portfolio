<?php
/**
 * Title: Portfolio — Masonry Staggered
 * Slug: godevs-portfolio/portfolio-portfolio-3col-surface-agency-1
 * Description: A masonry-style portfolio grid with staggered image heights — uneven aspect ratios (1/1, 4/3, 3/4, 16/9 mixed) using CSS grid auto-fit + grid-row span. Surface-muted background for section-to-section contrast. Responsive: 1 col on mobile, 2 on tablet, 3+ on desktop.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, masonry, staggered, grid, uneven, mixed, heights
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

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Selected work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Recent projects.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-masonry godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group godevs-masonry godevs-reveal-stagger">

			<!-- wp:group {"className":"godevs-masonry-item-tall","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-tall">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial magazine redesign for a long-form journalism site" style="aspect-ratio:3/4;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Editorial</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">Long-form Journal — Redesign</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-masonry-item-short","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-short">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Brand identity system for a Berlin design studio" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Identity</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">Studio Field — Identity</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-masonry-item-medium","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-medium">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="E-commerce product photography for a ceramics studio" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Photography</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">Foundry Co. — Product</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-masonry-item-tall","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-tall">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Web application dashboard for a project management tool" style="aspect-ratio:16/9;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Product</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">Northbound — Dashboard</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-masonry-item-short","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-short">
				<!-- wp:image {"aspectRatio":"3/2","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Annual report design for a non-profit foundation" style="aspect-ratio:3/2;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2022 · Print</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">Atelier Foundation — Report</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-masonry-item-medium","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group godevs-masonry-item-medium">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Poster series for a typography conference" style="aspect-ratio:1/1;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2022 · Editorial</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em">TypeCon — Poster Series</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
