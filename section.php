 <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

           <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
get_template_part( 'section-single', get_post_format() ); endwhile; endif; ?>
                
          </div>
          
        </div>
 </div>

      </section>