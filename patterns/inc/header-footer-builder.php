<?php
/**
 * Header & Footer Builder for GoDevs Portfolio.
 *
 * Provides a visual drag-and-drop builder for constructing custom headers
 * and footers. Stores layouts as JSON in wp_options. Renders to the front
 * end via wp_head/wp_footer hooks, falling back to template parts if no
 * custom layout is active.
 *
 * @package GoDevs_Portfolio
 * @since   2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Get all saved header/footer builder layouts.
 *
 * @return array Saved layouts keyed by type (header/footer) then by slug.
 */
function godevs_hf_get_layouts(): array {
        // Check for a transient override (used by the live preview AJAX endpoint).
        $preview = get_transient( 'godevs_hf_preview_layouts' );
        if ( is_array( $preview ) ) {
                return $preview;
        }

        $saved = get_option( 'godevs_hf_layouts', array() );
        if ( ! is_array( $saved ) ) {
                return array(
                        'header' => array(),
                        'footer' => array(),
                );
        }
        // Ensure both keys exist.
        if ( ! isset( $saved['header'] ) ) {
                $saved['header'] = array();
        }
        if ( ! isset( $saved['footer'] ) ) {
                $saved['footer'] = array();
        }
        return $saved;
}

/**
 * Get a single saved layout.
 *
 * @param string $type 'header' or 'footer'.
 * @param string $slug Layout slug.
 * @return array|null Layout data or null.
 */
function godevs_hf_get_layout( string $type, string $slug ): ?array {
        $layouts = godevs_hf_get_layouts();
        return $layouts[ $type ][ $slug ] ?? null;
}

/**
 * Save a layout.
 *
 * @param string $type 'header' or 'footer'.
 * @param string $slug Layout slug.
 * @param array  $data Layout data (rows, elements, settings).
 * @return bool True on success.
 */
function godevs_hf_save_layout( string $type, string $slug, array $data ): bool {
        $layouts = godevs_hf_get_layouts();
        $layouts[ $type ][ $slug ] = $data;
        return update_option( 'godevs_hf_layouts', $layouts, false );
}

/**
 * Delete a layout.
 *
 * @param string $type 'header' or 'footer'.
 * @param string $slug Layout slug.
 * @return bool True on success.
 */
function godevs_hf_delete_layout( string $type, string $slug ): bool {
        $layouts = godevs_hf_get_layouts();
        unset( $layouts[ $type ][ $slug ] );
        return update_option( 'godevs_hf_layouts', $layouts, false );
}

/**
 * Get the active header/footer layout slug.
 *
 * @param string $type 'header' or 'footer'.
 * @return string|null Active layout slug or null (use default template part).
 */
function godevs_hf_get_active( string $type ): ?string {
        return get_option( "godevs_hf_active_{$type}", null );
}

/**
 * Set the active header/footer layout.
 *
 * @param string $type 'header' or 'footer'.
 * @param string $slug Layout slug or empty to reset.
 * @return bool True on success.
 */
function godevs_hf_set_active( string $type, string $slug ): bool {
        return update_option( "godevs_hf_active_{$type}", $slug, false );
}

// ════════════════════════════════════════════════════════════════════════════
// ELEMENT DEFINITIONS
// ════════════════════════════════════════════════════════════════════════════

/**
 * Get available builder elements.
 *
 * @return array Element definitions.
 */
function godevs_hf_get_elements(): array {
        return array(
                // Branding
                'logo' => array(
                        'label'    => __( 'Site Logo', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-format-image',
                        'category' => 'branding',
                        'defaults' => array( 'width' => '120', 'retina' => '1' ),
                ),
                'site_title' => array(
                        'label'    => __( 'Site Title', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-editor-bold',
                        'category' => 'branding',
                        'defaults' => array( 'font_size' => '20', 'font_weight' => '700' ),
                ),
                'tagline' => array(
                        'label'    => __( 'Site Tagline', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-editor-quote',
                        'category' => 'branding',
                        'defaults' => array( 'font_size' => '13' ),
                ),

                // Navigation
                'nav_menu' => array(
                        'label'    => __( 'Navigation Menu', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-menu',
                        'category' => 'navigation',
                        'defaults' => array( 'menu_id' => '', 'depth' => '2', 'font_size' => '14', 'font_weight' => '500' ),
                ),

                // Actions
                'button' => array(
                        'label'    => __( 'Button', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-button',
                        'category' => 'actions',
                        'defaults' => array( 'text' => __( 'Get Started', 'godevs-portfolio' ), 'link' => '#', 'style' => 'primary', 'font_size' => '14' ),
                ),
                'search' => array(
                        'label'    => __( 'Search', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-search',
                        'category' => 'actions',
                        'defaults' => array( 'style' => 'icon' ),
                ),

                // Social
                'social_icons' => array(
                        'label'    => __( 'Social Icons', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-share',
                        'category' => 'social',
                        'defaults' => array( 'style' => 'icons', 'size' => '18' ),
                ),

                // Content
                'text' => array(
                        'label'    => __( 'Text', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-editor-textcolor',
                        'category' => 'content',
                        'defaults' => array( 'content' => __( 'Custom text', 'godevs-portfolio' ), 'font_size' => '14' ),
                ),
                'html' => array(
                        'label'    => __( 'HTML', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-editor-code',
                        'category' => 'content',
                        'defaults' => array( 'content' => '<p>' . esc_html__( 'Custom HTML', 'godevs-portfolio' ) . '</p>' ),
                ),
                'image' => array(
                        'label'    => __( 'Image', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-format-image',
                        'category' => 'content',
                        'defaults' => array( 'src' => '', 'alt' => '', 'width' => 'auto', 'height' => 'auto' ),
                ),

                // Footer-specific
                'copyright' => array(
                        'label'    => __( 'Copyright', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-media-text',
                        'category' => 'footer',
                        'defaults' => array( 'format' => '&copy; {year} {site_name}. All rights reserved.', 'font_size' => '13' ),
                ),
                'widget_area' => array(
                        'label'    => __( 'Widget Area', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-welcome-widgets-menus',
                        'category' => 'footer',
                        'defaults' => array( 'sidebar_id' => '' ),
                ),
                'newsletter' => array(
                        'label'    => __( 'Newsletter', 'godevs-portfolio' ),
                        'icon'     => 'dashicons-email-alt',
                        'category' => 'footer',
                        'defaults' => array( 'title' => __( 'Subscribe', 'godevs-portfolio' ), 'placeholder' => __( 'Your email', 'godevs-portfolio' ), 'button_text' => __( 'Subscribe', 'godevs-portfolio' ) ),
                ),
        );
}

/**
 * Get starter header templates.
 *
 * @return array Template definitions.
 */
function godevs_hf_get_header_templates(): array {
        return array(
                'minimal-dev' => array(
                        'label' => __( 'Minimal Developer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '30', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14', 'font_weight' => '500' ) ) ) ),
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'GitHub', 'link' => '#', 'style' => 'text' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '64', 'background' => '', 'sticky' => '1' ),
                                ),
                        ),
                ),
                'agency' => array(
                        'label' => __( 'Modern Agency', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14' ) ) ) ),
                                                array( 'width' => '25', 'elements' => array(
                                                        array( 'type' => 'search', 'settings' => array( 'style' => 'icon' ) ),
                                                        array( 'type' => 'button', 'settings' => array( 'text' => "Let's Talk", 'link' => '#contact', 'style' => 'primary' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '72', 'background' => '', 'sticky' => '1' ),
                                ),
                        ),
                ),
                'corporate' => array(
                        'label' => __( 'Corporate', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Contact us: hello@company.com', 'font_size' => '12' ) ),
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '14' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '36', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)', 'sticky' => '0' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14' ) ) ) ),
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'Get a Quote', 'link' => '#', 'style' => 'primary' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '72', 'background' => '', 'sticky' => '1' ),
                                ),
                        ),
                ),
                'transparent' => array(
                        'label' => __( 'Transparent Hero', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu' ) ) ),
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'Start', 'style' => 'outline' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '80', 'background' => 'transparent', 'text_color' => 'var(--wp--preset--color--contrast)', 'sticky' => '0' ),
                                ),
                        ),
                ),
                'split' => array(
                        'label' => __( 'Split Header', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13' ) ) ) ),
                                                array( 'width' => '60', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'Contact', 'style' => 'text' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '70', 'background' => '', 'sticky' => '0' ),
                                ),
                        ),
                ),
                // ═══ NEW v2.7.0 STARTER TEMPLATES ═══
                'editorial' => array(
                        'label' => __( 'Editorial Magazine', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'EST. 2024 — INDEPENDENT PUBLICATION', 'font_size' => '11', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '32', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)', 'sticky' => '0', 'padding_top' => '6', 'padding_bottom' => '6' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'site_title', 'settings' => array( 'font_size' => '28', 'font_weight' => '700', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '72', 'background' => '', 'sticky' => '0', 'padding_top' => '12', 'padding_bottom' => '12' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13', 'font_weight' => '600', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '48', 'background' => '', 'sticky' => '1', 'padding_top' => '8', 'padding_bottom' => '8' ),
                                ),
                        ),
                ),
                'dark-stack' => array(
                        'label' => __( 'Dark Stacked', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '34', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14', 'align' => 'center' ) ) ) ),
                                                array( 'width' => '33', 'elements' => array(
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '16' ) ),
                                                        array( 'type' => 'button', 'settings' => array( 'text' => 'Hire Me', 'link' => '#contact', 'style' => 'outline' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '80', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)', 'sticky' => '1' ),
                                ),
                        ),
                ),
                'search-hero' => array(
                        'label' => __( 'Search Hero', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14' ) ) ) ),
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'search', 'settings' => array( 'style' => 'expand' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '72', 'background' => '', 'sticky' => '1' ),
                                ),
                        ),
                ),
                'mega-nav' => array(
                        'label' => __( 'Mega Navigation', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '60', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14', 'font_weight' => '600' ) ) ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'search', 'settings' => array( 'style' => 'icon' ) ),
                                                        array( 'type' => 'button', 'settings' => array( 'text' => 'Get Started', 'link' => '#signup', 'style' => 'primary' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'height' => '76', 'background' => '', 'sticky' => '1', 'padding_top' => '12', 'padding_bottom' => '12' ),
                                ),
                        ),
                ),
                'sticky-cta' => array(
                        'label' => __( 'Sticky CTA Bar', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '40', 'elements' => array( array( 'type' => 'logo' ) ) ),
                                                array( 'width' => '40', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '14' ) ) ) ),
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'Book a Call', 'link' => '#contact', 'style' => 'primary' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '64', 'background' => '', 'sticky' => '1' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '70', 'elements' => array( array( 'type' => 'text', 'settings' => array( 'content' => '🎉 Limited-time offer: 20% off all services this month', 'font_size' => '13' ) ) ) ),
                                                array( 'width' => '30', 'elements' => array( array( 'type' => 'button', 'settings' => array( 'text' => 'Claim Offer', 'link' => '#offer', 'style' => 'text' ) ) ) ),
                                        ),
                                        'settings' => array( 'height' => '40', 'background' => 'var(--wp--preset--color--accent)', 'text_color' => 'var(--wp--preset--color--contrast)', 'sticky' => '0', 'padding_top' => '8', 'padding_bottom' => '8' ),
                                ),
                        ),
                ),
        );
}

/**
 * Get starter footer templates.
 *
 * @return array Template definitions.
 */
function godevs_hf_get_footer_templates(): array {
        return array(
                'minimal' => array(
                        'label' => __( 'Minimal Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'social_icons', 'settings' => array( 'size' => '16' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '40', 'padding_bottom' => '40', 'background' => 'var(--wp--preset--color--surface-muted)' ),
                                ),
                        ),
                ),
                'multi-column' => array(
                        'label' => __( 'Multi-Column Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '30', 'elements' => array(
                                                        array( 'type' => 'logo' ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'A modern portfolio theme for developers, designers, and agencies.', 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13' ) ) ) ),
                                                array( 'width' => '25', 'elements' => array( array( 'type' => 'text', 'settings' => array( 'content' => 'Berlin, Germany<br>hello@studio.com', 'font_size' => '13' ) ) ) ),
                                                array( 'width' => '25', 'elements' => array(
                                                        array( 'type' => 'social_icons' ),
                                                        array( 'type' => 'newsletter' ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '80', 'padding_bottom' => '40', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '12' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '20', 'padding_bottom' => '20', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                        ),
                ),
                'cta' => array(
                        'label' => __( 'CTA Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '70', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Ready to start your project?', 'font_size' => '24', 'font_weight' => '600' ) ),
                                                ) ),
                                                array( 'width' => '30', 'elements' => array(
                                                        array( 'type' => 'button', 'settings' => array( 'text' => "Let's Talk", 'style' => 'primary' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '60', 'padding_bottom' => '60', 'background' => 'var(--wp--preset--color--accent)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '24', 'padding_bottom' => '24', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                        ),
                ),
                'dark' => array(
                        'label' => __( 'Dark Developer Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '40', 'elements' => array(
                                                        array( 'type' => 'site_title', 'settings' => array( 'font_size' => '20', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Full-stack engineering and design systems.', 'font_size' => '13' ) ),
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '16' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13' ) ) ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Berlin, Germany', 'font_size' => '13' ) ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'hello@studio.com', 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'newsletter' ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '80', 'padding_bottom' => '40', 'background' => '#0a0a0a', 'text_color' => '#ffffff' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '20', 'padding_bottom' => '20', 'background' => '#050505', 'text_color' => '#6b7280' ),
                                ),
                        ),
                ),
                'social' => array(
                        'label' => __( 'Social-First Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '24' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '40', 'padding_bottom' => '40', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '16', 'padding_bottom' => '16', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                        ),
                ),
                // ═══ NEW v2.7.0 FOOTER TEMPLATES ═══
                'newsletter-focus' => array(
                        'label' => __( 'Newsletter Focus', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '60', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Subscribe to our newsletter', 'font_size' => '20', 'font_weight' => '600' ) ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Monthly insights on design, development, and the creative process. No spam.', 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '40', 'elements' => array(
                                                        array( 'type' => 'newsletter' ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '60', 'padding_bottom' => '60', 'background' => 'var(--wp--preset--color--surface-muted)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'logo' ), array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '34', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '12' ) ) ) ),
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'social_icons', 'settings' => array( 'size' => '14' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '24', 'padding_bottom' => '24', 'background' => '' ),
                                ),
                        ),
                ),
                'mega-footer' => array(
                        'label' => __( 'Mega Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '25', 'elements' => array(
                                                        array( 'type' => 'site_title', 'settings' => array( 'font_size' => '22', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Building thoughtful digital products since 2014.', 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Company', 'font_size' => '12', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Resources', 'font_size' => '12', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '15', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Contact', 'font_size' => '12', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'hello@studio.com<br>Berlin, DE', 'font_size' => '13' ) ),
                                                ) ),
                                                array( 'width' => '20', 'elements' => array(
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'Follow', 'font_size' => '12', 'font_weight' => '700' ) ),
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '16' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '80', 'padding_bottom' => '40', 'background' => 'var(--wp--preset--color--primary)', 'text_color' => 'var(--wp--preset--color--contrast)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'text', 'settings' => array( 'content' => 'Made with care in Berlin', 'font_size' => '12', 'align' => 'right' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '20', 'padding_bottom' => '20', 'background' => '#000000', 'text_color' => '#6b7280' ),
                                ),
                        ),
                ),
                'minimal-dark' => array(
                        'label' => __( 'Minimal Dark', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'site_title', 'settings' => array( 'font_size' => '18', 'font_weight' => '600', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '32', 'padding_bottom' => '24', 'background' => '#0a0a0a', 'text_color' => '#ffffff' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '18' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '0', 'padding_bottom' => '32', 'background' => '#0a0a0a', 'text_color' => '#ffffff' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '16', 'padding_bottom' => '16', 'background' => '#050505', 'text_color' => '#6b7280' ),
                                ),
                        ),
                ),
                'widgetized' => array(
                        'label' => __( 'Widgetized Footer', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'widget_area', 'settings' => array( 'sidebar_id' => 'godevs-hf-footer' ) ) ) ),
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'widget_area', 'settings' => array( 'sidebar_id' => 'godevs-hf-footer' ) ) ) ),
                                                array( 'width' => '34', 'elements' => array(
                                                        array( 'type' => 'logo' ),
                                                        array( 'type' => 'text', 'settings' => array( 'content' => 'A widgetized footer layout — drag widgets into the sidebars to populate these columns.', 'font_size' => '13' ) ),
                                                        array( 'type' => 'social_icons', 'settings' => array( 'size' => '14' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '60', 'padding_bottom' => '40', 'background' => 'var(--wp--preset--color--surface-muted)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '50', 'elements' => array( array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '12' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '20', 'padding_bottom' => '20', 'background' => '', 'text_color' => 'var(--wp--preset--color--muted)' ),
                                ),
                        ),
                ),
                'credit-row' => array(
                        'label' => __( 'Credit Row', 'godevs-portfolio' ),
                        'rows'  => array(
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'site_title', 'settings' => array( 'font_size' => '24', 'font_weight' => '700', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '48', 'padding_bottom' => '32', 'background' => '', 'text_color' => 'var(--wp--preset--color--text)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '100', 'elements' => array(
                                                        array( 'type' => 'nav_menu', 'settings' => array( 'font_size' => '13', 'align' => 'center' ) ),
                                                ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '0', 'padding_bottom' => '24', 'background' => '', 'text_color' => 'var(--wp--preset--color--text)' ),
                                ),
                                array(
                                        'columns' => array(
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'copyright' ) ) ),
                                                array( 'width' => '34', 'elements' => array( array( 'type' => 'social_icons', 'settings' => array( 'size' => '14' ) ) ) ),
                                                array( 'width' => '33', 'elements' => array( array( 'type' => 'text', 'settings' => array( 'content' => 'Designed & built by GoDevs', 'font_size' => '12', 'align' => 'right' ) ) ) ),
                                        ),
                                        'settings' => array( 'padding_top' => '20', 'padding_bottom' => '20', 'background' => 'var(--wp--preset--color--surface-muted)', 'text_color' => 'var(--wp--preset--color--muted)' ),
                                ),
                        ),
                ),
        );
}

// ════════════════════════════════════════════════════════════════════════════
// FRONT-END RENDERING
// ════════════════════════════════════════════════════════════════════════════

/**
 * Render a single builder element.
 *
 * @param array $element Element data (type, settings).
 * @return string HTML output.
 */
function godevs_hf_render_element( array $element ): string {
        $type     = $element['type'] ?? '';
        $settings = $element['settings'] ?? array();
        $elements = godevs_hf_get_elements();

        if ( ! isset( $elements[ $type ] ) ) {
                return '';
        }

        $defaults = $elements[ $type ]['defaults'] ?? array();
        $s        = array_merge( $defaults, $settings );

        $out = '';

        switch ( $type ) {
                case 'logo':
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo_url       = $custom_logo_id ? wp_get_attachment_image_url( $custom_logo_id, 'full' ) : '';
                        $width          = $s['width'] ?? '120';
                        if ( $logo_url ) {
                                $out = sprintf( '<a href="%s" class="godevs-hf-logo"><img src="%s" alt="%s" style="height:auto;width:%spx" /></a>', esc_url( home_url( '/' ) ), esc_url( $logo_url ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( $width ) );
                        } else {
                                $out = sprintf( '<a href="%s" class="godevs-hf-site-title" style="font-size:%spx;font-weight:%s;text-decoration:none;color:inherit">%s</a>', esc_url( home_url( '/' ) ), esc_attr( $s['font_size'] ?? '20' ), esc_attr( $s['font_weight'] ?? '700' ), esc_html( get_bloginfo( 'name' ) ) );
                        }
                        break;

                case 'site_title':
                        $out = sprintf( '<span class="godevs-hf-site-title" style="font-size:%spx;font-weight:%s">%s</span>', esc_attr( $s['font_size'] ?? '20' ), esc_attr( $s['font_weight'] ?? '700' ), esc_html( get_bloginfo( 'name' ) ) );
                        break;

                case 'tagline':
                        $out = sprintf( '<span class="godevs-hf-tagline" style="font-size:%spx">%s</span>', esc_attr( $s['font_size'] ?? '13' ), esc_html( get_bloginfo( 'description' ) ) );
                        break;

                case 'nav_menu':
                        $menu_id = $s['menu_id'] ?? '';
                        $locations = get_nav_menu_locations();
                        if ( $menu_id ) {
                                $menu = wp_get_nav_menu_object( $menu_id );
                        } elseif ( ! empty( $locations['primary'] ) ) {
                                $menu = wp_get_nav_menu_object( $locations['primary'] );
                        } else {
                                // No menu assigned to primary. Instead of blindly
                                // picking the first menu by term_id (which would
                                // show the OLDEST demo's pages), prefer the most
                                // recently created "— Navigation" menu (which is
                                // the menu the demo importer just created).
                                $all_menus = wp_get_nav_menus( array( 'orderby' => 'date' ) );
                                $menu      = null;
                                if ( ! empty( $all_menus ) && is_array( $all_menus ) ) {
                                        // wp_get_nav_menus returns terms; sort by term_id DESC (newest first).
                                        usort(
                                                $all_menus,
                                                static function ( $a, $b ) {
                                                        return (int) $b->term_id - (int) $a->term_id;
                                                }
                                        );
                                        foreach ( $all_menus as $candidate ) {
                                                if ( false !== strpos( $candidate->name, '— Navigation' ) ) {
                                                        $menu = $candidate;
                                                        break;
                                                }
                                        }
                                        // If no demo menu found, fall back to the newest menu.
                                        if ( ! $menu ) {
                                                $menu = $all_menus[0];
                                        }
                                }
                        }
                        if ( $menu ) {
                                $out = wp_nav_menu( array(
                                        'menu'        => $menu->slug,
                                        'container'   => false,
                                        'menu_class'  => 'godevs-hf-nav-menu',
                                        'echo'        => false,
                                        'depth'       => intval( $s['depth'] ?? 2 ),
                                        'fallback_cb' => false,
                                ) );
                                if ( ! $out ) {
                                        $out = '<ul class="godevs-hf-nav-menu"><li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li></ul>';
                                }
                        } else {
                                $out = '<ul class="godevs-hf-nav-menu"><li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li></ul>';
                        }
                        // Wrap with inline font sizing + mobile toggle button.
                        $fs = $s['font_size'] ?? '14';
                        $fw = $s['font_weight'] ?? '500';
                        $align = $s['align'] ?? '';
                        $align_style = $align ? ' justify-content:' . esc_attr( $align ) . ';' : '';
                        $out = '<div class="godevs-hf-nav-wrap is-mobile-collapsed" style="font-size:' . esc_attr( $fs ) . 'px;font-weight:' . esc_attr( $fw ) . ';' . $align_style . '">'
                                . '<button class="godevs-hf-mobile-toggle" aria-label="' . esc_attr__( 'Toggle menu', 'godevs-portfolio' ) . '" aria-expanded="false"><span></span></button>'
                                . $out
                                . '</div>';
                        break;

                case 'button':
                        $text  = $s['text'] ?? __( 'Get Started', 'godevs-portfolio' );
                        $link  = $s['link'] ?? '#';
                        $style = $s['style'] ?? 'primary';
                        $fs    = $s['font_size'] ?? '14';
                        $class = 'godevs-hf-button';
                        if ( 'outline' === $style ) {
                                $class .= ' is-style-outline';
                        } elseif ( 'text' === $style ) {
                                $class .= ' is-style-text-link';
                        }
                        $out = sprintf( '<a href="%s" class="%s" style="font-size:%spx">%s</a>', esc_url( $link ), esc_attr( $class ), esc_attr( $fs ), esc_html( $text ) );
                        break;

                case 'search':
                        $style = $s['style'] ?? 'icon';
                        if ( 'icon' === $style ) {
                                $out = '<button class="godevs-hf-search-icon" aria-label="' . esc_attr__( 'Search', 'godevs-portfolio' ) . '"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></button>';
                        } else {
                                $out = get_search_form( array( 'echo' => false ) );
                        }
                        break;

                case 'social_icons':
                        $size  = $s['size'] ?? '18';
                        $out   = '<div class="godevs-hf-social" style="font-size:' . esc_attr( $size ) . 'px">';
                        $out  .= '<a href="#" aria-label="Twitter"><svg width="' . esc_attr( $size ) . '" height="' . esc_attr( $size ) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>';
                        $out  .= '<a href="#" aria-label="GitHub"><svg width="' . esc_attr( $size ) . '" height="' . esc_attr( $size ) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg></a>';
                        $out  .= '<a href="#" aria-label="LinkedIn"><svg width="' . esc_attr( $size ) . '" height="' . esc_attr( $size ) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"/></svg></a>';
                        $out  .= '</div>';
                        break;

                case 'text':
                        $content = $s['content'] ?? '';
                        $fs      = $s['font_size'] ?? '14';
                        $fw      = $s['font_weight'] ?? '400';
                        $out     = sprintf( '<div class="godevs-hf-text" style="font-size:%spx;font-weight:%s">%s</div>', esc_attr( $fs ), esc_attr( $fw ), wp_kses_post( $content ) );
                        break;

                case 'html':
                        $content = $s['content'] ?? '';
                        $out     = sprintf( '<div class="godevs-hf-html">%s</div>', wp_kses_post( $content ) ); // phpcs:ignore — user-defined HTML in admin.
                        break;

                case 'image':
                        $src   = $s['src'] ?? '';
                        $alt   = $s['alt'] ?? '';
                        $width = $s['width'] ?? 'auto';
                        $out   = $src ? sprintf( '<img src="%s" alt="%s" style="width:%s" />', esc_url( $src ), esc_attr( $alt ), esc_attr( $width ) ) : '';
                        break;

                case 'copyright':
                        $format  = $s['format'] ?? '&copy; {year} {site_name}. All rights reserved.';
                        $fs      = $s['font_size'] ?? '13';
                        $year    = date( 'Y' );
                        $site    = get_bloginfo( 'name' );
                        $content = str_replace( array( '{year}', '{site_name}' ), array( $year, $site ), $format );
                        $out     = sprintf( '<div class="godevs-hf-copyright" style="font-size:%spx">%s</div>', esc_attr( $fs ), esc_html( $content ) );
                        break;

                case 'widget_area':
                        $sidebar_id = $s['sidebar_id'] ?? '';
                        if ( $sidebar_id && is_active_sidebar( $sidebar_id ) ) {
                                ob_start();
                                dynamic_sidebar( $sidebar_id );
                                $out = '<div class="godevs-hf-widgets">' . ob_get_clean() . '</div>';
                        }
                        break;

                case 'newsletter':
                        $title       = $s['title'] ?? __( 'Subscribe', 'godevs-portfolio' );
                        $placeholder = $s['placeholder'] ?? __( 'Your email', 'godevs-portfolio' );
                        $btn_text    = $s['button_text'] ?? __( 'Subscribe', 'godevs-portfolio' );
                        $out         = '<div class="godevs-hf-newsletter">';
                        if ( $title ) {
                                $out .= '<p class="godevs-hf-newsletter-title">' . esc_html( $title ) . '</p>';
                        }
                        $out .= '<form class="godevs-hf-newsletter-form" onsubmit="return false">';
                        $out .= '<input type="email" placeholder="' . esc_attr( $placeholder ) . '" />';
                        $out .= '<button type="submit">' . esc_html( $btn_text ) . '</button>';
                        $out .= '</form></div>';
                        break;
        }

        return $out;
}

/**
 * Render a builder layout (header or footer).
 *
 * @param string $type 'header' or 'footer'.
 * @return string HTML output.
 */
function godevs_hf_render_layout( string $type ): string {
        $active_slug = godevs_hf_get_active( $type );
        if ( ! $active_slug ) {
                return ''; // No custom layout — use template part.
        }

        $layout = godevs_hf_get_layout( $type, $active_slug );
        if ( ! $layout || empty( $layout['rows'] ) ) {
                return '';
        }

        $out = '';
        $tag = 'header' === $type ? 'header' : 'footer';
        $out .= '<' . $tag . ' class="godevs-hf-' . $type . ' godevs-hf-builder-output" role="banner">';

        foreach ( $layout['rows'] as $row ) {
                $settings  = $row['settings'] ?? array();
                $bg        = $settings['background'] ?? '';
                $text_col  = $settings['text_color'] ?? '';
                $padding_t = $settings['padding_top'] ?? ( $settings['height'] ?? '60' );
                $padding_b = $settings['padding_bottom'] ?? ( $settings['height'] ?? '60' );
                $sticky    = $settings['sticky'] ?? '0';

                $style_parts = array();
                if ( $bg && 'transparent' !== $bg ) {
                        $style_parts[] = 'background:' . $bg;
                }
                if ( $text_col ) {
                        $style_parts[] = 'color:' . $text_col;
                }
                $style_parts[] = 'padding-top:' . $padding_t . 'px';
                $style_parts[] = 'padding-bottom:' . $padding_b . 'px';

                $classes = 'godevs-hf-row';
                if ( '1' === $sticky ) {
                        $classes .= ' is-sticky';
                }
                // Auto-detect dark/light variant for proper contrast on nav/buttons.
                if ( $bg ) {
                        $is_dark = godevs_hf_is_dark_color( $bg );
                        $classes .= $is_dark ? ' is-dark' : ' is-light';
                }

                $out .= '<div class="' . esc_attr( $classes ) . '" style="' . esc_attr( implode( ';', $style_parts ) ) . '">';
                $out .= '<div class="godevs-hf-row-inner" style="max-width:var(--wp--style--root--wide-size,1280px);margin:0 auto;display:flex;gap:var(--wp--preset--spacing--40,2rem);align-items:center;justify-content:space-between">';

                foreach ( $row['columns'] as $col ) {
                        $width = $col['width'] ?? '33';

                        // Build responsive visibility data attributes for the column.
                        $col_attrs = '';
                        if ( isset( $col['visible_desktop'] ) && ! $col['visible_desktop'] ) {
                                $col_attrs .= ' data-hidden-desktop="1"';
                        }
                        if ( isset( $col['visible_tablet'] ) && ! $col['visible_tablet'] ) {
                                $col_attrs .= ' data-hidden-tablet="1"';
                        }
                        if ( isset( $col['visible_mobile'] ) && ! $col['visible_mobile'] ) {
                                $col_attrs .= ' data-hidden-mobile="1"';
                        }

                        $out .= '<div class="godevs-hf-col"' . $col_attrs . ' style="flex:0 0 ' . esc_attr( $width ) . '%;display:flex;align-items:center;gap:var(--wp--preset--spacing--20,1rem)">';
                        foreach ( $col['elements'] as $element ) {
                                $element_html = godevs_hf_render_element( $element );

                                // Build responsive visibility data attributes for the element.
                                $s = $element['settings'] ?? array();
                                $el_attrs = '';
                                if ( isset( $s['visible_desktop'] ) && ! $s['visible_desktop'] ) {
                                        $el_attrs .= ' data-hidden-desktop="1"';
                                }
                                if ( isset( $s['visible_tablet'] ) && ! $s['visible_tablet'] ) {
                                        $el_attrs .= ' data-hidden-tablet="1"';
                                }
                                if ( isset( $s['visible_mobile'] ) && ! $s['visible_mobile'] ) {
                                        $el_attrs .= ' data-hidden-mobile="1"';
                                }

                                // Wrap each element in a div with visibility attrs (if any).
                                if ( $el_attrs ) {
                                        $out .= '<div class="godevs-hf-element"' . $el_attrs . '>' . $element_html . '</div>';
                                } else {
                                        $out .= $element_html;
                                }
                        }
                        $out .= '</div>';
                }

                $out .= '</div></div>';
        }

        $out .= '</' . $tag . '>';
        return $out;
}

/**
 * Determine if a color value is "dark" (for auto-applying is-dark class).
 *
 * @param string $color CSS color value (hex, rgb, rgba, var, etc.).
 * @return bool True if the color is dark enough to need white text.
 */
function godevs_hf_is_dark_color( string $color ): bool {
        // Handle CSS variables — can't determine, assume not dark.
        if ( 0 === strpos( $color, 'var(' ) ) {
                // Check for known dark vars.
                return false !== strpos( $color, 'primary' ) || false !== strpos( $color, 'contrast' );
        }
        // Handle named colors.
        if ( 'transparent' === $color || '' === $color ) {
                return false;
        }
        // Parse hex color.
        if ( preg_match( '/^#?([a-f0-9]{3}|[a-f0-9]{6})$/i', $color, $m ) ) {
                $hex = $m[1];
                if ( 3 === strlen( $hex ) ) {
                        $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
                }
                $r = hexdec( substr( $hex, 0, 2 ) );
                $g = hexdec( substr( $hex, 2, 2 ) );
                $b = hexdec( substr( $hex, 4, 2 ) );
                // Relative luminance (sRGB).
                $luminance = ( 0.299 * $r + 0.587 * $g + 0.114 * $b ) / 255;
                return $luminance < 0.5;
        }
        // Parse rgb()/rgba().
        if ( preg_match( '/rgba?\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)/i', $color, $m ) ) {
                $r = (int) $m[1];
                $g = (int) $m[2];
                $b = (int) $m[3];
                $luminance = ( 0.299 * $r + 0.587 * $g + 0.114 * $b ) / 255;
                return $luminance < 0.5;
        }
        return false;
}

/**
 * Determine which layout is "active" for the current request.
 *
 * Resolution order (highest priority first):
 *   1. Per-post meta: `_godevs_page_header_layout` / `_godevs_page_footer_layout`
 *      set via the page-edit meta box. Value `'default'` means "use site-wide".
 *   2. Site-wide option: `godevs_hf_active_header` / `godevs_hf_active_footer`
 *      set via the Header/Footer Builder admin UI.
 *   3. None — fall back to the theme's default template-part.
 *
 * @param string $type 'header' or 'footer'.
 * @return string|null Active layout slug, or null if no layout is active
 *                     (the theme's default template-part should be used).
 * @since 2.4.0  Added per-post meta override.
 */
function godevs_hf_get_active_for_current_post( string $type ): ?string {
        // 1. Per-post override (only on singular views).
        if ( is_singular() ) {
                $post_id = get_queried_object_id();
                if ( $post_id ) {
                        $meta_key = "_godevs_page_{$type}_layout";
                        $meta_val = get_post_meta( $post_id, $meta_key, true );
                        if ( $meta_val && 'default' !== $meta_val ) {
                                // Verify the layout still exists.
                                $layouts = godevs_hf_get_layouts();
                                if ( isset( $layouts[ $type ][ $meta_val ] ) ) {
                                        return $meta_val;
                                }
                        }
                        // 'none' explicitly disables the builder for this page.
                        if ( 'none' === $meta_val ) {
                                return null;
                        }
                }
        }

        // 2. Fall back to the site-wide option.
        return godevs_hf_get_active( $type );
}

/**
 * Output custom header on wp_body_open — but ONLY when an active builder
 * layout exists. The default template-part is suppressed separately by
 * the `render_block` filter below (godevs_hf_suppress_default_template_part).
 */
function godevs_hf_output_header(): void {
        $slug = godevs_hf_get_active_for_current_post( 'header' );
        if ( ! $slug ) {
                return;
        }
        $html = godevs_hf_render_layout( 'header' );
        if ( $html ) {
                echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — rendered from sanitized builder data.
        }
}
add_action( 'wp_body_open', 'godevs_hf_output_header' );

/**
 * Output custom footer on wp_footer — but ONLY when an active builder
 * layout exists. The default template-part is suppressed separately by
 * the `render_block` filter below.
 */
function godevs_hf_output_footer(): void {
        $slug = godevs_hf_get_active_for_current_post( 'footer' );
        if ( ! $slug ) {
                return;
        }
        $html = godevs_hf_render_layout( 'footer' );
        if ( $html ) {
                echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — rendered from sanitized builder data.
        }
}
add_action( 'wp_footer', 'godevs_hf_output_footer' );

/**
 * Suppress the default `<!-- wp:template-part {"slug":"header"} /-->` and
 * `<!-- wp:template-part {"slug":"footer"} /-->` blocks when an active builder
 * layout exists for that type — otherwise both the builder-rendered header
 * AND the theme's default template-part would appear on screen.
 *
 * Also suppresses demo-pattern-embedded template-parts (e.g. `header-dark`,
 * `footer-minimal`) when a builder layout is active, so the builder always
 * wins on the front-end.
 *
 * @param string    $block_content The rendered block HTML.
 * @param array     $block         The block array.
 * @return string Empty string to suppress, or original content otherwise.
 * @since 2.4.0
 */
function godevs_hf_suppress_default_template_part( string $block_content, array $block ): string {
        if ( 'core/template-part' !== $block['blockName'] ) {
                return $block_content;
        }

        // Determine which area this template-part belongs to (header or footer).
        $slug = $block['attrs']['slug'] ?? '';
        if ( ! $slug ) {
                return $block_content;
        }

        // Heuristic: a template-part slug starting with `header` belongs to the
        // header area; one starting with `footer` belongs to the footer area.
        // This catches `header`, `header-dark`, `header-minimal`, etc.
        $type = null;
        if ( 0 === strpos( $slug, 'header' ) ) {
                $type = 'header';
        } elseif ( 0 === strpos( $slug, 'footer' ) ) {
                $type = 'footer';
        } else {
                return $block_content;
        }

        // If a builder layout is active for this area (either per-post or site-wide),
        // suppress the default template-part — the builder's HTML was already
        // echoed on wp_body_open / wp_footer.
        if ( godevs_hf_get_active_for_current_post( $type ) ) {
                return '';
        }

        return $block_content;
}
add_filter( 'render_block', 'godevs_hf_suppress_default_template_part', 10, 2 );

// ════════════════════════════════════════════════════════════════════════════
// AJAX ENDPOINTS
// ════════════════════════════════════════════════════════════════════════════

function godevs_hf_ajax_save_layout(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : '';
        $slug = isset( $_POST['layout_slug'] ) ? sanitize_key( wp_unslash( $_POST['layout_slug'] ) ) : '';
        $data = isset( $_POST['layout_data'] ) ? json_decode( wp_unslash( $_POST['layout_data'] ), true ) : array();

        if ( ! in_array( $type, array( 'header', 'footer' ), true ) || ! $slug ) {
                wp_send_json_error( array( 'message' => __( 'Invalid layout.', 'godevs-portfolio' ) ), 400 );
        }

        // Basic sanitization.
        $data['label'] = isset( $data['label'] ) ? sanitize_text_field( $data['label'] ) : $slug;
        $data['rows']  = $data['rows'] ?? array();

        godevs_hf_save_layout( $type, $slug, $data );

        wp_send_json_success( array( 'message' => __( 'Layout saved.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_hf_save_layout', 'godevs_hf_ajax_save_layout' );

function godevs_hf_ajax_delete_layout(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : '';
        $slug = isset( $_POST['layout_slug'] ) ? sanitize_key( wp_unslash( $_POST['layout_slug'] ) ) : '';

        if ( ! $type || ! $slug ) {
                wp_send_json_error( array( 'message' => __( 'Invalid layout.', 'godevs-portfolio' ) ), 400 );
        }

        godevs_hf_delete_layout( $type, $slug );

        // Clear active if this was active.
        if ( godevs_hf_get_active( $type ) === $slug ) {
                godevs_hf_set_active( $type, '' );
        }

        wp_send_json_success( array( 'message' => __( 'Layout deleted.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_hf_delete_layout', 'godevs_hf_ajax_delete_layout' );

function godevs_hf_ajax_set_active(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : '';
        $slug = isset( $_POST['layout_slug'] ) ? sanitize_key( wp_unslash( $_POST['layout_slug'] ) ) : '';

        if ( ! in_array( $type, array( 'header', 'footer' ), true ) ) {
                wp_send_json_error( array( 'message' => __( 'Invalid type.', 'godevs-portfolio' ) ), 400 );
        }

        godevs_hf_set_active( $type, $slug );

        wp_send_json_success( array( 'message' => __( 'Active layout updated.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_hf_set_active', 'godevs_hf_ajax_set_active' );

function godevs_hf_ajax_get_layouts(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : '';

        $layouts = godevs_hf_get_layouts();
        $data    = $type ? ( $layouts[ $type ] ?? array() ) : $layouts;
        $active  = $type ? godevs_hf_get_active( $type ) : null;
        $templates = $type ? ( 'header' === $type ? godevs_hf_get_header_templates() : godevs_hf_get_footer_templates() ) : array();

        wp_send_json_success( array(
                'layouts'   => $data,
                'active'    => $active,
                'templates' => $templates,
                'elements'  => godevs_hf_get_elements(),
        ) );
}
add_action( 'wp_ajax_godevs_hf_get_layouts', 'godevs_hf_ajax_get_layouts' );

/**
 * AJAX endpoint: Render a live preview of the full layout as HTML.
 *
 * Used by the admin builder canvas to show a real-time preview of the
 * header/footer as the user edits. Returns rendered HTML that the JS
 * injects into the canvas container.
 *
 * @since 3.0.0
 */
function godevs_hf_ajax_render_preview(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : 'header';
        $layout_data = isset( $_POST['layout_data'] ) ? json_decode( wp_unslash( $_POST['layout_data'] ), true ) : array();

        if ( ! is_array( $layout_data ) || empty( $layout_data['rows'] ) ) {
                wp_send_json_error( array( 'message' => __( 'Invalid layout data.', 'godevs-portfolio' ) ), 400 );
        }

        // Temporarily save the layout so we can use the existing renderer.
        // We use a transient to avoid polluting the actual options.
        $temp_slug = '_preview_' . $type;
        $layouts = godevs_hf_get_layouts();
        if ( ! isset( $layouts[ $type ] ) ) {
                $layouts[ $type ] = array();
        }
        $layouts[ $type ][ $temp_slug ] = $layout_data;
        set_transient( 'godevs_hf_preview_layouts', $layouts, 60 );

        // Override the active layout to our temp slug.
        $original_active = godevs_hf_get_active( $type );
        godevs_hf_set_active( $type, $temp_slug );

        // Render.
        $html = godevs_hf_render_layout( $type );

        // Restore the original active layout.
        godevs_hf_set_active( $type, $original_active ?: '' );

        // Clean up the transient.
        delete_transient( 'godevs_hf_preview_layouts' );

        if ( ! $html ) {
                wp_send_json_error( array( 'message' => __( 'Could not render preview.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success( array( 'html' => $html ) );
}
add_action( 'wp_ajax_godevs_hf_render_preview', 'godevs_hf_ajax_render_preview' );

// ════════════════════════════════════════════════════════════════════════════
// BUILDER CSS
// ════════════════════════════════════════════════════════════════════════════

function godevs_hf_enqueue_css(): void {
        if ( is_admin() ) {
                return;
        }
        $css = get_template_directory() . '/assets/css/header-footer-builder.css';
        if ( file_exists( $css ) ) {
                wp_enqueue_style( 'godevs-hf-builder', get_template_directory_uri() . '/assets/css/header-footer-builder.css', array(), (string) filemtime( $css ) );
        }

        // Enqueue front-end JS for mobile hamburger menu + sticky scroll shadow.
        $js = get_template_directory() . '/assets/js/hf-frontend.js';
        if ( file_exists( $js ) ) {
                wp_enqueue_script( 'godevs-hf-frontend', get_template_directory_uri() . '/assets/js/hf-frontend.js', array(), (string) filemtime( $js ), true );
        }
}
add_action( 'wp_enqueue_scripts', 'godevs_hf_enqueue_css' );

// ════════════════════════════════════════════════════════════════════════════
// REGISTER SIDEBARS FOR WIDGET AREAS
// ════════════════════════════════════════════════════════════════════════════

function godevs_hf_register_sidebars(): void {
        register_sidebar( array(
                'name'          => __( 'Header Widget Area', 'godevs-portfolio' ),
                'id'            => 'godevs-hf-header',
                'description'   => __( 'Widgets placed here appear in the Header Builder widget area.', 'godevs-portfolio' ),
                'before_widget' => '<div class="godevs-hf-widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="godevs-hf-widget-title">',
                'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
                'name'          => __( 'Footer Widget Area', 'godevs-portfolio' ),
                'id'            => 'godevs-hf-footer',
                'description'   => __( 'Widgets placed here appear in the Footer Builder widget area.', 'godevs-portfolio' ),
                'before_widget' => '<div class="godevs-hf-widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="godevs-hf-widget-title">',
                'after_title'   => '</h4>',
        ) );
}
add_action( 'widgets_init', 'godevs_hf_register_sidebars' );

// ════════════════════════════════════════════════════════════════════════════
// SVG PREVIEW MINIATURES (UX-C)
// ════════════════════════════════════════════════════════════════════════════

/**
 * Generate an SVG miniature of a starter template based on its row/column
 * structure. Each element is rendered as a small colored block that
 * communicates its type at a glance.
 *
 * Element icons (mini 4×4 to 8×8 blocks):
 *   - logo          → square (gradient brand mark)
 *   - site_title    → 2-line text bars
 *   - tagline       → 1-line text bar (thinner)
 *   - nav_menu      → 3 short text bars
 *   - button        → rounded pill (accent color)
 *   - search        → circle (search icon)
 *   - social_icons  → 3 small circles
 *   - text          → 1-line text bar
 *   - html          → bracketed text block
 *   - image        → rectangle with mountain icon
 *   - copyright     → "©" text block
 *   - widget_area   → vertical stack of bars
 *
 * @param array  $template Template definition (label + rows).
 * @param string $type     'header' or 'footer'.
 * @return string Inline SVG markup.
 */
function godevs_hf_render_template_miniature( array $template, string $type = 'header' ): string {
        $rows = $template['rows'] ?? array();
        if ( empty( $rows ) ) {
                return '<div class="godevs-hf-miniature-empty">' . esc_html__( 'Empty layout', 'godevs-portfolio' ) . '</div>';
        }

        // Compute total miniature height based on row count.
        $row_count = count( $rows );
        $row_h = 28; // each row in miniature
        $gap = 4;
        $total_h = ( $row_h * $row_count ) + ( $gap * ( $row_count - 1 ) );
        $w = 240;

        $svg = '<svg viewBox="0 0 ' . $w . ' ' . $total_h . '" xmlns="http://www.w3.org/2000/svg" class="godevs-hf-miniature-svg" preserveAspectRatio="xMidYMid meet" aria-hidden="true">';

        // Background.
        $svg .= '<rect width="' . $w . '" height="' . $total_h . '" fill="#fafafa"/>';

        $y = 0;
        foreach ( $rows as $row ) {
                $row_settings = $row['settings'] ?? array();
                $bg = isset( $row_settings['background'] ) && $row_settings['background']
                        ? 'fill="' . esc_attr( $row_settings['background'] ) . '"'
                        : 'fill="#ffffff"';
                // For dark backgrounds (var(--wp--preset--color--primary)), use a dark gray.
                if ( false !== strpos( $bg, 'preset--color--primary' ) || false !== strpos( $bg, 'preset--color--accent' ) ) {
                        $bg = 'fill="#1a1a1a"';
                }

                $svg .= '<rect x="0" y="' . $y . '" width="' . $w . '" height="' . $row_h . '" ' . $bg . '/>';

                // Render each column.
                $x_offset = 8;
                $columns = $row['columns'] ?? array();
                foreach ( $columns as $col ) {
                        $col_w = (int) ( ( (int) $col['width'] / 100 ) * ( $w - 16 ) );
                        $elements = $col['elements'] ?? array();
                        $element_x = $x_offset;
                        foreach ( $elements as $el ) {
                                $el_svg = godevs_hf_render_element_miniature( $el, $element_x, $y + 6, $row_h - 12 );
                                $svg .= $el_svg;
                                // Advance x by element width + gap.
                                $element_x += 30;
                        }
                        $x_offset += $col_w;
                }

                $y += $row_h + $gap;
        }

        $svg .= '</svg>';
        return $svg;
}

/**
 * Render a single element as inline SVG fragment.
 *
 * @param array $el     Element definition with 'type' and optional 'settings'.
 * @param int   $x      Top-left X.
 * @param int   $y      Top-left Y.
 * @param int   $h      Available height.
 * @return string SVG fragment.
 */
function godevs_hf_render_element_miniature( array $el, int $x, int $y, int $h ): string {
        $type = $el['type'] ?? 'text';
        $accent = '#2563EB';
        $muted = '#9ca3af';

        switch ( $type ) {
                case 'logo':
                        // Square gradient brand mark.
                        return '<defs><linearGradient id="g' . $x . $y . '" x1="0%" y1="0%" x2="100%" y2="100%">' .
                                '<stop offset="0%" stop-color="#2563EB"/><stop offset="100%" stop-color="#1d4ed8"/>' .
                                '</linearGradient></defs>' .
                                '<rect x="' . $x . '" y="' . $y . '" width="' . ( $h - 2 ) . '" height="' . ( $h - 2 ) . '" rx="4" fill="url(#g' . $x . $y . ')"/>';

                case 'site_title':
                        // 2-line text bars (logo-size).
                        return '<rect x="' . $x . '" y="' . ( $y + 2 ) . '" width="' . ( $h * 1.4 ) . '" height="4" rx="2" fill="#1d2327"/>' .
                                '<rect x="' . $x . '" y="' . ( $y + 10 ) . '" width="' . ( $h * 0.9 ) . '" height="3" rx="1.5" fill="#50575e"/>';

                case 'tagline':
                        // 1-line thin bar.
                        return '<rect x="' . $x . '" y="' . ( $y + 4 ) . '" width="' . ( $h * 0.7 ) . '" height="3" rx="1.5" fill="#8c8f94"/>';

                case 'nav_menu':
                        // 3-4 short text bars.
                        $bar_w = 14;
                        $gap = 4;
                        $out = '';
                        for ( $i = 0; $i < 4; $i++ ) {
                                $bx = $x + ( $i * ( $bar_w + $gap ) );
                                $out .= '<rect x="' . $bx . '" y="' . ( $y + ( $h / 2 ) - 2 ) . '" width="' . $bar_w . '" height="3" rx="1.5" fill="#1d2327"/>';
                        }
                        return $out;

                case 'button':
                        // Pill-shaped accent button.
                        return '<rect x="' . $x . '" y="' . $y . '" width="' . ( $h * 1.6 ) . '" height="' . $h . '" rx="' . ( $h / 2 ) . '" fill="' . $accent . '"/>';

                case 'search':
                        // Circle with a stem (search icon).
                        $cx = $x + ( $h / 2 );
                        $cy = $y + ( $h / 2 );
                        $r = ( $h / 2 ) - 2;
                        return '<circle cx="' . $cx . '" cy="' . $cy . '" r="' . $r . '" stroke="#1d2327" stroke-width="1.5" fill="none"/>' .
                                '<line x1="' . ( $cx + $r - 2 ) . '" y1="' . ( $cy + $r - 2 ) . '" x2="' . ( $cx + $r + 3 ) . '" y2="' . ( $cy + $r + 3 ) . '" stroke="#1d2327" stroke-width="1.5"/>';

                case 'social_icons':
                        // 3 small circles.
                        $out = '';
                        $sz = 6;
                        $gap = 4;
                        for ( $i = 0; $i < 3; $i++ ) {
                                $cx = $x + ( $i * ( $sz + $gap ) ) + ( $sz / 2 );
                                $cy = $y + ( $h / 2 );
                                $out .= '<circle cx="' . $cx . '" cy="' . $cy . '" r="' . ( $sz / 2 ) . '" fill="#1d2327"/>';
                        }
                        return $out;

                case 'text':
                        // 1-line text bar.
                        return '<rect x="' . $x . '" y="' . ( $y + ( $h / 2 ) - 2 ) . '" width="' . ( $h * 1.2 ) . '" height="3" rx="1.5" fill="#50575e"/>';

                case 'image':
                        // Rect with mountain.
                        return '<rect x="' . $x . '" y="' . $y . '" width="' . ( $h * 1.4 ) . '" height="' . $h . '" rx="3" fill="#f0f0f1" stroke="#dcdcde"/>' .
                                '<path d="M ' . ( $x + 3 ) . ' ' . ( $y + $h - 4 ) . ' L ' . ( $x + ( $h * 0.5 ) ) . ' ' . ( $y + ( $h * 0.4 ) ) . ' L ' . ( $x + ( $h * 0.8 ) ) . ' ' . ( $y + $h - 4 ) . ' Z" fill="#9ca3af"/>';

                case 'copyright':
                        // "©" text + bar.
                        return '<rect x="' . $x . '" y="' . ( $y + ( $h / 2 ) - 2 ) . '" width="' . ( $h * 1.5 ) . '" height="3" rx="1.5" fill="#8c8f94"/>';

                case 'widget_area':
                        // Stack of 3 bars (different widths).
                        return '<rect x="' . $x . '" y="' . $y . '" width="' . ( $h * 1.4 ) . '" height="3" rx="1.5" fill="#50575e"/>' .
                                '<rect x="' . $x . '" y="' . ( $y + 6 ) . '" width="' . ( $h * 1.1 ) . '" height="3" rx="1.5" fill="#50575e"/>' .
                                '<rect x="' . $x . '" y="' . ( $y + 12 ) . '" width="' . ( $h * 1.3 ) . '" height="3" rx="1.5" fill="#50575e"/>';

                case 'html':
                default:
                        // Bracketed block.
                        return '<rect x="' . $x . '" y="' . $y . '" width="' . ( $h * 1.4 ) . '" height="' . $h . '" rx="2" fill="none" stroke="#8c8f94" stroke-width="1" stroke-dasharray="3 2"/>';
        }
}

/**
 * AJAX endpoint: Get all starter templates with miniature SVGs.
 *
 * Returns each template's label, slug, miniature SVG, and active state.
 *
 * @return void
 */
function godevs_hf_ajax_get_template_miniatures(): void {
        check_ajax_referer( 'godevs_settings_save', 'nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }
        $type = isset( $_POST['layout_type'] ) ? sanitize_key( wp_unslash( $_POST['layout_type'] ) ) : 'header';
        $templates = 'header' === $type ? godevs_hf_get_header_templates() : godevs_hf_get_footer_templates();
        $active = godevs_hf_get_active( $type );

        $out = array();
        foreach ( $templates as $slug => $tpl ) {
                $out[] = array(
                        'slug'      => $slug,
                        'label'     => $tpl['label'],
                        'isActive'  => ( $active === $slug ),
                        'miniature' => godevs_hf_render_template_miniature( $tpl, $type ),
                );
        }
        wp_send_json_success( array( 'templates' => $out, 'active' => $active ) );
}
add_action( 'wp_ajax_godevs_hf_get_miniatures', 'godevs_hf_ajax_get_template_miniatures' );
