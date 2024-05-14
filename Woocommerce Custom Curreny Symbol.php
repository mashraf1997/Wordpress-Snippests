//Woocommerce Custom Curreny Symbol
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ){
     $currencies['ُEGP'] = __( 'Egyption Pound', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'EGP': $currency_symbol = 'ج.م'; break;}
     return $currency_symbol;
}
