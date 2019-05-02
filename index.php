<?php get_header(); ?>
      <!-- END header -->

<?php  get_template_part( 'section', get_post_format() );  ?>
 
      <!-- END section -->
 <?php  get_template_part( 'content', get_post_format() ) ; ?>
 
            <!-- END main-content -->

            <?php get_sidebar(); ?>
            <!-- END sidebar -->

          
    
     <?php get_footer();?>