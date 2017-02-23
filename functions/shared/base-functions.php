<?php

/****************************************************************************
/* Base Functions
/* ==========================================================================
/* Created:     01-12-2016
/* Modified:    01-12-2016
/* Author:      Sameera Madushan - Indika Sampath 
/* --------------------------------------------------------------------------
/* Copyright (c) 2017 Birdinkweb.com
/* All rights reserved
/* ========================================================================== */


/**
 * A simple wrapper for the native get_template_part() function.
 * Allows you to pass in an array of parts and output them in your theme.
 *
 * Example: <?php getTemplateParts(array('part-1', 'part-2')); ?>
 *
 * @param  array  $parts The list of parts to get
 *
 * @return void
 */
function getTemplateParts($parts = array())
{
    foreach($parts as $part) {
        get_template_part($part);
    };
}

/**
 * Get a Page ID from a page path
 *
 * Example: <?php getPageIdFromPath('about/terms-and-conditions'); ?>
 *
 * @param  string $path The path of the Page
 *
 * @return integer      The ID of the Page, or NULL if not found
 */
function getPageIdFromPath($path)
{
    $page = get_page_by_path($path);

    return ($page) ? $page->ID : null;
}

/**
 * Append page slugs to the body class
 *
 * NB: Requires init via add_filter('body_class', 'addSlugToBodyClass');
 *
 * @param array $classes The current classes on the body class
 *
 * @return array         The classes to add to the body class
 */
function addSlugToBodyClass($classes)
{
    global $post;

    if (is_home()) {
        $key = array_search('blog', $classes);

        if(-1 < $key) {
            unset($classes[$key]);
        };
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    };

    return $classes;
}

/**
 * Get a Category ID from a category name
 *
 * Example: <?php getCategoryId('services'); ?>
 *
 * @param  string $name The name of the Category
 *
 * @return integer      The ID of the Category
 */
function getCategoryId($name)
{
    $term = get_term_by('name', $name, 'category');

    return $term->term_id;
}

function getRelativeThemeUrl()
{
    $output = preg_replace_callback(
        '!(https?://[^/|"]+)([^"]+)?!',

        create_function(
            '$matches',
            'if (isset($matches[0]) && $matches[0] === site_url()) { return "/";' . // if full URL is site_url, return a slash for relative root
            '} elseif (isset($matches[0]) && strpos($matches[0], site_url()) !== false) { return $matches[2];' . // if domain is equal to site_url, then make URL relative
            '} else { return $matches[0]; };' // if domain is not equal to site_url, do not make external link relative
        ),

        get_stylesheet_directory_uri()
    );

    return $output;
}
