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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  get_template_part( 'content-single', get_post_format() ); endwhile; endif;  ?> 
                    
</div>
                
</div>
              <?php get_sidebar(); ?>
</div>
</div>

    
      </section>