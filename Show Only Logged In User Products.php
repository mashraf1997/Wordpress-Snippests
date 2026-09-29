<?php
/**
 * Show authors only their own products in the admin product list
 *
 * Administrators still see everything; every other role sees only the products
 * they created.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function admin_pre_get_posts_product_query( $query ) {
    global $pagenow;

    if ( current_user_can( 'administrator' ) ) {
        return; // Admins see all products.
    }

    if ( is_admin() && 'edit.php' === $pagenow
        && isset( $_GET['post_type'] ) && 'product' === $_GET['post_type'] ) {
        $query->set( 'author', get_current_user_id() );
    }
}
add_action( 'pre_get_posts', 'admin_pre_get_posts_product_query' );
