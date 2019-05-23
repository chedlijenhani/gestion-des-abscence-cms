

      <?php 
     $comments = get_comments(array(
    'post_id' => $post->ID,
     'status' => 'approve'
  ));
    ?>

  
    <div class="pt-5"> 
        <h3 class="mb-5"><?php echo get_comments_number(). '  '; ?> Comments </h3>
    
        <ul class="comment-list">
                
       
        <?php  
           
    foreach ($comments as $comment){ 
       
            ?>
               <li class="comment">
                  <div class="vcard">
                      <?php
$user =$comment->user_id;

        
        
        
if ( $user ) :
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user ) ); ?>" alt="Image placeholder" />
<?php endif; ?>
               
                </div>
                  <div class="comment-body">
                    <h3> <?php echo $comment->comment_author ; ?></h3>
                    <div class="meta"><?php echo $comment->comment_date; ?></div>
                    <p><?php echo$comment->comment_content; ?></p>
                     </div>
                </li>
                <p><a href="#" class="reply rounded">Reply</a></p>
    <?php   } 
        
    ?>
    
    
                
                 
    
    </ul>
        <?php $args_comments = array(
	'max_depth'         => '2',
	'reply_text'        => 'Reply to comment'
); ?>

  <?php $args_comment = array(
  'label_submit'      => __( 'Post Comment test' )
); ?>

  <?php comment_form($args_comment); ?>
   
 
</div>