<?php get_header(); ?>
      <!-- END header -->


    <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
<?php
$args=array(
'post_type'=>'absences',
);
$absences_loop=new WP_Query($args);
if($absences_loop->have_posts()) : while($absences_loop->have_posts()) : $absences_loop->the_post();
                get_template_part( 'section', get_post_format() );
                   endwhile; endif; wp_reset_postdata();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
get_template_part( 'section', get_post_format() ); endwhile; endif;  ?>
               
          </div>
          
        </div>
 </div>

</section>
   

        <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                  
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                  <?php get_template_part( 'content', get_post_format() ); ?>
      <?php     endwhile; endif;  ?> 
                   <?php
$args=array(
'post_type'=>'absences',
);
$absences_loop=new WP_Query($args);
if($absences_loop->have_posts()) : while($absences_loop->have_posts()) : $absences_loop->the_post();
    get_template_part( 'page', get_post_format() );
 endwhile; endif; wp_reset_postdata();?>
              
</div>
                
</div>
              <?php get_sidebar(); ?>
</div>
</div>

    
      </section>
            <!-- END sidebar -->

          
    
     <?php get_footer();?>