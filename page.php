
<div class="col-md-6">
                  <a href="<?php the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <div >    <?php  the_post_thumbnail('small-thumbnails');  ?>   </div>
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><?php  $user=get_the_author_meta('ID'); ?>   

          <img src=" <?php   echo  esc_url(get_avatar_url($user)); ?>" alt="Image placeholder" />
  <?                    the_author(); ?></span>&bullet;
                        <span class="mr-2"><?php the_date('Y-m-d'); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
                      </div>
                      <h2><?php the_title(); ?></h2>
                    </div>
                  </a>
                </div>
  