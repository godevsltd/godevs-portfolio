<?php
/**
 * Title: Demo - Noir (Film)
 * Slug: godevs-portfolio/demo-noir
 * Description: NOIR: Film Director / Cinematographer. Near-black cinematic, film-red accent, Inter bold film-title typography, immersive. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, film, director, cinematographer, cinematic, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

        <!-- Header (transparent over hero) -->
        <!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - CINEMATIC HERO (full-screen) === -->
        <!-- wp:cover {"useFeaturedImage":false,"dimRatio":45,"overlayColor":"primary","minHeight":94,"isDark":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover" style="min-height:94vh;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">
                <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-45 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="Cinematic film still - lone figure in a vast dark space with a single shaft of warm light, atmospheric haze" fetchpriority="high" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-hero.webp' ); ?>" style="object-fit:cover;object-position:center" loading="eager"/>
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-cover__inner-container" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                        <!-- spacer -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|90"}}}} -->
                        <p style="margin-bottom:var(--wp--preset--spacing--90)"></p>
                        <!-- /wp:paragraph -->

                        <!-- bottom-anchored content -->
                        <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group alignfull">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Director / Filmmaker</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.035em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8.5rem)"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.035em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8.5rem)">Stories <span class="noir-accent-text">worth</span> remembering.</h1>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Commercials / Narrative / Documentary / Music</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                        <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.2em"}}} -->
                                        <div class="wp-block-button"><a href="#showreel" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:600;letter-spacing:0.2em">Watch Selected Work →</a></div>
                                        <!-- /wp:button -->
                                        <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.2em"}}} -->
                                        <div class="wp-block-button is-style-outline"><a href="#showreel" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:600;letter-spacing:0.2em">View Reel</a></div>
                                        <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
        </div>
        <!-- /wp:cover -->

        <!-- === 02 - SHOWREEL === -->
        <!-- wp:group {"tagName":"section","anchor":"showreel","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section id="showreel" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Showreel header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Showreel 2026 - 02:14</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.035em;font-weight:700">The Reel</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Showreel poster with play button -->
                        <!-- wp:html -->
                        <figure class="noir-showreel" style="aspect-ratio: 21/9;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-showreel.webp' ); ?>" alt="Showreel 2026 - film set with dramatic backlight and silhouette of crew" loading="lazy">
                                <div class="noir-showreel-overlay">
                                        <a class="noir-play-btn" href="#" aria-label="Play showreel">▶</a>
                                        <p class="is-style-noir-label" style="color: var(--noir-soft); margin: 0;">Play Reel → &nbsp;·&nbsp; 02:14</p>
                                </div>
                        </figure>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - SELECTED FILMS (cinematic title cards) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Selected Work - 2023 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.035em;font-weight:700">Selected Work</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Film 01 - AFTERLIGHT (full-width landscape) -->
                        <!-- wp:html -->
                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 21/9; margin-bottom: 1.5rem;" aria-label="View film - Afterlight">
                                <div class="noir-film-media">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-1.webp' ); ?>" alt="AFTERLIGHT - cinematic commercial film still, warm golden light through a window onto a dark interior" loading="lazy">
                                        <span class="noir-play" aria-hidden="true">▶</span>
                                        <div class="noir-film-overlay">
                                                <p class="noir-film-num">01</p>
                                                <h3 class="noir-film-title">Afterlight</h3>
                                                <p class="noir-film-meta"><span>Commercial</span><span>2026</span><span>Director</span></p>
                                        </div>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Films 02 + 03 - split pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 3/4;" aria-label="View film - The Last Summer">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-2.webp' ); ?>" alt="THE LAST SUMMER - cinematic short film still, two figures silhouetted against a hazy sunset" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">02</p>
                                                                <h3 class="noir-film-title">The Last Summer</h3>
                                                                <p class="noir-film-meta"><span>Short Film</span><span>2025</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 3/4;" aria-label="View film - Monument">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-3.webp' ); ?>" alt="MONUMENT - cinematic brand film still, massive concrete structure at dusk with dramatic light" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">03</p>
                                                                <h3 class="noir-film-title">Monument</h3>
                                                                <p class="noir-film-meta"><span>Brand Film</span><span>2025</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Film 04 - NOCTURNE (full-width landscape) -->
                        <!-- wp:html -->
                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 21/9; margin-bottom: 1.5rem;" aria-label="View film - Nocturne">
                                <div class="noir-film-media">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-4.webp' ); ?>" alt="NOCTURNE - cinematic music video still, performer in dramatic colored light and shadow" loading="lazy">
                                        <span class="noir-play" aria-hidden="true">▶</span>
                                        <div class="noir-film-overlay">
                                                <p class="noir-film-num">04</p>
                                                <h3 class="noir-film-title">Nocturne</h3>
                                                <p class="noir-film-meta"><span>Music Video</span><span>2024</span><span>Director</span></p>
                                        </div>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Films 05 + 06 - split pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 16/9;" aria-label="View film - Between Tides">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-5.webp' ); ?>" alt="BETWEEN TIDES - cinematic documentary still, vast ocean and sky at dawn with a distant figure" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">05</p>
                                                                <h3 class="noir-film-title">Between Tides</h3>
                                                                <p class="noir-film-meta"><span>Documentary</span><span>2024</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 16/9;" aria-label="View film - Form / Motion">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-6.webp' ); ?>" alt="FORM / MOTION - cinematic campaign still, abstract motion blur of a figure in motion" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">06</p>
                                                                <h3 class="noir-film-title">Form / Motion</h3>
                                                                <p class="noir-film-meta"><span>Campaign</span><span>2023</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- All films link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"600"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--70);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:600"><a href="/films">View all films →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - FEATURED FILM: AFTERLIGHT === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Featured Film</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 8rem)","lineHeight":"0.94","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 8rem);line-height:0.94;letter-spacing:-0.035em;font-weight:700">Afterlight</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">A short visual story about memory, light and place · Commercial · 2026 · Director · 03:42</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large featured image -->
                        <!-- wp:html -->
                        <figure class="noir-showreel" style="aspect-ratio: 21/9;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-featured.webp' ); ?>" alt="AFTERLIGHT - cinematic featured film still, close portrait in dramatic warm side light against deep black" loading="lazy">
                                <div class="noir-showreel-overlay">
                                        <a class="noir-play-btn" href="#" aria-label="Play Afterlight">▶</a>
                                        <p class="is-style-noir-label" style="color: var(--noir-soft); margin: 0;">View Film → &nbsp;·&nbsp; 03:42</p>
                                </div>
                        </figure>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - DIRECTOR STATEMENT === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
                                <div class="wp-block-column" style="flex-basis:42%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-portrait.webp' ); ?>" alt="Cinematic editorial portrait of the film director, dramatic low-key side light against deep black" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
                                <div class="wp-block-column" style="flex-basis:58%">
                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Director Statement</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"noir-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":"26ch"}}} -->
                                        <h2 class="wp-block-heading noir-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.2;letter-spacing:-0.02em;font-weight:500;max-width:26ch">I am interested in stories that feel <span class="noir-italic">human.</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--40)">I work across commercial film, narrative projects and visual storytelling, combining atmosphere, performance and cinematography to create work that stays with the viewer.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"600"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:600"><a href="/director">About the Director →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - SERVICES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Services</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                        <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">What I direct.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Services list -->
                        <!-- wp:html -->
                        <div style="margin-top: 3rem;">
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">01</span>
                                        <span class="noir-service-title">Commercial Direction</span>
                                        <span class="noir-service-desc">Brand films, campaigns and advertising.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">02</span>
                                        <span class="noir-service-title">Narrative Film</span>
                                        <span class="noir-service-desc">Short films and scripted storytelling.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">03</span>
                                        <span class="noir-service-title">Music Videos</span>
                                        <span class="noir-service-desc">Visual concepts and music-driven narratives.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">04</span>
                                        <span class="noir-service-title">Documentary</span>
                                        <span class="noir-service-desc">Human stories and real-world subjects.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">05</span>
                                        <span class="noir-service-title">Cinematography</span>
                                        <span class="noir-service-desc">Visual development and camera direction.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-service-row" href="/services">
                                        <span class="noir-service-num">06</span>
                                        <span class="noir-service-title">Creative Direction</span>
                                        <span class="noir-service-desc">Concept, visual language and production direction.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - CLIENTS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Selected Clients (demo content)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="noir-clients" style="margin-top: 2rem;" aria-label="Selected clients">
                                <span>Aster</span><span>Forma</span><span>North</span><span>Monument</span><span>Sora</span><span>Mori</span><span>Field</span><span>Maison</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - FRAMES (cinematic gallery) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Frames</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">Selected frames.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Frames gallery (irregular contact sheet) -->
                        <!-- wp:html -->
                        <div class="noir-frames">
                                <figure class="noir-frame nf-1"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-1.webp' ); ?>" alt="Cinematic film still - dramatic interior with strong directional light and shadow" loading="lazy"></figure>
                                <figure class="noir-frame nf-2"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-2.webp' ); ?>" alt="Cinematic film still - close profile in dramatic low-key light" loading="lazy"></figure>
                                <figure class="noir-frame nf-3"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-3.webp' ); ?>" alt="Cinematic film still - hands in dramatic light, intimate detail" loading="lazy"></figure>
                                <figure class="noir-frame nf-4"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-4.webp' ); ?>" alt="Cinematic film still - figure walking away into darkness" loading="lazy"></figure>
                                <figure class="noir-frame nf-5"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-5.webp' ); ?>" alt="Cinematic film still - vast empty landscape under dramatic sky at dusk" loading="lazy"></figure>
                                <figure class="noir-frame nf-6"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-frame-6.webp' ); ?>" alt="Cinematic film still - abstract light and shadow play on a textured surface" loading="lazy"></figure>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - RECOGNITION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Recognition (demo data)</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:html -->
                                        <div style="border-top: 1px solid var(--noir-line);">
                                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                                        <span class="noir-service-num">2026</span>
                                                        <span class="noir-service-title">Best Visual Direction</span>
                                                        <span class="noir-service-desc">Film Craft Awards</span>
                                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                                        <span class="noir-service-num">2025</span>
                                                        <span class="noir-service-title">Shortlisted - Film Craft</span>
                                                        <span class="noir-service-desc">International Festival</span>
                                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                                        <span class="noir-service-num">2025</span>
                                                        <span class="noir-service-title">Official Selection</span>
                                                        <span class="noir-service-desc">Short Film Festival</span>
                                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                                        <span class="noir-service-num">2024</span>
                                                        <span class="noir-service-title">Creative Excellence</span>
                                                        <span class="noir-service-desc">Direction Award</span>
                                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                                </div>
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

        <!-- === 10 - JOURNAL === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Journal</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.035em;font-weight:700">Field notes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article index -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--noir-line);">
                                <a class="noir-index-row" href="/journal">
                                        <span class="noir-index-num">04.03.26</span>
                                        <span class="noir-index-title">Notes on Light</span>
                                        <span class="noir-index-meta">Essay · 7 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="/journal">
                                        <span class="noir-index-num">18.02.26</span>
                                        <span class="noir-index-title">Behind the Scenes: Afterlight</span>
                                        <span class="noir-index-meta">Process · 9 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="/journal">
                                        <span class="noir-index-num">02.02.26</span>
                                        <span class="noir-index-title">Why Silence Matters in Film</span>
                                        <span class="noir-index-meta">Essay · 6 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="/journal">
                                        <span class="noir-index-num">14.01.26</span>
                                        <span class="noir-index-title">Building a Visual Language</span>
                                        <span class="noir-index-meta">Notes · 8 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All journal link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"600"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:600"><a href="/journal">Read the journal →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-noir","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
