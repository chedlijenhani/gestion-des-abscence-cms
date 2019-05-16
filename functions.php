<?php

add_theme_support('post-thumbnails');


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
function create_post_idpost(){
register_post_type('idpost',
array(
'labels'=>array(
'name'=>__('les absents'),),
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
register_taxonomy_for_object_type('category','idpost');
register_taxonomy_for_object_type('post_tag','idpost');
}
add_action('init','create_post_idpost');

?>