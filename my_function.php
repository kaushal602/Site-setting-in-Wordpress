<?php
/************* Footer Setting ************/
show_admin_bar( false );
add_action( 'admin_menu', 'footer_menu' );

function footer_menu(){
	add_menu_page( 'Site Setting', 'Site Setting', 'manage_options', 'footer.aspx', 'footerSettings', 'dashicons-admin-settings' ); 
	add_action( 'admin_init', 'register_my_footer_settings' );
}
function register_my_footer_settings(){
  register_setting( 'my_footer_settings', 'site_title' );
	register_setting( 'my_footer_settings', 'phone1' );
	register_setting( 'my_footer_settings', 'phone2' );
	register_setting( 'my_footer_settings', 'phone3' );
	register_setting( 'my_footer_settings', 'email' );
  register_setting( 'my_footer_settings', 'address' );
	register_setting( 'my_footer_settings', 'facebook' );
	register_setting( 'my_footer_settings', 'skype' );
	register_setting( 'my_footer_settings', 'twitter' );	
	/*register_setting( 'my_footer_settings', 'google' );
	register_setting( 'my_footer_settings', 'linkedin' );
	register_setting( 'my_footer_settings', 'instagram' );
	register_setting( 'my_footer_settings', 'youtube' );*/
	register_setting( 'my_footer_settings', 'dribbble' );
	//register_setting( 'my_footer_settings', 'gallery_link' );
	
}
function footerSettings(){
	include "site_setting.php";
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}


//remove_filter( 'sanitize_title', 'sanitize_title_with_dashes', 10, 3 );

/*add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );
 
function additional_active_item_classes($classes = array(), $menu_item = false){
 
	if(in_array('current-menu-item', $menu_item->classes)){
		$classes[] = 'active';
	}
 
	return $classes;
}*/




?>
