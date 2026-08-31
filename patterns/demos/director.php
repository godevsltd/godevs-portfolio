<?php
/**
 * Title: Demo — Director (Film Director)
 * Slug: godevs-portfolio/demo-director
 * Description: Cinematic film director portfolio with full-bleed cover hero, large showcase stills, awards and press. Dark, image-led, theatrical. Recommended style variation: Dark.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, specialized, film, director, cinematic, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-director godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-director alignfull">

	<!-- Header (Dark) -->
	<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Full-bleed cinematic cover ═══ -->
	<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>","id":0,"dimRatio":65,"overlayColor":"primary","minHeight":92,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-cover is-dark" style="min-height:92vh;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--40)">
			<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-65 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
					<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">Film Director · Selected Work 2014—2024</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 8vw, 6rem)","lineHeight":"0.95","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
					<h1 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 8vw, 6rem);line-height:0.95;letter-spacing:-0.03em;font-weight:600">Stories told<br>in light and shadow.</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"layout":{"selfStretch":"fit","flexSize":"540px"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;max-width:540px">A decade of directing for feature film, short-form narrative, and commercial work. Selected stills, current projects, and contact below.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px"}}} -->
						<div class="wp-block-button is-style-fill"><a href="#work" class="wp-block-button__link wp-element-button" style="border-radius:0px">View selected work</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-outline is-style-outline","textColor":"contrast","style":{"border":{"radius":"0px"},"spacing":{"margin":{"left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-button is-style-outline" style="margin-left:var(--wp--preset--spacing--20)"><a href="#contact" class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-radius:0px">Contact</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ FEATURED FILM — Large still + film metadata ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
				<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">Featured · 2024</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">"Last Light" — feature film.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Last Light — production still" style="border-radius:4px;aspect-ratio:21/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"width":"55%"} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:560px">A quiet thriller about a lighthouse keeper who witnesses something he shouldn't. Shot on 35mm across the Norwegian coast over twenty-eight days. Premiered at Toronto International Film Festival, 2024.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--30);max-width:560px">"A masterclass in restraint. The kind of film that earns its silences." — Sight &amp; Sound</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"45%"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:group {"className":"godevs-project-meta","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group godevs-project-meta">
						<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
						<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.2em;text-transform:uppercase">Credits</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
						<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);line-height:1.8"><strong>Director:</strong> M. Vance<br><strong>Writer:</strong> M. Vance &amp; E. Holm<br><strong>Runtime:</strong> 118 min<br><strong>Format:</strong> 35mm Kodak Vision3<br><strong>Year:</strong> 2024<br><strong>Status:</strong> Festival circuit</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
						<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.2em;text-transform:uppercase;margin-top:var(--wp--preset--spacing--30)">Festivals</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
						<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);line-height:1.8">TIFF 2024 — Official Selection<br>Rotterdam 2025 — Tiger Award Nominee<br> Tribeca 2025 — Spotlight</p>
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

	<!-- ═══ SELECTED WORK — Large poster-style grid ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" id="work">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
				<p class="is-style-eyebrow" style="letter-spacing:0.25em;text-transform:uppercase">Selected Work</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">A decade of work, archived honestly.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="The Quiet Hours — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Short Film · 14 min</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="letter-spacing:-0.01em">The Quiet Hours</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Northbound — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2022 · Feature · 102 min</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Northbound</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Commercials for Foundry Co. — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2022 · Commercial · Foundry Co.</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
						<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Foundry Co. — "Maker"</h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--50)"><a href="#work">→ View full filmography</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ AWARDS & RECOGNITION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
				<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">Awards &amp; Recognition</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Selected honors.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
				<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","fontWeight":"600"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);font-weight:600">Rotterdam Film Festival — Tiger Award Nominee</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.05em"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.05em">2025 · Last Light</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
				<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","fontWeight":"600"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);font-weight:600">TIFF — Official Selection</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.05em"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.05em">2024 · Last Light</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
				<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","fontWeight":"600"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);font-weight:600">Cannes — Short Film Corner</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.05em"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.05em">2023 · The Quiet Hours</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","fontWeight":"600"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);font-weight:600">Berlinale — Generation 14plus</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.05em"}}} -->
					<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.05em">2022 · Northbound</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ PRESS QUOTES ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
			<p class="is-style-eyebrow" style="letter-spacing:0.25em;text-transform:uppercase">Press</p>
			<!-- /wp:paragraph -->
			<!-- wp:pullquote {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"clamp(1.5rem, 3.5vw, 2.25rem)","lineHeight":"1.3","fontWeight":"400"}}} -->
			<figure class="wp-block-pullquote has-text-align-center" style="margin-block:0"><blockquote><p style="font-family:var(--wp--preset--font-family--serif);font-size:clamp(1.5rem, 3.5vw, 2.25rem);line-height:1.3;font-weight:400">"A director who understands that cinema is built from what is withheld as much as what is shown."</p><cite>— Sight &amp; Sound</cite></blockquote></figure>
			<!-- /wp:pullquote -->
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-top:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"640px"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:640px">Featured in IndieWire, Filmmaker Magazine, and the BFI Sight &amp; Sound annual. Selected for the Berlinale Talents cohort, 2021.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ CTA — Cinematic close ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background" id="contact">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center","textColor":"contrast","style":{"typography":{"letterSpacing":"0.3em","textTransform":"uppercase"}}} -->
			<p class="is-style-eyebrow has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.3em;text-transform:uppercase">Available 2025</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"textAlign":"center","textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Currently developing two features and open to representation.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"600px"}}} -->
			<p class="has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:600px">For feature projects, commercial work, or representation inquiries, please reach out via email or through the representation listed on the contact page.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px"}}} -->
				<div class="wp-block-button is-style-fill"><a href="/contact" class="wp-block-button__link wp-element-button" style="border-radius:0px">Get in touch</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","textColor":"contrast","style":{"border":{"radius":"0px"},"spacing":{"margin":{"left":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-button is-style-outline" style="margin-left:var(--wp--preset--spacing--20)"><a href="/about" class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-radius:0px">Read bio</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer (Dark) -->
	<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
