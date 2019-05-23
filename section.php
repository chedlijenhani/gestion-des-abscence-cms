     <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="<?php the_permalink(); ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php  the_post_thumbnail_url();  ?>  '); "> 
                                                                                                       
                                         
                    <div class="text half-to-full">
                         <?php $cats=get_the_category();
                   foreach ($cats as $cat){
                        $cat_id=$cat->term_id;
                        echo '<span class="category mb-5">'.$cat->name.'</span> ';
               
                    }
          ?>
                   
                      <div class="post-meta">
                        
                        <span class="author mr-2">  <?php  $user=get_the_author_meta('ID'); ?>   

          <img src=" <?php   echo  esc_url(get_avatar_url($user)); ?>" alt="Image placeholder" />
  <?                    the_author(); ?></span>&bullet;
                        <span class="mr-2"><?php the_date('Y-m-d'); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
                          
                        
                      </div>
                      <h3><?php the_title(); ?></h3>
                    </div>
                  </a>
                </div>
               