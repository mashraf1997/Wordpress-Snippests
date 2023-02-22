//Add Woocommerce Actions Sound Effects
//Sound On Quantity Minus, Plus And Add To Cart 
function effect() {?>
    <script type="text/javascript">
        $(document).ready(function() {

          var audio  = new Audio('https://alborhimy.com/wp-content/uploads/2023/02/WhatsApp-Audio-2023-02-21-at-08.57.13-High-quality.mp3');
          var audio2 = new Audio('https://alborhimy.com/wp-content/uploads/2023/02/WhatsApp-Audio-2023-02-21-at-08.56.55-High-quality.mp3')

          $(".plus,.add_to_cart_button").mousedown(function() {
            audio2.load();
            audio2.play();
          });

          $(".minus").mouseup(function() {
            audio.load();
            audio.play();
          });
        });
    </script>
<?php
}
add_action('wp_head','effect');

//Sound On Order Placed
function ordersound() {
if ( is_checkout() && !empty( is_wc_endpoint_url('order-received') ) ) {?>
    <script type="text/javascript">
        $(window ).load(function() {
        var audio2 = new Audio('https://alborhimy.com/wp-content/uploads/2023/02/WhatsApp-Audio-2023-02-21-at-08.57.27-High-quality.mp3')
        audio2.load();
        audio2.play();});	
    </script>
<?php
}}
add_action('wp_head','ordersound');
