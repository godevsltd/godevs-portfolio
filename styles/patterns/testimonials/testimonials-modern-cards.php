<?php
/**
 * Title: Testimonials — Modern Quote Cards
 * Slug: godevs-portfolio/testimonials-modern-cards
 * Description: Live 2-column grid of testimonials with large quotation marks, serif body, avatar, name, and role.
 * Categories: godevs-portfolio-testimonials
 * Keywords: testimonials, quotes, cards, modern, grid, reviews
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
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.15em;text-transform:uppercase">Testimonials</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.02em;font-weight:600">What clients say.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":301,"query":{"perPage":4,"postType":"godevs_testimonial","order":"desc","orderBy":"date"}} -->
<!-- wp:post-template {"className":"godevs-grid-3"} -->
<!-- wp:group {"className":"is-style-card-quote","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-card-quote">
<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.7"}}} /-->
<!-- wp:separator {"className":"is-style-thin"} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:post-featured-image {"isLink":false,"aspectRatio":"1/1","style":{"border":{"radius":"999px"},"layout":{"selfStretch":"fit","flexSize":"48px"}}} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"isLink":false,"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->
<!-- wp:post-meta {"key":"_godevs_testimonial_client_role","style":{"typography":{"fontSize":"var:preset|font-size|x-small"},"color":{"text":"var:preset|color|muted"}}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No testimonials yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
