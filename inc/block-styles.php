<?php
/**
 * Block style registration.
 *
 * CRITICAL FALLBACK: This file is one of the 3 files that the OLD version
 * of functions.php (v1.0.0–v1.1.0) loaded on EVERY request (not just admin).
 * We use this file as a fallback loader to pull in the CPT stack and demo
 * system even if the user is running an OLD functions.php that doesn't
 * include the require_once calls for those files.
 *
 * @package GoDevs_Portfolio
 * @since   0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ── FALLBACK LOADER ──────────────────────────────────────────────────────
// Load ALL inc/ content modules from here as a fallback. This ensures CPTs
// register on EVERY request (front-end + admin) even if the user is running
// an OLD version of functions.php that doesn't load these files.
// require_once guarantees no double-loading if functions.php also loads them.
$_godevs_bs_dir = get_template_directory() . '/inc';

$_godevs_bs_files = array(
        '/content/cpt.php',
        '/content/taxonomies.php',
        '/content/meta-fields.php',
        '/content/case-study.php',
        '/demo-registry.php',
        '/demo-tracker.php',
);

foreach ( $_godevs_bs_files as $_godevs_bs_rel ) {
        $_godevs_bs_full = $_godevs_bs_dir . $_godevs_bs_rel;
        if ( file_exists( $_godevs_bs_full ) ) {
                require_once $_godevs_bs_full;
        }
}

unset( $_godevs_bs_dir, $_godevs_bs_files, $_godevs_bs_rel, $_godevs_bs_full );

/**
 * Register custom block styles.
 *
 * Block styles are CSS class variations applied to a block. They appear in the
 * block toolbar's "Styles" panel and let users pick a visual variant without
 * altering the block's content or markup.
 *
 * The actual CSS for these styles lives in assets/css/theme.css. The class name
 * applied is `.is-style-<slug>`.
 *
 * @return void
 * @since 0.1.0
 */
function godevs_portfolio_register_block_styles(): void {
        // Button variants.
        register_block_style(
                'core/button',
                array(
                        'name'         => 'outline',
                        'label'        => __( 'Outline', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/button',
                array(
                        'name'         => 'text-link',
                        'label'        => __( 'Text Link', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/button',
                array(
                        'name'         => 'pill',
                        'label'        => __( 'Pill', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // Card variants (applied to core/group).
        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-default',
                        'label'        => __( 'Card Default', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-bordered',
                        'label'        => __( 'Card Bordered', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-elevated',
                        'label'        => __( 'Card Elevated', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-minimal',
                        'label'        => __( 'Card Minimal', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-editorial',
                        'label'        => __( 'Card Editorial', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-featured',
                        'label'        => __( 'Card Featured', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-numbered',
                        'label'        => __( 'Card Numbered', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // Separator variants.
        register_block_style(
                'core/separator',
                array(
                        'name'         => 'thin',
                        'label'        => __( 'Thin', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/separator',
                array(
                        'name'         => 'dots',
                        'label'        => __( 'Dots', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // Button — Arrow variant (text-link with directional affordance).
        register_block_style(
                'core/button',
                array(
                        'name'         => 'arrow',
                        'label'        => __( 'Arrow', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // Image variants.
        register_block_style(
                'core/image',
                array(
                        'name'         => 'rounded',
                        'label'        => __( 'Rounded', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/image',
                array(
                        'name'         => 'framed',
                        'label'        => __( 'Framed', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/image',
                array(
                        'name'         => 'soft',
                        'label'        => __( 'Soft', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/image',
                array(
                        'name'         => 'full-bleed',
                        'label'        => __( 'Full Bleed', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // Heading variants for editorial eyebrow captions.
        register_block_style(
                'core/paragraph',
                array(
                        'name'         => 'eyebrow',
                        'label'        => __( 'Eyebrow', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        // ═══ Modern card variants (v1.1.0) ═══
        // These have CSS in theme.css but were missing PHP registration.
        // Without registration, they don't appear in the editor's style picker.

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-pro',
                        'label'        => __( 'Card Pro', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-media',
                        'label'        => __( 'Card Media', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-overlay',
                        'label'        => __( 'Card Overlay', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-compact',
                        'label'        => __( 'Card Compact', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-accent',
                        'label'        => __( 'Card Accent', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-profile',
                        'label'        => __( 'Card Profile', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-quote',
                        'label'        => __( 'Card Quote', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );

        register_block_style(
                'core/group',
                array(
                        'name'         => 'card-stats',
                        'label'        => __( 'Card Stats', 'godevs-portfolio' ),
                        'is_default'   => false,
                )
        );
}
add_action( 'init', 'godevs_portfolio_register_block_styles' );
