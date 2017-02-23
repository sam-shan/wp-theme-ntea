<?
// Register Custom Post Type
function carousel_post_type() {

    $labels = array(
        'name'                  => _x( 'Carousel', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Carousel', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Carousel', 'text_domain' ),
        'name_admin_bar'        => __( 'Carousel', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Carousel:', 'text_domain' ),
        'all_items'             => __( 'All Carousel', 'text_domain' ),
        'add_new_item'          => __( 'Add New Carousel', 'text_domain' ),
        'add_new'               => __( 'New Carousel', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Carousel', 'text_domain' ),
        'update_item'           => __( 'Update Carousel', 'text_domain' ),
        'view_item'             => __( 'View Carousel', 'text_domain' ),
        'search_items'          => __( 'Search Carousel', 'text_domain' ),
        'not_found'             => __( 'No Carousel found', 'text_domain' ),
        'not_found_in_trash'    => __( 'No Carousel found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Carousel', 'text_domain' ),
        'description'           => __( 'Carousel information pages.', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        //'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
    );
    register_post_type( 'carousel', $args );

}
add_action( 'init', 'carousel_post_type', 0 );