<?php get_header(); ?>

        <section class="site-section py-sm">
        <div class="container">
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
             // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) : ?>
                <div class="pt-5">
              <h3 class="mb-5"><?php echo get_comments_number().'  '; ?> Comments</h3>
            
                    <p>
               <?php comments_template(); ?>
                        </p>
                   
                  </div>
               
                        <?php
            endif;  
            endwhile; endif; ?>
                    
</div>
               
</div>
            <?php get_sidebar(); ?>   
</div>
</div>


    
      </section>
      

<?php get_footer(); ?>
