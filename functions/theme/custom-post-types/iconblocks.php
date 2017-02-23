<?

add_action( 'init', 'create_post_type_iconb' );
function create_post_type_iconb() {
  register_post_type( 'icon_block',
    array(
      'labels' => array(
        'name' => __( 'Home icon Blocks' ),
        'singular_name' => __( 'icon Block' ),
        'add_new' => _x('Add New', '')
      ),
    'public' => true,
    'supports' => array( 'title', 'custom-fields' ),
    )
  );
}