<?php
// Register Custom Post Type
add_action( 'init', 'register_moss_member_profile' );

function register_moss_member_profile() {

    $labels = array( 
        'name' => _x( 'Members', 'member_profile' ),
        'singular_name' => _x( 'Member', 'member_profile' ),
        'add_new' => _x( 'Add New', 'member_profile' ),
        'add_new_item' => _x( 'Add New Member', 'member_profile' ),
        'edit_item' => _x( 'Edit Member', 'member_profile' ),
        'new_item' => _x( 'New Member', 'member_profile' ),
        'view_item' => _x( 'View Member', 'member_profile' ),
        'search_items' => _x( 'Search Members', 'member_profile' ),
        'not_found' => _x( 'No Members found', 'member_profile' ),
        'not_found_in_trash' => _x( 'No Members found in Trash', 'member_profile' ),
        'parent_item_colon' => _x( 'Parent Member:', 'member_profile' ),
        'menu_name' => _x( 'Members', 'member_profile' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Add Member Content here.',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 16,
        'menu_icon' => '/wp-admin/images/admin_team.png',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'member_profile', $args );
}