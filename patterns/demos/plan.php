<?php
/**
 * Title: Demo — Plan (Architect)
 * Slug: godevs-portfolio/demo-plan
 * Description: Architect portfolio. Minimal typography hero, asymmetric portfolio, studio philosophy, services. Recommended style variation: Minimal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architecture, architect, minimal, portfolio
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-plan godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-plan alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Minimal typography + separator ═══ -->
	<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 5.5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
			<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5.5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">Plan — selected work, 2014—2024.</h1>
			<!-- /wp:heading -->
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-top:var(--wp--preset--spacing--50)"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Architecture / Interior · Berlin</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ FEATURED PROJECT — Asymmetric split ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:columns {"verticalAlignment":"center","className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns godevs-reveal are-vertically-aligned-center">
				<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-architecture.png' ); ?>" alt="Residential project — concrete house with large glazed opening" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"45%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"},"typography":{"fontWeight":"600"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size|small);font-weight:600">2024 · Residential</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">House on the Hill</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"440px"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:440px">A single-family residence sited into a south-facing slope. Concrete, glass, and the discipline to leave well enough alone.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)"><strong>Location:</strong> Bavaria, Germany<br><strong>Area:</strong> 240 m²<br><strong>Status:</strong> Completed 2024</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ STUDIO PHILOSOPHY ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Studio philosophy</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.4","fontStyle":"italic"},"layout":{"selfStretch":"fit","flexSize":"680px"}}} -->
			<p style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.4;font-style:italic;max-width:680px">"Good architecture is not about adding things. It's about knowing what to leave out."</p>
			<!-- /wp:paragraph -->
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Site-first.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Every project starts with the site. We listen to the land before we draw a line.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Material-honest.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Concrete is concrete. Wood is wood. We don't fake finishes or hide structural honesty.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Built to last.</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Our buildings are designed for 100-year lifespans, not 20-year trends.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ SERVICES ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Services</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">What we design.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">01</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Residential Design</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Single-family homes, renovations, and extensions. From concept to construction documents.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">02</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Commercial Spaces</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Offices, retail, and hospitality interiors. Spaces designed for how people actually work.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">03</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Urban Planning</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Site analysis, master planning, and the public-space design that connects buildings to their context.</p>
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

	<!-- ═══ CTA ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-bottom:var(--wp--preset--spacing--50)"/>
			<!-- /wp:separator -->
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Have a site in mind?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium)">We take on 3-4 projects per year. Tell us about your site and we'll tell you if we're the right fit.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a conversation</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-minimal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
