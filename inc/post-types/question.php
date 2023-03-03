<?php

function create_question_post_type() {
    $labels = array(
        'name'               => __( 'Questions' ),
        'singular_name'      => __( 'Question' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Question' ),
        'edit_item'          => __( 'Edit Question' ),
        'new_item'           => __( 'New Question' ),
        'view_item'          => __( 'View Question' ),
        'search_items'       => __( 'Search Questions' ),
        'not_found'          => __( 'No questions found' ),
        'not_found_in_trash' => __( 'No questions found in trash' ),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'question' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
				'show_in_rest'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-welcome-learn-more'
    );

    register_post_type( 'question', $args );
}
add_action( 'init', 'create_question_post_type' );
