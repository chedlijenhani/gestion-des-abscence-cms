<div class="col-md-6">
         <a href="<?php the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn"> 
                    <img src="<?php has_post_thumbnail(the_thumbnail); ?>"  >
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Colorlib"> <?php the_author(); ?></span>&bullet;
                        <span class="mr-2"><?php the_date('Y-m-d'); ?></span> &bullet;
                        <span class="mr-2"><?php the_title(); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php the_excerpt(); ?></h2>
                    </div>
                  </a>
</div>