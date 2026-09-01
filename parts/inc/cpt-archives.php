<?php
/**
 * CPT Archive Layout System.
 *
 * Dynamically generates the inner template of `core/post-template` blocks
 * on CPT archive pages, based on theme settings (layout type, column count,
 * display toggles). This bridges the gap between the Theme Settings UI and
 * the hard-coded archive templates.
 *
 * @package GoDevs_Portfolio
 * @since   2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Map CPT slugs to their settings prefixes.
 *
 * Each CPT has a settings prefix (e.g., 'portfolio_') that maps to the
 * theme settings keys for that CPT (e.g., portfolio_layout, portfolio_columns).
 *
 * @return array<string,string> Map of CPT slug → settings prefix.
 */
function godevs_cpt_archive_settings_map(): array {
        return array(
                'godevs_project'     => 'portfolio_',
                'godevs_service'     => 'services_',
                'godevs_team'        => 'team_',
                'godevs_testimonial' => 'testimonials_',
                'godevs_experience'  => 'experience_',
                'godevs_education'   => 'education_',
                'godevs_case_study'  => 'case_studies_',
        );
}

/**
 * Get the current CPT slug on an archive page.
 *
 * @return string|null CPT slug (e.g., 'godevs_project') or null if not on a CPT archive.
 */
function godevs_cpt_archive_get_current_type(): ?string {
        if ( is_post_type_archive() ) {
                return get_query_var( 'post_type' );
        }
        return null;
}

/**
 * Resolve a setting value for a CPT archive.
 *
 * @param string $cpt_slug CPT slug (e.g., 'godevs_project').
 * @param string $key      Setting key suffix (e.g., 'layout', 'columns').
 * @param mixed  $default  Default value if setting is not set.
 * @return mixed Setting value.
 */
function godevs_cpt_archive_setting( string $cpt_slug, string $key, $default = '' ) {
        $map      = godevs_cpt_archive_settings_map();
        $prefix   = $map[ $cpt_slug ] ?? '';
        if ( ! $prefix ) {
                return $default;
        }
        $full_key = $prefix . $key;
        $value    = godevs_portfolio_get_setting( $full_key );
        return '' !== $value ? $value : $default;
}

/**
 * Generate the inner block markup for a post-template block on a CPT archive.
 *
 * Reads the theme settings (layout, columns, display toggles) and generates
 * the correct WordPress block markup for the archive grid/list/timeline.
 *
 * @param string $cpt_slug CPT slug (e.g., 'godevs_project').
 * @return string Block markup for the post-template inner content.
 */
function godevs_cpt_archive_generate_inner_template( string $cpt_slug ): string {
        $layout  = godevs_cpt_archive_setting( $cpt_slug, 'layout', 'grid' );
        $columns = (int) godevs_cpt_archive_setting( $cpt_slug, 'columns', '3' );
        if ( $columns < 1 ) {
                $columns = 3;
        }

        // Dispatch to the CPT-specific generator.
        switch ( $cpt_slug ) {
                case 'godevs_project':
                        return godevs_cpt_archive_project_template( $layout, $columns );
                case 'godevs_service':
                        return godevs_cpt_archive_service_template( $layout, $columns );
                case 'godevs_team':
                        return godevs_cpt_archive_team_template( $layout, $columns );
                case 'godevs_testimonial':
                        return godevs_cpt_archive_testimonial_template( $layout, $columns );
                case 'godevs_experience':
                        return godevs_cpt_archive_experience_template( $layout );
                case 'godevs_education':
                        return godevs_cpt_archive_education_template( $layout );
                case 'godevs_case_study':
                        return godevs_cpt_archive_case_study_template( $layout, $columns );
                default:
                        return '';
        }
}

/**
 * Generate column wrapper markup.
 *
 * @param int    $columns Number of columns.
 * @param string $inner   Inner block markup.
 * @return string Wrapped markup.
 */
function godevs_cpt_archive_wrap_columns( int $columns, string $inner ): string {
        $col_class = "godevs-archive-grid-{$columns}col";
        return "<!-- wp:group {\"className\":\"{$col_class}\",\"layout\":{\"type\":\"default\"}} -->\n<div class=\"wp-block-group {$col_class}\">\n{$inner}\n</div>\n<!-- /wp:group -->";
}

/**
 * Project archive template generator.
 */
function godevs_cpt_archive_project_template( string $layout, int $columns ): string {
        $show_client = godevs_cpt_archive_setting( 'godevs_project', 'show_client', '1' );
        $show_year   = godevs_cpt_archive_setting( 'godevs_project', 'show_year', '1' );
        $show_type   = godevs_cpt_archive_setting( 'godevs_project', 'show_type', '1' );

        $card = '';
        $card .= '<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} /-->';
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->';
        $card .= '<div class="wp-block-group">';
        if ( $show_year === '1' || $show_client === '1' ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->';
                $card .= '<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">';
                $meta_parts = array();
                if ( $show_year === '1' ) $meta_parts[] = '<!-- wp:post-date {"format":"Y"} /-->';
                if ( $show_client === '1' ) $meta_parts[] = '<!-- wp:post-meta {"key":"_godevs_project_client"} /-->';
                $card .= implode( ' · ', $meta_parts );
                $card .= '</p>';
                $card .= '<!-- /wp:paragraph -->';
        }
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->';
        if ( $show_type === '1' ) {
                $card .= '<!-- wp:post-terms {"term":"category","prefix":"","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        }
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'list' ) {
                return $card;
        }
        return godevs_cpt_archive_wrap_columns( $columns, $card );
}

/**
 * Service archive template generator.
 */
function godevs_cpt_archive_service_template( string $layout, int $columns ): string {
        $show_price = godevs_cpt_archive_setting( 'godevs_service', 'show_price', '1' );

        $card = '';
        if ( $layout === 'numbered' ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","fontWeight":"600","color":"var:preset|color|accent"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-weight:600">01</p><!-- /wp:paragraph -->';
        }
        $card .= '<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->';
        $card .= '<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">';
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} /-->';
        $card .= '<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->';
        if ( $show_price === '1' ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)"><strong>Price:</strong> <!-- wp:post-meta {"key":"_godevs_service_price"} /--></p><!-- /wp:paragraph -->';
        }
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'list' ) {
                return $card;
        }
        return godevs_cpt_archive_wrap_columns( $columns, $card );
}

/**
 * Team archive template generator.
 */
function godevs_cpt_archive_team_template( string $layout, int $columns ): string {
        $show_social = godevs_cpt_archive_setting( 'godevs_team', 'show_social', '1' );
        $show_bio    = godevs_cpt_archive_setting( 'godevs_team', 'show_bio', '1' );

        $card = '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->';
        $card .= '<div class="wp-block-group">';
        $card .= '<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1/1","style":{"border":{"radius":"999px"}}} /-->';
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|medium","letterSpacing":"-0.01em"}}} /-->';
        $card .= '<!-- wp:post-meta {"key":"_godevs_team_job_title","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        if ( $show_bio === '1' ) {
                $card .= '<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->';
        }
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'list' ) {
                return $card;
        }
        return godevs_cpt_archive_wrap_columns( $columns, $card );
}

/**
 * Testimonial archive template generator.
 */
function godevs_cpt_archive_testimonial_template( string $layout, int $columns ): string {
        $show_avatar = godevs_cpt_archive_setting( 'godevs_testimonial', 'show_avatar', '1' );
        $show_rating = godevs_cpt_archive_setting( 'godevs_testimonial', 'show_rating', '1' );

        $card = '<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|40","blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->';
        $card .= '<div class="wp-block-group is-style-card-bordered" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">';
        if ( $show_rating === '1' ) {
                $card .= '<!-- wp:post-meta {"key":"_godevs_testimonial_rating","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} /-->';
        }
        $card .= '<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"var:preset|font-size|medium","lineHeight":"1.6"}}} /-->';
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->';
        $card .= '<div class="wp-block-group">';
        if ( $show_avatar === '1' ) {
                $card .= '<!-- wp:post-featured-image {"isLink":false,"aspectRatio":"1/1","style":{"border":{"radius":"999px"},"layout":{"selfStretch":"fit","flexSize":"48px"}}} /-->';
        }
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->';
        $card .= '<div class="wp-block-group">';
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} /-->';
        $card .= '<!-- wp:post-meta {"key":"_godevs_testimonial_client_role","style":{"typography":{"fontSize":"var:preset|font-size|x-small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'single' ) {
                // Single quote: full-width, centered, larger type.
                return '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":"var:preset|spacing|60","blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px"}} --><div class="wp-block-group alignwide">' . $card . '</div><!-- /wp:group -->';
        }
        return godevs_cpt_archive_wrap_columns( $columns, $card );
}

/**
 * Experience archive template generator.
 */
function godevs_cpt_archive_experience_template( string $layout ): string {
        $show_dates   = godevs_cpt_archive_setting( 'godevs_experience', 'show_dates', '1' );
        $show_company = godevs_cpt_archive_setting( 'godevs_experience', 'show_company', '1' );

        $card = '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->';
        $card .= '<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">';
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} --><div class="wp-block-group">';
        if ( $show_dates === '1' ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)"><strong>Start:</strong> <!-- wp:post-meta {"key":"_godevs_experience_start"} /--> · <strong>End:</strong> <!-- wp:post-meta {"key":"_godevs_experience_end"} /--></p><!-- /wp:paragraph -->';
        }
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->';
        if ( $show_company === '1' ) {
                $card .= '<!-- wp:post-meta {"key":"_godevs_experience_company","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        }
        $card .= '<!-- wp:post-meta {"key":"_godevs_experience_position","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        $card .= '</div><!-- /wp:group -->';
        $card .= '<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->';
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'grid' ) {
                return godevs_cpt_archive_wrap_columns( 2, $card );
        }
        return $card; // timeline / list both use full-width rows
}

/**
 * Education archive template generator.
 */
function godevs_cpt_archive_education_template( string $layout ): string {
        $show_dates       = godevs_cpt_archive_setting( 'godevs_education', 'show_dates', '1' );
        $show_institution = godevs_cpt_archive_setting( 'godevs_education', 'show_institution', '1' );

        $card = '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->';
        $card .= '<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">';
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} --><div class="wp-block-group">';
        if ( $show_dates === '1' ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)"><strong>Start:</strong> <!-- wp:post-meta {"key":"_godevs_education_start"} /--> · <strong>End:</strong> <!-- wp:post-meta {"key":"_godevs_education_end"} /--></p><!-- /wp:paragraph -->';
        }
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->';
        if ( $show_institution === '1' ) {
                $card .= '<!-- wp:post-meta {"key":"_godevs_education_institution","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        }
        $card .= '<!-- wp:post-meta {"key":"_godevs_education_degree","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} /-->';
        $card .= '</div><!-- /wp:group -->';
        $card .= '<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->';
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'grid' ) {
                return godevs_cpt_archive_wrap_columns( 2, $card );
        }
        return $card;
}

/**
 * Case study archive template generator.
 */
function godevs_cpt_archive_case_study_template( string $layout, int $columns ): string {
        $show_client  = godevs_cpt_archive_setting( 'godevs_case_study', 'show_client', '1' );
        $show_results = godevs_cpt_archive_setting( 'godevs_case_study', 'show_results', '1' );

        $card = '';
        $card .= '<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} /-->';
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->';
        $card .= '<div class="wp-block-group">';
        $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">';
        $meta_parts = array();
        if ( $show_client === '1' ) $meta_parts[] = '<!-- wp:post-meta {"key":"_godevs_cs_client"} /-->';
        $meta_parts[] = '<!-- wp:post-meta {"key":"_godevs_cs_year"} /-->';
        $card .= implode( ' · ', $meta_parts );
        $card .= '</p><!-- /wp:paragraph -->';
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->';
        if ( $show_results === '1' ) {
                $card .= '<!-- wp:post-meta {"key":"_godevs_cs_result_1","style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} /-->';
        }
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'list' ) {
                return $card;
        }
        if ( $layout === 'showcase' ) {
                // Showcase: 2-column with larger images.
                return godevs_cpt_archive_wrap_columns( 2, $card );
        }
        return godevs_cpt_archive_wrap_columns( $columns, $card );
}

/**
 * pre_render_block filter: Replace the inner blocks of `core/post-template`
 * on CPT archives with settings-aware markup BEFORE the loop runs.
 *
 * This is the correct WordPress pattern (vs the previous render_block filter
 * which destroyed the post loop context by re-rendering blocks outside the
 * loop). pre_render_block lets us swap the `innerBlocks` of the post-template
 * block, and WordPress core handles the per-post iteration correctly —
 * `wp:post-title`, `wp:post-featured-image`, etc. all resolve to the current
 * post in the loop.
 *
 * @param array|null $block The block array, or null to short-circuit rendering.
 * @param array      $parent_block The parent block (if any).
 * @return array|null Modified block array, or null to skip.
 */
function godevs_cpt_archive_pre_render_block( ?array $block, array $parent_block = array() ): ?array {
        if ( 'core/post-template' !== ( $block['blockName'] ?? '' ) ) {
                return $block;
        }

        $cpt = godevs_cpt_archive_get_current_type();
        if ( ! $cpt ) {
                return $block;
        }

        // Only intercept CPTs that have a settings map.
        $map = godevs_cpt_archive_settings_map();
        if ( ! isset( $map[ $cpt ] ) ) {
                return $block;
        }

        // Generate the settings-aware inner template (block markup).
        $inner = godevs_cpt_archive_generate_inner_template( $cpt );
        if ( '' === $inner ) {
                return $block;
        }

        // Parse our generated markup into block objects, then replace the
        // post-template's innerBlocks. WordPress core will iterate these inner
        // blocks once per post in the query, with the correct post context.
        $parsed_blocks = parse_blocks( $inner );

        // Normalize: parse_blocks() returns top-level block arrays. Filter out
        // null entries (which happen when there's whitespace between blocks).
        $clean_blocks = array();
        foreach ( $parsed_blocks as $b ) {
                if ( ! empty( $b['blockName'] ) ) {
                        $clean_blocks[] = $b;
                }
        }

        if ( empty( $clean_blocks ) ) {
                return $block;
        }

        // Replace the innerBlocks — this is what core/post-template iterates over.
        $block['innerBlocks'] = $clean_blocks;
        // Also update innerContent to match (null markers between blocks for block separators).
        $block['innerContent'] = array();
        foreach ( $clean_blocks as $i => $b ) {
                if ( $i > 0 ) {
                        $block['innerContent'][] = null; // block separator.
                }
                $block['innerContent'][] = serialize_block( $b );
        }

        return $block;
}
add_filter( 'pre_render_block', 'godevs_cpt_archive_pre_render_block', 10, 2 );

/**
 * Enqueue archive layout CSS (grid column counts).
 */
function godevs_cpt_archive_enqueue_styles(): void {
        if ( ! is_post_type_archive() ) {
                return;
        }
        $cpt = get_query_var( 'post_type' );
        $map = godevs_cpt_archive_settings_map();
        if ( ! isset( $map[ $cpt ] ) ) {
                return;
        }

        $columns = (int) godevs_cpt_archive_setting( $cpt, 'columns', '3' );
        if ( $columns < 1 ) {
                $columns = 3;
        }

        // Inline CSS for the grid column count.
        $css = sprintf(
                '.godevs-archive-grid-%dcol { display:grid; grid-template-columns:repeat(%d,1fr); gap:2rem; } @media(max-width:768px){ .godevs-archive-grid-%dcol { grid-template-columns:1fr; } }',
                $columns,
                $columns,
                $columns
        );
        wp_add_inline_style( 'godevs-portfolio-theme', $css );
}
add_action( 'wp_enqueue_scripts', 'godevs_cpt_archive_enqueue_styles', 20 );
