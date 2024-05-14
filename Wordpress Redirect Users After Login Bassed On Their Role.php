//Wordpress Redirect Users After Login Bassed On Their Role
//Custom Redirect After Login

function wc_custom_user_redirect() {
  // Get the first of all the roles assigned to the user
  $role = $user->roles[0];
  $dashboard = get_dashboard_url;
  $home = get_home_url();
  if( $role == 'administrator' ) {
    //Redirect administrators to the dashboard
    $redirect = $dashboard;
  } 
  elseif ( $role == 'shop-manager' ) {
    //Redirect shop managers to the dashboard
    $redirect = $home;
  } 
  elseif ( $role == 'editor' ) {
    //Redirect editors to the dashboard
    $redirect = $home;
  } 
  elseif ( $role == 'author' ) {
    //Redirect authors to the dashboard
    $redirect = $home;
  } 
  elseif ( $role == 'customer' || $role == 'subscriber' ) {
    //Redirect customers and subscribers to the "My Account" page
    $redirect = $home; 
  }
   
  else {
    //Redirect any other role to the home
    $redirect = $home; 
  }
  return $redirect;
}
add_filter( 'woocommerce_login_redirect', 'wc_custom_user_redirect', 10, 2 ); 
