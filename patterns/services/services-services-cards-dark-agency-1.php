<?php
/**
 * Title: Services — Tab-Look Layout
 * Slug: godevs-portfolio/services-services-cards-dark-agency-1
 * Description: A tab-look static layout for services with sub-categories — a styled row of tab labels above a highlighted active panel. Visually tabbed without any JS; uses pure CSS hover/focus states. Dark surface for a focused, product-like feel.
 * Categories: godevs-portfolio-services
 * Keywords: services, tabs, tabbed, panel, static, no-js, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Services · By discipline</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Three disciplines, one practice.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- Tab labels row (visual tabs — first is "active" with accent underline) -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"border":{"color":"var:preset|color|secondary","bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|accent","width":"2px"}},"color":{"text":"var:preset|color|contrast"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600;letter-spacing:-0.01em;padding-bottom:var(--wp--preset--spacing--20);border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:2px">Identity</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:400;letter-spacing:-0.01em;padding-bottom:var(--wp--preset--spacing--20)">Editorial</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"400","letterSpacing":"-0.01em"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:400;letter-spacing:-0.01em;padding-bottom:var(--wp--preset--spacing--20)">Engineering</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Active tab panel (Identity) -->
		<!-- wp:group {"className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"640px"}} -->
		<div class="wp-block-group godevs-reveal has-surface-background-color has-background" style="background-color:var(--wp--preset--color--surface);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--primary)">01 · Identity</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"},"color":{"text":"var:preset|color|primary"}}} -->
			<h3 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--primary);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Identity systems &amp; visual language</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|primary"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--medium);max-width:560px">Wordmarks, type pairings, color systems, and the editorial templates that hold them together. Built to scale from a business card to a full site.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30)">Deliverables: Wordmark · Type system · Color palette · Brand guidelines · 3 application templates · 6–8 week timeline</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30)">Note: This is a static tab-look layout — the first tab is shown as active. For interactive tabs, pair with a JS tabs block or convert to core/details accordions.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
