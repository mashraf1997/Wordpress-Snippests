<?php
/**
 * Disable the WooCommerce logout confirmation
 *
 * Logs the user out immediately (no "are you sure?" page), destroys the
 * session, clears the auth cookies and redirects to a custom page.
 *
 * Usage: set $url to the page visitors should land on after logout.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function disable_wc_logout_confirmation() {
    global $wp;
    if ( isset( $wp->query_vars['customer-logout'] ) ) {
        wp_destroy_current_session();
        wp_clear_auth_cookie();
        $url = home_url(); // Change to the page you want to redirect to.
        wp_safe_redirect( $url );
        exit;
    }
}
add_action( 'template_redirect', 'disable_wc_logout_confirmation' );
