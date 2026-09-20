<?php
/**
 * Title: Demo - Atelier (Designer)
 * Slug: godevs-portfolio/demo-atelier
 * Description: ATELIER: Independent Creative Designer & Art Director. Editorial serif typography, warm ivory paper, asymmetric gallery-inspired composition. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, designer, art director, editorial, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-atelier","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-atelier alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-atelier","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO: editorial asymmetric === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Top metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Creative Director & Designer</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Based between Europe &amp; Asia</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Asymmetric hero: typography + portrait -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
                                        <h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">I create visual <span class="atelier-italic">identities,</span> digital experiences and images for ambitious brands.</h1>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","fontStyle":"italic"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":"38ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;font-style:italic;margin-top:var(--wp--preset--spacing--50);max-width:38ch">An independent creative practice working at the intersection of identity, digital and art direction.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.8125rem","fontWeight":"500","letterSpacing":"0.08em"}}} -->
                                                <div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.8125rem;font-weight:500;letter-spacing:0.08em">View Selected Work</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.8125rem","fontWeight":"500","letterSpacing":"0.08em"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/about" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.8125rem;font-weight:500;letter-spacing:0.08em">About the Studio</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"layout":{"selfStretch":"fit","flexSize":"100%"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-hero.webp' ); ?>" alt="Editorial portrait of the creative director in a minimal studio with soft window light" fetchpriority="high" style="aspect-ratio:3/4;object-fit:cover" loading="eager"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Studio portrait - Spring 2026</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - INTRODUCTION: editorial magazine intro === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Introduction</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:paragraph {"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3.2vw, 2.5rem)","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"24ch"}}} -->
                                        <p class="atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3.2vw, 2.5rem);line-height:1.2;letter-spacing:-0.01em;font-weight:400;max-width:24ch">A multidisciplinary creative practice working across identity, digital, art direction and culture.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.75"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":"52ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--normal);line-height:1.75;margin-top:var(--wp--preset--spacing--50);max-width:52ch">For over a decade I've helped brands and institutions find their visual voice - building identity systems, digital experiences and image worlds that feel considered, coherent and quietly distinctive. The work begins long before the screen, in the space between intention and form.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - SELECTED WORK: asymmetric editorial === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Selected Work - 2024 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">Selected Work</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Project 01 - Forma (large, image left 1.4fr) -->
                        <!-- wp:html -->
                        <a class="atelier-project is-featured" href="#" style="--atelier-split: 1.4fr 1fr;" aria-label="View Forma project">
                                <div class="atelier-project-media" style="aspect-ratio: 4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-forma.webp' ); ?>" alt="Forma - brand identity system for a contemporary design house, stationery flatlay on warm ivory paper" loading="lazy">
                                </div>
                                <div>
                                        <p class="atelier-project-num">01 - Forma</p>
                                        <h3 class="atelier-project-title">Forma</h3>
                                        <p class="atelier-project-meta"><span>Brand Identity</span><span>2026</span><span>Art Direction</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">A complete identity system for a contemporary design house - wordmark, type pairing, editorial templates and a photographic language carried across every touchpoint.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 02 - Maison 24 (offset right, portrait) -->
                        <!-- wp:html -->
                        <a class="atelier-project is-offset-right" href="#" style="--atelier-split: 1fr 1.2fr; gap:3rem; margin-top:5rem;" aria-label="View Maison 24 project">
                                <div>
                                        <p class="atelier-project-num">02 - Maison 24</p>
                                        <h3 class="atelier-project-title">Maison 24</h3>
                                        <p class="atelier-project-meta"><span>Art Direction</span><span>2026</span><span>Fashion</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">Art direction for a fashion house's seasonal story - image world, casting, set and the editorial sequence that holds it together.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                                <div class="atelier-project-media" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-maison24.webp' ); ?>" alt="Maison 24 - art direction fashion editorial, single figure in minimal architectural space" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 03 - Noir Objects (large horizontal, image left) -->
                        <!-- wp:html -->
                        <a class="atelier-project" href="#" style="--atelier-split: 1.3fr 1fr; gap:3rem; margin-top:5rem;" aria-label="View Noir Objects project">
                                <div class="atelier-project-media" style="aspect-ratio: 16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-noir.webp' ); ?>" alt="Noir Objects - digital product experience displayed on screen with warm ivory surroundings" loading="lazy">
                                </div>
                                <div>
                                        <p class="atelier-project-num">03 - Noir Objects</p>
                                        <h3 class="atelier-project-title">Noir Objects</h3>
                                        <p class="atelier-project-meta"><span>Digital Experience</span><span>2025</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">A digital experience for a design objects gallery - interface, motion and an editorial system that treats objects as protagonists.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 04 - Sora (small square, offset right) -->
                        <!-- wp:html -->
                        <a class="atelier-project is-offset-right" href="#" style="--atelier-split: 1fr 1fr; gap:3rem; margin-top:5rem;" aria-label="View Sora project">
                                <div>
                                        <p class="atelier-project-num">04 - Sora</p>
                                        <h3 class="atelier-project-title">Sora</h3>
                                        <p class="atelier-project-meta"><span>Visual Identity</span><span>2025</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">A restrained visual identity for a skincare house - debossed wordmark, a quiet material system and packaging designed to age well.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                                <div class="atelier-project-media" style="aspect-ratio: 1/1;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-sora.webp' ); ?>" alt="Sora - visual identity mockup with folded paper collateral and debossed monogram" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 05 - Field Notes (portrait, image left) -->
                        <!-- wp:html -->
                        <a class="atelier-project" href="#" style="--atelier-split: 1fr 1.3fr; gap:3rem; margin-top:5rem;" aria-label="View Field Notes project">
                                <div class="atelier-project-media" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-fieldnotes.webp' ); ?>" alt="Field Notes - editorial publication, open art book on warm ivory surface with typographic spreads" loading="lazy">
                                </div>
                                <div>
                                        <p class="atelier-project-num">05 - Field Notes</p>
                                        <h3 class="atelier-project-title">Field Notes</h3>
                                        <p class="atelier-project-meta"><span>Editorial</span><span>2025</span><span>Publication</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">A 240-page publication documenting a year of studio practice - editorial design, image editing and a typographic system built for long-form reading.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 06 - Mori (horizontal, offset right) -->
                        <!-- wp:html -->
                        <a class="atelier-project is-offset-right" href="#" style="--atelier-split: 1fr 1.4fr; gap:3rem; margin-top:5rem;" aria-label="View Mori project">
                                <div>
                                        <p class="atelier-project-num">06 - Mori</p>
                                        <h3 class="atelier-project-title">Mori</h3>
                                        <p class="atelier-project-meta"><span>Campaign</span><span>2024</span></p>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:42ch;margin-top:1rem;">A campaign for a botanical fragrance house - still life, motion and a flexible image system that carries across every channel.</p>
                                        <p style="margin-top:1.25rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                                <div class="atelier-project-media" style="aspect-ratio: 16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-mori.webp' ); ?>" alt="Mori - campaign image, minimal still life with natural objects and soft shadow on warm ivory" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- All work link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.125rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--80);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.125rem"><a href="/work">View archive →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - FEATURED PROJECT: FORMA === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Featured Case Study</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 8rem)","lineHeight":"0.96","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 8rem);line-height:0.96;letter-spacing:-0.02em;font-weight:400">Forma</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase">Visual Identity · Digital · Art Direction · 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Full-width visual -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-forma.webp' ); ?>" alt="FORMA case study - brand identity system for a contemporary design house" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Challenge → Approach → Outcome -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Challenge</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.4","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.4;letter-spacing:-0.01em">Create a new identity for a contemporary design house - flexible enough for digital, editorial and physical environments.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Approach</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.4","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.4;letter-spacing:-0.01em">A restrained visual system combining typography, photography and spatial composition - built to hold across every surface.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Outcome</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.4","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.4;letter-spacing:-0.01em">A flexible identity that reads as confidently on a business card as it does across a flagship interior.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- CTA -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.125rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.125rem"><a href="/case-studies">View case study →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - EXPERTISE: typographic list === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Expertise</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">Disciplines I work across.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Expertise list -->
                        <!-- wp:html -->
                        <div class="atelier-expertise" role="list" style="margin-top:4rem;">
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">01</span>
                                        <span class="atelier-expertise-title">Art Direction</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">02</span>
                                        <span class="atelier-expertise-title">Brand Identity</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">03</span>
                                        <span class="atelier-expertise-title">Digital Design</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">04</span>
                                        <span class="atelier-expertise-title">Editorial Design</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">05</span>
                                        <span class="atelier-expertise-title">Campaigns</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="atelier-expertise-row" href="/services" role="listitem">
                                        <span class="atelier-expertise-num">06</span>
                                        <span class="atelier-expertise-title">Creative Strategy</span>
                                        <span class="atelier-expertise-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - CLIENTS: minimal typographic === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Collaborations</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.015em;font-weight:400">Selected Collaborations - <span style="font-style:italic">demo content.</span></h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                        <!-- wp:html -->
                        <div class="atelier-clients" style="margin-top:3rem;" aria-label="Selected collaborations">
                                <span>Aesop</span><span>Forma</span><span>Maison 24</span><span>North Studio</span><span>Sora</span><span>Monument</span><span>Arc</span><span>Mori</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - ABOUT: personal === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-about-portrait.webp' ); ?>" alt="Editorial portrait of the art director at work, warm ivory backdrop, soft side light" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- About</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">Designing with <span style="font-style:italic">intention.</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;max-width:48ch">Twelve years of independent practice across identity, digital and art direction - working with founders, cultural institutions and brands who care about how things are made. The studio is deliberately small: direct collaboration, considered output, long-term thinking.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Based - London / Copenhagen / Dhaka</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Practice - Independent</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Focus - Identity / Digital / Art Direction</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.125rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.125rem"><a href="/about">Read the full profile →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - PROCESS: editorial, no icons === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Process</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">How the work is made.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Process steps -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"atelier-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group atelier-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem">01 - Listen</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Understand the problem, the audience and the ambition behind the project.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"atelier-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group atelier-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem">02 - Explore</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Research, references, concepts and visual directions - cast wide before narrowing.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"atelier-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group atelier-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem">03 - Define</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Build the design system and creative direction that will hold the work together.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"atelier-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group atelier-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem">04 - Refine</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Test, edit and strengthen every detail until the system feels inevitable.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"atelier-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group atelier-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem">05 - Deliver</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Create a flexible system ready for real-world use - documented, handed off, supported.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - VISUAL GALLERY: irregular editorial === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Selected Images</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">A small <span style="font-style:italic">edit.</span></h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Gallery grid -->
                        <!-- wp:html -->
                        <div class="atelier-gallery">
                                <div class="atelier-gallery-item gi-1" style="aspect-ratio:16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-gallery-1.webp' ); ?>" alt="Abstract editorial composition - folded warm ivory paper forms with soft shadow play" loading="lazy">
                                </div>
                                <div class="atelier-gallery-item gi-2" style="aspect-ratio:4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-gallery-2.webp' ); ?>" alt="Fashion editorial fragment - draped fabric in ivory and stone tones with soft light" loading="lazy">
                                </div>
                                <div class="atelier-gallery-item gi-3" style="aspect-ratio:4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-gallery-3.webp' ); ?>" alt="Art direction still life - ceramic objects on warm ivory plinth with soft natural shadow" loading="lazy">
                                </div>
                                <div class="atelier-gallery-item gi-4" style="aspect-ratio:3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-gallery-4.webp' ); ?>" alt="Editorial detail - hands arranging typographic specimens on warm ivory paper" loading="lazy">
                                </div>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 10 - TESTIMONIAL: minimal === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"20%"} -->
                                <div class="wp-block-column" style="flex-basis:20%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Note</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"80%"} -->
                                <div class="wp-block-column" style="flex-basis:80%">
                                        <!-- wp:paragraph {"className":"atelier-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.18","letterSpacing":"-0.015em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"26ch"}}} -->
                                        <p class="atelier-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.18;letter-spacing:-0.015em;font-weight:400;max-width:26ch">ATELIER brought clarity to the entire identity. Every detail feels intentional."</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase">Maya Rahman - Founder, Forma</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 11 - JOURNAL: editorial === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Journal</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">Field notes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article list - editorial, minimal -->
                        <!-- wp:html -->
                        <div style="border-top:1px solid var(--atelier-line);">
                                <a class="atelier-article" href="/journal" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.5rem 0;border-bottom:1px solid var(--atelier-line);">
                                        <div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
                                                <p class="atelier-article-meta" style="margin:0;">04.03.26 · Identity · 8 min</p>
                                                <span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
                                        </div>
                                        <h3 class="atelier-article-title">Designing Identity Systems That Last</h3>
                                </a>
                                <a class="atelier-article" href="/journal" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.5rem 0;border-bottom:1px solid var(--atelier-line);">
                                        <div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
                                                <p class="atelier-article-meta" style="margin:0;">18.02.26 · Brand · 6 min</p>
                                                <span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
                                        </div>
                                        <h3 class="atelier-article-title">What Makes a Visual Identity Memorable?</h3>
                                </a>
                                <a class="atelier-article" href="/journal" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.5rem 0;border-bottom:1px solid var(--atelier-line);">
                                        <div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
                                                <p class="atelier-article-meta" style="margin:0;">02.02.26 · Studio · 5 min</p>
                                                <span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
                                        </div>
                                        <h3 class="atelier-article-title">Notes From the Studio</h3>
                                </a>
                                <a class="atelier-article" href="/journal" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.5rem 0;border-bottom:1px solid var(--atelier-line);">
                                        <div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
                                                <p class="atelier-article-meta" style="margin:0;">14.01.26 · Typography · 7 min</p>
                                                <span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
                                        </div>
                                        <h3 class="atelier-article-title">The Role of Typography in Brand Culture</h3>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All journal link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.125rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.125rem"><a href="/journal">Read the journal →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
