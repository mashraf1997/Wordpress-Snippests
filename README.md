# WordPress & WooCommerce Snippets

A collection of small, self-contained PHP snippets for WordPress and WooCommerce — each one adds a single feature or tweak. They come from real client work at [MirrorORG](https://mirrororg.com/).

## How to use

Each `.php` file is an independent snippet. To use one:

1. Copy its contents into your theme's `functions.php`, or better, into a **site-specific plugin** or a code-snippets plugin so it survives theme updates.
2. Read the header comment at the top of the file for what it does, any required plugin, and the values you need to change (page IDs, URLs, currency, etc.).

Every file begins with `defined( 'ABSPATH' ) || exit;` so it can't be run directly outside WordPress.

## Snippets

| File | What it does |
| :--- | :--- |
| **Add Woocommerce Actions Sound Effects.php** | Plays sounds on quantity −/+, add-to-cart, and order placed. |
| **Add Woocommerce Phone Field To Registration Form.php** | Adds a required phone field to the WooCommerce registration form and saves it. |
| **Allow Some Pages To Be Publicly Accessible On Wordpress While Using Force Login.php** | Keeps chosen pages public when [WP Force Login](https://wordpress.org/plugins/wp-force-login/) is active. |
| **Css Based On User Role And Status.php** | Adds `logged-in` / `logged-out` and `user-role-<role>` classes to `<body>`. |
| **Disable Woocommerce Logout Confirmation.php** | Logs out instantly, clears the session, and redirects to a page you choose. |
| **Generate Forget Password Shortcode.php** | Registers a `[lost_password_form]` shortcode for WooCommerce's lost-password form. |
| **Hide Invite For Zoom Meetings When User Join Via Browser.php** | Hides the Zoom "Invite" button when the URL has a `?join=` parameter. |
| **Redirect To Home Page After Logout In Wordpress.php** | Sends users to the home page after logout. |
| **Redirect To Home Page After Register In Wordpress.php** | Sends users to the home page after WooCommerce registration. |
| **Set Woocommerce Order Limit Bassed On City.php** | Requires a per-city minimum order total before checkout is allowed. |
| **Show Only Logged In User Products.php** | Restricts the admin product list so authors see only their own products. |
| **Woocommerce Custom Curreny Symbol.php** | Registers the Egyptian Pound (EGP) currency and its `ج.م` symbol. |
| **Wordpress Redirect Users After Login Bassed On Their Role.php** | Redirects users after login according to their role. |

## Notes

These snippets use example values (page IDs, URLs, table prefixes). Review and adjust each one for your own site before deploying. Where a snippet depends on a plugin, the plugin is named in the file header and the table above.

## License

[MIT](./LICENSE)
