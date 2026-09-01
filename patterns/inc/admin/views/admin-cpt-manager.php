<?php
/**
 * CPT Management admin page view.
 *
 * @package GoDevs_Portfolio
 * @since   2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

$cpts       = godevs_cpt_admin_get_theme_cpts();
$current    = isset( $_GET['cpt'] ) ? sanitize_key( wp_unslash( $_GET['cpt'] ) ) : '';
$search     = isset( $_GET['s'] ) ? sanitize_text_field( wp_unslash( $_GET['s'] ) ) : '';
$paged      = isset( $_GET['paged'] ) ? max( 1, (int) $_GET['paged'] ) : 1;
$per_page   = 20;

// Validate CPT.
if ( ! $current || ! isset( $cpts[ $current ] ) ) {
        // Default to the first available CPT.
        $current = array_key_first( $cpts );
}

$cpt_info = $cpts[ $current ] ?? array();

// Get posts for the current CPT.
$query_args = array(
        'post_type'      => $current,
        'post_status'    => 'any',
        'posts_per_page' => $per_page,
        'paged'          => $paged,
        'orderby'        => 'modified',
        'order'          => 'DESC',
);
if ( $search ) {
        $query_args['s'] = $search;
}
$posts_query = new WP_Query( $query_args );
$posts        = $posts_query->posts;
$total_posts  = $posts_query->found_posts;
$total_pages  = $posts_query->max_num_pages;
?>

<div class="wrap godevs-cpt-manager-wrap">
        <!-- ═══ HEADER ═══ -->
        <header class="godevs-cpt-header">
                <div class="godevs-cpt-header-inner">
                        <div class="godevs-cpt-header-text">
                                <h1 class="godevs-cpt-title">
                                        <span class="dashicons dashicons-screenoptions"></span>
                                        <?php esc_html_e( 'Content Manager', 'godevs-portfolio' ); ?>
                                </h1>
                                <p class="godevs-cpt-subtitle">
                                        <?php esc_html_e( 'Manage all your theme content types from one dashboard. View, edit, add, and preview projects, services, team, testimonials, and more.', 'godevs-portfolio' ); ?>
                                </p>
                        </div>
                </div>
        </header>

        <!-- ═══ DASHBOARD CARDS ═══ -->
        <div class="godevs-cpt-dashboard">
                <?php foreach ( $cpts as $slug => $info ) :
                        $count   = godevs_cpt_admin_get_count( $slug );
                        $is_active = ( $slug === $current );
                        $admin_url = admin_url( $info['edit_url'] );
                        $add_url   = admin_url( $info['add_url'] );
                        $view_url  = $info['archive_url'];
                        $settings_url = add_query_arg( 'page', 'godevs-portfolio-settings', admin_url( 'themes.php' ) ) . '#' . ( $info['settings_key'] === 'portfolio_' ? 'portfolio' : ( $info['settings_key'] === 'case_studies_' ? 'case-studies' : str_replace( '_', '', rtrim( $info['settings_key'], '_' ) ) ) );
                ?>
                <div class="godevs-cpt-card<?php echo $is_active ? ' is-active' : ''; ?>" data-cpt="<?php echo esc_attr( $slug ); ?>">
                        <a href="<?php echo esc_url( add_query_arg( array( 'page' => 'godevs-portfolio-cpt-manager', 'cpt' => $slug ), admin_url( 'themes.php' ) ) ); ?>" class="godevs-cpt-card-main">
                                <span class="godevs-cpt-card-icon dashicons <?php echo esc_attr( $info['icon'] ); ?>"></span>
                                <span class="godevs-cpt-card-label"><?php echo esc_html( $info['label'] ); ?></span>
                                <span class="godevs-cpt-card-count"><?php echo esc_html( (string) $count ); ?></span>
                        </a>
                        <div class="godevs-cpt-card-actions">
                                <a href="<?php echo esc_url( $add_url ); ?>" class="button button-small button-primary" title="<?php esc_attr_e( 'Add new', 'godevs-portfolio' ); ?>">
                                        <span class="dashicons dashicons-plus-alt2"></span>
                                        <?php esc_html_e( 'Add', 'godevs-portfolio' ); ?>
                                </a>
                                <a href="<?php echo esc_url( $admin_url ); ?>" class="button button-small" title="<?php esc_attr_e( 'Manage all', 'godevs-portfolio' ); ?>">
                                        <span class="dashicons dashicons-admin-post"></span>
                                        <?php esc_html_e( 'All', 'godevs-portfolio' ); ?>
                                </a>
                                <?php if ( $count > 0 ) : ?>
                                <a href="<?php echo esc_url( $view_url ); ?>" target="_blank" class="button button-small" title="<?php esc_attr_e( 'View archive', 'godevs-portfolio' ); ?>">
                                        <span class="dashicons dashicons-external"></span>
                                </a>
                                <?php endif; ?>
                        </div>
                </div>
                <?php endforeach; ?>
        </div>

        <!-- ═══ LIST VIEW ═══ -->
        <section class="godevs-cpt-list-section">
                <header class="godevs-cpt-list-header">
                        <h2 class="godevs-cpt-list-title">
                                <span class="dashicons <?php echo esc_attr( $cpt_info['icon'] ?? 'dashicons-admin-post' ); ?>"></span>
                                <?php echo esc_html( $cpt_info['label'] ?? __( 'Content', 'godevs-portfolio' ) ); ?>
                                <span class="godevs-cpt-list-count"><?php echo esc_html( (string) $total_posts ); ?></span>
                        </h2>
                        <div class="godevs-cpt-list-actions">
                                <!-- Search -->
                                <form method="get" class="godevs-cpt-search-form">
                                        <input type="hidden" name="page" value="godevs-portfolio-cpt-manager" />
                                        <input type="hidden" name="cpt" value="<?php echo esc_attr( $current ); ?>" />
                                        <input type="search" name="s" value="<?php echo esc_attr( $search ); ?>" placeholder="<?php esc_attr_e( 'Search…', 'godevs-portfolio' ); ?>" class="godevs-cpt-search-input" />
                                        <button type="submit" class="button"><?php esc_html_e( 'Search', 'godevs-portfolio' ); ?></button>
                                </form>
                                <!-- Add new -->
                                <a href="<?php echo esc_url( admin_url( $cpt_info['add_url'] ?? 'post-new.php' ) ); ?>" class="button button-primary">
                                        <span class="dashicons dashicons-plus-alt2"></span>
                                        <?php printf( esc_html__( 'Add New %s', 'godevs-portfolio' ), esc_html( $cpt_info['singular'] ?? '' ) ); ?>
                                </a>
                                <!-- Settings -->
                                <a href="<?php echo esc_url( add_query_arg( 'page', 'godevs-portfolio-settings', admin_url( 'themes.php' ) ) ); ?>" class="button">
                                        <span class="dashicons dashicons-admin-generic"></span>
                                        <?php esc_html_e( 'Archive Settings', 'godevs-portfolio' ); ?>
                                </a>
                        </div>
                </header>

                <!-- Posts table -->
                <?php if ( empty( $posts ) ) : ?>
                        <div class="godevs-cpt-empty">
                                <span class="dashicons dashicons-editor-help"></span>
                                <h3><?php esc_html_e( 'No items found', 'godevs-portfolio' ); ?></h3>
                                <p>
                                        <?php
                                        printf(
                                                /* translators: %s: singular CPT label. */
                                                esc_html__( 'There are no %s yet. Create your first one to get started.', 'godevs-portfolio' ),
                                                esc_html( strtolower( $cpt_info['label'] ?? 'items' ) )
                                        );
                                        ?>
                                </p>
                                <a href="<?php echo esc_url( admin_url( $cpt_info['add_url'] ?? 'post-new.php' ) ); ?>" class="button button-primary">
                                        <span class="dashicons dashicons-plus-alt2"></span>
                                        <?php printf( esc_html__( 'Add First %s', 'godevs-portfolio' ), esc_html( $cpt_info['singular'] ?? 'Item' ) ); ?>
                                </a>
                        </div>
                <?php else : ?>
                        <table class="wp-list-table widefat striped godevs-cpt-table">
                                <thead>
                                        <tr>
                                                <th class="godevs-cpt-col-title"><?php esc_html_e( 'Title', 'godevs-portfolio' ); ?></th>
                                                <th class="godevs-cpt-col-status"><?php esc_html_e( 'Status', 'godevs-portfolio' ); ?></th>
                                                <th class="godevs-cpt-col-date"><?php esc_html_e( 'Modified', 'godevs-portfolio' ); ?></th>
                                                <th class="godevs-cpt-col-actions"><?php esc_html_e( 'Actions', 'godevs-portfolio' ); ?></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ( $posts as $post ) :
                                                $edit_url  = get_edit_post_link( $post->ID, 'raw' );
                                                $view_url  = get_permalink( $post->ID );
                                                $delete_url = wp_nonce_url( admin_url( 'post.php?post=' . $post->ID . '&action=trash' ), 'trash-post_' . $post->ID );
                                                $status_label = $post->post_status === 'publish' ? __( 'Published', 'godevs-portfolio' ) : ( $post->post_status === 'draft' ? __( 'Draft', 'godevs-portfolio' ) : ucfirst( $post->post_status ) );
                                                $status_class = $post->post_status === 'publish' ? 'is-published' : ( $post->post_status === 'draft' ? 'is-draft' : 'is-other' );
                                                $has_thumb = has_post_thumbnail( $post->ID );
                                        ?>
                                        <tr>
                                                <td class="godevs-cpt-col-title">
                                                        <div class="godevs-cpt-title-cell">
                                                                <?php if ( $has_thumb ) : ?>
                                                                        <div class="godevs-cpt-thumb"><?php echo get_the_post_thumbnail( $post->ID, array( 40, 40 ) ); ?></div>
                                                                <?php else : ?>
                                                                        <div class="godevs-cpt-thumb godevs-cpt-thumb-placeholder"><span class="dashicons <?php echo esc_attr( $cpt_info['icon'] ?? 'dashicons-admin-post' ); ?>"></span></div>
                                                                <?php endif; ?>
                                                                <div class="godevs-cpt-title-info">
                                                                        <strong><a href="<?php echo esc_url( $edit_url ); ?>"><?php echo esc_html( get_the_title( $post->ID ) ?: sprintf( __( '(no title) — ID #%d', 'godevs-portfolio' ), $post->ID ) ); ?></a></strong>
                                                                        <?php
                                                                        // Show meta summary (first 2 meta fields).
                                                                        $meta_keys = godevs_cpt_admin_get_meta_keys( $current );
                                                                        $meta_summary = array();
                                                                        foreach ( array_slice( $meta_keys, 0, 2 ) as $mk ) {
                                                                                $mv = get_post_meta( $post->ID, $mk, true );
                                                                                if ( $mv ) {
                                                                                        $label = ucfirst( str_replace( array( '_godevs_', $current . '_', '_', 'godevs' ), '', $mk ) );
                                                                                        $meta_summary[] = esc_html( $label . ': ' . $mv );
                                                                                }
                                                                        }
                                                                        if ( ! empty( $meta_summary ) ) : ?>
                                                                                <span class="godevs-cpt-meta-summary"><?php echo wp_kses_post( implode( ' · ', $meta_summary ) ); ?></span>
                                                                        <?php endif; ?>
                                                                </div>
                                                        </div>
                                                </td>
                                                <td class="godevs-cpt-col-status">
                                                        <span class="godevs-cpt-status-badge <?php echo esc_attr( $status_class ); ?>"><?php echo esc_html( $status_label ); ?></span>
                                                </td>
                                                <td class="godevs-cpt-col-date">
                                                        <?php echo esc_html( wp_date( 'M j, Y g:ia', strtotime( $post->post_modified ) ) ); ?>
                                                </td>
                                                <td class="godevs-cpt-col-actions">
                                                        <div class="godevs-cpt-row-actions">
                                                                <a href="<?php echo esc_url( $edit_url ); ?>" class="button button-small" title="<?php esc_attr_e( 'Edit', 'godevs-portfolio' ); ?>">
                                                                        <span class="dashicons dashicons-edit"></span>
                                                                        <?php esc_html_e( 'Edit', 'godevs-portfolio' ); ?>
                                                                </a>
                                                                <?php if ( $post->post_status === 'publish' ) : ?>
                                                                        <a href="<?php echo esc_url( $view_url ); ?>" target="_blank" class="button button-small" title="<?php esc_attr_e( 'View', 'godevs-portfolio' ); ?>">
                                                                                <span class="dashicons dashicons-external"></span>
                                                                                <?php esc_html_e( 'View', 'godevs-portfolio' ); ?>
                                                                        </a>
                                                                <?php endif; ?>
                                                                <a href="<?php echo esc_url( $delete_url ); ?>" class="button button-small button-link-delete godevs-cpt-delete" title="<?php esc_attr_e( 'Trash', 'godevs-portfolio' ); ?>" onclick="return confirm('<?php esc_attr_e( 'Move this item to trash?', 'godevs-portfolio' ); ?>')">
                                                                        <span class="dashicons dashicons-trash"></span>
                                                                </a>
                                                        </div>
                                                </td>
                                        </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>

                        <!-- Pagination -->
                        <?php if ( $total_pages > 1 ) : ?>
                        <div class="godevs-cpt-pagination tablenav-pages">
                                <?php
                                echo paginate_links(
                                        array(
                                                'base'      => add_query_arg( array( 'paged' => '%#%' ) ),
                                                'format'    => '',
                                                'current'   => $paged,
                                                'total'     => $total_pages,
                                                'prev_text' => '&laquo;',
                                                'next_text' => '&raquo;',
                                                'type'      => 'list',
                                        )
                                );
                                ?>
                        </div>
                        <?php endif; ?>
                <?php endif; ?>
        </section>
</div>

<?php
/**
 * Get meta field keys for a CPT (for summary display).
 *
 * @param string $cpt_slug CPT slug.
 * @return array<string> Meta field keys.
 */
function godevs_cpt_admin_get_meta_keys( string $cpt_slug ): array {
        $prefix_map = array(
                'godevs_project'     => '_godevs_project_',
                'godevs_service'     => '_godevs_service_',
                'godevs_team'        => '_godevs_team_',
                'godevs_testimonial' => '_godevs_testimonial_',
                'godevs_experience'  => '_godevs_experience_',
                'godevs_education'   => '_godevs_education_',
                'godevs_case_study'  => '_godevs_cs_',
        );
        $prefix = $prefix_map[ $cpt_slug ] ?? '';

        // All registered meta keys for this CPT.
        $all_keys = array(
                'godevs_project'     => array( '_godevs_project_client', '_godevs_project_url', '_godevs_project_date', '_godevs_project_duration', '_godevs_project_location', '_godevs_project_role', '_godevs_project_status', '_godevs_project_featured' ),
                'godevs_service'     => array( '_godevs_service_icon', '_godevs_service_price', '_godevs_service_duration', '_godevs_service_featured', '_godevs_service_cta_label', '_godevs_service_cta_url' ),
                'godevs_team'        => array( '_godevs_team_job_title', '_godevs_team_email', '_godevs_team_phone', '_godevs_team_location', '_godevs_team_website', '_godevs_team_linkedin', '_godevs_team_twitter', '_godevs_team_facebook', '_godevs_team_instagram', '_godevs_team_featured' ),
                'godevs_testimonial' => array( '_godevs_testimonial_client_name', '_godevs_testimonial_client_role', '_godevs_testimonial_company', '_godevs_testimonial_rating', '_godevs_testimonial_featured' ),
                'godevs_experience'  => array( '_godevs_experience_company', '_godevs_experience_position', '_godevs_experience_start', '_godevs_experience_end', '_godevs_experience_location', '_godevs_experience_current' ),
                'godevs_education'   => array( '_godevs_education_institution', '_godevs_education_degree', '_godevs_education_field', '_godevs_education_start', '_godevs_education_end', '_godevs_education_location' ),
                'godevs_case_study'  => array( '_godevs_cs_client', '_godevs_cs_year', '_godevs_cs_industry', '_godevs_cs_role', '_godevs_cs_status', '_godevs_cs_featured' ),
        );

        return $all_keys[ $cpt_slug ] ?? array();
}
