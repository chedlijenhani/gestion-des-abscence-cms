      <img src="<?php  the_post_thumbnail_url();  ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2">  
                                      <?php  $user=get_the_author_meta('ID'); ?>   

          <img src=" <?php   echo  esc_url(get_avatar_url($user)); ?>" alt="Image placeholder" />
  <?                    the_author(); ?> </span> &bullet;
                 
                        <span class="mr-2"><?php the_date('Y-m-d'); ?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
                        </div>
<table border="0">
   <thead>
	<tr align="center">

		<th align="center"> <h1 class="mb-4"><?php the_title(); ?></h1></th>

	</tr>
   </thead>

   <tbody>
<?php  $value = get_post_meta($post->ID, "teacher", true);
                    
          $val = get_post_meta($post->ID, "nombre_absences", true);
       
         $v['text'];
            ?>
	<tr>

<td>Enseignant</td> <td align="center"><?php  echo $value['text']; ?></td>
		

	</tr>
       <tr>

<td>Etudiant</td> <td align="center"><?php the_excerpt(); ?></td>
		

</tr>
<tr>

<td>nombre d'absences</td> <td align="center"><?php  echo $val['text']; ?></td>
		

</tr>
   </tbody>
</table>
   
            <div class="pt-5">
              <p>Categories:   <?php $cats=get_the_category();
                   foreach ($cats as $cat){
                        $cat_id=$cat->term_id;
                        echo '<a class="category mb-5" href="#">'.$cat->name.'</a> ';
               
                    } ?></p>
            </div>
  <div class="pt-5">
              <p>Tags:  <?php
if(get_the_tag_list()) {
    echo get_the_tag_list('<ul class="tags" ><li>','</li><li>','</li></ul>');
}
?></p>
            </div>
