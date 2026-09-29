<?php
/**
 * Redirect to the home page after registration (WooCommerce)
 *
 * Usage: add to your theme's functions.php or a site-specific plugin.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function custom_redirection_after_registration( $redirection_url ) {
    return get_home_url(); // Change to the URL you want.
}
add_filter( 'woocommerce_registration_redirect', 'custom_redirection_after_registration', 10, 1 );
