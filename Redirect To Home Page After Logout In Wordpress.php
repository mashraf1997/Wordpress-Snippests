<?php
/**
 * Redirect to the home page after logout
 *
 * Usage: add to your theme's functions.php or a site-specific plugin.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function auto_redirect_after_logout() {
    wp_safe_redirect( home_url() );
    exit;
}
add_action( 'wp_logout', 'auto_redirect_after_logout' );
