<?php get_header(); ?>
      <!-- END header -->

<?php  get_template_part( 'section', get_post_format() );  ?>
   
      <!-- END section -->
 <?php  get_template_part( 'content', get_post_format() ) ; ?>
 
            <!-- END main-content -->

          
            <!-- END sidebar -->

          
    
     <?php get_footer();?>