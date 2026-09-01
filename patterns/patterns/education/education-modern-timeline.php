<?php
/**
 * Title: Education — Modern Timeline
 * Slug: godevs-portfolio/education-modern-timeline
 * Description: Live vertical timeline of education entries. Shows institution, degree, dates, and location in clean bordered rows.
 * Categories: godevs-portfolio-education
 * Keywords: education, timeline, vertical, academic, modern, clean
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"className":"godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"},"typography":{"letterSpacing":"0.15em","textTransform":"uppercase"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.15em;text-transform:uppercase">Education</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">Academic background.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":601,"query":{"perPage":10,"postType":"godevs_education","order":"desc","orderBy":"date"}} -->
<!-- wp:post-template {"className":"godevs-list-clean"} -->
<!-- wp:group {"className":"is-style-card-accent","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group is-style-card-accent">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--small);font-weight:600"><!-- wp:post-meta {"key":"_godevs_education_start"} /--> — <!-- wp:post-meta {"key":"_godevs_education_end"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em","fontWeight":"600"}}} /-->
<!-- wp:post-meta {"key":"_godevs_education_institution","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->
<!-- wp:post-meta {"key":"_godevs_education_degree","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-excerpt {"moreText":"Details →","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No education entries yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
