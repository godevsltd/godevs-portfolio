<?php
/**
 * Title: Testimonial
 * Slug: godevs-portfolio/testimonials
 * Categories: featured, text
 * Description: A single large editorial pull-quote with attribution and role. Stack multiple instances for a column of testimonials.
 * Keywords: testimonial, quote, review, social-proof
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-testimonial","layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-testimonial">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
		<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.1em">In their words</p>
		<!-- /wp:paragraph -->

		<!-- wp:pullquote {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontStyle":"italic"}}} -->
		<figure class="wp-block-pullquote">
			<blockquote>
				<p style="font-family:var(--wp--preset--font-family--heading);font-style:italic">The team handed us a WordPress site we actually understand. Six months later we are still editing pages ourselves — no developer calls, no tickets, no friction.</p>
				<cite>Sample client · Head of Brand, fictional studio</cite>
			</blockquote>
		</figure>
		<!-- /wp:pullquote -->

		<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"var(--wp--preset--color--muted)"}}} -->
		<p class="has-small-font-size" style="color:var(--wp--preset--color--muted)">Sample attribution shown for layout reference. Replace with verified client feedback before publishing.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
