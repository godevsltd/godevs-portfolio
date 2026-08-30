<?php
/**
 * Block style registration.
 *
 * @package GoDevs_Portfolio
 * @since   0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

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
}
add_action( 'init', 'godevs_portfolio_register_block_styles' );
