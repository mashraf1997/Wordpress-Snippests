<?php
/**
 * Add WooCommerce Actions Sound Effects
 *
 * Plays a short sound on quantity minus/plus and add-to-cart, and another
 * sound when an order is placed (order-received page).
 *
 * Usage: add to your theme's functions.php or a site-specific plugin, and
 * replace the audio URLs with your own uploaded files.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

// Sound on quantity minus, plus and add to cart.
function effect() { ?>
    <script type="text/javascript">
        // WordPress ships jQuery in noConflict mode, so alias $ locally.
        jQuery(function ($) {
            var audio  = new Audio('https://example.com/wp-content/uploads/minus.mp3');
            var audio2 = new Audio('https://example.com/wp-content/uploads/plus.mp3');

            $(".plus, .add_to_cart_button").mousedown(function () {
                audio2.load();
                audio2.play();
            });

            $(".minus").mouseup(function () {
                audio.load();
                audio.play();
            });
        });
    </script>
<?php
}
add_action( 'wp_head', 'effect' );

// Sound on order placed.
function ordersound() {
    if ( is_checkout() && is_wc_endpoint_url( 'order-received' ) ) { ?>
    <script type="text/javascript">
        jQuery(window).on('load', function () {
            var audio2 = new Audio('https://example.com/wp-content/uploads/order.mp3');
            audio2.load();
            audio2.play();
        });
    </script>
<?php
    }
}
add_action( 'wp_head', 'ordersound' );
