  <img src="<?php  the_post_thumbnail_url();  ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2">  
                                      <?php  $user=get_the_author_meta('ID'); ?>   

          <img src=" <?php   echo  esc_url(get_avatar_url($user)); ?>" alt="Image placeholder" />
  <?                    the_author(); ?> </span> &bullet;
                 
                        <span class="mr-2"><?php the_date('Y-m-d'); ?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
                        </div>

              <h1 class="mb-4"><?php the_title(); ?></h1>
            <div class="post-content-body">
              <p><?php the_content(); ?></p>
            </div>

            
            <div class="pt-5">
              <p>Categories:   <?php $cats=get_the_category();
                   foreach ($cats as $cat){
                        $cat_id=$cat->term_id;
                        echo '<a class="category mb-5" href="#">'.$cat->name.'</a> ';
               
                    } ?></p>
            </div>