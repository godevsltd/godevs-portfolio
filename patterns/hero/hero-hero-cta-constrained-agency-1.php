<?php
/**
 * Title: Hero — Project Brief Capture
 * Slug: godevs-portfolio/hero-hero-cta-constrained-agency-1
 * Description: A direct-capture hero with an inline project-brief form in the fold — name, email, and project type, plus a submit button. Designed for freelancers and agencies who want to convert visitors into leads without a separate contact page.
 * Categories: godevs-portfolio-hero
 * Keywords: hero, form, capture, lead, project, brief, agency
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow has-text-align-center">Available for new work</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 4.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 4.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Tell me about your project.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--preset--font-size--medium);max-width:560px">A quick brief helps me understand whether we're a fit before we talk. I read every one personally and reply within two business days.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"color":"var:preset|color|border","radius":"var(--wp--custom--radius--lg, 12px)","width":"1px"}},"backgroundColor":"surface-muted","layout":{"type":"constrained","contentSize":"560px"}} -->
		<div class="wp-block-group alignwide has-surface-muted-background-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:12px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<p class="is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--30)">Project brief</p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
					<p class="is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--10)">Your name</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}},"backgroundColor":"surface"} -->
					<p class="has-surface-background-color has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Jane Doe</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
					<p class="is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--10)">Email</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}},"backgroundColor":"surface"} -->
					<p class="has-surface-background-color has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">jane@studio.com</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}}}} -->
			<p class="is-style-eyebrow" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10)">Project type</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}},"backgroundColor":"surface"} -->
			<p class="has-surface-background-color has-text-color has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:6px;color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Identity &amp; brand system, editorial site, or something else</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"width":{"type":"full","size":100}} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#contact" class="wp-block-button__link wp-element-button">Send the brief</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30)">Note: This is a placeholder form. Replace with a Contact Form 7, WPForms, or Jetpack Forms block before going live.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
