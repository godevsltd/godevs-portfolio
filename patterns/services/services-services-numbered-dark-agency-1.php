<?php
/**
 * Title: Services — Accordion FAQs
 * Slug: godevs-portfolio/services-services-numbered-dark-agency-1
 * Description: An accordion-style services section using native core/details blocks — for service FAQs-within-services. Each service expands to reveal scope, deliverables, and timeline. Dark surface for a focused, editorial Q&A feel.
 * Categories: godevs-portfolio-services
 * Keywords: services, accordion, details, faq, expand, collapse, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Services · In detail</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Expand each to see what's included.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:560px">Every engagement is scoped in writing before we start. Click any service to see the typical deliverables, timeline, and what's not included.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-group godevs-reveal-stagger">

			<!-- wp:details {"showContent":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"color":"var:preset|color|secondary","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}}} -->
			<details open class="wp-block-details" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
				<summary>01 · Identity system &amp; visual language</summary>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--20)">Wordmark, type pairing, color system, and editorial templates. Includes a 40-page brand guidelines PDF.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)"><strong>Timeline:</strong> 6–8 weeks · <strong>Deliverables:</strong> Wordmark, type system, color palette, brand guidelines, 3 application templates · <strong>Not included:</strong> Web development (quoted separately)</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"color":"var:preset|color|secondary","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}}} -->
			<details class="wp-block-details" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
				<summary>02 · Editorial site &amp; component library</summary>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--20)">Long-form layouts, magazine systems, and a component library built on Gutenberg. Designed for editors who publish weekly.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)"><strong>Timeline:</strong> 8–12 weeks · <strong>Deliverables:</strong> Site architecture, 15+ block patterns, style variations, editor training · <strong>Not included:</strong> Content migration (quoted separately)</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"color":"var:preset|color|secondary","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}}} -->
			<details class="wp-block-details" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
				<summary>03 · Performance audit &amp; front-end engineering</summary>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);margin-top:var(--wp--preset--spacing--20)">Accessibility passes, performance audits, and front-end engineering. Lighthouse 100 is the baseline, not the goal.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)"><strong>Timeline:</strong> 2–4 weeks · <strong>Deliverables:</strong> Audit report, prioritized fix list, refactored components · <strong>Not included:</strong> Design changes (quoted separately)</p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
