<?

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'cn_slideshow',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
    )
  );
}