<?php
/*
Plugin Name: DW ACF Options
Plugin URI: https://dwoodley.co.uk/
Description: Plugin to an add ACF Options Page
Version: 1.0.01
Author: dazzie
Author URI: https://dwoodley.co.uk/
*/

// Enqueue Stylesheet for ACF Options Page
function dw_acf_options_styles() {
    wp_enqueue_style( 'dw-acf-options-styles', plugins_url( 'style/main.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'dw_acf_options_styles' );

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
        'content' => '<div class="hero"><h1>Custom Header</h1></div>',
    ));
}

/*
function my_acf_add_local_field_groups() {

add_action('acf/init', 'my_acf_add_local_field_groups');
*/
