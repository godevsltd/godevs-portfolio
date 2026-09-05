<?php
/**
 * Booking Management System.
 *
 * Provides a professional admin UX for managing bookings:
 *   - Custom list-table columns (name, email, phone, service, date/time, status)
 *   - Status filter dropdown (pending / confirmed / completed / cancelled)
 *   - Bulk status update actions
 *   - Admin meta box for booking details + status management
 *   - Email notifications on booking submission + status change
 *   - Admin notices after status changes
 *   - Booking status workflow (pending → confirmed → completed / cancelled)
 *
 * @package GoDevs_Portfolio
 * @since   2.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Valid booking statuses (the workflow).
 *
 * pending → confirmed → completed
 *         ↘ cancelled (terminal)
 *
 * @return array<string,string> Map of status slug → human-readable label.
 */
function godevs_booking_get_statuses(): array {
        return array(
                'pending'   => __( 'Pending', 'godevs-portfolio' ),
                'confirmed' => __( 'Confirmed', 'godevs-portfolio' ),
                'completed' => __( 'Completed', 'godevs-portfolio' ),
                'cancelled' => __( 'Cancelled', 'godevs-portfolio' ),
        );
}

/**
 * Sanitize a booking status — must be one of the valid statuses.
 *
 * @param mixed $value Raw status input.
 * @return string Sanitized status (defaults to 'pending').
 */
function godevs_booking_sanitize_status( $value ): string {
        $value = sanitize_key( $value );
        $valid = array_keys( godevs_booking_get_statuses() );
        return in_array( $value, $valid, true ) ? $value : 'pending';
}

/**
 * Register custom columns for the booking admin list table.
 *
 * @param array $columns Existing columns.
 * @return array Modified columns.
 */
function godevs_booking_list_columns( array $columns ): array {
        // Remove the date column (we'll replace with our own).
        unset( $columns['date'] );
        // Remove the author column (not useful for bookings).
        unset( $columns['author'] );

        $columns['booking_client']    = __( 'Client', 'godevs-portfolio' );
        $columns['booking_contact']   = __( 'Contact', 'godevs-portfolio' );
        $columns['booking_service']   = __( 'Service', 'godevs-portfolio' );
        $columns['booking_date_time'] = __( 'Date &amp; Time', 'godevs-portfolio' );
        $columns['booking_status']    = __( 'Status', 'godevs-portfolio' );
        $columns['date']              = __( 'Submitted', 'godevs-portfolio' );

        return $columns;
}
add_filter( 'manage_godevs_booking_posts_columns', 'godevs_booking_list_columns' );

/**
 * Render custom column content for bookings.
 *
 * @param string $column  Column key.
 * @param int    $post_id Post ID.
 */
function godevs_booking_list_column_content( string $column, int $post_id ): void {
        switch ( $column ) {
                case 'booking_client':
                        $name = get_post_meta( $post_id, '_godevs_booking_name', true );
                        echo '<strong>' . esc_html( $name ?: '—' ) . '</strong>';
                        break;
                case 'booking_contact':
                        $email = get_post_meta( $post_id, '_godevs_booking_email', true );
                        $phone = get_post_meta( $post_id, '_godevs_booking_phone', true );
                        if ( $email ) {
                                echo '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a><br>';
                        }
                        if ( $phone ) {
                                echo '<a href="tel:' . esc_attr( $phone ) . '">' . esc_html( $phone ) . '</a>';
                        }
                        if ( ! $email && ! $phone ) {
                                echo '—';
                        }
                        break;
                case 'booking_service':
                        $service = get_post_meta( $post_id, '_godevs_booking_service', true );
                        echo esc_html( $service ?: '—' );
                        break;
                case 'booking_date_time':
                        $date = get_post_meta( $post_id, '_godevs_booking_date', true );
                        $time = get_post_meta( $post_id, '_godevs_booking_time', true );
                        if ( $date && $time ) {
                                echo esc_html( $date . ' ' . $time );
                        } elseif ( $date ) {
                                echo esc_html( $date );
                        } else {
                                echo '—';
                        }
                        break;
                case 'booking_status':
                        $status   = get_post_meta( $post_id, '_godevs_booking_status', true ) ?: 'pending';
                        $statuses = godevs_booking_get_statuses();
                        $label    = $statuses[ $status ] ?? ucfirst( $status );
                        $class    = 'godevs-booking-status-' . esc_attr( $status );
                        echo '<span class="godevs-booking-status-badge ' . esc_attr( $class ) . '">' . esc_html( $label ) . '</span>';
                        break;
        }
}
add_action( 'manage_godevs_booking_posts_custom_column', 'godevs_booking_list_column_content', 10, 2 );

/**
 * Make booking columns sortable.
 *
 * @param array $columns Existing sortable columns.
 * @return array Modified sortable columns.
 */
function godevs_booking_sortable_columns( array $columns ): array {
        $columns['booking_status']    = 'booking_status';
        $columns['booking_date_time'] = 'booking_date_time';
        return $columns;
}
add_filter( 'manage_edit-godevs_booking_sortable_columns', 'godevs_booking_sortable_columns' );

/**
 * Add the status filter dropdown to the booking list table.
 */
function godevs_booking_status_filter(): void {
        global $typenow;
        if ( 'godevs_booking' !== $typenow ) {
                return;
        }

        $current = isset( $_GET['booking_status'] ) ? sanitize_key( wp_unslash( $_GET['booking_status'] ) ) : '';
        ?>
        <label for="filter-by-booking-status" class="screen-reader-text"><?php esc_html_e( 'Filter by status', 'godevs-portfolio' ); ?></label>
        <select name="booking_status" id="filter-by-booking-status">
                <option value=""><?php esc_html_e( 'All statuses', 'godevs-portfolio' ); ?></option>
                <?php foreach ( godevs_booking_get_statuses() as $slug => $label ) : ?>
                        <option value="<?php echo esc_attr( $slug ); ?>"<?php selected( $current, $slug ); ?>><?php echo esc_html( $label ); ?></option>
                <?php endforeach; ?>
        </select>
        <?php
}
add_action( 'restrict_manage_posts', 'godevs_booking_status_filter' );

/**
 * Apply the status filter to the booking query.
 *
 * @param WP_Query $query The WP_Query object.
 */
function godevs_booking_status_filter_query( WP_Query $query ): void {
        global $pagenow;
        if ( 'edit.php' !== $pagenow ) {
                return;
        }
        if ( 'godevs_booking' !== ( $query->get( 'post_type' ) ) ) {
                return;
        }
        if ( ! is_admin() ) {
                return;
        }

        $status = isset( $_GET['booking_status'] ) ? sanitize_key( wp_unslash( $_GET['booking_status'] ) ) : '';
        if ( ! $status ) {
                return;
        }

        $meta_query = $query->get( 'meta_query', array() );
        $meta_query[] = array(
                'key'   => '_godevs_booking_status',
                'value' => $status,
        );
        $query->set( 'meta_query', $meta_query );
}
add_action( 'pre_get_posts', 'godevs_booking_status_filter_query' );

/**
 * Add bulk actions for booking status changes.
 *
 * @param array $actions Existing bulk actions.
 * @return array Modified bulk actions.
 */
function godevs_booking_bulk_actions( array $actions ): array {
        global $typenow;
        if ( 'godevs_booking' !== $typenow ) {
                return $actions;
        }

        $actions['mark_confirmed'] = __( 'Mark as Confirmed', 'godevs-portfolio' );
        $actions['mark_completed'] = __( 'Mark as Completed', 'godevs-portfolio' );
        $actions['mark_cancelled'] = __( 'Mark as Cancelled', 'godevs-portfolio' );
        $actions['mark_pending']   = __( 'Mark as Pending', 'godevs-portfolio' );

        return $actions;
}
add_filter( 'bulk_actions-edit-godevs_booking', 'godevs_booking_bulk_actions' );

/**
 * Handle booking bulk status changes.
 *
 * @param string $redirect_to Redirect URL.
 * @param string $doaction    Action being performed.
 * @param array  $post_ids    Array of post IDs.
 * @return string Modified redirect URL.
 */
function godevs_booking_handle_bulk_actions( string $redirect_to, string $doaction, array $post_ids ): string {
        $status_map = array(
                'mark_confirmed' => 'confirmed',
                'mark_completed' => 'completed',
                'mark_cancelled' => 'cancelled',
                'mark_pending'   => 'pending',
        );

        if ( ! isset( $status_map[ $doaction ] ) ) {
                return $redirect_to;
        }

        $new_status = $status_map[ $doaction ];
        $changed    = 0;

        foreach ( $post_ids as $post_id ) {
                if ( ! current_user_can( 'edit_post', $post_id ) ) {
                        continue;
                }
                $old_status = get_post_meta( $post_id, '_godevs_booking_status', true ) ?: 'pending';
                if ( $old_status === $new_status ) {
                        continue;
                }
                update_post_meta( $post_id, '_godevs_booking_status', $new_status );
                // Send email notification about the status change.
                godevs_booking_send_status_email( $post_id, $new_status, $old_status );
                $changed++;
        }

        $redirect_to = add_query_arg( array( 'booking_status_changed' => $changed ), $redirect_to );
        return $redirect_to;
}
add_filter( 'handle_bulk_actions-edit-godevs_booking', 'godevs_booking_handle_bulk_actions', 10, 3 );

/**
 * Show admin notice after bulk status change.
 */
function godevs_booking_admin_notices(): void {
        if ( ! isset( $_GET['booking_status_changed'] ) ) {
                return;
        }
        $count = (int) $_GET['booking_status_changed'];
        if ( $count < 1 ) {
                return;
        }
        ?>
        <div class="notice notice-success is-dismissible">
                <p>
                        <?php
                        echo esc_html(
                                sprintf(
                                        /* translators: %d: number of bookings updated. */
                                        _n( '%d booking status updated.', '%d booking statuses updated.', $count, 'godevs-portfolio' ),
                                        $count
                                )
                        );
                        ?>
                </p>
        </div>
        <?php
}
add_action( 'admin_notices', 'godevs_booking_admin_notices' );

/**
 * Register the booking details meta box.
 */
function godevs_booking_add_meta_box(): void {
        add_meta_box(
                'godevs-booking-details',
                __( 'Booking Details', 'godevs-portfolio' ),
                'godevs_booking_render_meta_box',
                'godevs_booking',
                'normal',
                'high'
        );
}
add_action( 'add_meta_boxes', 'godevs_booking_add_meta_box' );

/**
 * Render the booking details meta box.
 *
 * @param WP_Post $post The booking post object.
 */
function godevs_booking_render_meta_box( WP_Post $post ): void {
        wp_nonce_field( 'godevs_booking_meta', 'godevs_booking_meta_nonce' );

        $name       = get_post_meta( $post->ID, '_godevs_booking_name', true );
        $email      = get_post_meta( $post->ID, '_godevs_booking_email', true );
        $phone      = get_post_meta( $post->ID, '_godevs_booking_phone', true );
        $date       = get_post_meta( $post->ID, '_godevs_booking_date', true );
        $time       = get_post_meta( $post->ID, '_godevs_booking_time', true );
        $service    = get_post_meta( $post->ID, '_godevs_booking_service', true );
        $message    = get_post_meta( $post->ID, '_godevs_booking_message', true );
        $status     = get_post_meta( $post->ID, '_godevs_booking_status', true ) ?: 'pending';
        $admin_notes = get_post_meta( $post->ID, '_godevs_booking_admin_notes', true );
        $statuses   = godevs_booking_get_statuses();
        ?>
        <table class="form-table" role="presentation">
                <tr>
                        <th scope="row"><label for="_godevs_booking_name"><?php esc_html_e( 'Client Name', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="text" name="_godevs_booking_name" id="_godevs_booking_name" value="<?php echo esc_attr( $name ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_email"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="email" name="_godevs_booking_email" id="_godevs_booking_email" value="<?php echo esc_attr( $email ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_phone"><?php esc_html_e( 'Phone', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="tel" name="_godevs_booking_phone" id="_godevs_booking_phone" value="<?php echo esc_attr( $phone ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_service"><?php esc_html_e( 'Service', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="text" name="_godevs_booking_service" id="_godevs_booking_service" value="<?php echo esc_attr( $service ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_date"><?php esc_html_e( 'Preferred Date', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="date" name="_godevs_booking_date" id="_godevs_booking_date" value="<?php echo esc_attr( $date ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_time"><?php esc_html_e( 'Preferred Time', 'godevs-portfolio' ); ?></label></th>
                        <td><input type="time" name="_godevs_booking_time" id="_godevs_booking_time" value="<?php echo esc_attr( $time ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_status"><?php esc_html_e( 'Status', 'godevs-portfolio' ); ?></label></th>
                        <td>
                                <select name="_godevs_booking_status" id="_godevs_booking_status">
                                        <?php foreach ( $statuses as $slug => $label ) : ?>
                                                <option value="<?php echo esc_attr( $slug ); ?>"<?php selected( $status, $slug ); ?>><?php echo esc_html( $label ); ?></option>
                                        <?php endforeach; ?>
                                </select>
                                <p class="description"><?php esc_html_e( 'Changing the status will send an email notification to the client.', 'godevs-portfolio' ); ?></p>
                        </td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_message"><?php esc_html_e( 'Client Message', 'godevs-portfolio' ); ?></label></th>
                        <td><textarea name="_godevs_booking_message" id="_godevs_booking_message" rows="4" class="large-text"><?php echo esc_textarea( $message ); ?></textarea></td>
                </tr>
                <tr>
                        <th scope="row"><label for="_godevs_booking_admin_notes"><?php esc_html_e( 'Admin Notes', 'godevs-portfolio' ); ?></label></th>
                        <td><textarea name="_godevs_booking_admin_notes" id="_godevs_booking_admin_notes" rows="4" class="large-text" placeholder="<?php esc_attr_e( 'Internal notes (not shown to client)', 'godevs-portfolio' ); ?>"><?php echo esc_textarea( $admin_notes ); ?></textarea></td>
                </tr>
        </table>
        <?php
}

/**
 * Save booking meta when the post is saved.
 *
 * @param int $post_id Post ID being saved.
 */
function godevs_booking_save_meta( int $post_id ): void {
        // Bail on autosave.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
        // Bail on AJAX (Quick Edit) and Cron.
        if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
                return;
        }
        if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
                return;
        }
        // Verify nonce.
        if ( empty( $_POST['godevs_booking_meta_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['godevs_booking_meta_nonce'] ), 'godevs_booking_meta' ) ) {
                return;
        }
        // Check post type.
        if ( 'godevs_booking' !== get_post_type( $post_id ) ) {
                return;
        }
        // Check capability.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
        }

        // Save fields.
        $fields = array(
                '_godevs_booking_name'        => 'sanitize_text_field',
                '_godevs_booking_email'       => 'sanitize_email',
                '_godevs_booking_phone'       => 'sanitize_text_field',
                '_godevs_booking_service'     => 'sanitize_text_field',
                '_godevs_booking_date'        => 'sanitize_text_field',
                '_godevs_booking_time'        => 'sanitize_text_field',
                '_godevs_booking_message'     => 'sanitize_textarea_field',
                '_godevs_booking_admin_notes' => 'sanitize_textarea_field',
        );

        foreach ( $fields as $key => $sanitize ) {
                if ( isset( $_POST[ $key ] ) ) {
                        $value = call_user_func( $sanitize, wp_unslash( $_POST[ $key ] ) );
                        update_post_meta( $post_id, $key, $value );
                }
        }

        // Handle status change + email notification.
        if ( isset( $_POST['_godevs_booking_status'] ) ) {
                $new_status = godevs_booking_sanitize_status( wp_unslash( $_POST['_godevs_booking_status'] ) );
                $old_status = get_post_meta( $post_id, '_godevs_booking_status', true ) ?: 'pending';
                if ( $new_status !== $old_status ) {
                        update_post_meta( $post_id, '_godevs_booking_status', $new_status );
                        godevs_booking_send_status_email( $post_id, $new_status, $old_status );
                }
        }
}
add_action( 'save_post_godevs_booking', 'godevs_booking_save_meta' );

/**
 * Send a status-change email notification to the client.
 *
 * @param int    $post_id    Booking post ID.
 * @param string $new_status New status slug.
 * @param string $old_status Old status slug.
 */
function godevs_booking_send_status_email( int $post_id, string $new_status, string $old_status ): void {
        $email = get_post_meta( $post_id, '_godevs_booking_email', true );
        if ( ! $email || ! is_email( $email ) ) {
                return;
        }

        $name       = get_post_meta( $post_id, '_godevs_booking_name', true );
        $service    = get_post_meta( $post_id, '_godevs_booking_service', true );
        $date       = get_post_meta( $post_id, '_godevs_booking_date', true );
        $time       = get_post_meta( $post_id, '_godevs_booking_time', true );
        $statuses   = godevs_booking_get_statuses();
        $status_label = $statuses[ $new_status ] ?? ucfirst( $new_status );

        $site_name  = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );
        $admin_email = get_bloginfo( 'admin_email' );

        $subject = sprintf(
                /* translators: 1: site name, 2: status label. */
                __( '[%1$s] Your booking is now %2$s', 'godevs-portfolio' ),
                $site_name,
                $status_label
        );

        $message  = sprintf( __( 'Hello %s,', 'godevs-portfolio' ), $name ?: '' ) . "\n\n";
        $message .= sprintf(
                /* translators: 1: status label. */
                __( 'Your booking status has been updated to: %s', 'godevs-portfolio' ),
                $status_label
        ) . "\n\n";

        if ( $service ) {
                $message .= sprintf( __( 'Service: %s', 'godevs-portfolio' ), $service ) . "\n";
        }
        if ( $date ) {
                $message .= sprintf( __( 'Date: %s', 'godevs-portfolio' ), $date );
                if ( $time ) {
                        $message .= ' ' . $time;
                }
                $message .= "\n";
        }

        $message .= "\n" . __( 'Thank you for choosing us.', 'godevs-portfolio' ) . "\n\n";
        $message .= sprintf( __( '— %s', 'godevs-portfolio' ), $site_name );

        $headers = array(
                'From: ' . $site_name . ' <' . $admin_email . '>',
                'Content-Type: text/plain; charset=UTF-8',
        );

        wp_mail( $email, $subject, $message, $headers );
}

/**
 * Enqueue admin CSS for booking status badges.
 */
function godevs_booking_admin_styles( string $hook ): void {
        global $typenow;
        if ( 'godevs_booking' !== $typenow && 'post.php' !== $hook && 'post-new.php' !== $hook ) {
                return;
        }
        $css = '
        .godevs-booking-status-badge {
                display: inline-block;
                padding: 2px 10px;
                border-radius: 999px;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.04em;
        }
        .godevs-booking-status-pending { background: #fef3c7; color: #b45309; }
        .godevs-booking-status-confirmed { background: #dbeafe; color: #1e40af; }
        .godevs-booking-status-completed { background: #dcfce7; color: #15803d; }
        .godevs-booking-status-cancelled { background: #fee2e2; color: #b91c1c; }
        ';
        wp_add_inline_style( 'wp-admin', $css );
}
add_action( 'admin_enqueue_scripts', 'godevs_booking_admin_styles' );

/**
 * Set default booking status on new booking creation.
 *
 * Hooked to `save_post_godevs_booking` (the post-type-specific save hook)
 * rather than `wp_insert_post` (which fires for every post type, adding
 * overhead to every save across the site). The $update parameter tells
 * us whether this is a new insert (false) or an update (true).
 *
 * @param int     $post_id Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an update (vs new).
 */
function godevs_booking_set_default_status( int $post_id, WP_Post $post, bool $update ): void {
        if ( $update ) {
                return;
        }
        // Only set if not already set (e.g. by the front-end booking form,
        // which sets _godevs_booking_status to 'pending' explicitly).
        $existing = get_post_meta( $post_id, '_godevs_booking_status', true );
        if ( ! $existing ) {
                update_post_meta( $post_id, '_godevs_booking_status', 'pending' );
        }
}
add_action( 'save_post_godevs_booking', 'godevs_booking_set_default_status', 10, 3 );
