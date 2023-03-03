<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_63fa8cedcf71f',
'title' => 'Question Answers',
'fields' => array(
array(
'key' => 'field_63fa8cee06ac2',
'label' => 'Answer List',
'name' => 'answer_list',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'table',
'pagination' => 0,
'min' => 2,
'max' => 6,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63fa8d2106ac3',
		'label' => 'Answer',
		'name' => 'answer',
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
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63fa8cee06ac2',
	),
	array(
		'key' => 'field_63fa92fe21134',
		'label' => 'Correct?',
		'name' => 'correct',
		'aria-label' => '',
		'type' => 'true_false',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'message' => '',
		'default_value' => 0,
		'ui_on_text' => '',
		'ui_off_text' => '',
		'ui' => 1,
		'parent_repeater' => 'field_63fa8cee06ac2',
	),
),
),
),
'location' => array(
array(
array(
	'param' => 'post_type',
	'operator' => '==',
	'value' => 'question',
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
'show_in_rest' => 1,
));

endif;		
