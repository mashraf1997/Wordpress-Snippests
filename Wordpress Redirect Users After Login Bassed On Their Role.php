<?php
/**
 * Redirect users after login based on their role (WooCommerce)
 *
 * Administrators go to the dashboard; everyone else goes to the home page.
 * Adjust the branches to send each role wherever you like.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function wc_custom_user_redirect( $redirect, $user ) {
    // WooCommerce passes the logged-in user to this filter.
    $role = ! empty( $user->roles ) ? $user->roles[0] : '';
    $home = get_home_url();

    switch ( $role ) {
        case 'administrator':
            $redirect = get_dashboard_url( $user->ID );
            break;
        case 'shop-manager':
        case 'editor':
        case 'author':
        case 'customer':
        case 'subscriber':
        default:
            $redirect = $home;
            break;
    }

    return $redirect;
}
add_filter( 'woocommerce_login_redirect', 'wc_custom_user_redirect', 10, 2 );
