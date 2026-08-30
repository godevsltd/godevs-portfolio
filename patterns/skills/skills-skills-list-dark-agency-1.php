<?php
/**
 * Title: Skills — Leveled List with Dots
 * Slug: godevs-portfolio/skills-skills-list-dark-agency-1
 * Description: A leveled skills list with dot indicators — each skill shows a 4-dot row where N dots are filled (accent color) to indicate proficiency level. Distinct from progress bars: uses discrete dots, not continuous bars. Dark surface.
 * Categories: godevs-portfolio-skills
 * Keywords: skills, dots, levels, segments, indicator, dark, discrete
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
\texit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
\t<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
\t<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

\t\t<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
\t\t<div class="wp-block-columns are-vertically-aligned-top">

\t\t\t<!-- wp:column {"width":"33%","verticalAlignment":"top"} -->
\t\t\t<div class="wp-block-column" style="flex-basis:33%">
\t\t\t\t<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--muted)">Proficiency</p>
\t\t\t\t<!-- /wp:paragraph -->
\t\t\t\t<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
\t\t\t\t<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|x-large);letter-spacing:-0.02em;font-weight:600">Skill levels.</h2>
\t\t\t\t<!-- /wp:heading -->
\t\t\t\t<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
\t\t\t\t<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size|small)">4 dots = primary expertise · 3 = advanced · 2 = working knowledge</p>
\t\t\t\t<!-- /wp:paragraph -->
\t\t\t</div>
\t\t\t<!-- /wp:column -->

\t\t\t<!-- wp:column {"width":"66%","verticalAlignment":"top"} -->
\t\t\t<div class="wp-block-column" style="flex-basis:66%">

\t\t\t\t<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
\t\t\t\t<div class="wp-block-group godevs-reveal-stagger">

\t\t\t\t\t<!-- Skill 1: 4/4 dots -->
\t\t\t\t\t<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
\t\t\t\t\t<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
\t\t\t\t\t\t<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
\t\t\t\t\t\t<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Brand Identity Systems</h3>
\t\t\t\t\t\t<!-- /wp:heading -->
\t\t\t\t\t\t<!-- wp:html -->
\t\t\t\t\t\t<div style="display:flex;gap:6px;">
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /wp:html -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->

\t\t\t\t\t<!-- Skill 2: 3/4 dots -->
\t\t\t\t\t<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
\t\t\t\t\t<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
\t\t\t\t\t\t<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
\t\t\t\t\t\t<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Front-end Engineering</h3>
\t\t\t\t\t\t<!-- /wp:heading -->
\t\t\t\t\t\t<!-- wp:html -->
\t\t\t\t\t\t<div style="display:flex;gap:6px;">
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /wp:html -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->

\t\t\t\t\t<!-- Skill 3: 3/4 dots -->
\t\t\t\t\t<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|secondary","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
\t\t\t\t\t<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
\t\t\t\t\t\t<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
\t\t\t\t\t\t<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Editorial Design</h3>
\t\t\t\t\t\t<!-- /wp:heading -->
\t\t\t\t\t\t<!-- wp:html -->
\t\t\t\t\t\t<div style="display:flex;gap:6px;">
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /wp:html -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->

\t\t\t\t\t<!-- Skill 4: 2/4 dots -->
\t\t\t\t\t<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
\t\t\t\t\t<div class="wp-block-group">
\t\t\t\t\t\t<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} -->
\t\t\t\t\t\t<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size|medium);letter-spacing:-0.01em">Motion Design</h3>
\t\t\t\t\t\t<!-- /wp:heading -->
\t\t\t\t\t\t<!-- wp:html -->
\t\t\t\t\t\t<div style="display:flex;gap:6px;">
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--accent);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t\t\t\t<span style="width:12px;height:12px;border-radius:50%;background:var(--wp--preset--color--secondary);"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /wp:html -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /wp:group -->

\t\t\t\t</div>
\t\t\t\t<!-- /wp:group -->

\t\t\t</div>
\t\t\t<!-- /wp:column -->

\t\t</div>
\t\t<!-- /wp:columns -->

\t</div>
\t<!-- /wp:group -->
</section>
<!-- /wp:group -->
