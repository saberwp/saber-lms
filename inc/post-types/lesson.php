<?php

function create_lesson_post_type() {
    $labels = array(
        'name'               => __( 'Lessons' ),
        'singular_name'      => __( 'Lesson' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Lesson' ),
        'edit_item'          => __( 'Edit Lesson' ),
        'new_item'           => __( 'New Lesson' ),
        'view_item'          => __( 'View Lesson' ),
        'search_items'       => __( 'Search Lessons' ),
        'not_found'          => __( 'No lessons found' ),
        'not_found_in_trash' => __( 'No lessons found in trash' ),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lesson' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
				'show_in_rest'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-welcome-learn-more'
    );

    register_post_type( 'lesson', $args );
}
add_action( 'init', 'create_lesson_post_type' );
