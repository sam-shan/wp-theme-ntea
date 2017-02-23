<?php
// Register Custom Post Type
add_action( 'init', 'register_cpt_tab_content' );

function register_cpt_tab_content() {

    $labels = array( 
        'name' => _x( 'Tabs', 'tab_content' ),
        'singular_name' => _x( 'Tab', 'tab_content' ),
        'add_new' => _x( 'Add New', 'tab_content' ),
        'add_new_item' => _x( 'Add New Tab', 'tab_content' ),
        'edit_item' => _x( 'Edit Tab', 'tab_content' ),
        'new_item' => _x( 'New Tab', 'tab_content' ),
        'view_item' => _x( 'View Tab', 'tab_content' ),
        'search_items' => _x( 'Search Tabs', 'tab_content' ),
        'not_found' => _x( 'No tabs found', 'tab_content' ),
        'not_found_in_trash' => _x( 'No tabs found in Trash', 'tab_content' ),
        'parent_item_colon' => _x( 'Parent Tab:', 'tab_content' ),
        'menu_name' => _x( 'Tabs', 'tab_content' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Add Tab Content here.',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 15,
        'menu_icon' => '/wp-admin/images/admin_tabs.png',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'tab_content', $args );
}