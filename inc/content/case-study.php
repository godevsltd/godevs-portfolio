<?php
/**
 * Case Study CPT, taxonomies, meta fields, and meta box UI for GoDevs Portfolio.
 *
 * Registers:
 *   - godevs_case_study  (Case Study CPT)
 *   - godevs_case_study_type (taxonomy — hierarchical)
 *   - godevs_case_study_industry (taxonomy — hierarchical)
 *   - godevs_case_study_technology (taxonomy — flat)
 *
 * Meta fields with a professional admin meta-box UI grouped into:
 *   - Project Information
 *   - Case Study Details
 *   - Results
 *   - Links
 *
 * @package GoDevs_Portfolio
 * @since   0.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ── CPT Registration ──────────────────────────────────────────

/**
 * Register the Case Study CPT.
 *
 * @return void
 */
function godevs_portfolio_register_case_study_cpt(): void {
        if ( ! godevs_portfolio_module_enabled( 'case_studies' ) ) {
                return;
        }

        register_post_type(
                'godevs_case_study',
                array(
                        'labels'              => array(
                                'name'               => __( 'Case Studies', 'godevs-portfolio' ),
                                'singular_name'      => __( 'Case Study', 'godevs-portfolio' ),
                                'add_new'            => __( 'Add New Case Study', 'godevs-portfolio' ),
                                'add_new_item'       => __( 'Add New Case Study', 'godevs-portfolio' ),
                                'edit_item'          => __( 'Edit Case Study', 'godevs-portfolio' ),
                                'new_item'           => __( 'New Case Study', 'godevs-portfolio' ),
                                'view_item'          => __( 'View Case Study', 'godevs-portfolio' ),
                                'search_items'       => __( 'Search Case Studies', 'godevs-portfolio' ),
                                'not_found'          => __( 'No case studies found.', 'godevs-portfolio' ),
                                'not_found_in_trash' => __( 'No case studies found in trash.', 'godevs-portfolio' ),
                                'all_items'          => __( 'All Case Studies', 'godevs-portfolio' ),
                                'menu_name'          => __( 'Case Studies', 'godevs-portfolio' ),
                        ),
                        'public'              => true,
                        'has_archive'         => true,
                        'show_in_rest'        => true,
                        'show_in_menu'        => true,
                        'menu_position'       => 13,
                        'menu_icon'           => 'dashicons-portfolio',
                        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'custom-fields' ),
                        'rewrite'             => array( 'slug' => 'case-studies' ),
                        'hierarchical'        => false,
                )
        );
}
add_action( 'init', 'godevs_portfolio_register_case_study_cpt' );

// ── Taxonomies ────────────────────────────────────────────────

/**
 * Register Case Study taxonomies.
 *
 * @return void
 */
function godevs_portfolio_register_case_study_taxonomies(): void {
        if ( ! godevs_portfolio_module_enabled( 'case_studies' ) ) {
                return;
        }

        // Case Study Type (hierarchical — e.g., Web Design, Branding, Development)
        register_taxonomy(
                'godevs_case_study_type',
                'godevs_case_study',
                array(
                        'labels'            => array(
                                'name'              => __( 'Case Study Types', 'godevs-portfolio' ),
                                'singular_name'     => __( 'Case Study Type', 'godevs-portfolio' ),
                                'menu_name'         => __( 'Types', 'godevs-portfolio' ),
                                'all_items'         => __( 'All Types', 'godevs-portfolio' ),
                                'edit_item'         => __( 'Edit Type', 'godevs-portfolio' ),
                                'add_new_item'      => __( 'Add New Type', 'godevs-portfolio' ),
                        ),
                        'public'            => true,
                        'hierarchical'      => true,
                        'show_in_rest'      => true,
                        'show_admin_column' => true,
                        'rewrite'           => array( 'slug' => 'case-study-type' ),
                )
        );

        // Industry (hierarchical — e.g., Technology, Healthcare, Finance)
        register_taxonomy(
                'godevs_case_study_industry',
                'godevs_case_study',
                array(
                        'labels'            => array(
                                'name'              => __( 'Industries', 'godevs-portfolio' ),
                                'singular_name'     => __( 'Industry', 'godevs-portfolio' ),
                                'menu_name'         => __( 'Industries', 'godevs-portfolio' ),
                                'all_items'         => __( 'All Industries', 'godevs-portfolio' ),
                                'edit_item'         => __( 'Edit Industry', 'godevs-portfolio' ),
                                'add_new_item'      => __( 'Add New Industry', 'godevs-portfolio' ),
                        ),
                        'public'            => true,
                        'hierarchical'      => true,
                        'show_in_rest'      => true,
                        'show_admin_column' => true,
                        'rewrite'           => array( 'slug' => 'case-study-industry' ),
                )
        );

        // Technology (flat — e.g., React, WordPress, Figma)
        register_taxonomy(
                'godevs_case_study_technology',
                'godevs_case_study',
                array(
                        'labels'            => array(
                                'name'              => __( 'Technologies', 'godevs-portfolio' ),
                                'singular_name'     => __( 'Technology', 'godevs-portfolio' ),
                                'menu_name'         => __( 'Technologies', 'godevs-portfolio' ),
                                'all_items'         => __( 'All Technologies', 'godevs-portfolio' ),
                                'edit_item'         => __( 'Edit Technology', 'godevs-portfolio' ),
                                'add_new_item'      => __( 'Add New Technology', 'godevs-portfolio' ),
                        ),
                        'public'            => true,
                        'hierarchical'      => false,
                        'show_in_rest'      => true,
                        'show_admin_column' => true,
                        'rewrite'           => array( 'slug' => 'case-study-technology' ),
                )
        );
}
add_action( 'init', 'godevs_portfolio_register_case_study_taxonomies' );

// ── Meta Fields ──────────────────────────────────────────────

/**
 * Register Case Study meta fields.
 *
 * @return void
 */
function godevs_portfolio_register_case_study_meta(): void {
        if ( ! godevs_portfolio_module_enabled( 'case_studies' ) ) {
                return;
        }

        $fields = array(
                // Project Information
                '_godevs_cs_client'        => 'sanitize_text_field',
                '_godevs_cs_url'           => 'esc_url_raw',
                '_godevs_cs_year'          => 'sanitize_text_field',
                '_godevs_cs_duration'     => 'sanitize_text_field',
                '_godevs_cs_project_type'  => 'sanitize_text_field',
                '_godevs_cs_industry'      => 'sanitize_text_field',
                '_godevs_cs_location'      => 'sanitize_text_field',
                '_godevs_cs_status'        => 'sanitize_text_field',
                '_godevs_cs_role'          => 'sanitize_text_field',
                // Case Study Details
                '_godevs_cs_challenge'    => 'sanitize_textarea_field',
                '_godevs_cs_solution'     => 'sanitize_textarea_field',
                '_godevs_cs_process'      => 'sanitize_textarea_field',
                '_godevs_cs_conclusion'   => 'sanitize_textarea_field',
                // Results
                '_godevs_cs_result_1'     => 'sanitize_text_field',
                '_godevs_cs_result_2'     => 'sanitize_text_field',
                '_godevs_cs_result_3'     => 'sanitize_text_field',
                '_godevs_cs_result_4'     => 'sanitize_text_field',
                // Links
                '_godevs_cs_live_url'     => 'esc_url_raw',
                '_godevs_cs_repo_url'     => 'esc_url_raw',
                '_godevs_cs_featured'    => 'godevs_portfolio_sanitize_checkbox',
        );

        foreach ( $fields as $key => $sanitize ) {
                register_post_meta(
                        'godevs_case_study',
                        $key,
                        array(
                                'type'              => 'string',
                                'single'            => true,
                                'show_in_rest'      => true,
                                'sanitize_callback' => $sanitize,
                                'auth_callback'     => static function () {
                                        return current_user_can( 'edit_posts' );
                                },
                        )
                );
        }
}
add_action( 'init', 'godevs_portfolio_register_case_study_meta' );

// ── Meta Box UI ──────────────────────────────────────────────

/**
 * Add meta boxes for Case Study.
 *
 * @return void
 */
function godevs_portfolio_case_study_meta_boxes(): void {
        if ( ! godevs_portfolio_module_enabled( 'case_studies' ) ) {
                return;
        }

        add_meta_box(
                'godevs_cs_project_info',
                __( 'Project Information', 'godevs-portfolio' ),
                'godevs_portfolio_cs_project_info_cb',
                'godevs_case_study',
                'normal',
                'high'
        );

        add_meta_box(
                'godevs_cs_details',
                __( 'Case Study Details', 'godevs-portfolio' ),
                'godevs_portfolio_cs_details_cb',
                'godevs_case_study',
                'normal',
                'high'
        );

        add_meta_box(
                'godevs_cs_results',
                __( 'Results', 'godevs-portfolio' ),
                'godevs_portfolio_cs_results_cb',
                'godevs_case_study',
                'normal',
                'default'
        );

        add_meta_box(
                'godevs_cs_links',
                __( 'Links & Settings', 'godevs-portfolio' ),
                'godevs_portfolio_cs_links_cb',
                'godevs_case_study',
                'side',
                'default'
        );
}
add_action( 'add_meta_boxes', 'godevs_portfolio_case_study_meta_boxes' );

/**
 * Project Information meta box callback.
 *
 * @param WP_Post $post Post object.
 * @return void
 */
function godevs_portfolio_cs_project_info_cb( WP_Post $post ): void {
        wp_nonce_field( 'godevs_cs_meta_save', 'godevs_cs_meta_nonce' );

        $fields = array(
                'client'       => array( 'label' => __( 'Client', 'godevs-portfolio' ), 'type' => 'text' ),
                'url'          => array( 'label' => __( 'Project URL', 'godevs-portfolio' ), 'type' => 'url' ),
                'year'         => array( 'label' => __( 'Year', 'godevs-portfolio' ), 'type' => 'text' ),
                'duration'     => array( 'label' => __( 'Duration', 'godevs-portfolio' ), 'type' => 'text' ),
                'project_type' => array( 'label' => __( 'Project Type', 'godevs-portfolio' ), 'type' => 'text' ),
                'industry'     => array( 'label' => __( 'Industry', 'godevs-portfolio' ), 'type' => 'text' ),
                'location'     => array( 'label' => __( 'Location', 'godevs-portfolio' ), 'type' => 'text' ),
                'status'       => array( 'label' => __( 'Status', 'godevs-portfolio' ), 'type' => 'text' ),
                'role'         => array( 'label' => __( 'Role', 'godevs-portfolio' ), 'type' => 'text' ),
        );

        echo '<table class="form-table">';
        foreach ( $fields as $key => $field ) {
                $value = godevs_portfolio_get_meta( $post->ID, 'cs_' . $key );
                $input_type = 'url' === $field['type'] ? 'url' : 'text';
                printf(
                        '<tr><th><label for="godevs_cs_%1$s">%2$s</label></th><td><input type="%3$s" id="godevs_cs_%1$s" name="godevs_cs_%1$s" value="%4$s" class="widefat" /></td></tr>',
                        esc_attr( $key ),
                        esc_html( $field['label'] ),
                        esc_attr( $input_type ),
                        esc_attr( $value )
                );
        }
        echo '</table>';
}

/**
 * Case Study Details meta box callback.
 *
 * @param WP_Post $post Post object.
 * @return void
 */
function godevs_portfolio_cs_details_cb( WP_Post $post ): void {
        $fields = array(
                'challenge'  => __( 'Challenge', 'godevs-portfolio' ),
                'solution'   => __( 'Solution', 'godevs-portfolio' ),
                'process'    => __( 'Process', 'godevs-portfolio' ),
                'conclusion' => __( 'Conclusion', 'godevs-portfolio' ),
        );

        echo '<table class="form-table">';
        foreach ( $fields as $key => $label ) {
                $value = godevs_portfolio_get_meta( $post->ID, 'cs_' . $key );
                printf(
                        '<tr><th><label for="godevs_cs_%1$s">%2$s</label></th><td><textarea id="godevs_cs_%1$s" name="godevs_cs_%1$s" rows="4" class="widefat">%3$s</textarea></td></tr>',
                        esc_attr( $key ),
                        esc_html( $label ),
                        esc_textarea( $value )
                );
        }
        echo '</table>';
}

/**
 * Results meta box callback.
 *
 * @param WP_Post $post Post object.
 * @return void
 */
function godevs_portfolio_cs_results_cb( WP_Post $post ): void {
        echo '<table class="form-table">';
        for ( $i = 1; $i <= 4; $i++ ) {
                $value = godevs_portfolio_get_meta( $post->ID, 'cs_result_' . $i );
                printf(
                        '<tr><th><label for="godevs_cs_result_%1$d">%2$s %1$d</label></th><td><input type="text" id="godevs_cs_result_%1$d" name="godevs_cs_result_%1$d" value="%3$s" class="widefat" placeholder="e.g., 150% increase in conversions" /></td></tr>',
                        $i,
                        esc_html__( 'Result', 'godevs-portfolio' ),
                        esc_attr( $value )
                );
        }
        echo '</table>';
}

/**
 * Links & Settings meta box callback.
 *
 * @param WP_Post $post Post object.
 * @return void
 */
function godevs_portfolio_cs_links_cb( WP_Post $post ): void {
        $live_url  = godevs_portfolio_get_meta( $post->ID, 'cs_live_url' );
        $repo_url  = godevs_portfolio_get_meta( $post->ID, 'cs_repo_url' );
        $featured  = godevs_portfolio_get_meta( $post->ID, 'cs_featured' );

        echo '<table class="form-table">';
        printf(
                '<tr><th><label for="godevs_cs_live_url">%s</label></th><td><input type="url" id="godevs_cs_live_url" name="godevs_cs_live_url" value="%s" class="widefat" /></td></tr>',
                esc_html__( 'Live URL', 'godevs-portfolio' ),
                esc_attr( $live_url )
        );
        printf(
                '<tr><th><label for="godevs_cs_repo_url">%s</label></th><td><input type="url" id="godevs_cs_repo_url" name="godevs_cs_repo_url" value="%s" class="widefat" /></td></tr>',
                esc_html__( 'Repository URL', 'godevs-portfolio' ),
                esc_attr( $repo_url )
        );
        printf(
                '<tr><th>%s</th><td><label><input type="checkbox" name="godevs_cs_featured" value="1" %s /> %s</label></td></tr>',
                esc_html__( 'Featured', 'godevs-portfolio' ),
                checked( $featured, '1', false ),
                esc_html__( 'Mark as featured case study', 'godevs-portfolio' )
        );
        echo '</table>';
}

/**
 * Save Case Study meta fields.
 *
 * @param int $post_id Post ID.
 * @return void
 */
function godevs_portfolio_save_case_study_meta( int $post_id ): void {
        if ( ! isset( $_POST['godevs_cs_meta_nonce'] ) ) {
                return;
        }
        if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['godevs_cs_meta_nonce'] ) ), 'godevs_cs_meta_save' ) ) {
                return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
        }
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
        if ( 'godevs_case_study' !== get_post_type( $post_id ) ) {
                return;
        }

        // Text fields.
        $text_fields = array( 'client', 'url', 'year', 'duration', 'project_type', 'industry', 'location', 'status', 'role', 'result_1', 'result_2', 'result_3', 'result_4', 'live_url', 'repo_url' );
        foreach ( $text_fields as $field ) {
                if ( isset( $_POST[ 'godevs_cs_' . $field ] ) ) {
                        $val = wp_unslash( $_POST[ 'godevs_cs_' . $field ] );
                        if ( in_array( $field, array( 'url', 'live_url', 'repo_url' ), true ) ) {
                                $val = esc_url_raw( $val );
                        } else {
                                $val = sanitize_text_field( $val );
                        }
                        update_post_meta( $post_id, '_godevs_cs_' . $field, $val );
                }
        }

        // Textarea fields.
        $textarea_fields = array( 'challenge', 'solution', 'process', 'conclusion' );
        foreach ( $textarea_fields as $field ) {
                if ( isset( $_POST[ 'godevs_cs_' . $field ] ) ) {
                        $val = sanitize_textarea_field( wp_unslash( $_POST[ 'godevs_cs_' . $field ] ) );
                        update_post_meta( $post_id, '_godevs_cs_' . $field, $val );
                }
        }

        // Checkbox.
        $featured = isset( $_POST['godevs_cs_featured'] ) ? '1' : '';
        update_post_meta( $post_id, '_godevs_cs_featured', $featured );
}
add_action( 'save_post_godevs_case_study', 'godevs_portfolio_save_case_study_meta' );
