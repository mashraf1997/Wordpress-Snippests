//Set Woocommerce Order Limit Bassed On City
//Using This Plugin "Shipping Rates by City for WooCommerce" Download From: https://wordpress.org/plugins/flat-shipping-rate-by-city-for-woocommerce/
//Get City Shipping Value
function val(){
     $city = WC()->checkout->get_value("billing_city");
     global $wpdb;
     $val = $wpdb->get_var("SELECT cost FROM brh_wccfee_cities WHERE city_name='$city'");
     return $val;
}


//Replacing The Place Order Button When Total Volume Less Than City Shipping Value
add_filter( 'woocommerce_order_button_html', 'replace_order_button_html', 10, 2 );

function replace_order_button_html( $order_button ) {
    if( WC()->cart->total > val() ) return $order_button;
    $order_button_text = __( "لم يتم الوصول لأقل تلكفة للطلب", "woocommerce" );
    $style = ' style="color:#fff;pointer-events: none;cursor:not-allowed;background-color:#999;"';
    return '<a class="button alt"'.$style.' name="woocommerce_checkout_place_order" id="place_order" >' . esc_html( $order_button_text ) . '</a>';
}
