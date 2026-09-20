<?php
/**
 * Title: Demo - Mono (Developer)
 * Slug: godevs-portfolio/demo-mono
 * Description: MONO: Developer / Creative Technologist. Monochrome foundation, electric accent, Inter + mono technical metadata. Minimal, technical, intelligent, human. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, developer, technologist, engineer, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Independent Developer / Creative Technologist</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Europe / Asia · 10+ years</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display heading -->
                        <!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">I build digital products that <span class="mono-accent-text">work beautifully.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Sub row: supporting copy + CTAs + hero visual -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"44%"} -->
                                <div class="wp-block-column" style="flex-basis:44%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">Full-stack developer focused on thoughtful interfaces, scalable systems and high-quality digital experiences.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><span class="mono-dot" aria-hidden="true"></span>Currently available for selected projects</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:button {"style":{"border":{"radius":"4px"},"typography":{"fontSize":"0.875rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:4px;font-size:0.875rem;font-weight:500">View Work →</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px"},"typography":{"fontSize":"0.875rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/about" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:4px;font-size:0.875rem;font-weight:500">About Me →</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"56%"} -->
                                <div class="wp-block-column" style="flex-basis:56%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"6px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-hero.webp' ); ?>" alt="Clean minimal developer workspace - laptop with abstract product interface, neutral desk, soft light" fetchpriority="high" style="border-radius:6px;aspect-ratio:4/3;object-fit:cover" loading="eager"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - SELECTED WORK === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Selected Work - 2023 / 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Selected Work</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Project 01 - LUMA (full-width) -->
                        <!-- wp:html -->
                        <a class="mono-project is-full" href="#" aria-label="View project - Luma">
                                <div class="mono-project-media" style="aspect-ratio: 21/9;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-1.webp' ); ?>" alt="LUMA - product platform dashboard UI, clean minimal analytics interface" loading="lazy">
                                </div>
                                <div class="mono-project-body" style="flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline; gap: 1.5rem; margin-top: 1.25rem;">
                                        <div>
                                                <p class="mono-project-num">01 - LUMA</p>
                                                <h3 class="mono-project-title">Luma</h3>
                                                <p class="mono-project-meta"><span>Product Platform</span><span>2026</span></p>
                                                <p class="mono-project-desc" style="max-width: 50ch; margin-top: 0.5rem;">A product platform turning complex data into a simple, usable experience.</p>
                                                <div class="mono-project-stack">
                                                        <span class="mono-chip">Next.js</span>
                                                        <span class="mono-chip">TypeScript</span>
                                                        <span class="mono-chip">PostgreSQL</span>
                                                </div>
                                        </div>
                                        <p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 02 - ATLAS (reversed, vertical) -->
                        <!-- wp:html -->
                        <a class="mono-project is-reversed" href="#" style="--mono-split: 1fr 1.3fr; margin-top: 4rem;" aria-label="View project - Atlas">
                                <div class="mono-project-body">
                                        <p class="mono-project-num">02 - ATLAS</p>
                                        <h3 class="mono-project-title">Atlas</h3>
                                        <p class="mono-project-meta"><span>Data &amp; Analytics Platform</span><span>2025</span></p>
                                        <p class="mono-project-desc" style="max-width: 38ch;">A data and analytics platform built for clarity - dashboards people actually use.</p>
                                        <div class="mono-project-stack">
                                                <span class="mono-chip">React</span>
                                                <span class="mono-chip">Node.js</span>
                                                <span class="mono-chip">D3</span>
                                        </div>
                                        <p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
                                </div>
                                <div class="mono-project-media" style="aspect-ratio: 3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-2.webp' ); ?>" alt="ATLAS - data analytics mobile app UI, clean minimal charts and metrics" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 03 - NORTH (image left, landscape) -->
                        <!-- wp:html -->
                        <a class="mono-project" href="#" style="--mono-split: 1.4fr 1fr; margin-top: 4rem;" aria-label="View project - North">
                                <div class="mono-project-media" style="aspect-ratio: 4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-3.webp' ); ?>" alt="NORTH - e-commerce website UI on laptop, clean minimal product grid" loading="lazy">
                                </div>
                                <div class="mono-project-body">
                                        <p class="mono-project-num">03 - NORTH</p>
                                        <h3 class="mono-project-title">North</h3>
                                        <p class="mono-project-meta"><span>E-commerce Experience</span><span>2025</span></p>
                                        <p class="mono-project-desc" style="max-width: 38ch;">A commerce experience engineered for speed and conversion.</p>
                                        <div class="mono-project-stack">
                                                <span class="mono-chip">Next.js</span>
                                                <span class="mono-chip">Stripe</span>
                                                <span class="mono-chip">AWS</span>
                                        </div>
                                        <p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Projects 04 + 05 - split pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-project is-full" href="#" aria-label="View project - Forma">
                                                <div class="mono-project-media" style="aspect-ratio: 4/3;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-4.webp' ); ?>" alt="FORMA - creative collaboration tool UI, clean minimal interface with cards" loading="lazy">
                                                </div>
                                                <div class="mono-project-body" style="margin-top: 1rem;">
                                                        <p class="mono-project-num">04 - FORMA</p>
                                                        <h3 class="mono-project-title">Forma</h3>
                                                        <p class="mono-project-meta"><span>Collaboration Tool</span><span>2024</span></p>
                                                        <div class="mono-project-stack">
                                                                <span class="mono-chip">React</span>
                                                                <span class="mono-chip">WebSocket</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-project is-full" href="#" aria-label="View project - Pulse">
                                                <div class="mono-project-media" style="aspect-ratio: 3/4;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-5.webp' ); ?>" alt="PULSE - mobile product app UI, clean minimal onboarding flow" loading="lazy">
                                                </div>
                                                <div class="mono-project-body" style="margin-top: 1rem;">
                                                        <p class="mono-project-num">05 - PULSE</p>
                                                        <h3 class="mono-project-title">Pulse</h3>
                                                        <p class="mono-project-meta"><span>Mobile Product</span><span>2024</span></p>
                                                        <div class="mono-project-stack">
                                                                <span class="mono-chip">React Native</span>
                                                                <span class="mono-chip">Expo</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Project 06 - GRID (reversed, landscape) -->
                        <!-- wp:html -->
                        <a class="mono-project is-reversed" href="#" style="--mono-split: 1fr 1.4fr; margin-top: 4rem;" aria-label="View project - Grid">
                                <div class="mono-project-body">
                                        <p class="mono-project-num">06 - GRID</p>
                                        <h3 class="mono-project-title">Grid</h3>
                                        <p class="mono-project-meta"><span>Developer Platform</span><span>2023</span></p>
                                        <p class="mono-project-desc" style="max-width: 38ch;">A developer platform with documentation, CLI and API - built for other engineers.</p>
                                        <div class="mono-project-stack">
                                                <span class="mono-chip">TypeScript</span>
                                                <span class="mono-chip">Node.js</span>
                                                <span class="mono-chip">PostgreSQL</span>
                                        </div>
                                        <p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
                                </div>
                                <div class="mono-project-media" style="aspect-ratio: 16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-6.webp' ); ?>" alt="GRID - developer platform documentation UI, clean minimal code blocks and sidebar" loading="lazy">
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- All work link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--70);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><a href="/work">View all projects →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - FEATURED CASE STUDY: LUMA (dark) === -->
        <!-- wp:group {"tagName":"section","className":"mono-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group mono-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Featured Case Study</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading mono-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Turning complex data into a simple product experience.</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">LUMA · Product Platform · 2026 · Next.js / TypeScript / PostgreSQL</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"6px"}}} -->
                        <figure class="wp-block-image alignwide has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-featured.webp' ); ?>" alt="LUMA case study - clean minimal SaaS dashboard UI with data visualization" style="border-radius:6px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Challenge → Approach → Technology → Result -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Challenge</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em;font-weight:500">The original workflow was fragmented and difficult to use.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Approach</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em;font-weight:500">Designed a clearer product architecture and rebuilt the interface around user workflows.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Technology</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em;font-weight:500">Next.js / TypeScript / PostgreSQL / AWS</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Result</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em;font-weight:500">Faster workflows, clearer navigation and a more scalable product foundation.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- CTA -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><a href="/work">View case study →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - ABOUT === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
                                <div class="wp-block-column" style="flex-basis:42%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"6px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-portrait.webp' ); ?>" alt="Editorial portrait of the developer in a minimal studio, soft natural light, neutral background" style="border-radius:6px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
                                <div class="wp-block-column" style="flex-basis:58%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- About</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Engineer by discipline. Designer by instinct.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65">I build digital products at the intersection of engineering, design and usability. Ten years of practice across product platforms, design systems and technical architecture - working directly with founders and teams who care about how things are made.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><span class="mono-dot" aria-hidden="true"></span>Available for selected projects</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><a href="/about">More about me →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - TECHNOLOGY STACK === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Stack</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Tools I work with.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Stack groups -->
                        <!-- wp:html -->
                        <div>
                                <div class="mono-stack-group">
                                        <p class="mono-stack-label">Frontend</p>
                                        <div class="mono-stack-list">
                                                <span>TypeScript</span><span>React</span><span>Next.js</span><span>HTML</span><span>CSS</span>
                                        </div>
                                </div>
                                <div class="mono-stack-group">
                                        <p class="mono-stack-label">Backend</p>
                                        <div class="mono-stack-list">
                                                <span>Node.js</span><span>APIs</span><span>Databases</span><span>Authentication</span>
                                        </div>
                                </div>
                                <div class="mono-stack-group">
                                        <p class="mono-stack-label">CMS</p>
                                        <div class="mono-stack-list">
                                                <span>WordPress</span><span>WooCommerce</span><span>Gutenberg</span>
                                        </div>
                                </div>
                                <div class="mono-stack-group">
                                        <p class="mono-stack-label">Infrastructure</p>
                                        <div class="mono-stack-list">
                                                <span>Git</span><span>Cloud</span><span>CI/CD</span><span>Deployment</span>
                                        </div>
                                </div>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - EXPERIENCE === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Experience</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Where I've worked.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:html -->
                                        <div style="margin-top: 2rem;">
                                                <div class="mono-row" href="#" style="text-decoration: none;">
                                                        <span class="mono-row-num">2026 - Now</span>
                                                        <span class="mono-row-title">Independent Developer</span>
                                                        <span class="mono-row-desc">Building digital products for startups and businesses.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2023 - 2026</span>
                                                        <span class="mono-row-title">Senior Frontend Engineer</span>
                                                        <span class="mono-row-desc">Product development and design systems.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2020 - 2023</span>
                                                        <span class="mono-row-title">Full-Stack Developer</span>
                                                        <span class="mono-row-desc">Web applications and digital platforms.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">-</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2016 - 2020</span>
                                                        <span class="mono-row-title">WordPress Developer</span>
                                                        <span class="mono-row-desc">Custom themes, plugins and WooCommerce.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">-</span>
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

        <!-- === 07 - SERVICES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Services</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">How I can help.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Services list -->
                        <!-- wp:html -->
                        <div style="margin-top: 3rem;">
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">01</span>
                                        <span class="mono-row-title">Product Development</span>
                                        <span class="mono-row-desc">Build scalable web products from concept to launch.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">02</span>
                                        <span class="mono-row-title">Frontend Engineering</span>
                                        <span class="mono-row-desc">High-quality responsive interfaces and design systems.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">03</span>
                                        <span class="mono-row-title">Full-Stack Development</span>
                                        <span class="mono-row-desc">APIs, databases, authentication and backend architecture.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">04</span>
                                        <span class="mono-row-title">WordPress Development</span>
                                        <span class="mono-row-desc">Custom themes, blocks, WooCommerce and integrations.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">05</span>
                                        <span class="mono-row-title">Technical Consulting</span>
                                        <span class="mono-row-desc">Architecture, performance and technical strategy.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/services">
                                        <span class="mono-row-num">06</span>
                                        <span class="mono-row-title">Design Engineering</span>
                                        <span class="mono-row-desc">Turning designs into precise production-ready interfaces.</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - PRINCIPLES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Principles</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">How I build.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Principles grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">01 - Simplicity</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Remove unnecessary complexity.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">02 - Performance</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Fast experiences are better experiences.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">03 - Accessibility</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Products should work for everyone.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">04 - Maintainability</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Good code should remain understandable.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">05 - Detail</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Small details create great products.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Code accent -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60)"></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="mono-code">
<span class="mono-code-muted">// the loop</span>
<span class="mono-code-accent">build</span> → <span class="mono-code-accent">test</span> → <span class="mono-code-accent">ship</span> → <span class="mono-code-accent">improve</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 09 - OPEN SOURCE & EXPERIMENTS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Open Source</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Open Source &amp; Experiments.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- OSS grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-oss-card" href="#">
                                                <p class="mono-oss-title">Component System</p>
                                                <p class="mono-oss-desc">Reusable UI components built for production.</p>
                                                <div class="mono-oss-meta">
                                                        <span>★ 1.2k</span><span>⑂ 84</span><span>TypeScript</span><span>Updated 2d ago</span>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-oss-card" href="#">
                                                <p class="mono-oss-title">WP Blocks Toolkit</p>
                                                <p class="mono-oss-desc">WordPress block experiments and patterns.</p>
                                                <div class="mono-oss-meta">
                                                        <span>★ 640</span><span>⑂ 42</span><span>PHP</span><span>Updated 1w ago</span>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-oss-card" href="#">
                                                <p class="mono-oss-title">Performance Lab</p>
                                                <p class="mono-oss-desc">Web performance experiments and tooling.</p>
                                                <div class="mono-oss-meta">
                                                        <span>★ 380</span><span>⑂ 22</span><span>JavaScript</span><span>Updated 3w ago</span>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="mono-oss-card" href="#">
                                                <p class="mono-oss-title">Automation Tools</p>
                                                <p class="mono-oss-desc">Small tools for improving developer workflows.</p>
                                                <div class="mono-oss-meta">
                                                        <span>★ 210</span><span>⑂ 16</span><span>Node.js</span><span>Updated 1m ago</span>
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

        <!-- === 10 - TESTIMONIALS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Testimonials (demo identities)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="mono-testimonial">
                                                <p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.125rem, 1.8vw, 1.375rem);line-height:1.4;letter-spacing:-0.015em;margin:0;">"He transformed a complicated product into an interface our customers immediately understood."</p>
                                                <p class="is-style-mono-label" style="color: var(--mono-muted); margin-top: 1rem;">Maya Rahman - Product Lead, Luma</p>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="mono-testimonial">
                                                <p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.125rem, 1.8vw, 1.375rem);line-height:1.4;letter-spacing:--0.015em;margin:0;">"Fast, thoughtful and extremely detail-oriented. The code is as clean as the design."</p>
                                                <p class="is-style-mono-label" style="color: var(--mono-muted); margin-top: 1rem;">Arif Hasan - Founder, North</p>
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

        <!-- === 11 - WRITING === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">- Writing</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Notes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article list -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--mono-line);">
                                <a class="mono-row" href="/writing" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="mono-row-num">04.03.26</span>
                                        <span class="mono-row-title">Designing Better WordPress Block Themes</span>
                                        <span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">WordPress · 8 min</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/writing" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="mono-row-num">18.02.26</span>
                                        <span class="mono-row-title">What Makes a Website Feel Fast?</span>
                                        <span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Performance · 6 min</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/writing" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="mono-row-num">02.02.26</span>
                                        <span class="mono-row-title">Building Interfaces That Scale</span>
                                        <span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Engineering · 9 min</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="mono-row" href="/writing" style="grid-template-columns: 8rem 1fr auto 2rem;">
                                        <span class="mono-row-num">14.01.26</span>
                                        <span class="mono-row-title">A Practical Approach to Design Systems</span>
                                        <span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Design · 7 min</span>
                                        <span class="mono-row-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                        <!-- All writing link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><a href="/writing">Read all notes →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
