<?php
/**
 * Title: Demo - Journal (Writing)
 * Slug: godevs-portfolio/demo-journal
 * Description: JOURNAL: Premium Writer / Author / Editorial Portfolio. Warm paper, deep ink, muted burgundy, Newsreader serif. Literary, editorial, reading-focused. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, writer, author, editorial, blog, publication
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-journal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-journal alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-journal","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Journal / Issue 09</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">September 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display heading -->
                        <!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 9vw, 8.5rem)"}}} -->
                        <h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 9vw, 8.5rem)">Ideas worth <span class="jour-italic">spending time with.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy + CTAs -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"jour-lead","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.5vw, 1.75rem)","lineHeight":"1.4","letterSpacing":"-0.005em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"42ch"}}} -->
                                        <p class="jour-lead" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 1.75rem);line-height:1.4;letter-spacing:-0.005em;font-weight:400;max-width:42ch">Essays, stories, observations and conversations about culture, design, technology and the world around us.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons">
                                                <!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                                <div class="wp-block-button"><a href="#latest" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">Read the Journal →</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0"},"typography":{"fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.18em"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/about" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:0;font-size:0.6875rem;font-weight:500;letter-spacing:0.18em">About the Author →</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - FEATURED STORY === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Featured</p>
                        <!-- /wp:paragraph -->

                        <!-- Featured story: image left, info right -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column {"width":"55%"} -->
                                <div class="wp-block-column" style="flex-basis:55%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-featured.webp' ); ?>" alt="Featured story - quiet minimal interior with soft light through a window, warm tones" fetchpriority="high" style="aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                <div class="wp-block-column" style="flex-basis:45%">
                                        <!-- wp:paragraph {"className":"jour-article-meta","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="jour-article-meta has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:600"><span>Essay</span><span>September 2026</span><span>8 min read</span></p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4vw, 3.25rem)","lineHeight":"1.08","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4vw, 3.25rem);line-height:1.08;letter-spacing:-0.02em;font-weight:400">The Things We Notice When Everything Gets <span style="font-style:italic">Quiet</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"42ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;max-width:42ch">When the noise recedes, the small details - the quality of light, the texture of a surface, the rhythm of a day - become visible again. An essay on what we miss when we move too fast.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/essays">Read article →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - LATEST WRITING === -->
        <!-- wp:group {"tagName":"section","anchor":"latest","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section id="latest" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Latest Writing</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400">Recent <span class="jour-italic">writing.</span></h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article 1 - with image, reversed -->
                        <!-- wp:html -->
                        <a class="jour-article with-image is-reversed" href="#" style="margin-top: 1rem;" aria-label="Read article - The Architecture of Everyday Things">
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Essay</span><span>04.09.26</span><span>7 min</span></p>
                                        <h3 class="jour-article-title">The Architecture of Everyday Things</h3>
                                        <p class="jour-article-excerpt">How the objects we use every day shape our attention, our routines and our sense of what matters.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                                <div class="jour-article-image" style="aspect-ratio: 4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-1.webp' ); ?>" alt="Editorial image about everyday architecture - minimal building facade with warm light" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Article 2 - with image, normal -->
                        <!-- wp:html -->
                        <a class="jour-article with-image" href="#" style="margin-top: 0;" aria-label="Read article - What We Mean When We Say Simple">
                                <div class="jour-article-image" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-2.webp' ); ?>" alt="Editorial image about simplicity - single object on warm paper surface" loading="lazy">
                                </div>
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Notes</span><span>28.08.26</span><span>5 min</span></p>
                                        <h3 class="jour-article-title">What We Mean When We Say Simple</h3>
                                        <p class="jour-article-excerpt">Simplicity is not the absence of things - it's the presence of the right things in the right proportion.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Article 3 - text only -->
                        <!-- wp:html -->
                        <a class="jour-article" href="#" style="margin-top: 0;" aria-label="Read article - Notes From a City That Never Stops">
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Travel</span><span>21.08.26</span><span>9 min</span></p>
                                        <h3 class="jour-article-title">Notes From a City That Never Stops</h3>
                                        <p class="jour-article-excerpt">A week of walking, observing and listening in a place that moves faster than thought.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Article 4 - with image, reversed -->
                        <!-- wp:html -->
                        <a class="jour-article with-image is-reversed" href="#" style="margin-top: 0;" aria-label="Read article - The Long Way Around">
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Essay</span><span>14.08.26</span><span>8 min</span></p>
                                        <h3 class="jour-article-title">The Long Way Around</h3>
                                        <p class="jour-article-excerpt">Some ideas become clearer when we stop trying to reach them quickly.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                                <div class="jour-article-image" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-4.webp' ); ?>" alt="Editorial image about slow travel - winding road through warm landscape at golden hour" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Article 5 - with image, normal -->
                        <!-- wp:html -->
                        <a class="jour-article with-image" href="#" style="margin-top: 0;" aria-label="Read article - Designing for Attention">
                                <div class="jour-article-image" style="aspect-ratio: 4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-5.webp' ); ?>" alt="Editorial image about attention and design - abstract composition of layered paper forms" loading="lazy">
                                </div>
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Design</span><span>07.08.26</span><span>6 min</span></p>
                                        <h3 class="jour-article-title">Designing for Attention</h3>
                                        <p class="jour-article-excerpt">In a world built to distract, the most generous thing design can do is make space for focus.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Article 6 - text only -->
                        <!-- wp:html -->
                        <a class="jour-article" href="#" style="margin-top: 0;" aria-label="Read article - On Making Things Slowly">
                                <div class="jour-article-body">
                                        <p class="jour-article-meta"><span>Notes</span><span>31.07.26</span><span>4 min</span></p>
                                        <h3 class="jour-article-title">On Making Things Slowly</h3>
                                        <p class="jour-article-excerpt">Why the work that lasts is rarely the work that's rushed.</p>
                                        <p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Archive link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/archive">View the full archive →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - EXPLORE / CATEGORIES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Explore</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2rem)","lineHeight":"1.8","fontWeight":"400"}}} -->
                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2rem);line-height:1.8;font-weight:400"><a href="#">Essays</a> · <a href="#">Culture</a> · <a href="#">Design</a> · <a href="#">Technology</a> · <a href="#">Travel</a> · <a href="#">Books</a> · <a href="#">Notes</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - AUTHOR INTRODUCTION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-portrait.webp' ); ?>" alt="Editorial portrait of the writer author, warm natural light, neutral background, thoughtful" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- About the Writer</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">I write about design, culture, technology and the <span style="font-style:italic">quiet details</span> that shape how we experience everyday life.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">An independent writer based between London and Dhaka. I publish this journal - a slow, considered space for thinking in public about the things that shape our attention, our work and our world.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/about">More about me →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - FEATURED ESSAY === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Essay header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Featured Essay · Essay · 12 min read</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400">The Long Way <span class="jour-italic">Around</span></h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"jour-lead","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.375rem, 2.5vw, 1.75rem)","lineHeight":"1.4","letterSpacing":"-0.005em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"34ch"}}} -->
                                <p class="jour-lead" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.375rem, 2.5vw, 1.75rem);line-height:1.4;letter-spacing:-0.005em;font-weight:400;max-width:34ch">Some ideas become clearer when we stop trying to reach them quickly.</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large essay image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-essay.webp' ); ?>" alt="Featured essay - vast quiet landscape with a single path, warm golden light, contemplative" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Essay intro -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"width":"66%"} -->
                                <div class="wp-block-column" style="flex-basis:66%">
                                        <!-- wp:paragraph {"className":"jour-dropcap","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="jour-dropcap has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.75">There is a particular kind of clarity that arrives only when we stop rushing toward an answer. It comes not from thinking harder, but from giving an idea room to breathe - to wander, to circle back, to find its own shape. This is an essay about taking the long way around.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/essays">Read the full essay →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"34%"} -->
                                <div class="wp-block-column" style="flex-basis:34%">
                                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:600">Filed under</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.125rem","lineHeight":"1.8"}}} -->
                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:1.125rem;line-height:1.8"><a href="#">Essay</a><br><a href="#">Culture</a><br><a href="#">Attention</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - QUOTE (full-width) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"jour-quote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"22ch"}}} -->
                        <p class="jour-quote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.15;letter-spacing:-0.02em;font-weight:400;max-width:22ch">Good writing doesn't ask for attention. It <span class="jour-italic">earns</span> it.</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - NOTES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Notes</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">Short <span style="font-style:italic">observations.</span></h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Notes list -->
                        <!-- wp:html -->
                        <div style="margin-top: 2rem;">
                                <a class="jour-note" href="#">
                                        <span class="jour-note-num">01</span>
                                        <span class="jour-note-text">On choosing fewer things - and meaning it.</span>
                                </a>
                                <a class="jour-note" href="#">
                                        <span class="jour-note-num">02</span>
                                        <span class="jour-note-text">A useful definition of taste: knowing what to leave out.</span>
                                </a>
                                <a class="jour-note" href="#">
                                        <span class="jour-note-num">03</span>
                                        <span class="jour-note-text">Why good interfaces disappear.</span>
                                </a>
                                <a class="jour-note" href="#">
                                        <span class="jour-note-num">04</span>
                                        <span class="jour-note-text">What photographs remember that we forget.</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All notes link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/notes">Read all notes →</a></p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - PUBLICATIONS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Selected Publications</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">Books &amp; <span style="font-style:italic">writing.</span></h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Publications grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="jour-book" href="#">
                                                <div class="jour-book-image">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-1.webp' ); ?>" alt="The Quiet Shape of Things - minimal hardcover book on warm paper surface" loading="lazy">
                                                </div>
                                                <div>
                                                        <p class="jour-book-title">The Quiet Shape of Things</p>
                                                        <p class="jour-book-meta">Essays · 2026</p>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="jour-book" href="#">
                                                <div class="jour-book-image">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-2.webp' ); ?>" alt="Ways of Looking - stack of minimal books, warm tones" loading="lazy">
                                                </div>
                                                <div>
                                                        <p class="jour-book-title">Ways of Looking</p>
                                                        <p class="jour-book-meta">Notes · 2025</p>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="jour-book" href="#">
                                                <div class="jour-book-image">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-3.webp' ); ?>" alt="Small Observations - open book pages with warm light" loading="lazy">
                                                </div>
                                                <div>
                                                        <p class="jour-book-title">Small Observations</p>
                                                        <p class="jour-book-meta">Collected Writing · 2024</p>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 10 - CONVERSATIONS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Conversations</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">Interviews &amp; <span style="font-style:italic">dialogues.</span></h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Conversation list -->
                        <!-- wp:html -->
                        <div style="margin-top: 2rem;">
                                <a class="jour-conversation" href="#">
                                        <span class="jour-conversation-title">A Conversation About Making Things Slowly</span>
                                        <span class="jour-conversation-guest">with Elena Martin</span>
                                        <span style="font-style: italic; color: var(--jour-muted); font-family: var(--wp--preset--font-family--display);">→</span>
                                </a>
                                <a class="jour-conversation" href="#">
                                        <span class="jour-conversation-title">What Does Good Design Feel Like?</span>
                                        <span class="jour-conversation-guest">with Daniel Hart</span>
                                        <span style="font-style: italic; color: var(--jour-muted); font-family: var(--wp--preset--font-family--display);">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 11 - NEWSLETTER (footer handles the main subscribe, small anchor here) === -->
        <!-- wp:group {"tagName":"section","anchor":"newsletter","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section id="newsletter" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
        </section>
        <!-- /wp:group -->

        <!-- Footer (with newsletter CTA) -->
        <!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
