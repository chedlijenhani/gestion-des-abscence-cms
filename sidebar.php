 <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                    <?php
$user = wp_get_current_user();
 
if ( $user ) :
                  
    ?>
                  <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="Image Placeholder" class="img-fluid">
                
                  <div class="bio-body">
                    <h2> <?php echo $user->user_nicename ?></h2>
                      <p>  <?php echo $user->user_description  ?> </p>
                    <p><a href="http://localhost/isetsl/wp-content/themes/gestion-des-abscence-cms/about.php" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                      <?php endif; ?>
                    <p class="social">
                    <a href="<?php echo get_option('facebook'); ?>" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="<?php echo get_option('twitter'); ?>" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="<?php echo get_option('instagram'); ?>" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="<?php echo get_option('youtube'); ?>" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                      
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->  
              <div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    <li>
                        
                        
                      <a href="">
                        <img src="<?php bloginfo('template_directory');?>/images/img_2.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>How to Find the Video Games of Your Youth</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a> 
                    </li>
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                    
                    <?php   $cats= get_categories();
                
                    foreach ($cats as $cat){
                        $cat_id=$cat->term_id;
                        echo '<li><a href="#">'.$cat->name.'('.$cat->count.')</a> </li>';
               
                    }
                ?>
                  
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                  <li><a href="#"><?php the_tags(); ?></a></li> 
                </ul>
              </div>
            </div>