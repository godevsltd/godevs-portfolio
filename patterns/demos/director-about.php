<?php
/**
 * Title: Demo — Director (About)
 * Slug: godevs-portfolio/demo-director-about
 * Description: About page for the Director demo. Dark cinematic bio with portrait, filmography, and awards. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, director, about, bio, filmography, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- ═══ HERO — Split portrait + bio on dark surface ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"42%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="M. Vance — portrait" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column-->
<!-- wp:column {"width":"58%","verticalAlignment":"center"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">About</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">M. Vance — director, writer.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:560px">Born in Oslo, based between Berlin and Tromsø. I direct feature films, short-form narrative, and the occasional commercial — work that prefers restraint to spectacle and silence to score. The last decade has been spent learning how much can be left out and still leave a film standing.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--30);max-width:560px">My first feature, Northbound, premiered at Berlinale Generation 14plus in 2022. The second, Last Light, premiered at TIFF 2024 and is currently on the festival circuit. I am a 2021 Berlinale Talents alumna.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;margin-top:var(--wp--preset--spacing--40)">Berlin · Tromsø · Worldwide</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column-->
</div>
<!-- /wp:columns-->
</div>
<!-- /wp:group-->
</section>
<!-- /wp:group-->

<!-- ═══ PRACTICE — Three areas ═══ -->
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow" style="letter-spacing:0.25em;text-transform:uppercase">Practice</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">What I work on.</h2>
<!-- /wp:heading -->
<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--50)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Feature Films</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">Writer-director on long-form narrative, developed with care and shot on film when the budget allows. Two features released; a third in development for 2025.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Short-form Narrative</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">Short films and commissioned series — usually 8 to 20 minutes, often built around a single image, location, or conversation that won't leave me alone.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Commercial Work</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.7">Selective commercial collaborations — usually one or two per year, almost always with brands that make something physical. Short, restrained, no voiceover if I can help it.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ FILMOGRAPHY — Year-by-year on dark surface ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary"},"textColor":"contrast"},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"letterSpacing":"0.25em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);letter-spacing:0.25em;text-transform:uppercase">Filmography</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Selected credits, 2017—2024.</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--50)">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase">2024 · Feature · 118 min</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em;font-weight:600">Last Light</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","opacity":"0.8"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);opacity:0.8">Director · Co-writer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small)"><a href="#" style="color:var(--wp--preset--color--contrast);text-decoration:underline">View →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase">2023 · Short · 14 min</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em;font-weight:600">The Quiet Hours</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","opacity":"0.8"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);opacity:0.8">Director · Writer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small)"><a href="#" style="color:var(--wp--preset--color--contrast);text-decoration:underline">View →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase">2022 · Feature · 102 min</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em;font-weight:600">Northbound</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","opacity":"0.8"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);opacity:0.8">Director · Writer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small)"><a href="#" style="color:var(--wp--preset--color--contrast);text-decoration:underline">View →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase">2019 · Short · 8 min</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);letter-spacing:-0.01em;font-weight:600">The Cold Room</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small","opacity":"0.8"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small);opacity:0.8">Director · Writer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p class="has-contrast-color has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--small)"><a href="#" style="color:var(--wp--preset--color--contrast);text-decoration:underline">View →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ CTA ═══ -->
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->
<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600">Currently developing two features.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:560px">For new work, representation, or festival programming inquiries, the contact page lists the fastest routes in.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:button -->
<div class="wp-block-button"><a href="/contact" class="wp-block-button__link wp-element-button">Get in touch</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="/work" class="wp-block-button__link wp-element-button">See selected work</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->
