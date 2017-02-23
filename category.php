<?php

/****************************************************************************
/* index.php - The Main Template File
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
                    <?/*php wp_list_categories( array(
                        'show_option_all'   => 'All', 
                        'exclude'           => array( 1,9 ),
                        'title_li'          => ''
                        ) );*/
                    ?>
                    <li><a href="/on-our-minds/">All</a></li>
                    <?php
                        $cat_arguments = array(
                          'exclude' => array( 1,9 ),
                          'parent'  => 0
                          );
                        $cats = get_categories($cat_arguments);
                        $i = 0;
                        foreach($cats as $category) {
                            if($cat != $category->term_id) { echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>'; }
                            else { echo '<li><span class="current-cat">'.$category->name.'</span></li>'; }
                            $i++;                            
                        }

                        ?>
                </ul>
            </div>
        </div>

    <?php if (have_posts()): ?>
        <div id="post-container">

            <div id="inside" class="row">
                <div class="small-12 columns">

                    <?php while (have_posts()) : the_post(); ?>

                    <article class="mind-post" data-equalizer>
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php   $large_news_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-block-image' );
                            $large_news_image = $large_news_image[0]; ?>
                        
                        <div class="large-6 columns no-padding post-image" data-equalizer-watch>
                            <div class="pic" style="background-image: url('<?php echo $large_news_image;?>');"></div>                   
                        </div>

                        <?php else : 
                              $news_article_heading = get_post_meta($post->ID, article_heading, true);  
                        ?>

                        <?php if(!empty($news_article_heading)) { ?>
                            <div class="large-6 columns no-padding post-image text" data-equalizer-watch>
                                <h1><a href="<?php esc_url(the_permalink()); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php echo $news_article_heading;?></a></h1>
                            </div>
                        <?php } else { ?>
                            <div class="large-6 columns no-padding post-image" data-equalizer-watch>
                            <div class="pic" style="background-image: url('<?php echo getRelativeThemeUrl(); ?>/images/temp/moss-placeholder.jpg);"></div>                   
                        </div>
                        <?php } ?>

                    <?php endif; ?>
                        
                        <div class="large-6 columns post-intro" data-equalizer-watch>
                            <div class="inner-text">
                                <h2><a href="<?php esc_url(the_permalink()); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <p><?php echo substr( get_the_excerpt(), 0, strrpos( substr( get_the_excerpt(), 0, 140), ' ' ) ); ?>...</p>
                                <div class="row collapse resources">
                                    <div class="small-6 columns text-left">
                                        <a href="<?php esc_url(the_permalink()); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">Read More...</a>
                                    </div>
                                    <div class="small-6 columns text-right">
                                        <span class="date"><?php echo get_the_date( 'd/m/Y' ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </article><!-- /.mind-post end -->

                     <?php endwhile; ?>

                </div>
            </div>        
        </div><!--/#post-container -->        
    <?php else: ?>
        <h4>No posts to display</h4>
    <?php endif; ?>

    </section><!-- /primary-content -->

<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
