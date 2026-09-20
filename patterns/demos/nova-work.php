<?php
/**
 * Title: Demo - Nova (Agency) - Work
 * Slug: godevs-portfolio/demo-nova-work
 * Description: NOVA portfolio archive - featured project, category filtering, editorial project grid. Recommended style variation: Nova.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, nova, work, portfolio, archive, agency
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
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Selected Work - Archive</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500"><span class="nova-dot" aria-hidden="true"></span>24 projects · 2014 → 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
			<h1 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8rem)">Work that <span class="nova-italic">earned its keep.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy + updated stamp -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:48ch">A selection of recent projects across brand, product and digital experience. We take on a small number of engagements each year - these are a few we're proud to share.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Updated - Spring 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - FILTER BAR === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Filter by discipline</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<nav class="nova-filter" aria-label="Filter projects by discipline">
				<a href="#" class="is-active" aria-current="page">All</a>
				<a href="#">Branding</a>
				<a href="#">Web</a>
				<a href="#">Digital</a>
				<a href="#">Product</a>
				<a href="#">Campaign</a>
				<a href="#">Creative Direction</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED PROJECT === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured label -->
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Featured - 01</p>
			<!-- /wp:paragraph -->

			<!-- Wide image -->
			<!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"2px"}}} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-orbit.webp' ); ?>" alt="ORBIT featured project - immersive digital experience for a data platform, floating glass UI panels in dark space" style="border-radius:2px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->

			<!-- Title + description split -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"verticalAlignment":"top","width":"58%"} -->
				<div class="wp-block-column" style="flex-basis:58%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Digital Experience · 2026</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 8rem)","lineHeight":"0.92","letterSpacing":"-0.05em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 8rem);line-height:0.92;letter-spacing:-0.05em;font-weight:600;margin-top:0.5rem">ORBIT</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
				<div class="wp-block-column" style="flex-basis:42%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.6">An immersive product experience for a data platform - interaction design, motion and a system that scales across surfaces. We rebuilt the experience around the moments that matter, making complexity feel calm.</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|15"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Client - Orbit Labs</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Discipline - Digital Experience</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Role - Strategy · Design · Engineering</p>
						<!-- /wp:paragraph -->
						<!-- wp:html -->
						<a href="#" class="nova-arrow-link" style="margin-top:1rem;">View project <span class="nova-arrow" aria-hidden="true">→</span></a>
						<!-- /wp:html -->
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

	<!-- === 04 - PROJECT GRID (EDITORIAL) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">All Projects - 06</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Recent <span class="nova-italic">work.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Row 1 - Aster (wide 16/10) + Forma (portrait 3/4) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:column {"verticalAlignment":"top","width":"66%"} -->
				<div class="wp-block-column" style="flex-basis:66%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View Aster - Branding project">
						<div class="nova-project-media" style="aspect-ratio:16/10;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-aster.webp' ); ?>" alt="Aster - brand identity system flatlay: business cards, letterhead and wordmark samples on warm cream surface" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2026</span><span>·</span><span>Branding</span></div>
						<h3 class="nova-project-title">Aster</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"34%"} -->
				<div class="wp-block-column" style="flex-basis:34%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View Forma - E-commerce project">
						<div class="nova-project-media" style="aspect-ratio:3/4;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-forma.webp' ); ?>" alt="Forma - minimalist fashion e-commerce website displayed on a laptop with editorial product photography" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2025</span><span>·</span><span>E-commerce</span></div>
						<h3 class="nova-project-title">Forma</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 2 - North (4/3) + Mono (wide 16/10) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View North - Digital Product project">
						<div class="nova-project-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-north.webp' ); ?>" alt="North - modern mobile app interface screens floating in space with clean premium UI design" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2025</span><span>·</span><span>Digital Product</span></div>
						<h3 class="nova-project-title">North</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View Mono - Campaign project">
						<div class="nova-project-media" style="aspect-ratio:16/10;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-mono.webp' ); ?>" alt="Mono - bold abstract typographic campaign poster with geometric shapes and high contrast composition" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2025</span><span>·</span><span>Campaign</span></div>
						<h3 class="nova-project-title">Mono</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 3 - Vela (4/3) + Lumen (portrait 3/4) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View Vela - Creative Direction project">
						<div class="nova-project-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-vela.webp' ); ?>" alt="Vela - creative direction moodboard with layered fashion editorial photography swatches and color studies" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2024</span><span>·</span><span>Creative Direction</span></div>
						<h3 class="nova-project-title">Vela</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:html -->
					<a href="#" class="nova-work-card" aria-label="View Lumen - Web Design project">
						<div class="nova-project-media" style="aspect-ratio:3/4;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-1.webp' ); ?>" alt="Lumen - editorial web design for a creative studio with layered paper and geometric forms" loading="lazy">
						</div>
						<div class="nova-project-meta" style="margin-top:1.25rem;"><span>2024</span><span>·</span><span>Web Design</span></div>
						<h3 class="nova-project-title">Lumen</h3>
						<span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
					</a>
					<!-- /wp:html -->
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

	<!-- === 05 - FINAL CTA (dark) === -->
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
