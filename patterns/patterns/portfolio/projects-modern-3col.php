<?php
/**
 * Title: Projects — Modern 3-Column Grid
 * Slug: godevs-portfolio/projects-modern-3col
 * Description: Live query-loop grid pulling recent projects. Modern elevated cards with hover lift, featured image, category, title, and excerpt.
 * Categories: godevs-portfolio-portfolio
 * Keywords: projects, grid, three-column, modern, cards, query, loop
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.15em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.15em;text-transform:uppercase">Portfolio</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Selected projects.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":101,"query":{"perPage":6,"postType":"godevs_project","order":"desc","orderBy":"date"}} -->
<!-- wp:post-template {"className":"godevs-grid-3"} -->
<!-- wp:group {"className":"is-style-card-pro","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-card-pro">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} /-->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)"><!-- wp:post-date {"format":"Y"} /--> · <!-- wp:post-terms {"term":"godevs_project_category"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} /-->
<!-- wp:post-excerpt {"moreText":"View project →","style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"}}} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No projects yet. Add your first project to see it here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
