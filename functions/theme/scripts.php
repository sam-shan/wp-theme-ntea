<?php

/****************************************************************************
/* Scripts Setup
/* ==========================================================================
/* Created:     01-12-2016
/* Modified:    01-12-2016
/* Author:      Sameera Madushan - Indika Sampath 
/* --------------------------------------------------------------------------
/* Copyright (c) 2017 Birdinkweb.com
/* All rights reserved
/* ========================================================================== */

/* Enqueue Scripts
/* -------------------------------------------------------------------------- */
function scriptEnqueue()
{
    wp_register_script('owl.carousel', get_stylesheet_directory_uri() . '/js/vendor/owl.carousel.js', array('jquery'), false, true);
    wp_enqueue_script('owl.carousel');

    wp_register_script('plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), false, true);
    wp_enqueue_script('plugins');

    wp_register_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false, true);
    wp_enqueue_script('script');

    // wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
    // wp_enqueue_style( 'screen' );
}

add_action('wp_enqueue_scripts', 'scriptEnqueue');


function relative_url($input)
{
    $output = preg_replace_callback(
        '!(https?://[^/|"]+)([^"]+)?!',
        create_function(
            '$matches',
            'if (isset($matches[0]) && $matches[0] === site_url()) { return "/";' . // if full URL is site_url, return a slash for relative root
            '} elseif (isset($matches[0]) && strpos($matches[0], site_url()) !== false) { return $matches[2];' . // if domain is equal to site_url, then make URL relative
            '} else { return $matches[0]; };' // if domain is not equal to site_url, do not make external link relative
        ),
        $input
    );

    return $output;
}

if (!is_admin())
{
    add_filter('script_loader_src', 'relative_url');
    add_filter('style_loader_src', 'relative_url');
}
