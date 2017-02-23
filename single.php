<?php

/****************************************************************************
/* signle.php - The Post Template File
/* ----------------------------------------------------------------------
/* Author: sam@birdinkweb.com
/* Version: 2.0.1.7;
/* Date: December 2016;
/* Origin: LK;
/* ---------------------------------------------------------------------- */
/* Copyright (c) 2017-2018 http://birdinkweb.com @ Indika Creations
/* All rights reserved
/* ========================================================================== */

    getTemplateParts(
        array(
            'partials/shared/html-header',
            'partials/shared/header'
        )
    );

?>

    <?php
        $page_for_posts_id = get_option('page_for_posts');
        if (has_post_thumbnail( $page_for_posts_id ) ) {
            $featured_template_image = wp_get_attachment_image_src( get_post_thumbnail_id(94), 'featured-page-image' );
            $featured_template_image = $featured_template_image[0];
        } 

    ?>
    
    <div class="featured-content tpl-ourminds"><!-- .featured-image -->
        <div class="featured-image" style="background-image:url('<?php echo $featured_template_image;?>');">
            <div class="row">
                <div class="small-12 columns">
                    <div class="featured-headings">
                        <div class="small-12 columns text-center">
                            <div class="featured-text">
                                <h1><?php echo get_post_field( 'post_title', $page_for_posts_id );?></h1>
                            </div>
                        </div>
                    </div><!-- /.featured-headings -->
                </div>
            </div>
        </div>
    </div>

    <section class="primary-content tpl-ourminds">
        <div class="row">
            <div class="small-12 columns text-center">
                <ul class="no-bullet mcats">
                    <?php wp_list_categories( array(
                        'show_option_all'   => 'All', 
                        'exclude'           => array( 1,9 ),
                        'title_li'          => ''
                        ) );
                    ?>
                </ul>
            </div>
        </div>

        <div class="row small-collapse medium-collapse large-uncollapse">
            <div class="small-12 columns">
                <?php if (have_posts()): ?>
                    <article class="mind-single">
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="large-6 large-push-6 columns back-link large-text-right">
                            <a class="back" href="/on-our-minds/">&lsaquo; Back to Our Minds</a>
                        </div>
                        <div class="large-6 large-pull-6 columns blog-title">
                            <h2><?php the_title(); ?></h2>
                        </div>

                        <div class="small-12 columns">
                            <span class="blog-timestamp"><strong><?php echo get_the_date( 'd/m/Y' ); ?></strong></span>
                        </div>

                        <div class="small-12 columns small-text-center">
                            <?//php if(has_post_thumbnail()){ the_post_thumbnail();} else { } ?>                            
                            <?php the_content(); ?>
                        </div>

                        <div class="small-12 columns large-text-right">
                            <a class="back" href="/on-our-minds/">&lsaquo; Back to Our Minds</a>
                        </div>
                        <?php endwhile; ?>
                    </article>
                    <?php else: ?>
                    <div class="large-6 large-pull-6 columns blog-title">
                        <h2>No posts to display.</h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </section><!-- /primary-content -->

<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
