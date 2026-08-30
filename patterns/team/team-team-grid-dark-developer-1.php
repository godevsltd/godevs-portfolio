<?php
/**
 * Title: Team — Team Grid (Developer)
 * Slug: godevs-portfolio/team-team-grid-dark-developer-1
 * Description: A team grid team section with developer-themed content. Uses design tokens and core blocks.
 * Categories: godevs-portfolio-team
 * Keywords: team, team grid, developer, section, pattern
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Full-Stack Developer</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">The team.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Team member" style="border-radius:9999px;aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Member One</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Founder & Designer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Team member" style="border-radius:9999px;aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Member Two</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Lead Developer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"aspectRatio":"1/1","scale":"cover","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Team member" style="border-radius:9999px;aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Member Three</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">Creative Director</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
