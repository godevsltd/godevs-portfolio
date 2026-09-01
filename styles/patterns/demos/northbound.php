<?php
/**
 * Title: Demo — Northbound (Creative)
 * Slug: godevs-portfolio/demo-northbound
 * Description: Creative agency site. Dark split hero with logo cloud, services, portfolio showcase, stats, testimonials. Recommended style variation: Dark.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, agency, creative, studio, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-northbound godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-northbound alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Split with logo cloud ═══ -->
	<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">

				<!-- Left: agency statement -->
				<!-- wp:column {"width":"55%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Agency / Creative</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
					<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">We make brands impossible to ignore.</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:480px">A creative agency for teams who want to be remembered. Strategy, identity, and the production work that brings it to life.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a href="#work" class="wp-block-button__link wp-element-button">See the work</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|contrast"}}} -->
						<div class="wp-block-button is-style-outline"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- Right: logo cloud -->
				<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted);margin-bottom:var(--wp--preset--spacing--40)">Trusted by</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"700","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:700;letter-spacing:0.05em">FIELD</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"0.1em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:500;letter-spacing:0.1em">FOUNDRY</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"400","fontStyle":"italic","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:400;font-style:italic;letter-spacing:0.02em">Long-form</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","letterSpacing":"0.15em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:600;letter-spacing:0.15em">NORTH</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"700"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-weight:700">Atelier</p>
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
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">What we do.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:600">01</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Brand Strategy</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Positioning, messaging, and the strategic foundation that makes everything else work.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:600">02</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Identity Design</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Logos, type systems, color palettes, and the visual language that makes a brand recognizable.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:600">03</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Digital Production</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Websites, campaigns, and the build work that takes the identity from deck to production.</p>
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

	<!-- ═══ FEATURED WORK ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Selected work</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Recent client work.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-brand.png' ); ?>" alt="Brand Launch Campaign — Field Studio identity" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024 · Brand Identity</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Field Studio — Brand Launch</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Digital Product — Foundry Co. platform redesign" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2024 · Digital Product</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Foundry Co. — Platform</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-studio.png' ); ?>" alt="Website Redesign — Long-form Journal" style="aspect-ratio:16/10;object-fit:cover;border-radius:8px"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2023 · Website</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Long-form Journal</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ STATS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-around","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 5vw, 3.5rem)","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);line-height:1;letter-spacing:-0.02em;font-weight:600">120+</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Brands launched</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"className":"is-style-thin","style":{"color":{"background":"var:preset|color|secondary"}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="background-color:var(--wp--preset--color--secondary)"/>
			<!-- /wp:separator -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 5vw, 3.5rem)","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);line-height:1;letter-spacing:-0.02em;font-weight:600">8 yrs</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Of practice</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"className":"is-style-thin","style":{"color":{"background":"var:preset|color|secondary"}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="background-color:var(--wp--preset--color--secondary)"/>
			<!-- /wp:separator -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 5vw, 3.5rem)","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);line-height:1;letter-spacing:-0.02em;font-weight:600">12</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Awards won</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ CTA ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Have a brief to discuss?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium)">We take on 4 projects per quarter. Tell us about yours and we'll send a proposal within a week.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Start a project</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-text-link"} -->
				<div class="wp-block-button is-style-text-link"><a href="#work" class="wp-block-button__link wp-element-button">See more work →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-multi-column","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
