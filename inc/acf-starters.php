<?php 

/**
 * Blog Set Up
 * Enable/ Disable Sidebar
 * Default: Show
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ecffc402de88',
	'title' => 'Blog Setup',
	'fields' => array(
		array(
			'key' => 'field_5ecffc507b443',
			'label' => 'Sidebars',
			'name' => 'sidebars',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'show' => 'show',
				'hide' => 'hide',
			),
			'default_value' => 'show',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-general',
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
));

endif;


/**
 * ACF Options Page Header Add Sticky Header
 * Default: Sticky Disabled
 */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5edeeaa312ef9',
		'title' => 'Sticky Header',
		'fields' => array(
			array(
				'key' => 'field_5edeeab9b60d3',
				'label' => 'Sticky Header',
				'name' => 'sticky_header',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'site-header' => 'no',
					'fixed-top' => 'yes',
				),
				'default_value' => ' ',
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 1,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-header',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;



?>