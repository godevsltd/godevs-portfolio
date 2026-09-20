<?php
/**
 * Title: Demo - Pulse (Designer)
 * Slug: godevs-portfolio/demo-pulse
 * Description: PULSE: UX / Product Designer. Cool neutral system, mono annotations, teal accent, case-study-driven portfolio with metrics. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, ux, product, designer, case study, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">UX / Product Designer</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Berlin · Remote · 12 years</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display heading -->
                        <!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.98;font-size:clamp(2.75rem, 8vw, 7.5rem)">I design products people <span class="pulse-accent-text">love to use.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Sub row: supporting copy + CTAs + hero visual -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"44%"} -->
                                <div class="wp-block-column" style="flex-basis:44%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">A product designer focused on outcomes - turning complex problems into systems people actually want to use. I work with founders and product teams from research to launch.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:button {"style":{"border":{"radius":"6px"},"typography":{"fontSize":"0.875rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:6px;font-size:0.875rem;font-weight:500">View case studies</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px"},"typography":{"fontSize":"0.875rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/about" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:6px;font-size:0.875rem;font-weight:500">About me</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"56%"} -->
                                <div class="wp-block-column" style="flex-basis:56%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-hero.webp' ); ?>" alt="Abstract arrangement of floating app UI panels - PULSE product design hero" fetchpriority="high" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover" loading="eager"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - FEATURED CASE STUDY: Fintech App (dark) === -->
        <!-- wp:group {"tagName":"section","className":"pulse-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group pulse-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Featured Case Study</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.035em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.035em;font-weight:600">Fintech App</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em">Mobile banking · Research · UX · UI · Design system · 2026 · 16 weeks</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Metric + image + copy -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"verticalAlignment":"center","width":"34%"} -->
                                <div class="wp-block-column" style="flex-basis:34%">
                                        <!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(3.5rem, 8vw, 6rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(3.5rem, 8vw, 6rem);line-height:0.95;letter-spacing:-0.04em">+38%</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Conversion uplift in 8 weeks post-launch</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">A mobile banking experience rebuilt around clarity - from onboarding to daily use. Research-led, system-driven, measured against the metrics that mattered.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"66%"} -->
                                <div class="wp-block-column" style="flex-basis:66%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-fintech.webp' ); ?>" alt="Fintech App case study - clean mobile banking interface with charts and balance cards" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- CTA -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
                        <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/case-studies">View case study →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - FEATURED CASE STUDIES grid === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Selected Work</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Case studies with outcomes.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Case study grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="pulse-case" href="#" aria-label="View Fintech App case study">
                                                <div class="pulse-case-media" style="aspect-ratio:4/3;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-fintech.webp' ); ?>" alt="Fintech App - mobile banking interface with charts and balance cards" loading="lazy">
                                                </div>
                                                <div class="pulse-case-body">
                                                        <p class="pulse-case-meta">Fintech · Mobile · 2026</p>
                                                        <h3 class="pulse-case-title">Fintech App</h3>
                                                        <p class="pulse-case-desc">A mobile banking experience rebuilt around clarity and trust.</p>
                                                        <div class="pulse-metric">
                                                                <span class="pulse-metric-num">+38%</span>
                                                                <span class="pulse-metric-label">Conversion</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="pulse-case" href="#" aria-label="View SaaS Analytics case study">
                                                <div class="pulse-case-media" style="aspect-ratio:4/3;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-saas.webp' ); ?>" alt="SaaS Analytics - clean dashboard interface with data tables and charts" loading="lazy">
                                                </div>
                                                <div class="pulse-case-body">
                                                        <p class="pulse-case-meta">SaaS · Web · 2025</p>
                                                        <h3 class="pulse-case-title">Analytics Platform</h3>
                                                        <p class="pulse-case-desc">Turning dense data into decisions - a dashboard people actually use.</p>
                                                        <div class="pulse-metric">
                                                                <span class="pulse-metric-num">2.1×</span>
                                                                <span class="pulse-metric-label">Daily active use</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Second row -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="pulse-case" href="#" aria-label="View Health App case study">
                                                <div class="pulse-case-media" style="aspect-ratio:4/3;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-health.webp' ); ?>" alt="Health App - clean medication tracking mobile interface" loading="lazy">
                                                </div>
                                                <div class="pulse-case-body">
                                                        <p class="pulse-case-meta">Health · Mobile · 2025</p>
                                                        <h3 class="pulse-case-title">Health Tracker</h3>
                                                        <p class="pulse-case-desc">A medication companion designed for daily adherence and calm.</p>
                                                        <div class="pulse-metric">
                                                                <span class="pulse-metric-num">92%</span>
                                                                <span class="pulse-metric-label">Adherence</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="pulse-case" href="#" aria-label="View E-commerce Admin case study">
                                                <div class="pulse-case-media" style="aspect-ratio:4/3;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-ecommerce.webp' ); ?>" alt="E-commerce Admin - clean order management dashboard interface" loading="lazy">
                                                </div>
                                                <div class="pulse-case-body">
                                                        <p class="pulse-case-meta">E-commerce · Web · 2024</p>
                                                        <h3 class="pulse-case-title">Commerce Admin</h3>
                                                        <p class="pulse-case-desc">An admin that merchants understand without training.</p>
                                                        <div class="pulse-metric">
                                                                <span class="pulse-metric-num">−47%</span>
                                                                <span class="pulse-metric-label">Support tickets</span>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- All work link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/work">View all case studies →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - RESULTS / STATS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">By the numbers - demo data</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 7vw, 5.5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"}}} -->
                                        <p class="pulse-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 7vw, 5.5rem);line-height:0.95;letter-spacing:-0.04em">48</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Products shipped</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 7vw, 5.5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"}}} -->
                                        <p class="pulse-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 7vw, 5.5rem);line-height:0.95;letter-spacing:-0.04em">12</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Years of practice</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 7vw, 5.5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"}}} -->
                                        <p class="pulse-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 7vw, 5.5rem);line-height:0.95;letter-spacing:-0.04em">9</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Design systems built</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 7vw, 5.5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 7vw, 5.5rem);line-height:0.95;letter-spacing:-0.04em">3.4M</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Users reached</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - DESIGN PROCESS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">How I work</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">A measured design process.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Process grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"pulse-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group pulse-process-step">
                                                <!-- wp:html --><span class="pulse-process-num">01</span><!-- /wp:html -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem","lineHeight":"1.2","letterSpacing":"-0.015em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.25rem;line-height:1.2;letter-spacing:-0.015em;font-weight:600">Research</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Interviews, analytics and competitive review to understand the problem space and the people in it.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"pulse-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group pulse-process-step">
                                                <!-- wp:html --><span class="pulse-process-num">02</span><!-- /wp:html -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem","lineHeight":"1.2","letterSpacing":"-0.015em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.25rem;line-height:1.2;letter-spacing:-0.015em;font-weight:600">Define</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Problem framing, jobs-to-be-done, success metrics and a scope the whole team can rally behind.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"pulse-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group pulse-process-step">
                                                <!-- wp:html --><span class="pulse-process-num">03</span><!-- /wp:html -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem","lineHeight":"1.2","letterSpacing":"-0.015em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.25rem;line-height:1.2;letter-spacing:-0.015em;font-weight:600">Design</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Flows, wireframes and high-fidelity UI - built on a system, prototyped early, tested with real users.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"pulse-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                                        <div class="wp-block-group pulse-process-step">
                                                <!-- wp:html --><span class="pulse-process-num">04</span><!-- /wp:html -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem","lineHeight":"1.2","letterSpacing":"-0.015em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.25rem;line-height:1.2;letter-spacing:-0.015em;font-weight:600">Ship & measure</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Engineering handoff, launch and a measurement plan - then iterate against the metrics that matter.</p>
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

        <!-- === 06 - EXPERIENCE timeline === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Experience</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Where I've worked.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:html -->
                                        <div style="margin-top:2rem;">
                                                <div class="pulse-exp-row">
                                                        <span class="pulse-exp-year">2023 - Now</span>
                                                        <span class="pulse-exp-role">Independent Product Designer</span>
                                                        <span class="pulse-exp-org">Selected engagements with fintech, health and SaaS teams.</span>
                                                </div>
                                                <div class="pulse-exp-row">
                                                        <span class="pulse-exp-year">2020 - 2023</span>
                                                        <span class="pulse-exp-role">Senior Product Designer</span>
                                                        <span class="pulse-exp-org">North Studio - led design for the flagship product, built the design system.</span>
                                                </div>
                                                <div class="pulse-exp-row">
                                                        <span class="pulse-exp-year">2017 - 2020</span>
                                                        <span class="pulse-exp-role">Product Designer</span>
                                                        <span class="pulse-exp-org">Orbit Labs - shipped 3 mobile products from research to launch.</span>
                                                </div>
                                                <div class="pulse-exp-row">
                                                        <span class="pulse-exp-year">2014 - 2017</span>
                                                        <span class="pulse-exp-role">UX Designer</span>
                                                        <span class="pulse-exp-org">Arc Agency - agency work across brand, web and product.</span>
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

        <!-- === 07 - SKILLS spec-sheet === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Skills</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">What I bring.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:html -->
                                        <div style="margin-top:2rem;">
                                                <div class="pulse-skill-row">
                                                        <span class="pulse-skill-name">Product Strategy</span>
                                                        <span class="pulse-skill-detail">Roadmapping · Jobs-to-be-done · Metric design · Opportunity framing</span>
                                                </div>
                                                <div class="pulse-skill-row">
                                                        <span class="pulse-skill-name">UX Research</span>
                                                        <span class="pulse-skill-detail">User interviews · Usability testing · Diary studies · Quant analysis</span>
                                                </div>
                                                <div class="pulse-skill-row">
                                                        <span class="pulse-skill-name">Interaction Design</span>
                                                        <span class="pulse-skill-detail">Flows · Wireframes · Prototyping · Accessibility · Motion</span>
                                                </div>
                                                <div class="pulse-skill-row">
                                                        <span class="pulse-skill-name">UI & Systems</span>
                                                        <span class="pulse-skill-detail">Design systems · Component libraries · Tokens · Visual design</span>
                                                </div>
                                                <div class="pulse-skill-row">
                                                        <span class="pulse-skill-name">Tools</span>
                                                        <span class="pulse-skill-detail">Figma · Framer · Notion · Linear · Maze · Hotjar</span>
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

        <!-- === 08 - TESTIMONIALS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Testimonials (demo identities)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="pulse-testimonial">
                                                <p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.125rem, 1.8vw, 1.375rem);line-height:1.35;letter-spacing:-0.015em;margin:0;">"The kind of designer who makes the whole team better. Research-led, systems-minded, and relentlessly focused on outcomes."</p>
                                                <div class="pulse-metric" style="margin-top:1.5rem;border-top:1px solid var(--pulse-line);">
                                                        <span class="pulse-metric-num" style="font-size:1.25rem;">+38%</span>
                                                        <span class="pulse-metric-label">Conversion</span>
                                                </div>
                                                <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em;color:var(--pulse-muted);margin-top:1rem;">Mara Lindqvist · CPO, Orbit Labs</p>
                                        </figure>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <figure class="pulse-testimonial">
                                                <p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.125rem, 1.8vw, 1.375rem);line-height:1.35;letter-spacing:-0.015em;margin:0;">"Shipped on time, shipped on scope, and the product just worked. The design system alone saved us months."</p>
                                                <div class="pulse-metric" style="margin-top:1.5rem;border-top:1px solid var(--pulse-line);">
                                                        <span class="pulse-metric-num" style="font-size:1.25rem;">−47%</span>
                                                        <span class="pulse-metric-label">Support tickets</span>
                                                </div>
                                                <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em;color:var(--pulse-muted);margin-top:1rem;">Idris Bello · Founder, Forma</p>
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

        <!-- === 09 - ABOUT === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
                                <div class="wp-block-column" style="flex-basis:42%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-portrait.webp' ); ?>" alt="Editorial portrait of the product designer in a minimal studio with soft cool light" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
                                <div class="wp-block-column" style="flex-basis:58%">
                                        <!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- About</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.03em;font-weight:600">Designing for outcomes.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">I'm a product designer with twelve years of practice across fintech, health and SaaS. I work end-to-end - research, strategy, interaction, UI and design systems - and I care about the metrics that follow a launch, not just the screens before it.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/about">Read the full bio →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 10 - FINAL CTA (Contact) - handled by footer-pulse, small note here === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><span class="pulse-dot" aria-hidden="true"></span>Available for Q3 2026 · 2 engagements per quarter</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
                        <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/contact">Start a project →</a></p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-pulse","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
