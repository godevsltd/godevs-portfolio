<?php
/**
 * Title: Demo - Horizon (Photography)
 * Slug: godevs-portfolio/demo-horizon
 * Description: HORIZON: Travel Photographer / Visual Storyteller. Immersive, cinematic, editorial travel photography. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, travel, photography, photographer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-horizon","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-horizon alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-horizon","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO: immersive full-screen cover === -->
        <!-- wp:cover {"useFeaturedImage":false,"dimRatio":30,"overlayColor":"primary","minHeight":92,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover alignfull" style="min-height:92vh;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">
                <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-30 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="Patagonian mountain range at first light - granite spires rising above low cloud, cinematic, immersive" fetchpriority="high" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-hero.webp' ); ?>" style="object-fit:cover;object-position:center" loading="eager"/>
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-cover__inner-container" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group alignwide">

                                <!-- Eyebrow -->
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Travel / Photography / 2026</p>
                                <!-- /wp:paragraph -->

                                <!-- H1 -->
                                <!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 10vw, 10rem)","lineHeight":"0.96","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h1 class="wp-block-heading hor-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 10vw, 10rem);line-height:0.96;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Patagonia</h1>
                                <!-- /wp:heading -->

                                <!-- Supporting line -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"clamp(1.125rem, 2vw, 1.5rem)","lineHeight":"1.4","fontWeight":"400"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.4;font-weight:400;max-width:36ch">At the edge of the world.</p>
                                <!-- /wp:paragraph -->

                                <!-- CTAs -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} -->
                                        <div class="wp-block-button"><a href="/journey" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em;text-transform:uppercase">Explore Journey →</a></div>
                                        <!-- /wp:button -->
                                        <!-- wp:button {"className":"is-style-hor-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} -->
                                        <div class="wp-block-button is-style-hor-outline"><a href="/photography" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em;text-transform:uppercase">View Photography</a></div>
                                        <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:cover -->

        <!-- === 02 - FEATURED JOURNEY: PATAGONIA === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Featured Journey</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
                                <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Patagonia</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"clamp(1.25rem, 2.5vw, 1.75rem)","lineHeight":"1.4","fontWeight":"400"}}} -->
                                <p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.4;font-weight:400;max-width:32ch">Where the mountains meet the sky.</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large featured image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-patagonia.webp' ); ?>" alt="Patagonian granite spires at dawn - Fitz Roy range under clearing cloud, alpine light" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Meta + CTA row -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Patagonia / Argentina + Chile · 2026 · Expedition · 18 days</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:html -->
                                        <a class="hor-link" href="/journey" style="justify-content:flex-end;display:inline-flex">View Journey <span class="hor-arrow" aria-hidden="true">→</span></a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - JOURNEYS INDEX === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Journeys · 06 selected</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
                                <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Selected Journeys</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Journeys grid (asymmetric) -->
                        <!-- wp:html -->
                        <div class="hor-journeys" aria-label="Selected journeys">
                                <a class="hor-destination hj-1" href="/journey" aria-label="View journey - Patagonia">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-patagonia.webp' ); ?>" alt="Patagonia - granite spires at dawn" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Mountains · 2026</p>
                                                <h3 class="hor-destination-name">Patagonia</h3>
                                                <p class="hor-destination-coords">49°20′S 73°02′W · Argentina + Chile</p>
                                        </div>
                                </a>
                                <a class="hor-destination hj-2" href="/journey" aria-label="View journey - Iceland">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-iceland.webp' ); ?>" alt="Iceland - black sand coastline" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Coast · 2026</p>
                                                <h3 class="hor-destination-name">Iceland</h3>
                                                <p class="hor-destination-coords">64°08′N 21°56′W · North Atlantic</p>
                                        </div>
                                </a>
                                <a class="hor-destination hj-3" href="/journey" aria-label="View journey - Kyoto">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-kyoto.webp' ); ?>" alt="Kyoto - temple courtyard in autumn" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Culture · 2025</p>
                                                <h3 class="hor-destination-name">Kyoto</h3>
                                                <p class="hor-destination-coords">35°00′N 135°46′E · Japan</p>
                                        </div>
                                </a>
                                <a class="hor-destination hj-4" href="/journey" aria-label="View journey - Dolomites">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-dolomites.webp' ); ?>" alt="Dolomites - alpine meadow at dusk" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Mountains · 2025</p>
                                                <h3 class="hor-destination-name">Dolomites</h3>
                                                <p class="hor-destination-coords">46°24′N 11°51′E · Italy</p>
                                        </div>
                                </a>
                                <a class="hor-destination hj-5" href="/journey" aria-label="View journey - Morocco">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-morocco.webp' ); ?>" alt="Morocco - desert town at golden hour" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Desert · 2025</p>
                                                <h3 class="hor-destination-name">Morocco</h3>
                                                <p class="hor-destination-coords">31°47′N 7°05′W · North Africa</p>
                                        </div>
                                </a>
                                <a class="hor-destination hj-6" href="/journey" aria-label="View journey - Faroe Islands">
                                        <div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-faroe.webp' ); ?>" alt="Faroe Islands - sea cliffs in low cloud" loading="lazy"></div>
                                        <div class="hor-destination-overlay">
                                                <p class="hor-destination-meta">Wild · 2024</p>
                                                <h3 class="hor-destination-name">Faroe Islands</h3>
                                                <p class="hor-destination-coords">62°00′N 6°47′W · North Atlantic</p>
                                        </div>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- View all link -->
                        <!-- wp:html -->
                        <div style="margin-top:var(--wp--preset--spacing--60)">
                                <a class="hor-link" href="/journeys">View all journeys <span class="hor-arrow" aria-hidden="true">→</span></a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - FEATURED STORY: ICELAND (dark immersive) === -->
        <!-- wp:group {"tagName":"section","className":"hor-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull hor-dark" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Featured Story · Iceland</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading hor-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">The Last Light of the North</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|medium","lineHeight":"1.7","fontWeight":"400"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--medium);line-height:1.7;font-weight:400;max-width:52ch">Three weeks following the changing light across Iceland's western coast - from the soft blue hours of the Snæfellsnes peninsula to the long gold of the Westfjords, where the sun barely sets and the land keeps its own time.</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Story image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-story-iceland.webp' ); ?>" alt="Iceland westfjords - long golden light across black basalt coastline, low cloud, cinematic" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Read story link -->
                        <!-- wp:html -->
                        <div style="margin-top:var(--wp--preset--spacing--60)">
                                <a class="hor-link" href="/story/iceland" style="color:var(--wp--preset--color--contrast);border-bottom-color:var(--wp--preset--color--contrast)">Read the Story <span class="hor-arrow" aria-hidden="true">→</span></a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - SELECTED FRAMES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Selected Frames · 06 images</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
                                <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Photography</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Frames grid (asymmetric) -->
                        <!-- wp:html -->
                        <div class="hor-frames" aria-label="Selected photography frames">
                                <figure class="hor-frame hf-1">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-1.webp' ); ?>" alt="Lofoten - fishing village under low cloud at first light" loading="lazy">
                                        <figcaption class="hor-frame-caption">01 - Lofoten, Norway</figcaption>
                                </figure>
                                <figure class="hor-frame hf-2">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-2.webp' ); ?>" alt="Kyoto - quiet temple courtyard at dusk, paper lanterns" loading="lazy">
                                        <figcaption class="hor-frame-caption">02 - Kyoto, Japan</figcaption>
                                </figure>
                                <figure class="hor-frame hf-3">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-3.png' ); ?>" alt="Patagonia - granite spires above glacial lake, alpine dawn" loading="lazy">
                                        <figcaption class="hor-frame-caption">03 - El Chaltén, Argentina</figcaption>
                                </figure>
                                <figure class="hor-frame hf-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-4.webp' ); ?>" alt="Morocco - atlas mountain village, warm earth tones, dusk" loading="lazy">
                                        <figcaption class="hor-frame-caption">04 - High Atlas, Morocco</figcaption>
                                </figure>
                                <figure class="hor-frame hf-5">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-5.webp' ); ?>" alt="Dolomites - alpine lake reflection at golden hour" loading="lazy">
                                        <figcaption class="hor-frame-caption">05 - Lago di Braies, Italy</figcaption>
                                </figure>
                                <figure class="hor-frame hf-6">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-6.webp' ); ?>" alt="Faroe Islands - sea cliffs in low drifting cloud" loading="lazy">
                                        <figcaption class="hor-frame-caption">06 - Mykines, Faroe Islands</figcaption>
                                </figure>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - TRAVEL STATS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">By the Numbers · Demo data</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
                                <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">A decade on the road.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Stats grid -->
                        <!-- wp:html -->
                        <div class="hor-stats" aria-label="Travel statistics (demo data)">
                                <div>
                                        <p class="hor-stat-num">07</p>
                                        <p class="hor-stat-label">Continents</p>
                                </div>
                                <div>
                                        <p class="hor-stat-num">45</p>
                                        <p class="hor-stat-label">Countries</p>
                                </div>
                                <div>
                                        <p class="hor-stat-num">128</p>
                                        <p class="hor-stat-label">Journeys</p>
                                </div>
                                <div>
                                        <p class="hor-stat-num">2,840</p>
                                        <p class="hor-stat-label">Days on the road</p>
                                </div>
                        </div>
                        <style>
                                .wp-block-godevs-demo-horizon .hor-stats{display:grid;grid-template-columns:1fr;gap:2rem}
                                @media (min-width:800px){
                                        .wp-block-godevs-demo-horizon .hor-stats{grid-template-columns:repeat(4,1fr);gap:3rem}
                                }
                        </style>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - ABOUT THE PHOTOGRAPHER === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
                                <div class="wp-block-column" style="flex-basis:38%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-portrait.webp' ); ?>" alt="Portrait of Alex Morgan - travel photographer, in field clothing, soft natural light" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
                                <div class="wp-block-column" style="flex-basis:62%">
                                        <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- About the Photographer</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.75rem);line-height:1.05;letter-spacing:-0.03em;font-weight:600">I photograph places, people and the spaces between them.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">I'm Alex Morgan - a travel photographer based in Lisbon, working worldwide. For ten years I've followed light, weather and patience across mountains, coastlines and old cities. The work lives in editorial, destination and brand stories that value restraint and presence over spectacle.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:html -->
                                        <div style="margin-top:var(--wp--preset--spacing--50)">
                                                <a class="hor-link" href="/about">More About Me <span class="hor-arrow" aria-hidden="true">→</span></a>
                                        </div>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - JOURNAL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Journal</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
                                <h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Travel Journal</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Articles list -->
                        <!-- wp:html -->
                        <div aria-label="Journal entries">
                                <a class="hor-article" href="/journal/a-week-above-the-clouds" aria-label="Read - A Week Above the Clouds">
                                        <div class="hor-article-image" style="aspect-ratio:4/3">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-journal-1.webp' ); ?>" alt="Annapurna - village above the cloud line at sunrise" loading="lazy">
                                        </div>
                                        <div>
                                                <p class="hor-article-meta"><span>Nepal</span><span>2026</span><span>Expedition · 14 days</span></p>
                                                <h3 class="hor-article-title">A Week Above the Clouds</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.7;color:var(--wp--preset--color--muted);max-width:52ch">A slow ascent through the Annapurna foothills - ten days of walking, three villages, and the particular silence of mornings at altitude.</p>
                                                <p class="hor-article-meta" style="margin-top:1rem">Read story →</p>
                                        </div>
                                </a>
                                <a class="hor-article is-reversed" href="/journal/walking-through-the-old-city" aria-label="Read - Walking Through the Old City">
                                        <div class="hor-article-image" style="aspect-ratio:4/3">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-journal-2.webp' ); ?>" alt="Marrakech - narrow lane in the medina at golden hour" loading="lazy">
                                        </div>
                                        <div>
                                                <p class="hor-article-meta"><span>Marrakech</span><span>2026</span><span>Culture · 9 days</span></p>
                                                <h3 class="hor-article-title">Walking Through the Old City</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.7;color:var(--wp--preset--color--muted);max-width:52ch">Nine days in the Marrakech medina, photographing the geometry of shaded alleys, doorways and the slow rhythm of late afternoons in a city built for shade.</p>
                                                <p class="hor-article-meta" style="margin-top:1rem">Read story →</p>
                                        </div>
                                </a>
                                <a class="hor-article" href="/journal/the-roads-between-the-mountains" aria-label="Read - The Roads Between the Mountains">
                                        <div class="hor-article-image" style="aspect-ratio:4/3">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-journal-3.webp' ); ?>" alt="Dolomites - mountain pass road at dusk, dramatic light" loading="lazy">
                                        </div>
                                        <div>
                                                <p class="hor-article-meta"><span>Dolomites</span><span>2025</span><span>Road Trip · 11 days</span></p>
                                                <h3 class="hor-article-title">The Roads Between the Mountains</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.7;color:var(--wp--preset--color--muted);max-width:52ch">A late-autumn drive through the Dolomites - 1,400 km across seven passes, with notebooks full of weather and the patience to wait for the right hour.</p>
                                                <p class="hor-article-meta" style="margin-top:1rem">Read story →</p>
                                        </div>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All journal link -->
                        <!-- wp:html -->
                        <div style="margin-top:var(--wp--preset--spacing--60)">
                                <a class="hor-link" href="/journal">Read the journal <span class="hor-arrow" aria-hidden="true">→</span></a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
