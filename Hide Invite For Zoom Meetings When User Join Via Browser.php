<?php
/**
 * Hide the Zoom "Invite" button when a user joins a meeting via the browser
 *
 * When the URL contains a "?join=" parameter, hides the first button in the
 * Zoom participants footer with CSS (plus a JS fallback for slow loads).
 *
 * @package mashraf1997/wordpress-snippets
 */

defined( 'ABSPATH' ) || exit;

function hide_button_on_join_parameter() {
    if ( strpos( $_SERVER['REQUEST_URI'], '?join=' ) !== false ) { ?>
        <style>
            /* Hide the first button inside the participants footer. */
            .participants-section-container__participants-footer-bottom button:nth-child(1) {
                display: none !important;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                setTimeout(function () {
                    var btn = document.querySelector('.participants-section-container__participants-footer-bottom button:nth-child(1)');
                    if (btn) { btn.style.display = 'none'; }
                }, 1000);
            });
        </script>
        <?php
    }
}
add_action( 'wp_head', 'hide_button_on_join_parameter' );
