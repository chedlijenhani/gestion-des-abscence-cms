<?php get_header(); ?>
<div class="row">
  <div class="col-sm-12">
    <?php
    $args=array(
      'post_type'=>'absences',
    );
    $absences_loop=new WP_Query($args);
    if($absences_loop->have_posts()) : while($absences_loop->have_posts()) : $absences_loop->the_post();
    the_content();
    ?>
    <div class="col-md-6">
      <a href="<?php the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
        <div >    <?php  the_post_thumbnail('small-thumbnails');  ?>   </div>
        <div class="blog-content-body">
          <div class="post-meta">
            <span class="author mr-2"> <?php the_author(); ?></span>&bullet;
            <span class="mr-2"><?php the_date('Y-m-d'); ?> </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
          </div>
          <?php
          $value = get_post_meta($post->ID, "teacher", true);
          $v = get_post_meta($post->ID, "nombre_absences", true);
            echo "<ul class='post-meta' >";
            echo "<li>";
            echo "champs pesrsonnalisé ".$value['text'];
            echo "</li>";
            echo "<li>";
            echo "champs pesrsonnalisé ".$v['text'];
            echo "</li>";
            echo "</ul>";
          ?>
          <h2><?php the_title(); ?></h2>
        </div>
      </a>
    </div>
    <!-- contents of Your Post -->
  <?php endwhile; endif; wp_reset_postdata();?>
  <?php get_footer();?>
