<?php
/**
 * Allow specific pages to stay public while using WP Force Login
 *
 * Bypasses the forced login for the listed page IDs, and points the plugin's
 * login URL at a custom sign-in page.
 *
 * Requires: WP Force Login — https://wordpress.org/plugins/wp-force-login/
 * Usage: replace the page IDs and the login URL with your own.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function my_forcelogin_bypass( $bypass, $visited_url ) {
    $public_pages = array( 316, 313, 840, 3, 965 );
    if ( is_page( $public_pages ) ) {
        $bypass = true;
    }
    return $bypass;
}
add_filter( 'v_forcelogin_bypass', 'my_forcelogin_bypass', 10, 2 );

// Change the login page to a custom page.
function my_login_page() {
    return 'https://example.com/signin/';
}
add_filter( 'login_url', 'my_login_page', 10, 2 );
