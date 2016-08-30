<?php
/**
 * Template Name: single page

 */

get_header(); ?>
   
       <div class="main-wrapper single-page">
        <div class="single-bg">
          <div class="container">
            <div class="section-block single-block">
            <?php while(have_posts()): the_post() ?>

             <div class="single-top">
               <h1 class="single-title"><?php the_title() ?></h1>
               <? include('menu-blog.php'); ?>
             </div>
              <div class="single-description">
                <?php echo the_content();?>
              </div>
              <?php endwhile; ?>
              <div class="text-center">
                <a href="/" class="btn snt-back-home">На главную</a>
              </div>
            </div>
          </div>
        </div>   
    </div>
    

        
       <?php

get_footer();
