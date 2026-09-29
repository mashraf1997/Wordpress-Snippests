<?php
/**
 * Minimum order total based on the customer's city
 *
 * Reads a per-city minimum cost from the "Shipping Rates by City" plugin table
 * and disables the Place Order button until the cart total reaches it.
 *
 * Requires: Flat Shipping Rate by City for WooCommerce
 *   https://wordpress.org/plugins/flat-shipping-rate-by-city-for-woocommerce/
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

// Get the minimum cost configured for the checkout city.
function val() {
    $city = WC()->checkout->get_value( 'billing_city' );
    global $wpdb;

    // Parameterized query: $city is user input and must never be concatenated.
    return $wpdb->get_var(
        $wpdb->prepare(
            "SELECT cost FROM {$wpdb->prefix}wccfee_cities WHERE city_name = %s",
            $city
        )
    );
}

// Replace the Place Order button when the cart total is below the city minimum.
function replace_order_button_html( $order_button ) {
    $min = val();
    if ( $min === null || WC()->cart->total > $min ) {
        return $order_button;
    }
    $order_button_text = __( 'لم يتم الوصول لأقل تكلفة للطلب', 'woocommerce' );
    $style = ' style="color:#fff;pointer-events:none;cursor:not-allowed;background-color:#999;"';
    return '<a class="button alt"' . $style . ' name="woocommerce_checkout_place_order" id="place_order">' . esc_html( $order_button_text ) . '</a>';
}
add_filter( 'woocommerce_order_button_html', 'replace_order_button_html', 10, 2 );
