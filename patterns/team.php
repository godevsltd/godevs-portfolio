<?php
/**
 * Title: Team
 * Slug: godevs-portfolio/team
 * Categories: featured, about, text
 * Description: A three-column team grid with portrait-style image placeholder, name, role, and short bio. For agency and studio about pages. The image blocks use a 4/5 portrait aspect ratio so users get a consistent column without manual cropping.
 * Keywords: team, people, staff, members, agency, studio, about
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-team","layout":{"type":"constrained"}} -->
<section class="wp-block-group godevs-team">
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
		<p class="has-caption-font-size" style="text-transform:uppercase;letter-spacing:0.1em">The studio</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">A small team, by design.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-muted","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
		<p class="is-style-muted has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)">Three people on the payroll and a small bench of trusted collaborators we have worked with for years. Names, faces, and what each person actually does here.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md)"}}} -->
			<figure class="wp-block-image">
				<img alt="" style="border-radius:var(--wp--custom--radius--md);aspect-ratio:4/5;object-fit:cover" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-caption-font-size" style="color:var(--wp--preset--color--muted);text-transform:uppercase;letter-spacing:0.05em;margin-top:var(--wp--preset--spacing--40)">Founder, design</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:0">Maya Okonkwo</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Leads the design work on every engagement. Started the studio in 2020 after five years at a brand consultancy. Talks about typography more than is strictly necessary.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md)"}}} -->
			<figure class="wp-block-image">
				<img alt="" style="border-radius:var(--wp--custom--radius--md);aspect-ratio:4/5;object-fit:cover" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-caption-font-size" style="color:var(--wp--preset--color--muted);text-transform:uppercase;letter-spacing:0.05em;margin-top:var(--wp--preset--spacing--40)">Engineering</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:0">Tomás Rivera</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Builds the WordPress side of every project. Came from a background in agency plugin work. Cares about accessibility and the kind of small details no user will ever consciously notice.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md)"}}} -->
			<figure class="wp-block-image">
				<img alt="" style="border-radius:var(--wp--custom--radius--md);aspect-ratio:4/5;object-fit:cover" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"fontSize":"caption","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-caption-font-size" style="color:var(--wp--preset--color--muted);text-transform:uppercase;letter-spacing:0.05em;margin-top:var(--wp--preset--spacing--40)">Operations, content</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:0">Priya Anand</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Runs the studio operationally and writes most of the editorial content that ships with each site. The voice of the demo copy you are reading is loosely based on hers.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
