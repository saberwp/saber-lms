<?php

function create_quiz_post_type() {
    $labels = array(
        'name'               => __( 'Quizzes' ),
        'singular_name'      => __( 'Quiz' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Quiz' ),
        'edit_item'          => __( 'Edit Quiz' ),
        'new_item'           => __( 'New Quiz' ),
        'view_item'          => __( 'View Quiz' ),
        'search_items'       => __( 'Search Quizzes' ),
        'not_found'          => __( 'No quizzes found' ),
        'not_found_in_trash' => __( 'No quizzes found in trash' ),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'quiz' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
				'show_in_rest'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-welcome-learn-more'
    );

    register_post_type( 'quiz', $args );
}
add_action( 'init', 'create_quiz_post_type' );
