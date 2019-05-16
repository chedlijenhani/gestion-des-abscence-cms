<?php get_header(); ?>

        <section class="site-section py-sm">
        <div class="container">
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
            if ( comments_open() || get_comments_number() ) : comments_template();
            endif; endwhile; endif; ?>
                    
</div>
                
</div>
              <?php get_sidebar(); ?>
</div>
</div>

    
      </section>
      

<?php get_footer(); ?>
