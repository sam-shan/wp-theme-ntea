<?php
/****************************************************************************
/* Template name: Blog
/* ==========================================================================
/* Created:     01-12-16
/* ----------------------------------------------------------------------
/* Author: sam@birdinkweb.com
/* Version: 2.0.1.7;
/* Date: December 2016;
/* Origin: LK;
/* ---------------------------------------------------------------------- */
/* Copyright (c) 2016-2017 http:birdinkweb.com
/* All rights reserved
/* ========================================================================== */

    getTemplateParts(
        array(
            'partials/shared/html-header',
            'partials/shared/header'
        )
    );

?>
    <?php if (have_posts()): 

            if ( has_post_thumbnail() ) :
                $featured_template_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-page-image' );
                $featured_template_image = $featured_template_image[0]; 
            else :
            endif;

        while (have_posts()) : the_post(); 
                $featured_template_image_secondary = get_field('add_secondary_post_thumbnail');
                $tag_line_title1        = get_post_meta($post->ID, featured_tag_line_1, true);
                $tag_line_title2        = get_post_meta($post->ID, featured_tag_line_2, true);
                $tag_line_title3        = get_post_meta($post->ID, featured_tag_line_3, true);
                $featured_introduction  = get_post_meta($post->ID, featured_introduction, true);
                $page_sub_title         = get_post_meta($post->ID, page_sub_heading, true);
                $our_approach         = get_post_meta($post->ID, our_approach_content, true);
    ?>

    <div class="featured-content"><!-- .featured-image -->
        <div class="featured-image" style="background-image:url('<?php echo $featured_template_image;?>');">
            <div class="row">
                <div class="small-12 columns">
                    <div class="featured-headings">
                        <div class="small-12 medium-6 columns small-text-center">
                            <aside class="featured-text">
                                <span><?php echo $tag_line_title1;?></span>
                                <span><?php echo $tag_line_title2;?></span>
                                <span><?php echo $tag_line_title3;?></span>
                            </aside>
                        </div>
                        <div class="small-12 medium-6 columns small-text-center">
                            <aside class="moss-context">
                                <p><?php echo $featured_introduction;?></p>
                            </aside>
                        </div>
                    </div><!-- /.featured-headings -->
                </div>
            </div>
        </div>
    </div><!--/.featured-content -->

    <section class="featured-links">
        <div class="sticky-tabs">
            <div class="row">
                <div class="small-12 columns">
                    <ul class="tabs featured" data-tabs id="featured-tabs">
                      <li class="tabs-title is-active"><a href="#about" aria-selected="true"><?php the_title(); ?></a></li>                     
                      <?php 
                        $i=12;
                        $j='sam';
                        $pargs = array(
                          'sort_order' => 'ASC',
                          'sort_column' => 'menu_order',
                          'hierarchical' => 1,
                          'exclude' => '',
                          'child_of' => 5,
                          'parent' => -1,
                          'exclude_tree' => '',
                          'number' => '',
                          'offset' => 0,
                          'post_type' => 'page',
                          'post_status' => 'publish'
                        );
                        $specPages = get_pages($pargs); 
                          foreach($specPages as $specPage){
                            
                           echo '<li class="tabs-title"><a href="#panel'.$i.$j.'">'.$specPage->post_title.'</a></li>';
                           $i++;
                          }
                        ?>
                  </ul>
                </div>
            </div>
        </div>

        <section class="tabs-content cms" data-tabs-content="featured-tabs">
          <div class="tabs-panel is-active" id="about">
            <div class="cms-content about">             
                <div class="content abanner parrallax" style="background-image:url('<?php echo $featured_template_image_secondary['url'];?>');">
                    <div class="row">
                        <div class="small-12 medium-10 medium-centered columns text-center">
                            <div class="abanner-caption">
                                <h2><?php echo $page_sub_title;?></h2>
                            </div>
                        </div>
                    </div>
                </div><!--/. content.banner -->
                <div class="content primary">
                    <div class="row" data-equalizer>
                        <?php the_content();?>                                                    
                    </div>
                </div><!-- /.content.primary -->
            </div><!--/.cms-content about -->
          </div><!-- /.tab-panel -->
          <div class="tabs-panel" id="panel12<?php echo $j;?>">
            <div class="cms-content approach">
                <div class="row">
                    <?php 
                        $pageID= 141; 
                        $post = get_post($pageID); 
                            $content = apply_filters('the_content', $post->post_content); 
                            echo $content;  
                    ?>
                </div>
            </div><!--/.cms-content approach -->
          </div><!-- tabs-panel -->

          <div class="tabs-panel" id="panel13<?php echo $j;?>">
            <div class="cms-content team">
                <div class="row">
                    <?php 
                        $pageID= 149; 
                        $post = get_post($pageID); 
                            $content = apply_filters('the_content', $post->post_content); 
                            echo $content;  
                    ?>
                    
                    <div class="small-12 columns">
                        <h1>The Team</h1>

                        <?php
                            $team_args = array( 'post_type' => 'member_profile', 'posts_per_page' => -1 );
                            $title = new WP_Query( $team_args );
                        ?>

                        <div class="tmember-wrapper">
                            <ul class="row collapse no-bullet mg-rows tmembers">
                              <?php 
                                    while ( $title->have_posts() ) : $title->the_post();
                                              $memberId = $post->ID;
                                              $team_member_name = get_post_meta($post->ID, team_member_name, true);
                                              $team_member_title = get_post_meta($post->ID, team_member_title, true);
                                              $team_member_email = get_post_meta($post->ID, team_member_email, true);

                                      if ( has_post_thumbnail() ) :
                                              $team_profile_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-service-image' );
                                              $team_profile_image = $team_profile_image[0]; 
                                      else :
                                      endif;
                              ?>
                                <li class="mg-row-single">
                                    <a href="#" title="Team Member Name" class="mg-trigger">
                                        <div class="profile-pic" style="background-image:url('<?php echo $team_profile_image;?>');"></div>
                                        <div class="profile-info">
                                            <span class="name"><?php echo $team_member_name;?></span>
                                            <span class="title"><?php echo $team_member_title;?></span>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile;?>
                            </ul>

                            <div class="mg-targets">
                              <?php while ( $title->have_posts() ) : $title->the_post(); 
                                $memberId = $post->ID;
                                $team_member_name = get_post_meta($post->ID, team_member_name, true);
                                $team_member_email = get_post_meta($post->ID, team_member_email, true);
                              ?>
                              <div class="">
                                  <div class="profile-info">
                                      <div class="small-12 medium-10 large-8 small-centered medium-centered columns profile-item">                                            
                                          <span class="profile-name"><?php echo $team_member_name;?></span>
                                          <?php the_content();?>
                                          <div class="text-center">
                                            <a href="mailto:<?php echo $team_member_email;?>" class="icon-email"><img src="<?php echo getRelativeThemeUrl(); ?>/images/icons/icon-email.png" alt=""></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php endwhile;?>                                 
                            </div><!--/.mg-targets-->
                        </div><!-- /.tmember-wrapper -->
                                              
                    </div>
                </div>
            </div><!--/.cms-content.team -->
          </div><!-- /.tabs-panel -->
        </section><!--/.tabs-content -->
    </section>

    <?php
            endwhile;
        endif;
    ?>
    
<?php

    getTemplateParts(
        array(
            'partials/shared/footer',
            'partials/shared/html-footer'
        )
    );

?>
