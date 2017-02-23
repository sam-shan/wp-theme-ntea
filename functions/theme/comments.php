<?php

/****************************************************************************
/* Comment Display Callback
/* ==========================================================================
/* Created:     01-12-2016
/* Modified:    01-12-2016
/* Author:      Sameera Madushan - Indika Sampath 
/* --------------------------------------------------------------------------
/* Copyright (c) 2017 Birdinkweb.com
/* All rights reserved
/* ========================================================================== */

function displayComment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>

    <?php if ($comment->comment_approved == '1'): ?>
    <li>
        <article id="comment-<?php comment_ID() ?>">
            <?php echo get_avatar($comment); ?>
            <h1><?php comment_author_link() ?></h1>
            <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
            <?php comment_text() ?>
        </article>
    <?php endif;
}
