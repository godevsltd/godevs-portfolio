<?php
/**
 * Title: Testimonial
 * Slug: godevs-portfolio/testimonials
 * Categories: featured, testimonials, text
 * Description: A single large editorial pull-quote with attribution and role. Stack multiple instances for a column of testimonials.
 * Keywords: testimonial, quote, review, social-proof
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-testimonial","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group godevs-testimonial" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">In their words</p>
		<!-- /wp:paragraph -->

		<!-- wp:pullquote {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"var:preset|font-size|x-large","lineHeight":"1.3","letterSpacing":"-0.015em"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}} -->
		<figure class="wp-block-pullquote has-text-color" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
			<blockquote>
				<p style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:var(--wp--preset--font-size--x-large);line-height:1.3;letter-spacing:-0.015em">The team handed us a WordPress site we actually understand. Six months later we are still editing pages ourselves — no developer calls, no tickets, no friction.</p>
				<cite>Sample client · Head of Brand, fictional studio</cite>
			</blockquote>
		</figure>
		<!-- /wp:pullquote -->

		<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-small-font-size has-text-color" style="color:var(--wp--preset--color--muted)">Sample attribution shown for layout reference. Replace with verified client feedback before publishing.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
