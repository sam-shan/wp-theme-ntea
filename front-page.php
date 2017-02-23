<?php

/****************************************************************************
/* front-page.php - The Main Front Page Template
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

    <div class="hero-slider owl-carousel">
        <?php $my_query = new WP_Query('post_type=cn_slideshow&posts_per_page=5');
              while ($my_query->have_posts()) : $my_query->the_post();?>

                <?php if (has_post_thumbnail( $post->ID ) ): 
                        $home_hero_slider_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-hero-slider' );
                        $home_hero_slider_image = $home_hero_slider_image[0]; ?>
                    <?php else : ?>
                    <?php endif; ?>
                <div class="item" style="background:url('<?php echo $home_hero_slider_image; ?>') no-repeat top center;"></div>     
        <?php endwhile; ?>
    </div>
    <!-- / .hero-slider -->
    <section class="featured-products text-center">
        <h1>Our Featured Range of Teas</h1>
        <div class="row small-up-1 medium-up-2 large-up-4">
            <div class="columns">
                <a href="product-single.php">
                    <img src="http://placehold.it/600x600" class="thumbnail" alt="">
                    <h2>Black Tea</h2>
                </a>
            </div>
            <div class="columns">
                <a href="product-single.php">
                    <img src="http://placehold.it/600x600" class="thumbnail" alt="">
                    <h2>Green Tea</h2>
                </a>
            </div>
            <div class="columns">
                <a href="product-single.php">
                    <img src="http://placehold.it/600x600" class="thumbnail" alt="">
                    <h2>Herbal Tea</h2>
                </a>
            </div>
            <div class="columns">
                <a href="product-single.php">
                    <img src="http://placehold.it/600x600" class="thumbnail" alt="">
                    <h2>Gift Teas</h2>
                </a>
            </div>
        </div>
    </section>
    <!-- /. featured products -->
    <div class="row">
        <article class="featured-blog" data-equalizer>
            <div class="small-12 large-6 columns no-padding">
                <div class="blog-image" style="background-image:url('../images/temp/blog-image.jpg');" data-equalizer-watch></div>
            </div>  
            <div class="small-12 large-6 columns no-padding">
                <div class="blog-details" data-equalizer-watch>
                    <small class="cat"><a href="#">Blog</a></small>
                    <h1>Neelagiri Tea Promotion Center opened at Thimbirigasyaya.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <a href="#">More <span>&#8594;</span></a>
                </div>
            </div>  
        </article>
        <!-- /.featured-blog -->
    </div>


    <section class="featured-story" style="background-image: url('http://lorempixel.com/1920/500/nature/1');">
        <div class="row">
            <div class="small-12 medium-10 columns small-12-centered medium-centered text-center">
                <h2>Sri Lanka Tea and Our Story</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#">Read More</a>
            </div>          
        </div>
    </section>
    <!-- /.featured-story -->
    <?/*
    <div class="prefooter bg-dark">
        <div class="row small-up-1 medium-up-2 large-up-4" data-equalizer data-equalize-by-row="true">
            <?php
                if ( dynamic_sidebar('Homepage Content Blocks') ) :
                    else :
                ?>
            <?php endif;?>            
        </div>
    </div> */?>

<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
