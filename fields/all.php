<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_63fa8cedcf71f',
'title' => 'Saber LMS > Questions > Question Answers',
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

acf_add_local_field_group(array(
'key' => 'group_640a305f5a9c5',
'title' => 'Saber LMS > Quiz > Question List',
'fields' => array(
array(
'key' => 'field_640a30d7cd7f4',
'label' => 'Question List',
'name' => 'question_list',
'aria-label' => '',
'type' => 'relationship',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'post_type' => array(
	0 => 'question',
),
'taxonomy' => '',
'filters' => array(
	0 => 'search',
),
'return_format' => 'id',
'min' => 1,
'max' => 25,
'elements' => '',
),
),
'location' => array(
array(
array(
	'param' => 'post_type',
	'operator' => '==',
	'value' => 'quiz',
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

acf_add_local_field_group(array(
'key' => 'group_640dee4db682f',
'title' => 'Saber LMS > Courses > Lesson List',
'fields' => array(
array(
'key' => 'field_640dee4e6bce0',
'label' => 'Lesson List',
'name' => 'lesson_list',
'aria-label' => '',
'type' => 'relationship',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'post_type' => array(
	0 => 'lesson',
	1 => 'quiz',
),
'taxonomy' => '',
'filters' => array(
	0 => 'search',
	1 => 'taxonomy',
),
'return_format' => 'id',
'min' => '',
'max' => '',
'elements' => '',
),
),
'location' => array(
array(
array(
	'param' => 'post_type',
	'operator' => '==',
	'value' => 'course',
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

acf_add_local_field_group(array(
'key' => 'group_640df1363abf6',
'title' => 'Saber LMS > Lessons > Course',
'fields' => array(
array(
'key' => 'field_640df136f5c78',
'label' => 'Course',
'name' => 'course',
'aria-label' => '',
'type' => 'post_object',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'post_type' => array(
	0 => 'course',
),
'taxonomy' => '',
'return_format' => 'id',
'multiple' => 0,
'allow_null' => 0,
'ui' => 1,
),
),
'location' => array(
array(
array(
	'param' => 'post_type',
	'operator' => '==',
	'value' => 'lesson',
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

endif;
