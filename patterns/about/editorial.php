<?php
/**
 * Title: About - Editorial
 * Description: A publication-style 60/40 about - display headline and body left, serif-italic pull quote on a hairline ground right, with a mono attribution rule. For long-form studio pages.
 * Slug: godevs-portfolio/about-editorial
 * Categories: godevs-portfolio-about
 * Keywords: about, editorial, publication, pull-quote, two-column
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-about-editorial godevs-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<section class="wp-block-group wp-block-godevs-about-editorial alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|70"}}},"className":"godevs-reveal-stagger"} -->
	<div class="wp-block-columns alignwide godevs-reveal-stagger">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">About the practice</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700;margin-top:var(--wp--preset--spacing--40)">Started in 2014 as one freelancer figuring out identity work. It grew into something far more <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">deliberate</em>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--50)">The work that holds up is rarely the work that wins awards. It's the work that's read carefully, that loads quickly, that stays accessible on a five-year-old phone, and that the client can update themselves a year later without breaking anything.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7;margin-top:var(--wp--preset--spacing--40)">That is the practice - design, write, build, ship, repeat. The portfolio below is what came out of those cycles, kept honest by a decade of trimming what didn't belong.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"color":"var:preset|color|line","style":"solid","width":"1px","radius":"var(--wp--custom--radius--lg, 12px)"},"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface-muted);border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:var(--wp--custom--radius--lg, 12px);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:quote {"className":"is-style-default","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|large","lineHeight":"1.45","fontStyle":"italic","fontWeight":"500"}}} -->
				<blockquote class="wp-block-quote is-style-default" style="font-family:var(--wp--preset--font-family--serif);font-size:var(--wp--preset--font-size--large);line-height:1.45;font-style:italic;font-weight:500">
					<!-- wp:paragraph -->
					<p>Slow is a feature, not a bug. Most of the work that lasts took longer than the brief allowed.</p>
					<!-- /wp:paragraph -->
					<!-- wp:cite -->
					<cite>- working note, 2025</cite>
					<!-- /wp:cite -->
				</blockquote>
				<!-- /wp:quote -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500;border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);margin-top:var(--wp--preset--spacing--40)">Field note · No. 27</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
