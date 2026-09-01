<?php
/**
 * Title: FAQ — Two-Column Q/A Grid
 * Slug: godevs-portfolio/faq-faq-list-dark-agency-1
 * Description: A two-column Q/A grid for shorter FAQ sets — questions as headings with visible answers directly beneath (no toggle). Dark surface. Distinct from the accordion: this one shows all answers at once, for scannability.
 * Categories: godevs-portfolio-faq
 * Keywords: faq, grid, two-column, visible, scannable, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Questions</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">FAQ.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-group">

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">What's your typical timeline?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Identity systems take 6–8 weeks. Editorial sites 8–12. Performance audits 2–4. All scoped in writing before we start.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--30)">Do you work with agencies?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Yes — white-label identity and front-end work for agencies that need depth without an in-house specialist.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--30)">What's not included?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Content writing, photography, and hosting are quoted separately. I focus on design and engineering.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-group">

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">How do payments work?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">50% to start, 50% on delivery. Bank transfer or Stripe. Net-15 on invoices.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--30)">Do you offer revisions?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Two rounds on every deliverable. Additional rounds billed hourly. I'd rather get it right than get it fast.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--30)">Can I see your contract?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Yes — happy to share the template before we sign. Standard scope, IP transfer, and a 30-day defect window.</p>
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
