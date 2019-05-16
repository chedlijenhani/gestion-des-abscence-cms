  
            <div class="col-md-12 col-lg-8 main-content">
                  
            <h1 class="mb-4"><?php the_title(); ?></h1>
                <?php $cats=get_the_category();
                   foreach ($cats as $cat){
                        $cat_id=$cat->term_id;
                        echo '<a class="category mb-5" href="#">'.$cat->name.'</a> ';
               
                    }
          ?>
           
            <div class="post-content-body">
              <p><?php the_content(); ?></p>
            <?php  the_post_thumbnail();   ?> 
            </div>
            </div>
  

            
          