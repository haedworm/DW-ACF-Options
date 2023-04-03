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

function my_acf_add_local_field_groups() {

acf_add_local_field_group(array(
	'key' => 'group_6429b0ea2c9eb',
	'title' => 'DW ACF Options',
	'fields' => array(
		array(
			'key' => 'field_6429b186b94f0',
			'label' => 'Fields Required',
			'name' => 'fields_required',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'tel' => 'Telephone Number',
				'mob' => 'Mobile Number',
				'address' => 'Address',
				'social' => 'Social Links',
				'google-map' => 'Google Map',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'allow_custom' => 0,
			'layout' => 'vertical',
			'toggle' => 0,
			'save_custom' => 0,
		),
		array(
			'key' => 'field_6429b0eab94ef',
			'label' => 'Telephone',
			'name' => 'telephone',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6429b186b94f0',
						'operator' => '==',
						'value' => 'tel',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => 1,
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6429b2445decc',
			'label' => 'Mobile',
			'name' => 'mobile',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6429b186b94f0',
						'operator' => '==',
						'value' => 'mob',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => 1,
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6429b4ef8cc18',
			'label' => 'Address',
			'name' => 'address',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6429b186b94f0',
						'operator' => '==',
						'value' => 'address',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_6429b5148cc19',
			'label' => 'Social Networks',
			'name' => 'social_networks',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6429b186b94f0',
						'operator' => '==',
						'value' => 'social',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => 'field_6429b53f8cc1a',
			'button_label' => 'Add Social Network',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6429b53f8cc1a',
					'label' => 'Network Name',
					'name' => 'network_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => 'Facebook',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_6429b5148cc19',
				),
				array(
					'key' => 'field_6429b5bd8cc1b',
					'label' => 'Social Network URL',
					'name' => 'social_network_url',
					'aria-label' => '',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6429b53f8cc1a',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'parent_repeater' => 'field_6429b5148cc19',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'dw-acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

}

add_action('acf/init', 'my_acf_add_local_field_groups');	
