//Show Only Logged In User Products
add_action( 'pre_get_posts', 'admin_pre_get_posts_product_query' );
function admin_pre_get_posts_product_query( $query ) {
    global $pagenow;
    //Show All To Admins
    if( current_user_can( 'administrator' ) ) return;
    // Targeting admin product list
    if( is_admin() && 'edit.php' == $pagenow && isset($_GET['post_type']) && 'product' === $_GET['post_type'] ) {
        $query->set( 'author', get_current_user_id() ); // Only displays the products created by the current user
    }
}
