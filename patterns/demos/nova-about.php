<?php
/**
 * Title: Demo - Nova (Agency) - About
 * Slug: godevs-portfolio/demo-nova-about
 * Description: NOVA studio about page - philosophy, values, team, experience. Recommended style variation: Nova.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, nova, about, studio, agency
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-nova","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-nova alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-nova","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + studio metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">About NOVA - Creative Studio</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500"><span class="nova-dot" aria-hidden="true"></span>Est. 2014 · Reykjavík · New York</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
			<h1 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8rem)">A studio for <span class="nova-italic">ambitious</span> brands.</h1>
			<!-- /wp:heading -->

			<!-- Sub row: supporting copy + studio metadata column -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"42ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:42ch">NOVA is a deliberately small studio of strategists, designers and engineers. We partner with founders and brands from first idea to final pixel - building brands, products and digital experiences that feel considered, considered, and impossible to ignore.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
						<!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"}}} -->
						<div class="wp-block-button"><a href="/contact" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project</a></div>
						<!-- /wp:button -->
						<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"}}} -->
						<div class="wp-block-button is-style-outline"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Explore Work</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Founded - 2014</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Studios - Reykjavík · New York</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Team - 12 people</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Available - Q3 2026</p>
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

	<!-- === 02 - STUDIO INTRODUCTION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">The Studio</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5.5vw, 4.5rem)","lineHeight":"1.02","letterSpacing":"-0.035em","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":"20ch"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5.5vw, 4.5rem);line-height:1.02;letter-spacing:-0.035em;font-weight:600;max-width:20ch">We partner with founders and brands from <span class="nova-italic">first idea</span> to final pixel.</h2>
			<!-- /wp:heading -->

			<!-- Two-column editorial layout (image + text) -->
			<!-- wp:html -->
			<div class="nova-editorial-2col" style="margin-top:var(--wp--preset--spacing--70);">
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-studio.webp' ); ?>" alt="NOVA creative studio interior - minimal designer workspace with natural light, warm wood and raw concrete" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover;width:100%;height:auto" loading="lazy">
					<p class="nova-caption">NOVA Studio - Reykjavík</p>
				</div>
				<div>
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.6;color:var(--nova-muted);max-width:48ch;margin:0 0 1.5rem;">We're a deliberately small studio of senior strategists, designers and engineers. No account layers, no offshore hand-offs - just the people you talk to, working directly with you from kickoff to launch.</p>
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.6;color:var(--nova-muted);max-width:48ch;margin:0 0 1.5rem;">We started NOVA in 2014 with one belief: that craft, clarity and care still win - even in an industry racing to ship faster and cheaper. A dozen years and eighty-six projects later, that belief is still what gets us up in the morning.</p>
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.6;color:var(--nova-muted);max-width:48ch;margin:0 0 2rem;">Today we work across brand, product and digital experience - usually one engagement at a time, with a team that stays the same from first sketch to final ship.</p>
					<a class="nova-arrow-link" href="/team">Meet the studio <span class="nova-arrow" aria-hidden="true">→</span></a>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - PHILOSOPHY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + asymmetric pull-quote -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">
				<!-- wp:column {"verticalAlignment":"top","width":"72%"} -->
				<div class="wp-block-column" style="flex-basis:72%">
					<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Philosophy - 01</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 6vw, 5rem)","lineHeight":"1.02","letterSpacing":"-0.04em","fontWeight":"600"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="nova-display has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 6vw, 5rem);line-height:1.02;letter-spacing:-0.04em;font-weight:600;margin-top:var(--wp--preset--spacing--40);max-width:22ch">The best work happens when a small team is given the time, trust and focus to make something that <span class="nova-italic">lasts.</span></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"top","width":"28%"} -->
				<div class="wp-block-column" style="flex-basis:28%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.5rem">- The NOVA team</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6;margin-top:var(--wp--preset--spacing--30)">A few principles we keep returning to. They're not rules - they're the way we've learned to work that produces the work we're proud of.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - VALUES === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">What we believe</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Principles.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Values grid -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-group nova-process-step">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">01 - Principle</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Craft over volume</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">We say no to more than we say yes to. Fewer engagements, deeper investment, work we can stand behind five years from now.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-group nova-process-step">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">02 - Principle</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Direct collaboration</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">No account managers, no hand-offs. You work with the people doing the work - weekly, in the open, from kickoff to launch.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-group nova-process-step">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">03 - Principle</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Long-term thinking</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">We design for the year after launch, not just for the demo. Systems over screens - work your team can grow without us in the room.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-group nova-process-step">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">04 - Principle</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
						<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Honesty</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">We tell you what we'd do, not what we think you want to hear. Honest critique is part of the work - and the only path to a result worth shipping.</p>
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

	<!-- === 05 - TEAM === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">The Team</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Meet the people.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Team grid -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-team-1.webp' ); ?>" alt="Portrait of Sólrún Halldórsdóttir, NOVA founder and creative director" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Founder & Creative Director</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.375rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.375rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Sólrún Halldórsdóttir</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Founded NOVA in 2014. Leads brand and creative direction with a stubborn belief that craft and clarity still win.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-team-2.webp' ); ?>" alt="Portrait of Marco Reyes, NOVA design director" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Design Director</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.375rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.375rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Marco Reyes</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Obsessed with type, motion and the small decisions that make a product feel inevitable. Twelve years across product and brand.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-team-3.webp' ); ?>" alt="Portrait of Aïcha Diop, NOVA design engineer" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Design Engineer</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.375rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.375rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Aïcha Diop</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Bridges design and code. Ships production-grade interfaces with the same care as the design - and the same eye for detail.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"2px"}}} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-team-4.webp' ); ?>" alt="Portrait of Kenji Watanabe, NOVA strategy lead" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Strategy Lead</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.375rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.375rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Kenji Watanabe</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Translates business questions into design briefs - and back again, without losing the thread. Background in research and brand strategy.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Meet the full team link -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--70);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/team">Meet the full team →</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - EXPERIENCE / AWARDS === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Selected recognition - demo content</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Recognition.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Awards list - reuses nova-service-list pattern -->
			<!-- wp:html -->
			<div class="nova-service-list" role="list">
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">01</span>
					<span class="nova-service-title">Awwwards - Site of the Day ×4</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">02</span>
					<span class="nova-service-title">CSS Design Awards - Best UI</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">03</span>
					<span class="nova-service-title">Webby Honoree - Best Visual Design</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">04</span>
					<span class="nova-service-title">Type Directors Club - Certificate of Excellence</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">05</span>
					<span class="nova-service-title">FWA - Site of the Day ×3</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="nova-service-row" href="#" role="listitem">
					<span class="nova-service-num">06</span>
					<span class="nova-service-title">Communication Arts - Interactive Annual</span>
					<span class="nova-service-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 07 - FINAL CTA (dark) === -->
	<!-- wp:group {"tagName":"section","className":"nova-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group nova-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Let's talk</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 10vw, 9rem)","lineHeight":"0.94","letterSpacing":"-0.05em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 10vw, 9rem);line-height:0.94;letter-spacing:-0.05em;font-weight:600">Have a project in mind?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:46ch">Let's turn your next idea into something people remember. We take on a small number of engagements each quarter - tell us about yours.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"},"color":{"background":"var:preset|color|accent","text":"var:preset|color|primary"}}} -->
				<div class="wp-block-button"><a href="/contact" class="wp-block-button__link has-accent-background-color has-background has-primary-color has-text-color wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-nova","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
