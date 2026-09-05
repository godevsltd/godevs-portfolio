<?php
/**
 * Onboarding & First-Use Experience for GoDevs Portfolio.
 *
 * Provides a clear first-use journey:
 *   1. Activation redirect to a Welcome screen
 *   2. Dismissible admin notice on every admin page until dismissed
 *   3. Dashboard widget with quick-start checklist + links
 *   4. "After Import" success notice with next-action buttons
 *
 * @package GoDevs_Portfolio
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ════════════════════════════════════════════════════════════════════════════
// 1. ACTIVATION REDIRECT — send user to Welcome page on first activation
// ════════════════════════════════════════════════════════════════════════════

/**
 * Redirect to the Welcome page on the first admin load after activation.
 *
 * Uses a transient flag set in after_switch_theme. Only fires once per user.
 *
 * @return void
 */
function godevs_onboarding_activation_redirect(): void {
        // Bail if no redirect flag.
        if ( ! get_transient( 'godevs_portfolio_activation_redirect' ) ) {
                return;
        }
        // Bail if user cannot manage_options (subscribers shouldn't be redirected).
        if ( ! current_user_can( 'manage_options' ) ) {
                delete_transient( 'godevs_portfolio_activation_redirect' );
                return;
        }
        // Bail if doing AJAX, cron, or bulk actions.
        if ( wp_doing_ajax() || wp_doing_cron() || isset( $_GET['activate-multi'] ) ) {
                delete_transient( 'godevs_portfolio_activation_redirect' );
                return;
        }
        // Bail if user has already dismissed the welcome screen.
        if ( '1' === get_user_meta( get_current_user_id(), 'godevs_portfolio_welcome_dismissed', true ) ) {
                delete_transient( 'godevs_portfolio_activation_redirect' );
                return;
        }
        delete_transient( 'godevs_portfolio_activation_redirect' );
        // Redirect to the theme settings page with welcome=1.
        wp_safe_redirect(
                add_query_arg(
                        array(
                                'page'    => 'godevs-portfolio-settings',
                                'welcome' => '1',
                        ),
                        admin_url( 'themes.php' )
                )
        );
        exit;
}
add_action( 'admin_init', 'godevs_onboarding_activation_redirect' );

/**
 * Set the activation redirect transient when the theme is switched to.
 *
 * @return void
 */
function godevs_onboarding_set_redirect_flag(): void {
        set_transient( 'godevs_portfolio_activation_redirect', 1, 5 * MINUTE_IN_SECONDS );
}
add_action( 'after_switch_theme', 'godevs_onboarding_set_redirect_flag' );

// ════════════════════════════════════════════════════════════════════════════
// 2. WELCOME NOTICE — dismissible admin notice on every admin page
// ════════════════════════════════════════════════════════════════════════════

/**
 * Render a dismissible "Welcome — Get Started" admin notice.
 *
 * Shows on every admin screen until dismissed. Includes action buttons:
 *   - Import a Demo
 *   - Choose a Header
 *   - Choose a Footer
 *   - Open Theme Settings
 *
 * @return void
 */
function godevs_onboarding_welcome_notice(): void {
        // Only show to admins.
        if ( ! current_user_can( 'manage_options' ) ) {
                return;
        }
        // Don't show on the Welcome screen itself (it's redundant).
        if ( isset( $_GET['welcome'] ) && '1' === sanitize_key( wp_unslash( $_GET['welcome'] ) ) ) {
                return;
        }
        // Don't show on the demo library page (user is already there).
        if ( isset( $_GET['page'] ) && 'godevs-portfolio-demos' === sanitize_key( wp_unslash( $_GET['page'] ) ) ) {
                return;
        }
        // Bail if dismissed.
        if ( '1' === get_user_meta( get_current_user_id(), 'godevs_portfolio_welcome_dismissed', true ) ) {
                return;
        }
        // Don't show on the settings page itself — that has its own welcome panel.
        if ( isset( $_GET['page'] ) && 'godevs-portfolio-settings' === sanitize_key( wp_unslash( $_GET['page'] ) ) ) {
                return;
        }
        ?>
        <div class="notice notice-info is-dismissible godevs-welcome-notice" style="border-left-color:#2563EB;padding:12px 16px;">
                <div style="display:flex;align-items:flex-start;gap:14px;flex-wrap:wrap;">
                        <div style="width:42px;height:42px;background:linear-gradient(135deg,#2563EB,#1d4ed8);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;flex-shrink:0;">G</div>
                        <div style="flex:1;min-width:240px;">
                                <h3 style="margin:0 0 4px;font-size:15px;font-weight:600;">
                                        <?php esc_html_e( 'Welcome to GoDevs Portfolio', 'godevs-portfolio'); ?>
                                </h3>
                                <p style="margin:0 0 8px;font-size:13px;color:#50575e;">
                                        <?php esc_html_e( 'Thanks for installing! Get started in minutes — import a demo, pick a header, customize your colors, and publish.', 'godevs-portfolio'); ?>
                                </p>
                                <p style="margin:0;font-size:13px;">
                                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-demos' ) ); ?>" class="button button-primary" style="margin-right:6px;">
                                                <span class="dashicons dashicons-images-alt" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Import a Demo', 'godevs-portfolio'); ?>
                                        </a>
                                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-settings' ) ); ?>" class="button">
                                                <span class="dashicons dashicons-admin-generic" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Theme Settings', 'godevs-portfolio'); ?>
                                        </a>
                                        <a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" class="button">
                                                <span class="dashicons dashicons-layout" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Open Site Editor', 'godevs-portfolio'); ?>
                                        </a>
                                </p>
                        </div>
                </div>
                <script>
                (function() {
                        var notice = document.querySelector('.godevs-welcome-notice');
                        if (!notice) return;
                        notice.addEventListener('click', function(e) {
                                if (e.target.classList.contains('notice-dismiss') || e.target.closest('.notice-dismiss')) {
                                        fetch(ajaxurl, {
                                                method: 'POST',
                                                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                body: 'action=godevs_onboarding_dismiss&_ajax_nonce=<?php echo esc_js( wp_create_nonce( 'godevs_onboarding_dismiss' ) ); ?>'
                                        });
                                }
                        });
                })();
                </script>
        </div>
        <?php
}
add_action( 'admin_notices', 'godevs_onboarding_welcome_notice' );

/**
 * AJAX handler: dismiss the welcome notice.
 *
 * @return void
 */
function godevs_onboarding_dismiss_ajax(): void {
        check_ajax_referer( 'godevs_onboarding_dismiss', '_ajax_nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio') ), 403 );
        }
        update_user_meta( get_current_user_id(), 'godevs_portfolio_welcome_dismissed', '1' );
        wp_send_json_success();
}
add_action( 'wp_ajax_godevs_onboarding_dismiss', 'godevs_onboarding_dismiss_ajax' );

// ════════════════════════════════════════════════════════════════════════════
// 3. WELCOME PANEL — full-page welcome banner on Theme Settings page
// ════════════════════════════════════════════════════════════════════════════

/**
 * Render the welcome panel at the top of the Theme Settings page.
 *
 * Triggered by ?welcome=1 query param. Also persists in the page header
 * until the user dismisses it or imports a demo.
 *
 * @return void
 */
function godevs_onboarding_render_welcome_panel(): void {
        // Only render if welcome=1 OR no demo has been imported yet.
        $imported = get_option( 'godevs_demo_tracker', array() );
        $show_welcome = isset( $_GET['welcome'] ) || empty( $imported );
        if ( ! $show_welcome ) {
                return;
        }
        ?>
        <div class="godevs-welcome-panel" style="background:linear-gradient(135deg,#f0f6ff 0%,#fafafa 100%);border:1px solid #c3d4f0;border-radius:12px;padding:24px;margin:0 0 24px 0;">
                <div style="display:flex;align-items:center;gap:14px;margin-bottom:18px;">
                        <div style="width:56px;height:56px;background:linear-gradient(135deg,#2563EB,#1d4ed8);border-radius:14px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:28px;flex-shrink:0;">G</div>
                        <div>
                                <h2 style="margin:0;font-size:22px;font-weight:700;"><?php esc_html_e( 'Welcome to GoDevs Portfolio', 'godevs-portfolio'); ?></h2>
                                <p style="margin:4px 0 0;font-size:14px;color:#50575e;"><?php esc_html_e( 'A premium Gutenberg-first block theme. Here\'s how to get your site live in 5 minutes.', 'godevs-portfolio'); ?></p>
                        </div>
                </div>
                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;">
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-demos' ) ); ?>" style="text-decoration:none;color:inherit;background:#fff;border:1px solid #dcdcde;border-radius:8px;padding:16px;display:block;transition:all 0.2s;">
                                <div style="font-size:24px;margin-bottom:8px;"><span class="dashicons dashicons-images-alt" style="color:#2563EB;"></span></div>
                                <strong style="display:block;font-size:14px;margin-bottom:4px;"><?php esc_html_e( '1. Import a Demo', 'godevs-portfolio'); ?></strong>
                                <span style="font-size:12px;color:#50575e;"><?php esc_html_e( 'Start with a complete pre-built site you can customize.', 'godevs-portfolio'); ?></span>
                        </a>
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-settings' ) ); ?>#builder" style="text-decoration:none;color:inherit;background:#fff;border:1px solid #dcdcde;border-radius:8px;padding:16px;display:block;transition:all 0.2s;">
                                <div style="font-size:24px;margin-bottom:8px;"><span class="dashicons dashicons-layout" style="color:#2563EB;"></span></div>
                                <strong style="display:block;font-size:14px;margin-bottom:4px;"><?php esc_html_e( '2. Pick a Header', 'godevs-portfolio'); ?></strong>
                                <span style="font-size:12px;color:#50575e;"><?php esc_html_e( 'Choose from 10 ready-made header layouts.', 'godevs-portfolio'); ?></span>
                        </a>
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-settings' ) ); ?>#colors" style="text-decoration:none;color:inherit;background:#fff;border:1px solid #dcdcde;border-radius:8px;padding:16px;display:block;transition:all 0.2s;">
                                <div style="font-size:24px;margin-bottom:8px;"><span class="dashicons dashicons-art" style="color:#2563EB;"></span></div>
                                <strong style="display:block;font-size:14px;margin-bottom:4px;"><?php esc_html_e( '3. Customize Colors', 'godevs-portfolio'); ?></strong>
                                <span style="font-size:12px;color:#50575e;"><?php esc_html_e( 'Match your brand with the color picker.', 'godevs-portfolio'); ?></span>
                        </a>
                        <a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" style="text-decoration:none;color:inherit;background:#fff;border:1px solid #dcdcde;border-radius:8px;padding:16px;display:block;transition:all 0.2s;">
                                <div style="font-size:24px;margin-bottom:8px;"><span class="dashicons dashicons-edit-page" style="color:#2563EB;"></span></div>
                                <strong style="display:block;font-size:14px;margin-bottom:4px;"><?php esc_html_e( '4. Edit Templates', 'godevs-portfolio'); ?></strong>
                                <span style="font-size:12px;color:#50575e;"><?php esc_html_e( 'Open the Site Editor to customize any page.', 'godevs-portfolio'); ?></span>
                        </a>
                </div>
        </div>
        <?php
}
add_action( 'godevs_portfolio_settings_before_panels', 'godevs_onboarding_render_welcome_panel' );

// ════════════════════════════════════════════════════════════════════════════
// 4. DASHBOARD WIDGET — quick-start checklist on the WP admin dashboard
// ════════════════════════════════════════════════════════════════════════════

/**
 * Register the dashboard widget.
 *
 * @return void
 */
function godevs_onboarding_register_dashboard_widget(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                return;
        }
        wp_add_dashboard_widget(
                'godevs_portfolio_dashboard',
                __( 'GoDevs Portfolio — Quick Start', 'godevs-portfolio'),
                'godevs_onboarding_render_dashboard_widget'
        );
}
add_action( 'wp_dashboard_setup', 'godevs_onboarding_register_dashboard_widget' );

/**
 * Render the dashboard widget content.
 *
 * Shows a 4-step checklist with progress indicators. Each item links to
 * the relevant admin page.
 *
 * @return void
 */
function godevs_onboarding_render_dashboard_widget(): void {
        $imported      = ! empty( get_option( 'godevs_demo_tracker', array() ) );
        $header_set    = ! empty( get_option( 'godevs_hf_active_header' ) ) || '' !== godevs_portfolio_get_setting( 'header_style' );
        $footer_set    = ! empty( get_option( 'godevs_hf_active_footer' ) ) || '' !== godevs_portfolio_get_setting( 'footer_style' );
        $colors_set    = '#2563EB' !== godevs_portfolio_get_setting( 'accent_color' );

        $steps = array(
                array(
                        'done'    => $imported,
                        'label'   => __( 'Import a demo', 'godevs-portfolio'),
                        'url'     => admin_url( 'themes.php?page=godevs-portfolio-demos' ),
                        'icon'    => 'dashicons-images-alt',
                ),
                array(
                        'done'    => $header_set,
                        'label'   => __( 'Choose a header', 'godevs-portfolio'),
                        'url'     => admin_url( 'themes.php?page=godevs-portfolio-settings#header' ),
                        'icon'    => 'dashicons-layout',
                ),
                array(
                        'done'    => $footer_set,
                        'label'   => __( 'Choose a footer', 'godevs-portfolio'),
                        'url'     => admin_url( 'themes.php?page=godevs-portfolio-settings#footer' ),
                        'icon'    => 'dashicons-feedback',
                ),
                array(
                        'done'    => $colors_set,
                        'label'   => __( 'Customize colors', 'godevs-portfolio'),
                        'url'     => admin_url( 'themes.php?page=godevs-portfolio-settings#colors' ),
                        'icon'    => 'dashicons-art',
                ),
        );

        $completed = count( array_filter( wp_list_pluck( $steps, 'done' ) ) );
        $total     = count( $steps );
        $percent   = (int) round( ( $completed / $total ) * 100 );
        ?>
        <div style="padding:8px 0;">
                <div style="margin-bottom:12px;">
                        <div style="display:flex;justify-content:space-between;font-size:12px;color:#50575e;margin-bottom:4px;">
                                <span><?php esc_html_e( 'Setup progress', 'godevs-portfolio'); ?></span>
                                <span><strong><?php echo esc_html( $completed ); ?></strong> / <?php echo esc_html( $total ); ?></span>
                        </div>
                        <div style="height:6px;background:#f0f0f1;border-radius:3px;overflow:hidden;">
                                <div style="height:100%;width:<?php echo esc_attr( $percent ); ?>%;background:linear-gradient(90deg,#2563EB,#1d4ed8);transition:width 0.4s;"></div>
                        </div>
                </div>
                <ul style="margin:0;padding:0;list-style:none;">
                        <?php foreach ( $steps as $step ) : ?>
                                <li style="margin:0 0 6px;padding:8px 10px;border:1px solid #dcdcde;border-radius:6px;display:flex;align-items:center;gap:8px;background:<?php echo esc_attr( $step['done'] ? '#f0f8f0' : '#fff' ); ?>;">
                                        <span class="dashicons <?php echo $step['done'] ? 'dashicons-yes-alt' : esc_attr( $step['icon'] ); ?>" style="color:<?php echo esc_attr( $step['done'] ? '#00a32a' : '#2563EB' ); ?>;font-size:18px;width:18px;height:18px;"></span>
                                        <span style="flex:1;font-size:13px;<?php echo esc_attr( $step['done'] ? 'text-decoration:line-through;color:#50575e;' : '' ); ?>"><?php echo esc_html( $step['label'] ); ?></span>
                                        <?php if ( ! $step['done'] ) : ?>
                                                <a href="<?php echo esc_url( $step['url'] ); ?>" style="font-size:12px;text-decoration:none;"><?php esc_html_e( 'Do it →', 'godevs-portfolio'); ?></a>
                                        <?php endif; ?>
                                </li>
                        <?php endforeach; ?>
                </ul>
                <p style="margin:12px 0 0;font-size:12px;">
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page=godevs-portfolio-settings' ) ); ?>"><?php esc_html_e( 'Open Theme Settings →', 'godevs-portfolio'); ?></a>
                </p>
        </div>
        <?php
}

// ════════════════════════════════════════════════════════════════════════════
// 5. AFTER-IMPORT GUIDANCE — show success notice + next-action buttons
// ════════════════════════════════════════════════════════════════════════════

/**
 * Set a transient after a successful demo import so we can show the
 * after-import guidance notice on the next admin page load.
 *
 * Hooked into the post-import success action.
 *
 * @param string $demo_id  Demo slug just imported.
 * @return void
 */
function godevs_onboarding_set_import_success_flag( string $demo_id, int $homepage_id = 0 ): void {
        set_transient( 'godevs_portfolio_just_imported', $demo_id, 5 * MINUTE_IN_SECONDS );
        if ( $homepage_id ) {
                set_transient( 'godevs_portfolio_just_imported_home', $homepage_id, 5 * MINUTE_IN_SECONDS );
        }
        // Also flag the welcome notice as dismissed — the user has progressed past it.
        update_user_meta( get_current_user_id(), 'godevs_portfolio_welcome_dismissed', '1' );
}
add_action( 'godevs_portfolio_demo_imported', 'godevs_onboarding_set_import_success_flag', 10, 2 );

/**
 * Render the after-import success notice with next-action buttons.
 *
 * Shows for 5 minutes after an import (transient-controlled) or until
 * dismissed by the user.
 *
 * @return void
 */
function godevs_onboarding_after_import_notice(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                return;
        }
        $demo_id = get_transient( 'godevs_portfolio_just_imported' );
        if ( ! $demo_id ) {
                return;
        }
        // Get the homepage URL.
        $homepage_id = (int) get_option( 'page_on_front', 0 );
        $homepage_url = $homepage_id ? get_permalink( $homepage_id ) : home_url( '/' );
        $editor_url   = admin_url( 'site-editor.php' );
        $settings_url = admin_url( 'themes.php?page=godevs-portfolio-settings' );

        // Don't show on the demo library page itself — show on the next page they visit.
        if ( isset( $_GET['page'] ) && 'godevs-portfolio-demos' === sanitize_key( wp_unslash( $_GET['page'] ) ) ) {
                return;
        }
        ?>
        <div class="notice notice-success is-dismissible godevs-imported-notice" style="border-left-color:#00a32a;padding:16px 20px;">
                <div style="display:flex;align-items:flex-start;gap:14px;">
                        <div style="width:42px;height:42px;background:#00a32a;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;flex-shrink:0;">
                                <span class="dashicons dashicons-yes-alt" style="font-size:24px;"></span>
                        </div>
                        <div style="flex:1;">
                                <h3 style="margin:0 0 6px;font-size:15px;font-weight:600;">
                                        <?php esc_html_e( 'Demo imported successfully!', 'godevs-portfolio'); ?>
                                </h3>
                                <p style="margin:0 0 10px;font-size:13px;color:#50575e;">
                                        <?php esc_html_e( 'Your homepage is ready, header and footer are applied, and a navigation menu has been created. Here\'s what to do next:', 'godevs-portfolio'); ?>
                                </p>
                                <p style="margin:0;font-size:13px;">
                                        <a href="<?php echo esc_url( $homepage_url ); ?>" class="button button-primary" target="_blank" style="margin-right:6px;">
                                                <span class="dashicons dashicons-visibility" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'View Site', 'godevs-portfolio'); ?>
                                        </a>
                                        <a href="<?php echo esc_url( $editor_url ); ?>" class="button" style="margin-right:6px;">
                                                <span class="dashicons dashicons-edit-page" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Edit Homepage', 'godevs-portfolio'); ?>
                                        </a>
                                        <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=wp_navigation' ) ); ?>" class="button" style="margin-right:6px;">
                                                <span class="dashicons dashicons-menu" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Edit Navigation', 'godevs-portfolio'); ?>
                                        </a>
                                        <a href="<?php echo esc_url( $settings_url ); ?>" class="button">
                                                <span class="dashicons dashicons-admin-generic" style="vertical-align:middle;margin-top:-3px;margin-right:3px;"></span>
                                                <?php esc_html_e( 'Customize Theme', 'godevs-portfolio'); ?>
                                        </a>
                                </p>
                        </div>
                </div>
                <script>
                (function() {
                        var notice = document.querySelector('.godevs-imported-notice');
                        if (!notice) return;
                        notice.addEventListener('click', function(e) {
                                if (e.target.classList.contains('notice-dismiss') || e.target.closest('.notice-dismiss')) {
                                        fetch(ajaxurl, {
                                                method: 'POST',
                                                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                body: 'action=godevs_onboarding_dismiss_imported&_ajax_nonce=<?php echo esc_js( wp_create_nonce( 'godevs_onboarding_dismiss_imported' ) ); ?>'
                                        });
                                }
                        });
                })();
                </script>
        </div>
        <?php
}
add_action( 'admin_notices', 'godevs_onboarding_after_import_notice' );

/**
 * AJAX handler: dismiss the after-import notice.
 *
 * @return void
 */
function godevs_onboarding_dismiss_imported_ajax(): void {
        check_ajax_referer( 'godevs_onboarding_dismiss_imported', '_ajax_nonce' );
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio') ), 403 );
        }
        delete_transient( 'godevs_portfolio_just_imported' );
        wp_send_json_success();
}
add_action( 'wp_ajax_godevs_onboarding_dismiss_imported', 'godevs_onboarding_dismiss_imported_ajax' );

// ════════════════════════════════════════════════════════════════════════════
// 6. HELPER HOOK — fired by demo-importer after successful import
// ════════════════════════════════════════════════════════════════════════════

/**
 * Fire the godevs_portfolio_demo_imported action after a successful import.
 *
 * This is hooked by the after-import notice + dashboard widget. The
 * demo-importer.php file calls this action via do_action() at the end of
 * a successful import.
 *
 * Note: the demo-importer.php file was updated to call do_action() directly,
 * so this function exists only as a documentation marker. It is not called.
 *
 * @return void
 */
function godevs_onboarding_fire_import_action_marker(): void {
        // Documentation marker. See inc/demo-importer.php for the do_action() call.
}
