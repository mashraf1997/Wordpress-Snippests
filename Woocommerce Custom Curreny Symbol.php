<?php
/**
 * Add the Egyptian Pound (EGP) currency and its symbol to WooCommerce
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

// Register the currency.
function add_my_currency( $currencies ) {
    $currencies['EGP'] = __( 'Egyptian Pound', 'woocommerce' );
    return $currencies;
}
add_filter( 'woocommerce_currencies', 'add_my_currency' );

// Set its symbol.
function add_my_currency_symbol( $currency_symbol, $currency ) {
    if ( 'EGP' === $currency ) {
        $currency_symbol = 'ج.م';
    }
    return $currency_symbol;
}
add_filter( 'woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2 );
