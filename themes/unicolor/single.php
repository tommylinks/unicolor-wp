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
              
              
               <div class="same-articles"> 
                 
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
                     
                    
                <div class="snt-disqus">
                  <div id="disqus_thread"></div>
                    <script>
                  
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
                    /*
                    var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = '//http-unicolor-com-ua-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
                                    
              
            </div>
          </div>
        </div>   
    </div>
    

        
       <?php

get_footer();
