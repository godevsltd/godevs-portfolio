<?php
/**
 * Title: Demo — Director (Work)
 * Slug: godevs-portfolio/demo-director-work
 * Description: Work page for the Director demo. Cinematic dark portfolio with poster-style stills, film metadata, and a next-project transition. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, director, work, portfolio, film, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- ═══ HERO — Section intro on dark surface ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">Selected Work · 2017—2024</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 6vw, 4.5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 6vw, 4.5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">Films, shorts, and commercial work — kept current, archived honestly.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"640px"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:640px">Each project below is documented with its stills, runtime, format, role, and festival run. Click through for the full case study where one is available.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ FEATURED FILM — Full-width still + credits sidebar ═══ -->
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow" style="letter-spacing:0.25em;text-transform:uppercase">2024 · Feature · 118 min</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Last Light</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Last Light — main still" style="border-radius:4px;aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:560px">A lighthouse keeper on the Norwegian coast witnesses something he shouldn't. Shot on 35mm over twenty-eight days in the depths of the polar winter, with a four-person crew and a single interior built inside a working lighthouse.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--30);max-width:560px">Premiered at TIFF 2024. Currently on the festival circuit. Theatrical release planned for late 2025.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:group {"className":"godevs-project-meta","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group godevs-project-meta">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow" style="letter-spacing:0.2em;text-transform:uppercase">Credits</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
<p style="font-size:var(--wp--preset--font-size--small);line-height:1.8"><strong>Director:</strong> M. Vance<br><strong>Writer:</strong> M. Vance &amp; E. Holm<br><strong>Producer:</strong> Northbound Films<br><strong>Runtime:</strong> 118 min<br><strong>Format:</strong> 35mm Kodak Vision3<br><strong>Aspect Ratio:</strong> 2.39:1<br><strong>Sound:</strong> Dolby 5.1</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p class="is-style-eyebrow" style="letter-spacing:0.2em;text-transform:uppercase;margin-top:var(--wp--preset--spacing--30)">Festivals</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.8"}}} -->
<p style="font-size:var(--wp--preset--font-size--small);line-height:1.8">TIFF 2024 — Official Selection<br>Rotterdam 2025 — Tiger Award Nominee<br>Tribeca 2025 — Spotlight</p>
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

<!-- ═══ STILL GRID — Production stills ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Production Stills</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;font-weight:600">From the set.</h2>
<!-- /wp:heading -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Still — lighthouse interior" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Lighthouse interior · day 4</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Still — coastal exteriors" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Coastal exteriors · day 11</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Still — keeper portrait" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Portrait · day 18</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ OTHER WORK — Poster grid ═══ -->
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Archive</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Earlier work.</h2>
<!-- /wp:heading -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--50)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="The Quiet Hours — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2023 · Short · 14 min · 35mm</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">The Quiet Hours</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">Two strangers share a train compartment overnight. Selected for Cannes Short Film Corner.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-editorial.png' ); ?>" alt="Northbound — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2022 · Feature · 102 min · 16mm</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">Northbound</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">A road film about going home, slowly. Berlinale Generation 14plus, 2022.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="The Cold Room — poster" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2019 · Short · 8 min · Digital</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="letter-spacing:-0.01em">The Cold Room</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">A single-take study of a writer trying to begin. Selected for Locarno Shorts.</p>
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

<!-- ═══ NEXT PROJECT TRANSITION ═══ -->
<!-- wp:group {"tagName":"section","className":"godevs-next-project","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull godevs-next-project has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"center","textAlign":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.3em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.3em;text-transform:uppercase">In Development · 2025</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"textAlign":"center","textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 6vw, 4rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 6vw, 4rem);line-height:1;letter-spacing:-0.03em;font-weight:600"><a href="/contact" style="color:var(--wp--preset--color--contrast);text-decoration:none">The Long Way →</a></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p class="has-text-align-center has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:560px">Pre-production on a third feature, expected to shoot in winter 2025. For script inquiries and distribution, please reach out.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->
