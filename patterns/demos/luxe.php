<?php
/**
 * Title: Demo - Luxe (Fashion)
 * Slug: godevs-portfolio/demo-luxe
 * Description: LUXE: Fashion Designer / Stylist. Soft ivory, charcoal, muted gold, Newsreader serif display. Elegant, editorial, sophisticated, image-led. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, fashion, designer, stylist, editorial, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO: luxury fashion campaign === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Top metadata -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Luxe / 26</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Independent Fashion Practice</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Asymmetric hero: typography + large portrait -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
                                <div class="wp-block-column" style="flex-basis:38%">
                                        <!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 6vw, 5.5rem)"}}} -->
                                        <h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 6vw, 5.5rem)">Designed for a world <span class="luxe-italic">beyond trends.</span></h1>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">Independent fashion practice exploring identity, material, image and culture.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.2em"}}} -->
                                                <div class="wp-block-button"><a href="/collections" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.2em">Explore Collection →</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.2em"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/editorial" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.2em">View Editorial →</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
                                <div class="wp-block-column" style="flex-basis:62%">
                                        <!-- wp:image {"aspectRatio":"3/4","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-hero.webp' ); ?>" alt="Luxury fashion editorial hero - model in elegant minimal garment against soft ivory backdrop, dramatic soft light" fetchpriority="high" style="aspect-ratio:3/4;object-fit:cover" loading="eager"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Campaign - Spring / Summer 2026</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - FEATURED COLLECTION: FORM === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Collection 01 - Form · Spring / Summer 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 8vw, 7rem)","lineHeight":"0.98","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 8vw, 7rem);line-height:0.98;letter-spacing:-0.025em;font-weight:400">Form</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large image + statement -->
                        <!-- wp:html -->
                        <a class="luxe-card" href="#" aria-label="View collection - Form">
                                <div class="luxe-card-media" style="aspect-ratio: 21/9;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-form.webp' ); ?>" alt="FORM collection - draped fabric and silhouette study in ivory and charcoal tones" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:column {"width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"luxe-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.5rem, 3.5vw, 2.5rem)","lineHeight":"1.25","letterSpacing":"-0.01em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"28ch"}}} -->
                                        <p class="luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.5rem, 3.5vw, 2.5rem);line-height:1.25;letter-spacing:-0.01em;font-weight:400;max-width:28ch">A study in proportion, texture and movement.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">A collection built around the relationship between body, fabric and light - restrained in palette, generous in form.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/collections">View Collection →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - COLLECTIONS INDEX (asymmetric editorial grid) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Collections - 2024 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400">Collections</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Asymmetric grid -->
                        <!-- wp:html -->
                        <div class="luxe-grid">
                                <a class="luxe-card lg-1" href="#" aria-label="View collection - Form">
                                        <div class="luxe-card-media" style="aspect-ratio: 4/3;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-1.webp' ); ?>" alt="FORM collection - full-length model in structured minimal garment, ivory backdrop" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">01 - Form</p>
                                        <h3 class="luxe-card-title">Form</h3>
                                        <p class="luxe-card-meta"><span>SS 2026</span><span>Collection</span></p>
                                </a>
                                <a class="luxe-card lg-2" href="#" aria-label="View collection - Silhouette">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-2.webp' ); ?>" alt="SILHOUETTE collection - silhouette study against warm charcoal backdrop" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">02 - Silhouette</p>
                                        <h3 class="luxe-card-title">Silhouette</h3>
                                        <p class="luxe-card-meta"><span>AW 2025</span><span>Collection</span></p>
                                </a>
                                <a class="luxe-card lg-3" href="#" aria-label="View editorial - After Dark">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-3.webp' ); ?>" alt="AFTER DARK editorial - intimate portrait with fabric detail, ivory and beige tones" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">03 - After Dark</p>
                                        <h3 class="luxe-card-title">After Dark</h3>
                                        <p class="luxe-card-meta"><span>FW 2025</span><span>Editorial</span></p>
                                </a>
                                <a class="luxe-card lg-4" href="#" aria-label="View campaign - Object / Body">
                                        <div class="luxe-card-media" style="aspect-ratio: 4/3;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-4.webp' ); ?>" alt="OBJECT / BODY campaign - figure in motion with flowing garment, neutral palette" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">04 - Object / Body</p>
                                        <h3 class="luxe-card-title">Object / Body</h3>
                                        <p class="luxe-card-meta"><span>2024</span><span>Campaign</span></p>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All collections link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--70);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/collections">View all collections →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - EDITORIAL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Editorial - 2025 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400">Editorial</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Editorial stories -->
                        <!-- wp:html -->
                        <div class="luxe-grid">
                                <a class="luxe-card lg-5" href="#" aria-label="View editorial - The New Silhouette">
                                        <div class="luxe-card-media" style="aspect-ratio: 4/3;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-1.webp' ); ?>" alt="THE NEW SILHOUETTE editorial - model in architectural garment, soft ivory backdrop" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">01 - The New Silhouette</p>
                                        <h3 class="luxe-card-title">The New Silhouette</h3>
                                        <p class="luxe-card-meta"><span>Photography</span><span>2026</span></p>
                                </a>
                                <a class="luxe-card lg-6" href="#" aria-label="View editorial - Soft Structures">
                                        <div class="luxe-card-media" style="aspect-ratio: 16/9;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-2.webp' ); ?>" alt="SOFT STRUCTURES editorial - draped fabric close-up on figure, beige tones" loading="lazy">
                                        </div>
                                        <p class="luxe-card-num">02 - Soft Structures</p>
                                        <h3 class="luxe-card-title">Soft Structures</h3>
                                        <p class="luxe-card-meta"><span>Editorial</span><span>2025</span></p>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- Single editorial feature (full-width) -->
                        <!-- wp:html -->
                        <a class="luxe-card" href="#" style="margin-top: 2rem;" aria-label="View campaign - After Hours">
                                <div class="luxe-card-media" style="aspect-ratio: 21/9;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-3.webp' ); ?>" alt="AFTER HOURS campaign - figure in elegant evening wear, dramatic low light" loading="lazy">
                                </div>
                                <p class="luxe-card-num" style="margin-top: 1.25rem;">03 - After Hours</p>
                                <h3 class="luxe-card-title">After Hours</h3>
                                <p class="luxe-card-meta"><span>Campaign</span><span>2025</span><span>Photography by Studio Lumen</span></p>
                        </a>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - CAMPAIGN FEATURE === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Campaign header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Campaign / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"luxe-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.15","letterSpacing":"-0.015em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"26ch"}}} -->
                                <h2 class="wp-block-heading luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.15;letter-spacing:-0.015em;font-weight:400;max-width:26ch">A study in movement, light and material.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large campaign image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-campaign.webp' ); ?>" alt="Campaign 2026 - study in movement, light and material, flowing garment in motion, ivory and charcoal" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Credits -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"width":"50%"} -->
                                <div class="wp-block-column" style="flex-basis:50%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">A campaign exploring how fabric moves with the body, how light defines form, and how restraint creates presence.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/editorial">View Campaign →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"50%"} -->
                                <div class="wp-block-column" style="flex-basis:50%">
                                        <!-- wp:html -->
                                        <dl class="luxe-credits">
                                                <div class="luxe-credit-row">
                                                        <dt class="luxe-credit-key">Creative Direction</dt>
                                                        <dd class="luxe-credit-val">Luxe Studio</dd>
                                                </div>
                                                <div class="luxe-credit-row">
                                                        <dt class="luxe-credit-key">Photography</dt>
                                                        <dd class="luxe-credit-val">Studio Lumen</dd>
                                                </div>
                                                <div class="luxe-credit-row">
                                                        <dt class="luxe-credit-key">Styling</dt>
                                                        <dd class="luxe-credit-val">Maya Rahman</dd>
                                                </div>
                                                <div class="luxe-credit-row">
                                                        <dt class="luxe-credit-key">Production</dt>
                                                        <dd class="luxe-credit-val">Atelier 24</dd>
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

        <!-- === 06 - DESIGNER / ABOUT === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-portrait.webp' ); ?>" alt="Editorial portrait of the fashion designer, soft natural light, ivory backdrop, elegant, thoughtful" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- The Designer</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">Clothing is <span class="luxe-italic">language.</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">A creative practice exploring fashion, identity, material and visual culture through design, styling and image-making. The work moves between collection, editorial and campaign - always guided by restraint and intention.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/about">About the Designer →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - PHILOSOPHY === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Philosophy</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                                        <div class="wp-block-columns">
                                                <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.1","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
                                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.1;letter-spacing:-0.01em;font-weight:400"><span class="luxe-italic">Material</span></h3>
                                                        <!-- /wp:heading -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Texture creates emotion.</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                                <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.1","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
                                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.1;letter-spacing:-0.01em;font-weight:400"><span class="luxe-italic">Form</span></h3>
                                                        <!-- /wp:heading -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Silhouette defines presence.</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                                <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.1","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
                                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.1;letter-spacing:-0.01em;font-weight:400"><span class="luxe-italic">Movement</span></h3>
                                                        <!-- /wp:heading -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Clothing changes with the body.</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                                <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.1","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
                                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.1;letter-spacing:-0.01em;font-weight:400"><span class="luxe-italic">Image</span></h3>
                                                        <!-- /wp:heading -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Fashion exists beyond the garment.</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                        </div>
                                        <!-- /wp:columns -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - COLLABORATIONS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Selected Collaborations (demo content)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="luxe-clients" style="margin-top: 2rem;" aria-label="Selected collaborations">
                                <span>Maison Forma</span><span>Aster</span><span>Monument</span><span>Sora</span><span>Mori</span><span>North</span><span>Atelier 24</span><span>Object Studio</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - SERVICES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Services</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">Capabilities.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Services list -->
                        <!-- wp:html -->
                        <div style="margin-top: 3rem;">
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">01</span>
                                        <span class="luxe-service-title">Creative Direction</span>
                                        <span class="luxe-service-desc">Concept, visual language and collection direction.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">02</span>
                                        <span class="luxe-service-title">Fashion Design</span>
                                        <span class="luxe-service-desc">Collection design and garment development.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">03</span>
                                        <span class="luxe-service-title">Styling</span>
                                        <span class="luxe-service-desc">Editorial, campaign and personal styling.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">04</span>
                                        <span class="luxe-service-title">Art Direction</span>
                                        <span class="luxe-service-desc">Visual identity and image direction.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">05</span>
                                        <span class="luxe-service-title">Campaign Development</span>
                                        <span class="luxe-service-desc">Seasonal campaign concept and production.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/services">
                                        <span class="luxe-service-num">06</span>
                                        <span class="luxe-service-title">Editorial Production</span>
                                        <span class="luxe-service-desc">Fashion editorial concept and execution.</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 10 - LOOKBOOK === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Lookbook · Form SS26</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">The looks.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Lookbook grid -->
                        <!-- wp:html -->
                        <div class="luxe-lookbook">
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-1.webp' ); ?>" alt="Look 01 - full-length minimal ivory garment, soft studio light" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 01</span>
                                </figure>
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-2.webp' ); ?>" alt="Look 02 - fabric and material close-up, ivory textile texture" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 02</span>
                                </figure>
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-3.webp' ); ?>" alt="Look 03 - accessory detail, elegant minimal jewelry on fabric" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 03</span>
                                </figure>
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-4.webp' ); ?>" alt="Look 04 - movement shot, garment in motion, soft light" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 04</span>
                                </figure>
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-5.webp' ); ?>" alt="Look 05 - portrait with garment detail, ivory tones" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 05</span>
                                </figure>
                                <figure class="luxe-look luxe-card">
                                        <div class="luxe-card-media" style="aspect-ratio: 3/4;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-6.webp' ); ?>" alt="Look 06 - full-length evening look, charcoal tone, dramatic light" loading="lazy">
                                        </div>
                                        <span class="luxe-look-label">Look 06</span>
                                </figure>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 11 - PRESS / RECOGNITION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Featured In (demo references)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="luxe-clients" style="margin-top: 2rem;" aria-label="Featured press">
                                <span>Vogue</span><span>Dazed</span><span>Kinfolk</span><span>i-D</span><span>Wallpaper*</span><span>Monocle</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 12 - JOURNAL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Journal</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400">Notes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article list -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--luxe-line);">
                                <a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="luxe-service-num">04.03.26</span>
                                        <span class="luxe-service-title">Why Material Matters</span>
                                        <span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Essay · 7 min</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="luxe-service-num">18.02.26</span>
                                        <span class="luxe-service-title">The Return of Quiet Silhouettes</span>
                                        <span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Notes · 6 min</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="luxe-service-num">02.02.26</span>
                                        <span class="luxe-service-title">Inside Collection 01</span>
                                        <span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Process · 9 min</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="luxe-service-num">14.01.26</span>
                                        <span class="luxe-service-title">Photography as Fashion Language</span>
                                        <span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Essay · 8 min</span>
                                        <span class="luxe-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All journal link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/journal">Read the journal →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
