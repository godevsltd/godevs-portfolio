<?php
/**
 * Title: Demo - Nova (Agency)
 * Slug: godevs-portfolio/demo-nova
 * Description: NOVA: Creative Digital Agency. Bold editorial typography, asymmetric project showcase, immersive case study, ember accent on warm off-white. Recommended style variation: Nova.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, agency, creative, studio, branding, digital, nova
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-nova","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-nova alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-nova","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - HERO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">NOVA - Creative Digital Studio</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500"><span class="nova-dot" aria-hidden="true"></span>Available for Q3 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display heading -->
                        <!-- wp:heading {"level":1,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
                        <h1 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8rem)">We build digital experiences that <span class="nova-italic">matter.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Sub row: supporting copy + CTAs + featured image -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"42%"} -->
                                <div class="wp-block-column" style="flex-basis:42%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55">A creative studio crafting brands, products and digital experiences for ambitious teams. We partner with founders and brands from first idea to final pixel.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                                <!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button"><a href="/contact" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project</a></div>
                                                <!-- /wp:button -->
                                                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"}}} -->
                                                <div class="wp-block-button is-style-outline"><a href="/work" class="wp-block-button__link wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Explore Work</a></div>
                                                <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"58%"} -->
                                <div class="wp-block-column" style="flex-basis:58%">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"},"layout":{"selfStretch":"fit","flexSize":"100%"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-hero.webp' ); ?>" alt="Abstract architectural 3D render of flowing dark sculptural forms - NOVA creative studio hero" fetchpriority="high" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - TRUST / CLIENT STRIP === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Selected partnerships - showcase brands</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="nova-clients" aria-label="Showcase client brands">
                                <span>Nike</span><span>Google</span><span>Spotify</span><span>Airbnb</span><span>Notion</span><span>Stripe</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - FEATURED WORK === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"selfStretch":"fit","flexSize":"100%"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Selected Work - 01</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Selected Work</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Project 1 - Aster (image left, 55/45) -->
                        <!-- wp:html -->
                        <a class="nova-project-row" style="--nova-row-split: 55% 1fr;" href="#" aria-label="View Aster - Brand Identity project">
                                <div class="nova-project-media" style="aspect-ratio:4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-aster.webp' ); ?>" alt="Aster - brand identity system flatlay: business cards, letterhead and wordmark samples on warm cream surface" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2026</span><span>·</span><span>Brand Identity</span></div>
                                        <h3 class="nova-project-title">Aster</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">A complete identity system - wordmark, type pairing, color and editorial templates - built to scale from business card to billboard.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 2 - Orbit (reversed, image right, 1fr/55%) -->
                        <!-- wp:html -->
                        <a class="nova-project-row is-reversed" style="--nova-row-split: 1fr 55%; gap:4rem; margin-top:5rem;" href="#" aria-label="View Orbit - Digital Experience project">
                                <div class="nova-project-media" style="aspect-ratio:16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-orbit.webp' ); ?>" alt="Orbit - abstract digital experience with floating translucent glass UI panels in dark space" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2026</span><span>·</span><span>Digital Experience</span></div>
                                        <h3 class="nova-project-title">Orbit</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">An immersive product experience for a data platform - interaction design, motion and a system that scales across surfaces.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 3 - Forma (image left, 45/55, tall portrait image) -->
                        <!-- wp:html -->
                        <a class="nova-project-row" style="--nova-row-split: 45% 1fr; gap:4rem; margin-top:5rem;" href="#" aria-label="View Forma - E-commerce project">
                                <div class="nova-project-media" style="aspect-ratio:4/5;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-forma.webp' ); ?>" alt="Forma - minimalist fashion e-commerce website displayed on a laptop with editorial product photography" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2025</span><span>·</span><span>E-commerce</span></div>
                                        <h3 class="nova-project-title">Forma</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">A fashion commerce experience where editorial storytelling and conversion design meet - art-directed product, engineered to perform.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 4 - North (reversed, portrait mobile) -->
                        <!-- wp:html -->
                        <a class="nova-project-row is-reversed" style="--nova-row-split: 1fr 45%; gap:4rem; margin-top:5rem;" href="#" aria-label="View North - Digital Product project">
                                <div class="nova-project-media" style="aspect-ratio:3/4;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-north.webp' ); ?>" alt="North - modern mobile app interface screens floating in space with clean premium UI design" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2025</span><span>·</span><span>Digital Product</span></div>
                                        <h3 class="nova-project-title">North</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">A native product for a fintech startup - from design system and onboarding to a motion language that makes complex flows feel simple.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 5 - Mono (image left, wide landscape) -->
                        <!-- wp:html -->
                        <a class="nova-project-row" style="--nova-row-split: 58% 1fr; gap:4rem; margin-top:5rem;" href="#" aria-label="View Mono - Campaign project">
                                <div class="nova-project-media" style="aspect-ratio:16/10;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-mono.webp' ); ?>" alt="Mono - bold abstract typographic campaign poster with geometric shapes and high contrast composition" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2025</span><span>·</span><span>Campaign</span></div>
                                        <h3 class="nova-project-title">Mono</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">A typographic campaign for a cultural institution - posters, motion and a flexible system that stays unmistakable across every surface.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Project 6 - Vela (reversed) -->
                        <!-- wp:html -->
                        <a class="nova-project-row is-reversed" style="--nova-row-split: 1fr 58%; gap:4rem; margin-top:5rem;" href="#" aria-label="View Vela - Creative Direction project">
                                <div class="nova-project-media" style="aspect-ratio:4/3;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-vela.webp' ); ?>" alt="Vela - creative direction moodboard with layered fashion editorial photography swatches and color studies" loading="lazy">
                                </div>
                                <div>
                                        <div class="nova-project-meta"><span>2024</span><span>·</span><span>Creative Direction</span></div>
                                        <h3 class="nova-project-title">Vela</h3>
                                        <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.6;color:var(--nova-muted);max-width:36ch;margin:0 0 1.25rem;">Creative direction for a fashion house - art direction across photography, film and a seasonal identity that felt both fresh and inevitable.</p>
                                        <span class="nova-arrow-link">View project <span class="nova-arrow" aria-hidden="true">→</span></span>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- All work link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--80);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/work">View all projects →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - AGENCY INTRODUCTION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">The Studio</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5.5vw, 4.5rem)","lineHeight":"1.02","letterSpacing":"-0.035em","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":"18ch"}}} -->
                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5.5vw, 4.5rem);line-height:1.02;letter-spacing:-0.035em;font-weight:600;max-width:18ch">We turn ambitious ideas into digital experiences people <span class="nova-italic">remember.</span></h2>
                        <!-- /wp:heading -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"42ch"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:42ch">We're a small, senior team of strategists, designers and engineers. No layers, no hand-offs - just people who care deeply about the craft, working directly with you.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
                                <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/about">About Nova →</a></p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - SERVICES === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">What we do</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Capabilities</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Services list -->
                        <!-- wp:html -->
                        <div class="nova-service-list" role="list">
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">01</span>
                                        <span class="nova-service-title">Brand Strategy</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">02</span>
                                        <span class="nova-service-title">Visual Identity</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">03</span>
                                        <span class="nova-service-title">Web Design</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">04</span>
                                        <span class="nova-service-title">Web Development</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">05</span>
                                        <span class="nova-service-title">Digital Products</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="nova-service-row" href="/services" role="listitem">
                                        <span class="nova-service-num">06</span>
                                        <span class="nova-service-title">Creative Direction</span>
                                        <span class="nova-service-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 06 - RESULTS / STATISTICS (dark section) === -->
        <!-- wp:group {"tagName":"section","className":"nova-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group nova-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">By the numbers - demo content</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"nova-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(3rem, 8vw, 6.5rem)","lineHeight":"0.9","letterSpacing":"-0.05em"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="nova-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(3rem, 8vw, 6.5rem);line-height:0.9;letter-spacing:-0.05em">12+</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"nova-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="nova-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Years of practice</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"nova-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(3rem, 8vw, 6.5rem)","lineHeight":"0.9","letterSpacing":"-0.05em"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="nova-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(3rem, 8vw, 6.5rem);line-height:0.9;letter-spacing:-0.05em">86</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"nova-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="nova-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Projects shipped</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"nova-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(3rem, 8vw, 6.5rem)","lineHeight":"0.9","letterSpacing":"-0.05em"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="nova-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(3rem, 8vw, 6.5rem);line-height:0.9;letter-spacing:-0.05em">42</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"nova-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="nova-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Global partners</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"nova-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(3rem, 8vw, 6.5rem)","lineHeight":"0.9","letterSpacing":"-0.05em"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="nova-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(3rem, 8vw, 6.5rem);line-height:0.9;letter-spacing:-0.05em">18</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"nova-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="nova-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Awards received</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 07 - SELECTED CASE STUDY (ORBIT) === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Case study header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Featured Case Study</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 9vw, 8rem)","lineHeight":"0.92","letterSpacing":"-0.05em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 9vw, 8rem);line-height:0.92;letter-spacing:-0.05em;font-weight:600">ORBIT</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Digital Experience · 2026 · Data Platform</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Large image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"2px"}}} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-project-orbit.webp' ); ?>" alt="ORBIT case study - immersive digital experience for a data platform, floating glass UI panels in dark space" style="border-radius:2px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Challenge → Solution → Result -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Challenge</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em">A data platform with a powerful engine hidden behind a cold, complex interface. Users were leaving before they reached the value.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Approach</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em">We rebuilt the experience around the moments that matter - an art-directed dashboard, a motion system that explains the data, and a language that makes complexity feel calm.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Result</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.5","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.5;letter-spacing:-0.01em">Activation up 64%, time-to-value cut in half, and a product that finally looks like the engineering behind it.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- CTA -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/case-studies">View case study →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 08 - PROCESS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">How we work</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">From idea to impact.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Process steps -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-group nova-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">01 - Discover</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Listen first</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Workshops, interviews and research to understand the people, the business and the ambition behind the project.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-group nova-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">02 - Define</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Sharpen the brief</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Positioning, principles and a clear scope. We align on what success looks like before a pixel is drawn.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-group nova-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">03 - Design</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Make it real</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Identity, interface and motion - designed in the open, prototyped early, tested with real people.</p>
                                                <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:group {"className":"nova-process-step","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-group nova-process-step">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;font-weight:500">04 - Deliver</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.625rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                                <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.625rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600">Ship & evolve</h3>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.6">Engineering, launch and a system your team can grow. We stay close after go-live - the work rarely ends at launch.</p>
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

        <!-- === 09 - ABOUT / STUDIO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                                <div class="wp-block-column" style="flex-basis:50%">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"2px"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-studio.webp' ); ?>" alt="NOVA creative studio interior - minimal designer workspace with natural light, warm wood and raw concrete" style="border-radius:2px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                                <div class="wp-block-column" style="flex-basis:50%">
                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">The Studio</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.035em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.035em;font-weight:600">Small team. <span class="nova-italic">Big ideas.</span></h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6">We're a deliberately small studio of strategists, designers and engineers. Senior people, direct collaboration, and a shared obsession with craft. No account layers, no offshore hand-offs - just the team you talk to.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/about">Meet the studio →</a></p>
                                        <!-- /wp:paragraph -->
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
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Kind words - demo identities</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"500"}}} -->
                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.2;letter-spacing:-0.02em;font-weight:500">"NOVA didn't just redesign our product - they reframed how we think about it. The clarity they brought changed everything that came after."</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.08em;text-transform:uppercase">Mara Lindqvist · CPO, Orbit Labs</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"500"}}} -->
                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2rem);line-height:1.2;letter-spacing:-0.02em;font-weight:500">"The most thoughtful design partner we've worked with. Every decision had a reason, and the result felt inevitable - like it could only have been this."</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.08em;text-transform:uppercase">Idris Bello · Founder, Forma</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 11 - INSIGHTS === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Insights</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Field notes</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-1.webp' ); ?>" alt="Editorial composition about design thinking - layered paper and geometric forms" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Process · 6 min read</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.5rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="/journal">Why good design starts before the screen</a></h3>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-2.webp' ); ?>" alt="Editorial composition about brand building - sculptural forms and typography fragments" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Brand · 8 min read</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.5rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="/journal">Building brands people remember</a></h3>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"2px"}}} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nova/nova-blog-3.webp' ); ?>" alt="Editorial composition about digital human experience - soft organic 3D forms" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase">Product · 5 min read</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                        <h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.5rem;line-height:1.1;letter-spacing:-0.02em;font-weight:600"><a href="/journal">Designing digital experiences for humans</a></h3>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- All insights link -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--70);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase"><a href="/journal">Read all insights →</a></p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 12 - FINAL CTA (dark) === -->
        <!-- wp:group {"tagName":"section","className":"nova-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group nova-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Let's talk</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(3rem, 10vw, 9rem)","lineHeight":"0.94","letterSpacing":"-0.05em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
                        <h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(3rem, 10vw, 9rem);line-height:0.94;letter-spacing:-0.05em;font-weight:600">Have a project in mind?</h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:46ch">Let's turn your next idea into something people remember. We take on a small number of engagements each quarter - tell us about yours.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"},"color":{"background":"var:preset|color|accent","text":"var:preset|color|primary"}}} -->
                                <div class="wp-block-button"><a href="/contact" class="wp-block-button__link has-accent-background-color has-background has-primary-color has-text-color wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project →</a></div>
                                <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-nova","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
