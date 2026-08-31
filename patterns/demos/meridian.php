<?php
/**
 * Title: Demo — Meridian (Consultant)
 * Slug: godevs-portfolio/demo-meridian
 * Description: Business consultant portfolio. Stats-led asymmetric hero, services, results, testimonials, insights. Recommended style variation: Corporate.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, business, consultant, corporate, strategy
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-meridian godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-meridian alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — Stats-led asymmetric ═══ -->
	<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">

				<!-- Left: oversized stats -->
				<!-- wp:column {"width":"40%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(4rem, 8vw, 6rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600","color":"var:preset|color|accent"}}} -->
						<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:clamp(4rem, 8vw, 6rem);line-height:1;letter-spacing:-0.03em;font-weight:600">200+</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Engagements delivered</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:separator {"className":"is-style-thin"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
					<!-- /wp:separator -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 6vw, 4.5rem)","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
						<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 6vw, 4.5rem);line-height:1;letter-spacing:-0.03em;font-weight:600">98%</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Client retention rate</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- Right: headline + CTA -->
				<!-- wp:column {"width":"60%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
					<p class="is-style-eyebrow">Business / Consultant</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
					<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Helping teams make better decisions about their products and processes.</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
					<p style="font-size:var(--wp--preset--font-size|medium);max-width:520px">A consulting practice built on a decade of operational experience. Strategy, process design, and the honest conversation that precedes both.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Schedule a consultation</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-text-link"} -->
						<div class="wp-block-button is-style-text-link"><a href="#services" class="wp-block-button__link wp-element-button">See services →</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ SERVICES ═══ -->
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
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">How I help.</h2>
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
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Strategy & Positioning</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Market analysis, competitive positioning, and the strategic framework that guides product decisions.</p>
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
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Process Design</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Operational audits, workflow redesign, and the process documentation that makes teams scalable.</p>
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
						<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Performance Audits</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Team performance reviews, bottleneck identification, and the prioritized action plan that follows.</p>
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

	<!-- ═══ TESTIMONIALS ═══ -->
	<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Testimonials</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">What clients say.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns godevs-reveal-stagger">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.5"}}} -->
						<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.5">"Meridian helped us cut our decision-making time in half. The strategy framework is still in use three years later."</p>
						<!-- /wp:paragraph -->
						<!-- wp:separator {"className":"is-style-thin"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
						<!-- /wp:separator -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="font-size:var(--wp--preset--font-size|small)"><strong>Maya Okonkwo</strong><br>CEO · Studio Field</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.5"}}} -->
						<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.5">"The operational audit found bottlenecks three previous consultants missed. Worth every cent."</p>
						<!-- /wp:paragraph -->
						<!-- wp:separator {"className":"is-style-thin"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
						<!-- /wp:separator -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="font-size:var(--wp--preset--font-size|small)"><strong>Daniel Reyes</strong><br>COO · Foundry Co.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"is-style-card-default","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"backgroundColor":"surface"} -->
					<div class="wp-block-group is-style-card-default has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontStyle":"italic","lineHeight":"1.5"}}} -->
						<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|large);font-style:italic;line-height:1.5">"We hired Meridian for a 2-week strategy sprint and ended up with a 3-year roadmap we still follow."</p>
						<!-- /wp:paragraph -->
						<!-- wp:separator {"className":"is-style-thin"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin"/>
						<!-- /wp:separator -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
						<p style="font-size:var(--wp--preset--font-size|small)"><strong>Priya Sharma</strong><br>VP Product · Northbound</p>
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
	<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
			<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Ready to make better decisions?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium)">Schedule a free 30-minute consultation. No pitch — just an honest conversation about your challenge.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a href="#contact" class="wp-block-button__link wp-element-button">Schedule a consultation</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-text-link"} -->
				<div class="wp-block-button is-style-text-link"><a href="#insights" class="wp-block-button__link wp-element-button">Read insights →</a></div>
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
