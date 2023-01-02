<?php

//Displays the menu of the plugin.

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function rest_wp_admin_menu() {
  add_menu_page(
    'Rest WP', // Page title
    'Rest WP', // Menu title
    'manage_options', // Capability required to access the page
    'rest-wp', // Menu slug
    'rest_wp_page_content', // Function that will be used to display the page content
    'dashicons-rest-api',
    2
  );
}
add_action( 'admin_menu', 'rest_wp_admin_menu' );

