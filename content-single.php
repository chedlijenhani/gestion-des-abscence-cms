

 <div class="col-md-6">
                  <a href="<?php bloginfo('template_directory');?>/blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="<?php bloginfo('template_directory');?>/images/img_5.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Colorlib"> <?php the_author(); ?></span>&bullet;
                        <span class="mr-2"><?php the_date('Y-m-d'); ?></span> &bullet;
                        <span class="mr-2"><?php the_title(); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php the_content(); ?></h2>
                    </div>
                  </a>
                </div>

 
