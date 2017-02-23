<?php

/****************************************************************************
/* page.php - The Main Page Template
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
    
    <section class="primary-content">
        <?php if (has_post_thumbnail( $post->ID ) ): 
            $page_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-hero-slider' );
            $page_featured_image = $page_featured_image[0]; ?>        
            
            <div class="page-fimage" style="background:url('<?php echo $page_featured_image; ?>') no-repeat top center;">
                <div class="page-title">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        <?php else : ?>
            <div class="page-title styled">
                <h1><?php the_title();?></h1>
            </div>
        <?php endif; ?>

        <div class="page-content">
            <div class="row">
                <div class="small-12 columns">
                    <?php if (have_posts()): ?>
                        
                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            
                            <?php endwhile; ?>
                        
                        <?php else: ?>                    
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
