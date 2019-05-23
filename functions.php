<?php
function register_my_menu() {
			register_nav_menu( 'nav-menu', __( 'Navigation Menu' ) );
				}
add_action( 'init', 'register_my_menu' );
add_theme_support('post-thumbnails');
add_image_size('small-thumbnails',350,234,true);
function custom_settings_add_menu() {
			add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
			'custom-settings', 'custom_settings_page', null, 99 );
		}
add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
		</form>
	</div>
	<?php }
	function setting_instagram() { ?>
	<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
	<?php }
	function setting_twitter() { ?>
		<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
		<?php }
function setting_youtube() { ?>
			<input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" />
			<?php }
function setting_facebook() { ?>
			<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
			<?php }
function custom_settings_page_setup() {
		add_settings_section('section', 'All Settings', null, 'theme-options');
		add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
		add_settings_field('youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section');
		add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
		add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
			register_setting('section', 'twitter');
			register_setting('section', 'youtube');
			register_setting('section', 'facebook');
			register_setting('section', 'instagram');
}

add_action( 'admin_init', 'custom_settings_page_setup' );
// Support Featured Images
add_theme_support( 'post-thumbnails' ); 

/*
/post pérsonalisé absences
/
*/

function create_post_absences(){
	register_post_type('absences',
		array(
			'labels'=>array(
				'name'=>__('Absences'),),
				'public'=>true,
				'hierarchical'=>true,
				'has_archive'=>true,
				'supports'=>array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			),
			'taxonomies'=>array(
				'post_tag',
				'category',
			)
		)
	);
	register_taxonomy_for_object_type('category','absences');
	register_taxonomy_for_object_type('post_tag','absences');
}
add_action('init','create_post_absences');



function add_teacher_meta_box(){
	add_meta_box(
		'teacher_meta_box',// $id
		'Enseignant',// $title
		'show_teacher_meta_box',// $callback
		'absences',// $screen
		'normal',// $context
		'high'// $priority
	);
}
add_action('add_meta_boxes','add_teacher_meta_box'); 



function show_teacher_meta_box(){
	global $post;
	$meta=get_post_meta($post->ID , 'Enseignant' , true); ?>
	<input type="hidden" name="teacher_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__) ); ?>">
	
	<p>
	<label for="Enseignant">Enseignant</label>
	<br>
	<input type="text" name="Enseignant" id="Enseignant" class="regular-text"  >
</p>
	<?php
}


function save_teacher_meta( $post_id ) {
		// verify nonce
		if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
					return $post_id;
		}
		// check autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
					return $post_id;
		}
		// check permissions
		if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
		}
		}
				$old = get_post_meta( $post_id, 'teacher', true );
				$new = $_POST['teacher'];
		if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'teacher', $new );
		} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'teacher', $old );
		}
		}
		add_action( 'save_post', 'save_teacher_meta' ); 

?>
