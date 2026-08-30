<?php
/**
 * Title: Demo — Atelier (Developer)
 * Slug: godevs-portfolio/demo-atelier
 * Description: A developer portfolio with editorial typography, dark creative hero, project grid, and a stats band. Best with the Dark or Modern style variation. Recommended pages: Home, Work, About, Journal, Contact.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, developer, full-stack, editorial, dark, projects
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-atelier godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-atelier alignfull">

	<!-- Header (transparent — for hero overlay) -->
	<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- Hero: Dark Creative -->
	<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">Full-Stack Developer · Berlin</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 8vw, 6rem)","lineHeight":"1","letterSpacing":"-0.025em","fontWeight":"700"}}} -->
			<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 8vw, 6rem);line-height:1;letter-spacing:-0.025em;font-weight:700">Building considered software that ships.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);max-width:560px">A decade of full-stack engineering — from API design to deployment. The work below is a selection of recent projects.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
				<div class="wp-block-button is-style-outline"><a href="#work" class="wp-block-button__link wp-element-button">See selected work</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Portfolio: Three Column Grid -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Selected work</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2} -->
					<h2 class="wp-block-heading">Recent projects.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
				<p style="font-size:var(--wp--preset--font-size--small)"><a href="#">See all work →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"className":"godevs-reveal-stagger"} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">API · 2024</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading">Realtime data pipeline</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Web · 2024</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading">Editorial publication system</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Project cover" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Open source · 2023</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading">Block theme starter</h3>
						<!-- /wp:heading -->
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

	<!-- Stats: Four Column (inverted) -->
	<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">80+</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="font-size:var(--wp--preset--font-size--small)">Sites shipped</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">12</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="font-size:var(--wp--preset--font-size--small)">Years engineering</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">5</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="font-size:var(--wp--preset--font-size--small)">Open-source projects</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em">100%</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
					<p style="font-size:var(--wp--preset--font-size--small)">Lighthouse perf</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- CTA -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow has-text-align-center">Available for new work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.1","letterSpacing":"-0.02em"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.1;letter-spacing:-0.02em">Let's build something good together.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium)">Currently taking on two new engagements for Q3.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer (CTA variant) -->
	<!-- wp:template-part {"slug":"footer-cta","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
