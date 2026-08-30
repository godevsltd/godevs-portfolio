<?php
/**
 * Title: Team — Featured Lead + Grid
 * Slug: godevs-portfolio/team-team-grid-surface-agency-1
 * Description: A featured lead + grid layout — one large founder/principal card on top, followed by a 3-column grid of smaller secondary team cards. Surface-muted background. For agencies with one prominent founder.
 * Categories: godevs-portfolio-team
 * Keywords: team, featured, lead, founder, grid, surface, principal
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">The team</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Founded, with a team.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- Featured lead -->
		<!-- wp:columns {"verticalAlignment":"center","className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns godevs-reveal are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Maya Okonkwo, founder and principal" style="aspect-ratio:4/5;object-fit:cover;border-radius:12px"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"60%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent)">Founder · Principal</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Maya Okonkwo</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
				<p style="font-size:var(--wp--preset--font-size|medium);max-width:520px">Ten years of independent practice. Leads every engagement personally — from the first brief to the final handoff. Previously senior designer at Foundry Co.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:separator {"className":"is-style-thin","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-thin" style="margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- Secondary team grid -->
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p class="is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--40)">Collaborators</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"999px"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Daniel Reyes" style="aspect-ratio:1/1;object-fit:cover;border-radius:999px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--20)">Daniel Reyes</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Editorial Lead</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"999px"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Priya Sharma" style="aspect-ratio:1/1;object-fit:cover;border-radius:999px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--20)">Priya Sharma</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Product Lead</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"999px"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Sam Chen" style="aspect-ratio:1/1;object-fit:cover;border-radius:999px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<h4 class="wp-block-heading" style="letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--20)">Sam Chen</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">Front-end Engineer</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
