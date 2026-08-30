<?php
/**
 * Title: Portfolio — Hero + Grid Mix
 * Slug: godevs-portfolio/large-showcase
 * Description: A featured + grid mix — one large 21/9 hero project on top, followed by a 3-up smaller grid below. Distinct from featured.php's 60/40 side-by-side split: this one stacks vertically (hero above, grid beneath) for a more editorial, magazine-like browse.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, featured, hero, grid, mix, magazine, stacked, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Featured project</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Latest &amp; selected.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group godevs-reveal" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
			<figure class="wp-block-image has-custom-border">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Featured project — full-width hero showcase of the latest work" style="aspect-ratio:21/9;object-fit:cover;border-radius:12px"/>
			</figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow">2024 · Identity + Web</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;font-weight:600">Studio Field — Full Brand System</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"640px"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);max-width:640px">A complete identity system — wordmark, type pairing, editorial templates, and a headless WordPress build. Six months, shipped on schedule.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p class="is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--40)">More recent work</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial magazine redesign" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Editorial</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em">Long-form Journal</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Product photography series" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Photography</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em">Foundry Co.</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Web application dashboard" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Product</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em">Northbound</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
