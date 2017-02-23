<?php
// Register Custom Post Type
add_action( 'init', 'register_cpt_cs_content' );

function register_cpt_cs_content() {

    $labels = array( 
        'name' => _x( 'Case Studies', 'case_study_content' ),
        'singular_name' => _x( 'Case Study', 'case_study_content' ),
        'add_new' => _x( 'Add New', 'case_study_content' ),
        'add_new_item' => _x( 'Add New Case Study', 'case_study_content' ),
        'edit_item' => _x( 'Edit Case Study', 'case_study_content' ),
        'new_item' => _x( 'New Case Study', 'case_study_content' ),
        'view_item' => _x( 'View Case Study', 'case_study_content' ),
        'search_items' => _x( 'Search Case Studies', 'case_study_content' ),
        'not_found' => _x( 'No Case Studys found', 'case_study_content' ),
        'not_found_in_trash' => _x( 'No Case Studies found in Trash', 'case_study_content' ),
        'parent_item_colon' => _x( 'Parent Case Study:', 'case_study_content' ),
        'menu_name' => _x( 'Case Studies', 'case_study_content' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Add Case Study Content here.',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 15,
        'menu_icon' => '/wp-admin/images/admin_cs.png',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'case_study_content', $args );
}