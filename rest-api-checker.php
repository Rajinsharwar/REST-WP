<?php
/**
 * Plugin Name: REST WP
 * Description: Simplify your API management with REST WP - the user-friendly, reliable, and secure plugin for testing and utilizing APIs from your WordPress dashboard!
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/rajinsharwar
 * Version: 1.0.0
 * Text Domain: restwp
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function rest_wp_activation_redirect( $plugin ) {
    if( $plugin == plugin_basename( __FILE__ ) ) {
        exit( wp_redirect( admin_url( 'admin.php?page=rest-wp' ) ) );
    }
}
add_action( 'activated_plugin', 'rest_wp_activation_redirect' );

require_once (plugin_dir_path(__FILE__). 'admin/view.php');
require_once (plugin_dir_path(__FILE__). 'admin/functions.php');
