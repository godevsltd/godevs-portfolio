<?php
/**
 * Title: Demo - Nova (Agency) - Contact
 * Slug: godevs-portfolio/demo-nova-contact
 * Description: NOVA contact page - inquiry form, availability, FAQ. Recommended style variation: Nova.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, nova, contact, inquiry, agency
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
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + availability row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Contact - NOVA Studio</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500"><span class="nova-dot" aria-hidden="true"></span>Available for Q3 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display heading -->
                        <!-- wp:heading {"level":1,"className":"nova-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.96","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
                        <h1 class="wp-block-heading nova-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.96;font-size:clamp(2.75rem, 9vw, 8rem)">Let's make something <span class="nova-italic">memorable.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy + studio meta column -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
                                <div class="wp-block-column" style="flex-basis:62%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.55;max-width:48ch">Tell us what you're building and where you want to be. We read every inquiry ourselves, reply within two business days, and only take on a small number of engagements each quarter - so every project gets the full team.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
                                <div class="wp-block-column" style="flex-basis:38%">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group">
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Reply - within 2 business days</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Engagements - 1 to 2 per quarter</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase">Booking - Q3 2026 onward</p>
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

        <!-- === 02 - CONTACT INFO + INQUIRY FORM === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Split: info (left, 40%) + form (right, 60%) -->
                        <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-top">

                                <!-- LEFT - contact info -->
                                <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group">

                                                <!-- Email block -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Email</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2rem)","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
                                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2rem);line-height:1.1;letter-spacing:-0.025em;font-weight:500"><a href="mailto:hello@novastudio.co">hello@novastudio.co</a></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- Location block -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Studios</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.5"},"color":{"text":"var:preset|color|foreground"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.5">Reykjavík · New York<br>UTC±0 · remote-friendly</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- Social block -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Elsewhere</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:html -->
                                                        <nav class="nova-social" aria-label="NOVA on social platforms">
                                                                <a class="nova-social-link" href="#">Instagram <span class="nova-arrow" aria-hidden="true">↗</span></a>
                                                                <a class="nova-social-link" href="#">LinkedIn <span class="nova-arrow" aria-hidden="true">↗</span></a>
                                                                <a class="nova-social-link" href="#">Behance <span class="nova-arrow" aria-hidden="true">↗</span></a>
                                                                <a class="nova-social-link" href="#">Dribbble <span class="nova-arrow" aria-hidden="true">↗</span></a>
                                                        </nav>
                                                        <!-- /wp:html -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- What happens next -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">What happens next</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:html -->
                                                        <ol class="nova-next-steps">
                                                                <li><span class="nova-next-num">01</span><span>We review your brief within 2 days.</span></li>
                                                                <li><span class="nova-next-num">02</span><span>A 30-minute intro call with the team.</span></li>
                                                                <li><span class="nova-next-num">03</span><span>A tailored proposal - scope, timeline, fee.</span></li>
                                                        </ol>
                                                        <!-- /wp:html -->
                                                </div>
                                                <!-- /wp:group -->

                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                                <!-- RIGHT - visual project-inquiry form -->
                                <!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:group {"className":"nova-form-shell","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|surface-muted"},"border":{"radius":"2px"}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group nova-form-shell has-surface-muted-background-color has-background" style="border-radius:2px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">

                                                <!-- Form header -->
                                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Project inquiry</p>
                                                <!-- /wp:paragraph -->
                                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 2.5rem)","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
                                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 2.5rem);line-height:1.05;letter-spacing:-0.03em;font-weight:600;margin-bottom:var(--wp--preset--spacing--50)">Tell us about your project.</h2>
                                                <!-- /wp:heading -->

                                                <!-- Form (visual demo - pure HTML markup, real labels + focus states) -->
                                                <!-- wp:html -->
                                                <style>
                                                        /* Scoped form styles - pseudo-class states (focus / hover) can't be expressed as inline styles. */
                                                        .wp-block-godevs-demo-nova .nova-form { display: grid; gap: 1.5rem; }
                                                        .wp-block-godevs-demo-nova .nova-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
                                                        @media ( max-width: 640px ) {
                                                                .wp-block-godevs-demo-nova .nova-form-row { grid-template-columns: 1fr; }
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-field { display: grid; gap: 0.5rem; }
                                                        .wp-block-godevs-demo-nova .nova-form-label {
                                                                font-family: var(--wp--preset--font-family--mono, monospace);
                                                                font-size: 0.6875rem;
                                                                letter-spacing: 0.14em;
                                                                text-transform: uppercase;
                                                                font-weight: 500;
                                                                color: var(--nova-muted);
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-input,
                                                        .wp-block-godevs-demo-nova .nova-form-select,
                                                        .wp-block-godevs-demo-nova .nova-form-textarea {
                                                                width: 100%;
                                                                box-sizing: border-box;
                                                                font-family: var(--wp--preset--font-family--body, inherit);
                                                                font-size: 1rem;
                                                                line-height: 1.5;
                                                                color: var(--nova-ink);
                                                                background: var(--nova-base);
                                                                border: 1px solid var(--nova-line);
                                                                border-radius: 2px;
                                                                padding: 0.85rem 1rem;
                                                                transition: border-color 0.2s ease, box-shadow 0.2s ease;
                                                                -webkit-appearance: none;
                                                                appearance: none;
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-textarea { min-height: 140px; resize: vertical; }
                                                        .wp-block-godevs-demo-nova .nova-form-select {
                                                                background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8' fill='none'><path d='M1 1.5L6 6.5L11 1.5' stroke='%236B6862' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/></svg>");
                                                                background-repeat: no-repeat;
                                                                background-position: right 1rem center;
                                                                background-size: 12px 8px;
                                                                padding-right: 2.5rem;
                                                                cursor: pointer;
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-input::placeholder,
                                                        .wp-block-godevs-demo-nova .nova-form-textarea::placeholder {
                                                                color: var(--nova-muted);
                                                                opacity: 0.7;
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-input:focus-visible,
                                                        .wp-block-godevs-demo-nova .nova-form-select:focus-visible,
                                                        .wp-block-godevs-demo-nova .nova-form-textarea:focus-visible {
                                                                outline: none;
                                                                border-color: var(--nova-accent);
                                                                box-shadow: 0 0 0 2px rgba(255, 90, 48, 0.20);
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-submit {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                gap: 0.5rem;
                                                                font-family: var(--wp--preset--font-family--body, inherit);
                                                                font-size: 0.9375rem;
                                                                font-weight: 500;
                                                                letter-spacing: 0.01em;
                                                                color: var(--nova-base);
                                                                background: var(--nova-accent);
                                                                border: 1px solid var(--nova-accent);
                                                                border-radius: 2px;
                                                                padding: 0.95rem 1.75rem;
                                                                cursor: pointer;
                                                                margin-top: 0.5rem;
                                                                transition: background 0.25s ease, border-color 0.25s ease, color 0.25s ease;
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-submit:hover {
                                                                background: var(--nova-accent-hover);
                                                                border-color: var(--nova-accent-hover);
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-submit:focus-visible {
                                                                outline: 2px solid var(--nova-accent);
                                                                outline-offset: 3px;
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-submit .nova-arrow {
                                                                transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-submit:hover .nova-arrow {
                                                                transform: translateX(2px);
                                                        }
                                                        .wp-block-godevs-demo-nova .nova-form-note {
                                                                margin: 1.25rem 0 0;
                                                                font-family: var(--wp--preset--font-family--mono, monospace);
                                                                font-size: 0.6875rem;
                                                                letter-spacing: 0.1em;
                                                                text-transform: uppercase;
                                                                color: var(--nova-muted);
                                                        }
                                                </style>

                                                <form class="nova-form" id="nova-contact-form" action="#" method="post" aria-label="Project inquiry form" novalidate>
                                                        <div class="nova-form-row">
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-name">Name</label>
                                                                        <input class="nova-form-input" type="text" id="nova-contact-name" name="nova_contact_name" placeholder="Your name" autocomplete="name" required>
                                                                </div>
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-email">Email</label>
                                                                        <input class="nova-form-input" type="email" id="nova-contact-email" name="nova_contact_email" placeholder="you@company.com" autocomplete="email" required>
                                                                </div>
                                                        </div>

                                                        <div class="nova-form-row">
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-company">Company</label>
                                                                        <input class="nova-form-input" type="text" id="nova-contact-company" name="nova_contact_company" placeholder="Studio / brand" autocomplete="organization">
                                                                </div>
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-project-type">Project type</label>
                                                                        <select class="nova-form-select" id="nova-contact-project-type" name="nova_contact_project_type">
                                                                                <option value="" selected>Select one…</option>
                                                                                <option value="brand-identity">Brand Identity</option>
                                                                                <option value="web-design">Web Design</option>
                                                                                <option value="web-development">Web Development</option>
                                                                                <option value="digital-product">Digital Product</option>
                                                                                <option value="creative-direction">Creative Direction</option>
                                                                                <option value="other">Other</option>
                                                                        </select>
                                                                </div>
                                                        </div>

                                                        <div class="nova-form-row">
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-budget">Budget range</label>
                                                                        <select class="nova-form-select" id="nova-contact-budget" name="nova_contact_budget">
                                                                                <option value="" selected>Select one…</option>
                                                                                <option value="25-50k">$25k - $50k</option>
                                                                                <option value="50-100k">$50k - $100k</option>
                                                                                <option value="100-250k">$100k - $250k</option>
                                                                                <option value="250k-plus">$250k+</option>
                                                                                <option value="not-sure">Not sure yet</option>
                                                                        </select>
                                                                </div>
                                                                <div class="nova-form-field">
                                                                        <label class="nova-form-label" for="nova-contact-timeline">Timeline</label>
                                                                        <select class="nova-form-select" id="nova-contact-timeline" name="nova_contact_timeline">
                                                                                <option value="" selected>Select one…</option>
                                                                                <option value="asap">ASAP - next 30 days</option>
                                                                                <option value="1-3m">1 - 3 months</option>
                                                                                <option value="3-6m">3 - 6 months</option>
                                                                                <option value="6m-plus">6+ months</option>
                                                                                <option value="flexible">Flexible</option>
                                                                        </select>
                                                                </div>
                                                        </div>

                                                        <div class="nova-form-field">
                                                                <label class="nova-form-label" for="nova-contact-message">Message</label>
                                                                <textarea class="nova-form-textarea" id="nova-contact-message" name="nova_contact_message" placeholder="Tell us about the project - who it's for, where you are today, and what success looks like."></textarea>
                                                        </div>

                                                        <button class="nova-form-submit" type="submit">
                                                                Send inquiry <span class="nova-arrow" aria-hidden="true">→</span>
                                                        </button>

                                                        <p class="nova-form-note">Demo form - connect a form plugin or the theme's front-forms feature.</p>
                                                </form>
                                                <!-- /wp:html -->

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

        <!-- === 03 - FAQ === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header - asymmetric columns -->
                        <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"top","width":"58%"} -->
                                <div class="wp-block-column" style="flex-basis:58%">
                                        <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Common questions</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600">Before you ask.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
                                <div class="wp-block-column" style="flex-basis:42%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"42ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;max-width:42ch">The questions we hear most often. If your situation doesn't fit neatly into these, the form above is the fastest way to get a real answer.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- FAQ list - bordered, reuses nova-service-list container class -->
                        <!-- wp:html -->
                        <dl class="nova-service-list">
                                <div style="display:grid;grid-template-columns:1fr;gap:0.75rem;padding:2.25rem 0;border-bottom:1px solid var(--wp--preset--color--line);">
                                        <dt style="display:flex;align-items:baseline;gap:1.5rem;flex-wrap:wrap;">
                                                <span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;color:var(--wp--preset--color--muted);">01</span>
                                                <span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.15;letter-spacing:-0.02em;color:var(--wp--preset--color--foreground);">How quickly do you respond?</span>
                                        </dt>
                                        <dd style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--wp--preset--color--muted);max-width:64ch;margin:0;">We read every inquiry ourselves and reply within two business days - usually with an honest read on fit, not a sales pitch. If we're not the right partner, we'll try to point you to someone who is.</dd>
                                </div>
                                <div style="display:grid;grid-template-columns:1fr;gap:0.75rem;padding:2.25rem 0;border-bottom:1px solid var(--wp--preset--color--line);">
                                        <dt style="display:flex;align-items:baseline;gap:1.5rem;flex-wrap:wrap;">
                                                <span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;color:var(--wp--preset--color--muted);">02</span>
                                                <span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.15;letter-spacing:-0.02em;color:var(--wp--preset--color--foreground);">What information should I include?</span>
                                        </dt>
                                        <dd style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--wp--preset--color--muted);max-width:64ch;margin:0;">The basics (who you are, what you're building), the context (where it's working, where it isn't), and your timeline. If you have a budget range, share it - it helps us shape a proposal that's realistic from the first draft.</dd>
                                </div>
                                <div style="display:grid;grid-template-columns:1fr;gap:0.75rem;padding:2.25rem 0;border-bottom:1px solid var(--wp--preset--color--line);">
                                        <dt style="display:flex;align-items:baseline;gap:1.5rem;flex-wrap:wrap;">
                                                <span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;color:var(--wp--preset--color--muted);">03</span>
                                                <span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.15;letter-spacing:-0.02em;color:var(--wp--preset--color--foreground);">Do you work with early-stage startups?</span>
                                        </dt>
                                        <dd style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--wp--preset--color--muted);max-width:64ch;margin:0;">Often. We've shipped for seed-stage founders and Series B teams alike. What matters more than stage is clarity of ambition and a team that's ready to move - if you're pre-revenue but sharp on the problem, we're happy to talk.</dd>
                                </div>
                                <div style="display:grid;grid-template-columns:1fr;gap:0.75rem;padding:2.25rem 0;border-bottom:1px solid var(--wp--preset--color--line);">
                                        <dt style="display:flex;align-items:baseline;gap:1.5rem;flex-wrap:wrap;">
                                                <span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;color:var(--wp--preset--color--muted);">04</span>
                                                <span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.15;letter-spacing:-0.02em;color:var(--wp--preset--color--foreground);">What's your typical engagement length?</span>
                                        </dt>
                                        <dd style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--wp--preset--color--muted);max-width:64ch;margin:0;">Most engagements run eight to sixteen weeks - short enough to stay focused, long enough to do the work properly. Brand strategy can be as tight as six weeks; a full product build can run four to six months. We work in one-week sprints with a Friday review.</dd>
                                </div>
                                <div style="display:grid;grid-template-columns:1fr;gap:0.75rem;padding:2.25rem 0;">
                                        <dt style="display:flex;align-items:baseline;gap:1.5rem;flex-wrap:wrap;">
                                                <span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.1em;color:var(--wp--preset--color--muted);">05</span>
                                                <span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.15;letter-spacing:-0.02em;color:var(--wp--preset--color--foreground);">Can you work with our in-house team?</span>
                                        </dt>
                                        <dd style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--wp--preset--color--muted);max-width:64ch;margin:0;">Yes - and we often prefer it. We can embed alongside your designers and engineers, hand off a complete system with documentation, or stay on as a long-term partner. Tell us how your team is structured and we'll shape the engagement around it.</dd>
                                </div>
                        </dl>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - FINAL CTA (dark, condensed) === -->
        <!-- wp:group {"tagName":"section","className":"nova-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group nova-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-nova-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-nova-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Prefer email?</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.0","letterSpacing":"-0.035em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.0;letter-spacing:-0.035em;font-weight:600">hello@novastudio.co</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                                <!-- wp:button {"style":{"border":{"radius":"2px"},"typography":{"fontSize":"0.9375rem","fontWeight":"500"},"color":{"background":"var:preset|color|accent","text":"var:preset|color|primary"}}} -->
                                <div class="wp-block-button"><a href="#nova-contact-form" class="wp-block-button__link has-accent-background-color has-background has-primary-color has-text-color wp-element-button has-custom-font-size" style="border-radius:2px;font-size:0.9375rem;font-weight:500">Start a Project →</a></div>
                                <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->


        <!-- Project proposal form -->
        <!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
        <section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:heading {"level":2} -->
                <h2 class="wp-block-heading">Start a Project</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
                <p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Tell us where you want to go. We'll bring the craft, the team and the momentum to get you there.</p>
                <!-- /wp:paragraph -->

                <!-- wp:shortcode -->
                [godevs_proposal_form]
                <!-- /wp:shortcode -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-nova","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
