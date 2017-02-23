<?php

/****************************************************************************
/* General Theme Features Setup
/* ==========================================================================
/* Created:     01-12-2016
/* Modified:    01-12-2016
/* Author:      Sameera Madushan - Indika Sampath 
/* --------------------------------------------------------------------------
/* Copyright (c) 2017 Birdinkweb.com
/* All rights reserved
/* ========================================================================== */

/* Remove Unnecessary WP Head Information
/* -------------------------------------------------------------------------- */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rel_canonical');

/* Remove Admin Bar from Front End
/* -------------------------------------------------------------------------- */
show_admin_bar(false);

/* Add Support for Post Thumbnails
/* -------------------------------------------------------------------------- */
add_theme_support('post-thumbnails');
add_image_size('home-hero-slider', 2000, 700, true);
add_image_size('home-icon-svg', 152, 132, true);
add_image_size('home-service-image', 570, 339, true);
add_image_size('prefooter-block-image', 600, 350, true);

/* Add Slug To Body Class
/* -------------------------------------------------------------------------- */
add_filter('body_class', 'addSlugToBodyClass');

/* Remove Default jQuery
/* -------------------------------------------------------------------------- */
function loadjQuery()
{
    if (!is_admin()) {
        // Deregister the original version of jQuery
        wp_deregister_script('jquery');

        // Register it again with no file path
        wp_register_script('jquery', '', false, '1.8.2');

        // Add it back into the queue
        wp_enqueue_script('jquery');
    }
}
add_action('template_redirect', 'loadjQuery');

/* Customise Admin Login Logo
/* -------------------------------------------------------------------------- */
function modifyLoginLogo()
{
    echo '<style>h1 a { background-image: url(' . get_stylesheet_directory_uri() . '/images/admin/login-logo.png) !important; background-size: 300px 225px !important; height: 180px !important; }</style>';
}
add_action('login_head', 'modifyLoginLogo');

function modifyLoginLogoLink()
{
    return 'http://www.netbizgroup.co.uk';
}
add_action('login_headerurl', 'modifyLoginLogoLink');

function modifyLoginLogoTitle()
{
    return 'NetBiz Group';
}
add_action('login_headertitle', 'modifyLoginLogoTitle');

/* Customise Admin Footer Text
/* -------------------------------------------------------------------------- */
function modifyFooterText()
{
    echo 'Powered by <a href="http://www.wordpress.org">WordPress</a>';
}
add_filter('admin_footer_text', 'modifyFooterText');


/* Adding logo uploader to theme customizer
/* -------------------------------------------------------------------------- */
add_action( 'customize_register', 'themename_customize_register' );
function themename_customize_register($wp_customize) {

    $wp_customize->add_section( 'ignite_custom_logo', array(
        'title'          => 'Logo',
        'description'    => 'Display a custom logo?',
        'priority'       => 25,
    ) );

    $wp_customize->add_setting( 'custom_logo', array(
        'default'        => '',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
        'label'   => 'Custom logo',
        'section' => 'ignite_custom_logo',
        'settings'   => 'custom_logo',
    ) ) );
}

/* Adding Class to parent if has got submenu
/* -------------------------------------------------------------------------- 
function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['has-dropdown'] = 'has-dropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );*/


/* Adding Class to submenu
/* -------------------------------------------------------------------------- */
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu no-bullet\">\n";
  }
}


/* Remove width and Height attribute from a image
/* -------------------------------------------------------------------------- */
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


/* Breadcrubm trail
/* Breadcrumbs
/* -------------------------------------------------------------------------- */
function get_breadcrumbs()
{
    global $wp_query;

    if ( !is_home() ){

        // Start the UL
        echo '<ul class="breadcrumbs right">';
        // Add the Home link
        echo '<li><a href="'. get_settings('home') .'">Home</a></li>';

        if ( is_category() )
        {
            $catTitle = single_cat_title( "", false );
            $cat = get_cat_ID( $catTitle );
            echo "<li><a>  ". get_category_parents( $cat, TRUE, "  " ) ."</a></li>";
        }
        elseif ( is_archive() && !is_category() )
        {
            echo "<li><a>  Archives</a></li>";
        }
        elseif ( is_search() ) {

            echo "<li><a>  Search Results</a></li>";
        }
        elseif ( is_404() )
        {
            echo "<li><a>  404 Not Found</a></li>";
        }
        elseif ( is_single() )
        {
            $category = get_the_category();
            $category_id = get_cat_ID( $category[0]->cat_name );

            echo '<li>  '. get_category_parents( $category_id, TRUE, "  " ).'</li>';
            echo "<li class='current'><a>". the_title('','', FALSE) ."</a></li>";
        }
        elseif ( is_page() )
        {
            $post = $wp_query->get_queried_object();

            if ( $post->post_parent == 0 ){

                echo "<li class='current'>  <a>".the_title('','', FALSE)."</a></li>";

            } else {
                $title = the_title('','', FALSE);
                $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
                array_push($ancestors, $post->ID);

                foreach ( $ancestors as $ancestor ){
                    if( $ancestor != end($ancestors) ){
                        echo '<li>  <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
                    } else {
                        echo "<li class='current'><a>". strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
                    }
                }
            }
        }

        // End the UL
        echo "</ul>";
    }
}

// Check the page is parent
function is_tree($pid)
{
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};


/*Add custom fields under wp general settings

add_filter('admin_init', 'my_general_settings_register_fields');
 
function my_general_settings_register_fields()
{
    register_setting('general', 'moss_image_cc_field', 'esc_attr');
    add_settings_field('moss_image_cc_field', '<label for="moss_image_cc_field">'.__('Images courtesy of' , 'moss_image_cc_field' ).'</label>' , 'my_general_settings_fields_html', 'general');
}
 
function my_general_settings_fields_html()
{
    $value = get_option( 'moss_image_cc_field', '' );
    echo '<input type="text" id="moss_image_cc_field" name="moss_image_cc_field" value="' . $value . '" />';
}


// Add custom general twitter settings
$new_general_setting = new new_general_setting();

class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'twitter_name', 'esc_attr' );
        add_settings_field('fav_color', '<label for="twitter_name">'.__('Twitter Account?' , 'twitter_name' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'twitter_name', '' );
        echo '<input type="text" id="twitter_name" name="twitter_name" value="' . $value . '" />';
    }
}*/

/**
 * Add new fields into 'Contact Info' section.
 *
 * @param  array $fields Existing fields array.
 * @return array
 */
function tm_additional_contact_methods( $fields ) {
    $fields['facebook'] = 'Facebook';    
    $fields['twitter']  = 'Twitter';
    $fields['google-plus'] = 'Google +';
    $fields['youtube'] = 'YouTube';

    return $fields;
}

/**
 * Enable excpert in wordpress. */
add_filter( 'user_contactmethods', 'tm_additional_contact_methods' );


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

