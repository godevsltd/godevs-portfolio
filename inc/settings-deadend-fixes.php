<?php
/**
 * Dead-End Settings Fixes — wires the 12 previously orphan settings to real
 * frontend consumers.
 *
 * Each function below consumes one setting that previously saved but had
 * no effect on the frontend. Together they close the gap between user
 * expectation (saving a setting changes the site) and reality (the setting
 * was dead).
 *
 * Settings covered:
 *   1.  brand_tagline      — inject into core/site-tagline block
 *   2.  type_scale         — generate --wp--custom--type-scale CSS var
 *   3.  global_spacing     — generate --wp--custom--spacing-scale CSS var
 *   4.  header_sticky      — toggle .site-header sticky class
 *   5.  header_cta_text    — inject CTA button into header (when set)
 *   6.  header_cta_link    — paired with header_cta_text
 *   7.  footer_copyright   — toggle copyright text in core/site-footer area
 *   8.  footer_social      — toggle social icons in footer
 *   9.  footer_cta         — toggle CTA strip in footer
 *  10.  services_show_cta  — toggle CTA block on services archive
 *  11.  motion_enabled     — conditionally enqueue reveal.js + transitions
 *  12.  reduced_motion      — force-disable all animations regardless of OS pref
 *
 * @package GoDevs_Portfolio
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ════════════════════════════════════════════════════════════════════════════
// 1. BRAND TAGLINE — override core/site-tagline block output
// ════════════════════════════════════════════════════════════════════════════

/**
 * Inject the custom brand_tagline into the core/site-tagline block.
 *
 * If the user has saved a custom brand_tagline (different from the default
 * get_bloginfo('description')), replace the rendered tagline text. If they
 * leave it empty, hide the tagline block entirely.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block        Block array.
 * @return string Modified content.
 */
function godevs_deadend_brand_tagline( string $block_content, array $block ): string {
        if ( 'core/site-tagline' !== $block['blockName'] ) {
                return $block_content;
        }
        $tagline = godevs_portfolio_get_setting( 'brand_tagline' );
        if ( '' === $tagline ) {
                // Empty tagline = hide the block entirely.
                return '';
        }
        $default = get_bloginfo( 'description' );
        if ( $tagline === $default ) {
                return $block_content;
        }
        // Replace the inner text with the custom tagline. The site-tagline
        // block renders as <p ...>tagline text</p>, so we preg-replace the
        // inner text safely (only the first match to avoid nested matches).
        return preg_replace(
                '/>([^<]*)<\/p>/',
                '>' . esc_html( $tagline ) . '</p>',
                $block_content,
                1
        );
}
add_filter( 'render_block', 'godevs_deadend_brand_tagline', 10, 2 );

// ════════════════════════════════════════════════════════════════════════════
// 2 & 3. TYPE_SCALE + GLOBAL_SPACING — emit CSS custom properties
// ════════════════════════════════════════════════════════════════════════════

/**
 * Append type-scale + global-spacing CSS variables to the dynamic CSS.
 *
 * type_scale: 'fluid' (default) | 'compact' | 'comfortable' | 'large'
 *   fluid       → clamp-based fluid typography (already the theme.json default)
 *   compact     → scale factor 0.92 (smaller headlines)
 *   comfortable → scale factor 1.0 (theme default)
 *   large       → scale factor 1.12 (bigger headlines)
 *
 * global_spacing: 'normal' (default) | 'compact' | 'comfortable' | 'spacious'
 *   normal      → 1.0 multiplier
 *   compact     → 0.85
 *   comfortable → 1.15
 *   spacious    → 1.35
 *
 * @param string $css Existing dynamic CSS.
 * @return string Modified CSS.
 */
function godevs_deadend_type_and_spacing_css( string $css ): string {
        // Type scale factor.
        $scale = godevs_portfolio_get_setting( 'type_scale' );
        $scale_map = array(
                'fluid'       => '1.0',  // No-op — fluid is handled by theme.json clamp().
                'compact'     => '0.92',
                'comfortable' => '1.0',
                'large'       => '1.12',
        );
        $scale_factor = $scale_map[ $scale ] ?? '1.0';

        // Global spacing multiplier.
        $spacing = godevs_portfolio_get_setting( 'global_spacing' );
        $spacing_map = array(
                'normal'      => '1.0',
                'compact'     => '0.85',
                'comfortable' => '1.15',
                'spacious'    => '1.35',
        );
        $spacing_factor = $spacing_map[ $spacing ] ?? '1.0';

        // Only emit CSS if either setting deviates from default — keeps the
        // generated CSS minimal when defaults are used.
        if ( '1.0' === $scale_factor && '1.0' === $spacing_factor ) {
                return $css;
        }

        $css .= ":root{";
        $css .= "--wp--custom--type-scale-factor:{$scale_factor};";
        $css .= "--wp--custom--spacing-scale-factor:{$spacing_factor};";
        $css .= "}";

        // Apply type-scale factor to headings.
        if ( '1.0' !== $scale_factor ) {
                $css .= "h1{font-size:calc(2.5rem * var(--wp--custom--type-scale-factor));}";
                $css .= "h2{font-size:calc(2rem * var(--wp--custom--type-scale-factor));}";
                $css .= "h3{font-size:calc(1.5rem * var(--wp--custom--type-scale-factor));}";
                $css .= "h4{font-size:calc(1.25rem * var(--wp--custom--type-scale-factor));}";
                $css .= "h5{font-size:calc(1.125rem * var(--wp--custom--type-scale-factor));}";
                $css .= "h6{font-size:calc(1rem * var(--wp--custom--type-scale-factor));}";
        }

        // Apply spacing factor to common spacing tokens.
        if ( '1.0' !== $spacing_factor ) {
                $css .= ".wp-block-post-content,.wp-block-group{";
                $css .= "--wp--style--block-gap:calc(2rem * var(--wp--custom--spacing-scale-factor));";
                $css .= "}";
                $css .= ".wp-block-columns{--wp--style--block-gap:calc(2rem * var(--wp--custom--spacing-scale-factor));}";
        }

        return $css;
}
add_filter( 'godevs_portfolio_dynamic_css', 'godevs_deadend_type_and_spacing_css' );

// ════════════════════════════════════════════════════════════════════════════
// 4. HEADER STICKY — toggle sticky class on .site-header
// ════════════════════════════════════════════════════════════════════════════

/**
 * Emit body class `godevs-header-sticky-off` when header_sticky is disabled.
 *
 * The frontend JS (reveal.js) normally adds .is-scrolled after 20px of scroll.
 * When the user has disabled sticky via the setting, we add a body class
 * that disables the position:sticky + transition via CSS override.
 *
 * @param array $classes Existing body classes.
 * @return array Modified classes.
 */
function godevs_deadend_header_sticky_body_class( array $classes ): array {
        if ( '1' !== godevs_portfolio_get_setting( 'header_sticky' ) ) {
                $classes[] = 'godevs-header-sticky-off';
        }
        return $classes;
}
add_filter( 'body_class', 'godevs_deadend_header_sticky_body_class' );

// ════════════════════════════════════════════════════════════════════════════
// 5 & 6. HEADER CTA TEXT + LINK — inject a CTA button into the header
// ════════════════════════════════════════════════════════════════════════════

/**
 * Inject a CTA button into core/site-title (the header brand block) area.
 *
 * When header_cta_text is non-empty AND header_cta_link is non-empty, we
 * append a `<a class="godevs-header-cta">` element to the header by hooking
 * into the core/navigation block render. This works for templates that use
 * the default core/navigation block in the header.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Block array.
 * @return string Modified content.
 */
function godevs_deadend_header_cta_inject( string $block_content, array $block ): string {
        if ( 'core/navigation' !== $block['blockName'] ) {
                return $block_content;
        }
        $text = godevs_portfolio_get_setting( 'header_cta_text' );
        $link = godevs_portfolio_get_setting( 'header_cta_link' );
        if ( '' === $text || '' === $link ) {
                return $block_content;
        }
        // Don't double-inject if a CTA already exists in the markup.
        if ( false !== strpos( $block_content, 'godevs-header-cta' ) ) {
                return $block_content;
        }
        $cta  = '<div class="godevs-header-cta-wrap">';
        $cta .= '<a class="godevs-header-cta wp-element-button" href="' . esc_url( $link ) . '">' . esc_html( $text ) . '</a>';
        $cta .= '</div>';
        // Append after the navigation's closing </ul> (last list item).
        return preg_replace(
                '/<\/ul>\s*<\/nav>/',
                '</ul>' . $cta . '</nav>',
                $block_content,
                1
        );
}
add_filter( 'render_block', 'godevs_deadend_header_cta_inject', 15, 2 );

// ════════════════════════════════════════════════════════════════════════════
// 7, 8 & 9. FOOTER COPYRIGHT / SOCIAL / CTA toggles
// ════════════════════════════════════════════════════════════════════════════

/**
 * Toggle visibility of footer elements based on settings.
 *
 * footer_copyright: '1' (default) shows copyright; '0' hides it.
 * footer_social:    '1' shows social icons block; '0' hides it.
 * footer_cta:       '0' (default) hides CTA strip; '1' shows it.
 *
 * Hooks into core/template-part rendering for 'footer' area. Uses CSS class
 * injection on the footer wrapper to hide/show elements without removing
 * them from the markup (keeps things revertable).
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Block array.
 * @return string Modified content.
 */
function godevs_deadend_footer_toggles( string $block_content, array $block ): string {
        if ( 'core/template-part' !== $block['blockName'] ) {
                return $block_content;
        }
        $slug = $block['attrs']['slug'] ?? '';
        if ( ! str_starts_with( $slug, 'footer' ) ) {
                return $block_content;
        }
        // Build a class list of disabled elements.
        $hide_classes = array();
        if ( '0' === godevs_portfolio_get_setting( 'footer_copyright' ) ) {
                $hide_classes[] = 'godevs-hide-copyright';
        }
        if ( '0' === godevs_portfolio_get_setting( 'footer_social' ) ) {
                $hide_classes[] = 'godevs-hide-social';
        }
        if ( '1' === godevs_portfolio_get_setting( 'footer_cta' ) ) {
                $hide_classes[] = 'godevs-show-footer-cta';
        }
        if ( empty( $hide_classes ) ) {
                return $block_content;
        }
        // Inject classes into the first <div> or <aside> wrapper.
        $class_str = implode( ' ', $hide_classes );
        return preg_replace(
                '/<div([^>]*)class="/',
                '<div$1class="' . esc_attr( $class_str ) . ' ',
                $block_content,
                1
        );
}
add_filter( 'render_block', 'godevs_deadend_footer_toggles', 12, 2 );

// ════════════════════════════════════════════════════════════════════════════
// 10. SERVICES SHOW CTA — toggle CTA on services archive
// ════════════════════════════════════════════════════════════════════════════

/**
 * Add body class for services archive CTA visibility.
 *
 * When services_show_cta is '0', add 'godevs-services-cta-off' body class.
 * The theme.css then hides the .godevs-services-cta element.
 *
 * @param array $classes Body classes.
 * @return array Modified.
 */
function godevs_deadend_services_cta_body_class( array $classes ): array {
        if ( is_post_type_archive( 'godevs_service' ) && '0' === godevs_portfolio_get_setting( 'services_show_cta' ) ) {
                $classes[] = 'godevs-services-cta-off';
        }
        return $classes;
}
add_filter( 'body_class', 'godevs_deadend_services_cta_body_class' );

// ════════════════════════════════════════════════════════════════════════════
// 11. MOTION_ENABLED — conditionally enqueue reveal.js + transitions
// ════════════════════════════════════════════════════════════════════════════

/**
 * Dequeue reveal.js when motion_enabled is '0'.
 *
 * Also adds a body class 'godevs-motion-off' that disables CSS transitions
 * on motion-dependent elements.
 *
 * @param string $handle Script handle.
 * @return bool True to keep, false to dequeue.
 */
function godevs_deadend_motion_filter_scripts( string $handle ): bool {
        if ( 'godevs-reveal' === $handle && '0' === godevs_portfolio_get_setting( 'motion_enabled' ) ) {
                wp_dequeue_script( $handle );
        }
        return true;
}
// Hook into wp_enqueue_scripts late so we can dequeue what was queued earlier.
add_action( 'wp_enqueue_scripts', function () {
        if ( '0' === godevs_portfolio_get_setting( 'motion_enabled' ) ) {
                wp_dequeue_script( 'godevs-reveal' );
        }
}, 99 );

/**
 * Add body class 'godevs-motion-off' when motion is disabled.
 *
 * @param array $classes Body classes.
 * @return array Modified.
 */
function godevs_deadend_motion_body_class( array $classes ): array {
        if ( '0' === godevs_portfolio_get_setting( 'motion_enabled' ) ) {
                $classes[] = 'godevs-motion-off';
        }
        return $classes;
}
add_filter( 'body_class', 'godevs_deadend_motion_body_class' );

// ════════════════════════════════════════════════════════════════════════════
// 12. REDUCED_MOTION — force-disable animations regardless of OS preference
// ════════════════════════════════════════════════════════════════════════════

/**
 * When reduced_motion setting is '1', force the body class
 * 'godevs-force-reduced-motion' that overrides prefers-reduced-motion.
 *
 * This lets the admin force-disable animations even for users who haven't
 * set the OS preference — useful for accessibility compliance.
 *
 * @param array $classes Body classes.
 * @return array Modified.
 */
function godevs_deadend_reduced_motion_body_class( array $classes ): array {
        if ( '1' === godevs_portfolio_get_setting( 'reduced_motion' ) ) {
                $classes[] = 'godevs-force-reduced-motion';
        }
        return $classes;
}
add_filter( 'body_class', 'godevs_deadend_reduced_motion_body_class' );
