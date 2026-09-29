<?php
/**
 * Add user role and login status as <body> classes
 *
 * Adds "logged-in"/"logged-out" and "user-role-<role>" classes to the body so
 * you can target them from CSS.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function add_user_role_body_class( $classes ) {
    if ( is_user_logged_in() ) {
        $user  = wp_get_current_user();
        $roles = $user->roles;

        $classes[] = 'logged-in';

        if ( ! empty( $roles ) && is_array( $roles ) ) {
            foreach ( $roles as $role ) {
                $classes[] = 'user-role-' . $role;
            }
        }
    } else {
        $classes[] = 'logged-out';
    }

    return $classes;
}
add_filter( 'body_class', 'add_user_role_body_class' );
