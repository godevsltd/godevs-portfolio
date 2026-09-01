<?php
/**
 * Title: Demo — Aperture (General)
 * Slug: godevs-portfolio/demo-aperture
 * Description: Photographer portfolio. Full-bleed image hero, editorial portfolio gallery, services, testimonials. Image-first. Recommended style variation: Minimal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, photography, general, editorial, portfolio
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-aperture godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-aperture alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-transparent","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Full-bleed image, text at bottom ═══ -->
	<!-- wp:cover {"useFeaturedImage":false,"dimRatio":30,"overlayColor":"primary","minHeight":600,"isDark":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-cover" style="min-height:600px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-30 has-background-dim"></span>
		<img class="wp-block-cover__image-background wp-image-0" alt="Featured landscape photograph from the Aperture portfolio" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" style="object-fit:cover;object-position:center"/>
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|contrast"},"typography":{"letterSpacing":"0.15em","textTransform":"uppercase"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.15em;text-transform:uppercase">Photography · Berlin</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
			<h1 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">Light, held still.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.5"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"480px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--large);line-height:1.5;max-width:480px;margin-top:var(--wp--preset--spacing--30)">Editorial, product, and portrait photography for brands that care about how they look. Ten years behind the lens, still learning.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#portfolio" class="wp-block-button__link wp-element-button">View portfolio</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-text-link"} -->
				<div class="wp-block-button is-style-text-link"><a href="#contact" class="wp-block-button__link wp-element-button">Book a session →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:cover -->

	<!-- ═══ FEATURED SERIES — Large image showcase ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Featured series</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Recent work.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Large showcase image 1 -->
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial fashion series — spring collection campaign" style="border-radius:12px;aspect-ratio:21/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Editorial</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);letter-spacing:-0.01em;font-weight:600">Spring Campaign — Field Studio</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">12 looks shot over 2 days in natural light. Featured in Field Quarterly.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- 2-col gallery -->
			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait series — creative professionals in their studios" style="aspect-ratio:4/5;object-fit:cover;border-radius:8px"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Portraits</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Studio Portraits</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Product photography series — ceramic studio collection" style="aspect-ratio:4/5;object-fit:cover;border-radius:8px"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">2023 · Product</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium)">Foundry Ceramics</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--50)"><a href="#portfolio">→ View full portfolio</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ SERVICES — What I shoot ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Services</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">What I shoot.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">01</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Editorial Photography</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Magazine shoots, lookbooks, and fashion campaigns. Natural light, considered composition, images that tell a story.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">02</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Product Photography</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">E-commerce, catalog, and studio product shoots. Clean backgrounds, accurate color, and the details that sell.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"700","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);font-weight:700">03</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Portrait Sessions</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Creative professional portraits, team headshots, and personal branding photography for people who want to look like themselves.</p>
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
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Have a shoot in mind?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium)">Editorial, product, or portrait — tell me what you need and I'll send a quote within 24 hours.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Book a session</a></div>
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
