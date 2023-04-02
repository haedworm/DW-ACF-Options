<?php
/*
Plugin Name: DW ACF Options
Plugin URI: https://dwoodley.co.uk/
Description: Plugin to an add ACF Options Page
Version: 1.0
Author: dazzie
Author URI: https://dwoodley.co.uk/
*/

// Add ACF Options Page as a sub-menu of Settings
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Global ACF Fields',
        'menu_title' => 'Global ACF Fields',
        'menu_slug' => 'dw-acf-options',
        'capability' => 'manage_options',
        'position' => 30,
        'icon_url' => 'dashicons-admin-generic',
        'parent_slug' => 'options-general.php',
    ));
}
