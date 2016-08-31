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
              
              <div class="container">
               <div class="same-articles"> 
                 <h3>Похожие записи</h3>
                  <div class="row">
                       <?php
                        $orig_post = $post;
                        global $post;
                        $tags = wp_get_post_tags($post->ID);
                    
                        if ($tags) {
                        $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                        $args=array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>3, // Количество записей, которые выводятся
                        'caller_get_posts'=>1
                        );
                    
                        $my_query = new wp_query( $args );
                    
                        while( $my_query->have_posts() ) {
                        $my_query->the_post();
                        ?>
                        
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="relatedthumb">
                                    <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('medium', 'class=img-responsive'); ?><br />
                                    <?php the_title(); ?>
                                    </a>
                                </div>
                             </div>
                            
                        <? }
                        }
                        $post = $orig_post;
                        wp_reset_query();
                        ?>
                        </div> 
                      </div>
                     </div>
                    

              
            </div>
          </div>
        </div>   
    </div>
    

        
       <?php

get_footer();
