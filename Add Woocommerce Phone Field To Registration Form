//Add Woocommerce Phone Field To Registration Form
//Front-End Field Code
function wooc_extra_register_fields() {?>
       <p class="form-row form-row-wide">
       <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
       <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" required />
       </p>
       <div class="clear"></div>
       <?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

//Save Phone Number To User Profile
function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_phone'] ) ) {
                 // Phone input filed which is used in WooCommerce
                 update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
          }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' ); 
