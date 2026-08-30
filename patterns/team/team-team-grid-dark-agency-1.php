<?php
/**
 * Title: Team — List with Bios
 * Slug: godevs-portfolio/team-team-grid-dark-agency-1
 * Description: A list with larger photos and short bios — each member as a horizontal row with a large 4/5 portrait, name, role, and 2-3 sentence bio. Dark surface for editorial gravitas. Distinct from the grid: this one gives each member more space.
 * Categories: godevs-portfolio-team
 * Keywords: team, list, bios, larger, photos, dark, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">The team</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">Who does the work.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-group godevs-reveal-stagger">

			<!-- Member 1 -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"35%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Maya Okonkwo, founder and creative director" style="aspect-ratio:4/5;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"65%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Founder · Creative Director</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Maya Okonkwo</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:480px">Ten years of independent practice across identity, editorial, and front-end engineering. Previously senior designer at Foundry Co., where she built the component library that still powers their publishing workflow today.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Member 2 -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"width":"35%","verticalAlignment":"center"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Portrait of Daniel Reyes, editorial lead" style="aspect-ratio:4/5;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"65%","verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Editorial Lead</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Daniel Reyes</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"480px"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|medium);max-width:480px">Editor and long-form specialist. Previously at Long-form Journal, where he shipped the editorial redesign that doubled reader retention. Runs the studio's writing practice.</p>
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
