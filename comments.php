<?php

/****************************************************************************
/* comments.php - The Template For Displaying Comments
/* ----------------------------------------------------------------------
/* Author: sam@birdinkweb.com
/* Version: 2.0.1.7;
/* Date: December 2016;
/* Origin: LK;
/* ---------------------------------------------------------------------- */
/* Copyright (c) 2017-2018 http://birdinkweb.com @ Indika Creations
/* All rights reserved
/* ========================================================================== */

/**
 * The area of the page that contains both current comments and the comment
 * form. The actual display of comments is handled by a callback to
 * displayComment() which is located in the functions/theme/comments.php
 * file.
 */

?>

<?php if (post_password_required()): ?>
    <div class="comments">
        <p>This post is password protected. Enter the password to view any comments.</p>
    </div>

    <?php return; ?>
<?php endif; ?>


<div class="comments">
    <?php if (have_comments()): ?>
        <h2><?php comments_number(); ?></h2>
        <ol>
            <?php
                wp_list_comments(
                    array(
                        'callback' => 'displayComment'
                    )
                );
            ?>
        </ol>

    <?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')): ?>

        <p>Comments are closed</p>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>
