//Disable Woocommerce Logout Confirmation And Clear Cookies Then Redirect to Custom Page
function disable_wc_logout_confirmation(){
	global $wp;
    if(isset($wp->query_vars['customer-logout'])){
        wp_redirect(str_replace('&amp;','&',wp_logout_url( wc_get_page_permalink('myaccount'))));
		    wp_destroy_current_session();
    	  wp_clear_auth_cookie();
		    $url="Page URL Here";
		    wp_redirect( $url );
	  exit;
    }
}
add_action('template_redirect', 'disable_wc_logout_confirmation');
