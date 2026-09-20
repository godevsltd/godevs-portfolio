<?php
/**
 * Title: Demo - Nova (Agency) - Journal
 * Slug: godevs-portfolio/demo-nova-journal
 * Description: NOVA insights archive - featured article, editorial grid, categories. Recommended style variation: Nova.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, nova, journal, blog, insights, archive
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-nova","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-nova alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-nova","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - ARCHIVE HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + archive metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Insights - Archive</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500"><span class="nova-dot" aria-hidden="true"></span>24 articles · Updated weekly</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
			<h1 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8rem)">Field notes from the <span class="nova-italic">studio.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy + updated stamp -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:48ch">Essays, process notes and field reports from the NOVA studio - on brand, product, craft and the long arc of making things that last. Written by the people doing the work, not the marketing team.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Latest - March 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - FILTER BAR === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Filter by category</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<nav class="nova-filter" aria-label="Filter articles by category">
				<a href="#" class="is-active" aria-current="page">All</a>
				<a href="#">Process</a>
				<a href="#">Brand</a>
				<a href="#">Product</a>
				<a href="#">Craft</a>
				<a href="#">Notes</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED ARTICLE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured label -->
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Featured - 01</p>
			<!-- /wp:paragraph -->

			<!-- Dominant wide image (21/9 cinematic) -->
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"2px"}}} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-1.webp' ); ?>" alt="Editorial composition about design thinking - layered paper, geometric forms and warm directional light" style="border-radius:2px;aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->

			<!-- Title + excerpt split (asymmetric 58/42) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"verticalAlignment":"top","width":"58%"} -->
				<div class="wp-block-column" style="flex-basis:58%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Process · March 2026 · 9 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5.5vw, 4.5rem)","lineHeight":"1.0","letterSpacing":"-0.035em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5.5vw, 4.5rem);line-height:1.0;letter-spacing:-0.035em;font-weight:600;margin-top:0.5rem">Why good design starts <span class="nova-italic">before</span> the screen.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
				<div class="wp-block-column" style="flex-basis:42%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.6">The best work doesn't begin in Figma. It begins in the questions you ask before the brief is written - about the people you're designing for, the problem you're actually solving, and the long shadow a decision will cast six months after launch.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">In this piece we walk through how NOVA approaches the first ten days of an engagement - the research, the workshops, the positioning work - and why that quiet, deliberate opening determines everything that follows.</p>
					<!-- /wp:paragraph -->
					<!-- wp:html -->
					<a href="#" class="nova-arrow-link" style="margin-top:1.5rem;">Read article <span class="nova-arrow" aria-hidden="true">→</span></a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - ARTICLE GRID (EDITORIAL) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">All Articles - 06</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Recent <span class="nova-italic">writing.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Row 1 - wide editorial (60%) + tall portrait (40%) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-2.webp' ); ?>" alt="Editorial composition about brand building - sculptural forms and typography fragments on warm cream" style="border-radius:2px;aspect-ratio:16/10;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Brand · 2026 · 8 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.6vw, 2.25rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.6vw, 2.25rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600"><a href="#">Building brands people remember</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-3.webp' ); ?>" alt="Editorial composition about digital human experience - soft organic 3D forms in warm light" style="border-radius:2px;aspect-ratio:3/4;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Product · 2026 · 5 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.2vw, 1.875rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.2vw, 1.875rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="#">Designing digital experiences for humans</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 2 - three equal columns (4/3 aspect) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-aster.webp' ); ?>" alt="Aster - brand identity system flatlay with business cards and wordmark samples on warm cream surface" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Craft · 2025 · 6 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.2vw, 1.875rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.2vw, 1.875rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="#">The case for slow design</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-orbit.webp' ); ?>" alt="ORBIT - immersive digital experience for a data platform, floating glass UI panels in dark space" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Notes · 2025 · 12 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.2vw, 1.875rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.2vw, 1.875rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="#">What we learned shipping 86 projects</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-forma.webp' ); ?>" alt="Forma - minimalist fashion e-commerce displayed on a laptop with editorial product photography" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Craft · 2025 · 7 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.2vw, 1.875rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.2vw, 1.875rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="#">Typography is a system, not a choice</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 3 - single wide editorial card, 16/10 -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
				<div class="wp-block-column" style="flex-basis:100%">
					<!-- wp:image {"align":"wide","aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-north.webp' ); ?>" alt="North - modern mobile app interface screens floating in space with clean premium UI design" style="border-radius:2px;aspect-ratio:16/10;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Process · 2025 · 9 min read</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.05;letter-spacing:-0.03em;font-weight:600"><a href="#">From idea to impact: our process</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Archive footer note -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--80);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Showing 06 of 24 - Filtered by All</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Page 01 of 04</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<nav class="nova-filter" aria-label="Article pagination">
				<a href="#">← Prev</a>
				<a href="#" class="is-active" aria-current="page">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">Next →</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - FINAL CTA (dark) === -->
	<!-- wp:group {"tagName":"section","className":"nova-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group nova-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Let's talk</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 10vw, 9rem)","lineHeight":"0.94","letterSpacing":"-0.05em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 10vw, 9rem);line-height:0.94;letter-spacing:-0.05em;font-weight:600">Have a project in mind?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:46ch">Let's turn your next idea into something people remember. We take on a small number of engagements each quarter - tell us about yours.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"},"color":{"background":"var:preset|color|accent","text":"var:preset|color|primary"}}} -->
				<div class="wp-block-button"><a href="/contact" class="wp-block-button__link has-accent-background-color has-background has-primary-color has-text-color wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-nova","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
