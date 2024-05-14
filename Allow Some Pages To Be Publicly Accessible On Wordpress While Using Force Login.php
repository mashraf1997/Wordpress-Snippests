Allow Some Pages To Be Publicly Accessible On Wordpress While Using Force Login | Download From : https://wordpress.org/plugins/wp-force-login/
function my_forcelogin_bypass( $bypass, $visited_url ) {
  if ( is_page(316) ) {
    $bypass = true;
  }
  if ( is_page(313) ) {
    $bypass = true;
  }
  if ( is_page(840) ) {
    $bypass = true;
  }
	if ( is_page(3) ) {
    $bypass = true;
  }
  if ( is_page(965) ) {
    $bypass = true;
  }
  return $bypass;
}
add_filter( 'v_forcelogin_bypass', 'my_forcelogin_bypass', 10, 2 );

//Change The Login Page To Custom Page
function my_login_page() {
    return "https://alborhimy.com/ar/signin/";
}
add_filter( 'login_url', 'my_login_page', 10, 2 );
