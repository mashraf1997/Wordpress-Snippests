<?php
/**
 * Add a Phone field to the WooCommerce registration form
 *
 * Adds a required phone number field to the registration form and saves it to
 * the customer's user meta (billing_phone).
 *
 * Usage: add to your theme's functions.php or a site-specific plugin.
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

// Front-end field.
function wooc_extra_register_fields() { ?>
    <p class="form-row form-row-wide">
        <label for="reg_billing_phone"><?php esc_html_e( 'Phone', 'woocommerce' ); ?></label>
        <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone"
               value="<?php echo isset( $_POST['billing_phone'] ) ? esc_attr( wp_unslash( $_POST['billing_phone'] ) ) : ''; ?>" required />
    </p>
    <div class="clear"></div>
    <?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

// Save the phone number to the user profile.
function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_phone'] ) ) {
        update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( wp_unslash( $_POST['billing_phone'] ) ) );
    }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );
