<?php 
    /**
     * php/theme/functions/admin.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<?php 
    // CUSTOM ADMIN LOGIN LOGO
        function custom_login_logo() {
            echo
            '<style type="text/css">
                h1 {
                    margin-bottom: 1.50rem !important;
                }
                h1 a {
                    height: 209px !important;
                    width: 100.00% !important;
                    display: block;
                    background-image: url('.get_bloginfo('template_directory').'/images/logos/logo-seem-full-color.svg) !important;
                    background-size: 100.00% !important;
                    margin: 0.00rem !important;
                }
            </style>';
        }

        add_action('login_head', 'custom_login_logo');

    // REPLACE FOOTER TEXT
        function remove_footer_admin() {
            echo '<p><strong>Southeast Energy Exchange Market Website Administration |</strong> <a href="/" target="_blank">Visit Site</a></p>';
        }

        add_filter('admin_footer_text', 'remove_footer_admin');
?>