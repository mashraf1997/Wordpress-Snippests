<?php
/**
 * "Forgot password" shortcode
 *
 * Registers a [lost_password_form] shortcode that renders WooCommerce's
 * lost-password form, useful on custom login pages.
 *
 * Usage: place [lost_password_form] in any page or post.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function wc_custom_lost_password_form( $atts ) {
    return wc_get_template( 'myaccount/form-lost-password.php', array( 'form' => 'lost_password' ) );
}
add_shortcode( 'lost_password_form', 'wc_custom_lost_password_form' );
