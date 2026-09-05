<?php
/**
 * Title: Demo — Minimal (Lifestyle)
 * Slug: godevs-portfolio/demo-minimal
 * Description: Image-first lifestyle magazine. Editorial typography hero, magazine portfolio grid, photo-led journal, social footer. Warm, considered, restrained. Recommended style variation: Minimal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, lifestyle, minimal, magazine, editorial, warm
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-minimal godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-minimal alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Editorial typography hero ═══ -->
	<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom">
				<!-- wp:column {"width":"70%","verticalAlignment":"bottom"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.2em;text-transform:uppercase">Lifestyle · Berlin · Since 2014</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|huge","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
					<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">A considered life, documented honestly.</h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"30%","verticalAlignment":"bottom"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">Ten years of writing about slow living, considered objects, and the practice of keeping less.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-top:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ FEATURED STORY — Image-first magazine layout ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"60%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Featured story — seasonal living" style="border-radius:4px;aspect-ratio:4/5;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.2em;text-transform:uppercase">Featured · 2024</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Seasonal Living Guide.</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} -->
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.7">A photo-led essay on living with the seasons in a small Berlin apartment. What stays, what goes, and what we kept that we shouldn't have.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Editorial · 12 min read · March 2024</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<p style="margin-top:var(--wp--preset--spacing--30)"><a href="#work">→ Read the essay</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ MAGAZINE GRID — Image-first photo grid ═══ -->
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.2em;text-transform:uppercase">Selected Work</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Recent stories.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Home Tour — Kreuzberg Studio" style="border-radius:4px;aspect-ratio:4/5;object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024 · Photography</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em"><a href="#work">Home Tour — Kreuzberg Studio</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Slow Mornings — A Series" style="border-radius:4px;aspect-ratio:4/5;object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Content</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em"><a href="#work">Slow Mornings — A Series</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Brand Collaboration — Verdure" style="border-radius:4px;aspect-ratio:4/5;object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Collaboration</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em"><a href="#work">Brand Collaboration — Verdure</a></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--50)"><a href="#work">→ View all work</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ JOURNAL PREVIEW — Editorial list with photos ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.2em;text-transform:uppercase">Journal</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Recent notes.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--40)">

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"width":"25%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="On living with less" style="border-radius:4px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"75%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:75%">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024-03-10 · 8 min</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em"><a href="#journal">On living with less, ten years in.</a></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">A decade into this practice, what I have actually kept — and what I have let go.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:separator {"className":"is-style-thin"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
				<!-- /wp:separator -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"width":"25%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="The objects I kept" style="border-radius:4px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"75%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:75%">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024-02-05 · 6 min</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em"><a href="#journal">The objects I kept and the ones I didn't.</a></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">A short inventory of objects that survived the last declutter, and what they have in common.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:separator {"className":"is-style-thin"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
				<!-- /wp:separator -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"width":"25%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"4px"}}} -->
						<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="A morning routine" style="border-radius:4px;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"75%","verticalAlignment":"center"} -->
					<div class="wp-block-column" style="flex-basis:75%">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2024-01-15 · 4 min</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em"><a href="#journal">A morning routine that survived January.</a></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">What I have kept from the January experiment, three months later. A short list.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--50)"><a href="#journal">→ Read all notes</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ CTA — Centered editorial ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-bottom:var(--wp--preset--spacing--50)"/>
			<!-- /wp:separator -->
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Available for collaborations.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">Editorial features, brand collaborations, and content partnerships. One or two per quarter.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Get in touch</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer (Social) -->
	<!-- wp:template-part {"slug":"footer-social","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
