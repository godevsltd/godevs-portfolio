<?php
/**
 * Title: Demo - Architect (Architecture)
 * Slug: godevs-portfolio/demo-architect
 * Description: ARCHITECT: Architecture & Interior Design Studio. Warm concrete, charcoal, muted bronze, strong uppercase metadata, calm/precise/material. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, architecture, interior, studio, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-architect","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-architect alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-architect","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO: full-width architectural photograph === -->
        <!-- wp:cover {"useFeaturedImage":false,"dimRatio":25,"overlayColor":"primary","minHeight":88,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover" style="min-height:88vh;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-25 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="Modern architectural house - minimalist concrete and glass residence at golden hour with strong shadows" fetchpriority="high" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-hero.webp' ); ?>" style="object-fit:cover;object-position:center" loading="eager"/>
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-cover__inner-container">
                        <div class="wp-block-group alignwide">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Architecture / Interiors - Est. 2008</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h1 class="wp-block-heading arch-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">Spaces shaped by light, material and <span class="arch-italic">purpose.</span></h1>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":"44ch"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:44ch">Independent architecture and interior design studio creating enduring spaces.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                        <div class="wp-block-button"><a href="/projects" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Explore Projects →</a></div>
                                        <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                        </div>
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:cover -->

        <!-- === 02 - STUDIO INTRODUCTION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Studio</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.75rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":"22ch"}}} -->
                                        <h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.75rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500;max-width:22ch">Architecture is the relationship between people, space and <span class="arch-italic">light.</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":"50ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--50);max-width:50ch">We design residential, commercial and cultural environments with an emphasis on material honesty, natural light and long-term relevance. Every project begins with its surroundings.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="/studio">Discover the Studio →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-studio.webp' ); ?>" alt="Architecture studio interior - large table with models and drawings, concrete walls, soft natural light" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 01 - The Studio, Dhaka</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - SELECTED PROJECTS (varied compositions) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Selected Projects - 2023 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"500"}}} -->
                                <h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:500">Selected Projects</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- PROJECT 01 - HOUSE N (full-width horizontal) -->
                        <!-- wp:html -->
                        <a class="arch-project is-full" href="#" aria-label="View project - House N">
                                <div class="arch-project-media" style="aspect-ratio: 21/9;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-1.webp' ); ?>" alt="House N - contemporary residential architecture, minimalist concrete house with courtyard, strong directional light" loading="lazy">
                                </div>
                                <div class="arch-project-body" style="flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline; gap: 1.5rem; margin-top: 1.25rem;">
                                        <div>
                                                <p class="arch-project-num">Project 01</p>
                                                <h3 class="arch-project-title">House N</h3>
                                                <p class="arch-project-meta"><span>Dhaka</span><span>Bangladesh</span><span>Residential</span><span>2026</span></p>
                                        </div>
                                        <p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- PROJECT 02 - COURTYARD HOUSE (70/30 image + info column) -->
                        <!-- wp:html -->
                        <a class="arch-project" href="#" style="--arch-split: 1.7fr 1fr; margin-top: 5rem;" aria-label="View project - Courtyard House">
                                <div class="arch-project-media" style="aspect-ratio: 4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-2.webp' ); ?>" alt="Courtyard House - Lisbon, Mediterranean light on white concrete walls, serene spatial composition" loading="lazy">
                                </div>
                                <div class="arch-project-body">
                                        <p class="arch-project-num">Project 02</p>
                                        <h3 class="arch-project-title">Courtyard House</h3>
                                        <p class="arch-project-meta"><span>Lisbon</span><span>Portugal</span><span>Residential</span><span>2025</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.5rem; max-width:36ch;">A residence organized around a central courtyard - light, air and a quiet sequence of spaces.</p>
                                        <p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- PROJECT 03 - CONCRETE GALLERY (large vertical image) -->
                        <!-- wp:html -->
                        <a class="arch-project is-reversed" href="#" style="--arch-split: 1fr 1.3fr; margin-top: 5rem;" aria-label="View project - Concrete Gallery">
                                <div class="arch-project-body">
                                        <p class="arch-project-num">Project 03</p>
                                        <h3 class="arch-project-title">Concrete Gallery</h3>
                                        <p class="arch-project-meta"><span>Berlin</span><span>Germany</span><span>Cultural</span><span>2025</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.5rem; max-width:36ch;">A brutalist gallery where concrete and shadow define the experience of art.</p>
                                        <p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
                                </div>
                                <div class="arch-project-media" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-3.webp' ); ?>" alt="Concrete Gallery - Berlin, brutalist architecture with dramatic shadow patterns, monolithic" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- PROJECTS 04 + 05 - editorial split layout -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|80"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="arch-project is-full" href="#" aria-label="View project - Terrace 07">
                                                <div class="arch-project-media" style="aspect-ratio: 4/5;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-4.webp' ); ?>" alt="Terrace 07 - interior architecture, terrace apartment, warm wood and concrete, soft natural light" loading="lazy">
                                                </div>
                                                <div class="arch-project-body" style="margin-top: 1.25rem;">
                                                        <p class="arch-project-num">Project 04</p>
                                                        <h3 class="arch-project-title">Terrace 07</h3>
                                                        <p class="arch-project-meta"><span>Singapore</span><span>Interior</span><span>2024</span></p>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="arch-project is-full" href="#" aria-label="View project - Museum North">
                                                <div class="arch-project-media" style="aspect-ratio: 4/5;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-5.webp' ); ?>" alt="Museum North - Copenhagen, contemporary cultural building with large glazing and concrete, reflective water" loading="lazy">
                                                </div>
                                                <div class="arch-project-body" style="margin-top: 1.25rem;">
                                                        <p class="arch-project-num">Project 05</p>
                                                        <h3 class="arch-project-title">Museum North</h3>
                                                        <p class="arch-project-meta"><span>Copenhagen</span><span>Cultural</span><span>2024</span></p>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- PROJECT 06 - MONOLITH (wide landscape with negative space) -->
                        <!-- wp:html -->
                        <a class="arch-project" href="#" style="--arch-split: 1fr 1fr; margin-top: 5rem;" aria-label="View project - Monolith">
                                <div class="arch-project-media" style="aspect-ratio: 16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-6.webp' ); ?>" alt="Monolith - Tokyo, commercial architecture, dark stone and glass facade at dusk" loading="lazy">
                                </div>
                                <div class="arch-project-body" style="justify-content: center;">
                                        <p class="arch-project-num">Project 06</p>
                                        <h3 class="arch-project-title">Monolith</h3>
                                        <p class="arch-project-meta"><span>Tokyo</span><span>Japan</span><span>Commercial</span><span>2023</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.5rem; max-width:36ch;">A commercial building that reads as a single, restrained mass - stone, glass and the city at dusk.</p>
                                        <p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- All projects link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--80);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="/projects">View all projects →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - FEATURED PROJECT: HOUSE N (dark) === -->
        <!-- wp:group {"tagName":"section","className":"arch-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group arch-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Featured Project</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 8vw, 7rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading arch-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 8vw, 7rem);line-height:0.98;letter-spacing:-0.03em;font-weight:500">House N</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Dhaka, Bangladesh · Residential · 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-featured.webp' ); ?>" alt="House N - interior architecture, double-height concrete living space with courtyard light" style="aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Concept + facts -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Concept</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em","fontWeight":"400"},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em;font-weight:400;margin-top:var(--wp--preset--spacing--20);max-width:48ch">A contemporary residence organized around natural light, private courtyards and quiet transitions between interior and exterior.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="/projects">View project →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:html -->
                                        <dl class="arch-facts" style="border-color: rgba(242,239,232,0.18);">
                                                <div class="arch-fact-row" style="border-color: rgba(242,239,232,0.18);">
                                                        <dt class="arch-fact-key" style="color: rgba(242,239,232,0.55);">Area</dt>
                                                        <dd class="arch-fact-val" style="color: var(--arch-base, #F2EFE8);">4,800 sq ft</dd>
                                                </div>
                                                <div class="arch-fact-row" style="border-color: rgba(242,239,232,0.18);">
                                                        <dt class="arch-fact-key" style="color: rgba(242,239,232,0.55);">Status</dt>
                                                        <dd class="arch-fact-val" style="color: var(--arch-base, #F2EFE8);">Completed</dd>
                                                </div>
                                                <div class="arch-fact-row" style="border-color: rgba(242,239,232,0.18);">
                                                        <dt class="arch-fact-key" style="color: rgba(242,239,232,0.55);">Year</dt>
                                                        <dd class="arch-fact-val" style="color: var(--arch-base, #F2EFE8);">2026</dd>
                                                </div>
                                                <div class="arch-fact-row" style="border-color: rgba(242,239,232,0.18);">
                                                        <dt class="arch-fact-key" style="color: rgba(242,239,232,0.55);">Role</dt>
                                                        <dd class="arch-fact-val" style="color: var(--arch-base, #F2EFE8);">Architecture / Interior</dd>
                                                </div>
                                        </dl>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - SERVICES (numbered rows) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Services</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
                                        <h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">How we work.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Services list -->
                        <!-- wp:html -->
                        <div style="margin-top: 3rem;">
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">01</span>
                                        <span class="arch-service-title">Architecture</span>
                                        <span class="arch-service-desc">Residential, commercial and cultural architecture.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">02</span>
                                        <span class="arch-service-title">Interior</span>
                                        <span class="arch-service-desc">Interior environments and spatial design.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">03</span>
                                        <span class="arch-service-title">Masterplanning</span>
                                        <span class="arch-service-desc">Large-scale planning and spatial strategy.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">04</span>
                                        <span class="arch-service-title">Renovation</span>
                                        <span class="arch-service-desc">Sensitive transformation of existing buildings.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">05</span>
                                        <span class="arch-service-title">Art Direction</span>
                                        <span class="arch-service-desc">Material, visual and environmental direction.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/services">
                                        <span class="arch-service-num">06</span>
                                        <span class="arch-service-title">Consultation</span>
                                        <span class="arch-service-desc">Architectural consultation and project development.</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - MATERIAL / LIGHT / DETAIL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Material / Light / Detail</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Materials should be <span class="arch-italic">experienced.</span></h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Material grid -->
                        <!-- wp:html -->
                        <div class="arch-materials">
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-1.png' ); ?>" alt="Material close-up - raw concrete surface texture with subtle shadow" loading="lazy">
                                        <figcaption class="arch-material-label">Concrete</figcaption>
                                </figure>
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-2.webp' ); ?>" alt="Material close-up - warm wood grain surface with natural light" loading="lazy">
                                        <figcaption class="arch-material-label">Wood</figcaption>
                                </figure>
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-3.webp' ); ?>" alt="Material close-up - natural stone surface with veining, travertine" loading="lazy">
                                        <figcaption class="arch-material-label">Stone</figcaption>
                                </figure>
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-4.webp' ); ?>" alt="Material close-up - glass facade with reflection of sky" loading="lazy">
                                        <figcaption class="arch-material-label">Glass</figcaption>
                                </figure>
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-5.webp' ); ?>" alt="Material close-up - blackened steel column with rivets" loading="lazy">
                                        <figcaption class="arch-material-label">Steel</figcaption>
                                </figure>
                                <figure class="arch-material">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-6.webp' ); ?>" alt="Material close-up - light and shadow on a concrete wall, dramatic raking light" loading="lazy">
                                        <figcaption class="arch-material-label">Light &amp; Shadow</figcaption>
                                </figure>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - STUDIO FACTS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Studio Facts (demo data)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
                                        <p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">24</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Completed Projects</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
                                        <p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">11</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Cities</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
                                        <p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">18</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Years of Practice</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="arch-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">07</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Countries</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - TEAM === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Team</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">The studio.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Team grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="arch-team-member">
                                                <div class="arch-team-portrait">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-1.webp' ); ?>" alt="Editorial portrait of Nayan Roy, Principal Architect" loading="lazy">
                                                </div>
                                                <figcaption>
                                                        <p class="arch-team-name">Nayan Roy</p>
                                                        <p class="arch-team-role">Principal Architect</p>
                                                </figcaption>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="arch-team-member">
                                                <div class="arch-team-portrait">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-2.webp' ); ?>" alt="Editorial portrait of Maya Rahman, Design Director" loading="lazy">
                                                </div>
                                                <figcaption>
                                                        <p class="arch-team-name">Maya Rahman</p>
                                                        <p class="arch-team-role">Design Director</p>
                                                </figcaption>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="arch-team-member">
                                                <div class="arch-team-portrait">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-3.webp' ); ?>" alt="Editorial portrait of Arif Hasan, Project Architect" loading="lazy">
                                                </div>
                                                <figcaption>
                                                        <p class="arch-team-name">Arif Hasan</p>
                                                        <p class="arch-team-role">Project Architect</p>
                                                </figcaption>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="arch-team-member">
                                                <div class="arch-team-portrait">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-4.webp' ); ?>" alt="Editorial portrait of Sara Khan, Interior Architect" loading="lazy">
                                                </div>
                                                <figcaption>
                                                        <p class="arch-team-name">Sara Khan</p>
                                                        <p class="arch-team-role">Interior Architect</p>
                                                </figcaption>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - JOURNAL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Journal</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"500"}}} -->
                                <h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:500">Field notes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article list -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--arch-line);">
                                <a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="arch-service-num">04.03.26</span>
                                        <span class="arch-service-title">The Quiet Power of Natural Light</span>
                                        <span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Essay · 7 min</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="arch-service-num">18.02.26</span>
                                        <span class="arch-service-title">Designing Around Courtyards</span>
                                        <span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Process · 9 min</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="arch-service-num">02.02.26</span>
                                        <span class="arch-service-title">Material Honesty in Contemporary Architecture</span>
                                        <span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Essay · 6 min</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="arch-service-num">14.01.26</span>
                                        <span class="arch-service-title">What Makes a Building Last?</span>
                                        <span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Notes · 8 min</span>
                                        <span class="arch-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All journal link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="/journal">Read the journal →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
