<?php
/**
 * Title: Demo — Blueprint (Architect)
 * Slug: godevs-portfolio/demo-blueprint
 * Description: Software architect portfolio framed as an Architecture Decision Record — RFC-style metadata header, numbered system-component spec rows, decision-log experience, and an issue-tracker CTA. Recommended style variation: Corporate.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, developer, architect, adr, specification, systems
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-blueprint godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-blueprint alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-minimal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ Hero — ADR document header ═══ -->

	<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

			<!-- RFC metadata bar (mono font — looks like a file header) -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"color":"var:preset|color|border","width":"0"},"right":{"color":"var:preset|color|border","width":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>ADR-2024-001</code> &nbsp;·&nbsp; <code>STATUS: ACTIVE</code> &nbsp;·&nbsp; <code>DECIDED: 2014</code></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">SYSTEMS · INTERFACES · TRADE-OFFS</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Document title -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|huge","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
			<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 4.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Architecting systems that survive their second year.</h1>
			<!-- /wp:heading -->

			<!-- Abstract -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|large","lineHeight":"1.6"},"layout":{"selfStretch":"fit","flexSize":"580px"}}} -->
			<p style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--large);line-height:1.6;max-width:580px">A decade of architectural decisions for teams who'd rather ship a working v2 than a perfect v1 that never arrives. The work below is selected from systems still in production.</p>
			<!-- /wp:paragraph -->

			<!-- Context line -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--40)">// Context: independent practice · Berlin · 12 years · 40+ systems shipped</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ Body — System Component Specifications ═══ -->

	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">## Systems in production</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Selected specifications.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Spec row 1: Headless CMS migration -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group has-surface-background-color has-background has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"15%"} -->
					<div class="wp-block-column" style="flex-basis:15%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:600">SPEC-01</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-column" style="flex-basis:55%">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Headless CMS Migration — Publishing Platform</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small">Migrated a 2,000-article publishing platform from monolithic WordPress to a headless WP + Next.js architecture. Editor workflow preserved; TTI dropped from 4.1s to 1.3s.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-column" style="flex-basis:30%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Stack:</strong> WP + Next.js + Vercel</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Outcome:</strong> 3.2× faster TTI</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Status:</strong> In production since 2023</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- Spec row 2: Event-driven ordering system -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group has-surface-background-color has-background has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"15%"} -->
					<div class="wp-block-column" style="flex-basis:15%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:600">SPEC-02</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-column" style="flex-basis:55%">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Event-Driven Ordering System — E-commerce</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Designed an event-sourced order processing pipeline for a retailer processing 50k orders/day. Replaced a synchronous PHP checkout with an async event-driven architecture.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-column" style="flex-basis:30%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Stack:</strong> Kafka + Go + Postgres</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Outcome:</strong> 99.97% uptime</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Status:</strong> In production since 2022</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- Spec row 3: Multi-tenant SaaS architecture -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--md, 8px)","width":"1px"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group has-surface-background-color has-background has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"15%"} -->
					<div class="wp-block-column" style="flex-basis:15%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:600">SPEC-03</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
					<div class="wp-block-column" style="flex-basis:55%">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|display","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--medium);letter-spacing:-0.01em">Multi-Tenant SaaS Platform — B2B Analytics</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Architected a multi-tenant analytics platform with row-level security and per-tenant data isolation. Handles 200+ tenants with zero cross-tenant data leaks across 3 years.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-column" style="flex-basis:30%">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Stack:</strong> Postgres RLS + Node + Redis</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Outcome:</strong> 200+ tenants, 0 leaks</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><strong>Status:</strong> In production since 2021</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ CTA — Issue tracker framing ═══ -->

	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

			<!-- Issue metadata -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>ISSUE: new-engagement</code> &nbsp;·&nbsp; <code>LABELS: architecture, consulting</code> &nbsp;·&nbsp; <code>ASSIGNEE: you</code></p>
			<!-- /wp:paragraph -->

			<!-- Issue title -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Open an issue if your system needs a second pair of eyes.</h2>
			<!-- /wp:heading -->

			<!-- Issue body -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);max-width:520px">Two engagement slots open for Q3. Architecture reviews, system design sessions, or a full design partnership. I read every issue personally.</p>
			<!-- /wp:paragraph -->

			<!-- Actions -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Open an issue →</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-text-link"} -->
				<div class="wp-block-button is-style-text-link"><a href="#work" class="wp-block-button__link wp-element-button">Read the decision log →</a></div>
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
