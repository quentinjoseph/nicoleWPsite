<?php 

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


// Scripts and Such
function nicolejoseph_script_enqueue(){
    wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('customstyles', get_template_directory_uri() . '/source/style.css', [], '1.0.0', 'all' );
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/source/lightbox.css', [], '1.0.0', 'all' );
    wp_enqueue_style('lityCSS', get_template_directory_uri() . '/source/lity.css', [], '1.0.0', 'all' );
    wp_enqueue_script('mapsKey', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBKdyEwhruG0BNj3XXSu4uiN2Ucc-5_NpM');
    wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.js', [], '1.0.0', true );
    wp_enqueue_script('lityJS', get_template_directory_uri() . '/js/lity.js', [], '1.0.0', true );
    wp_enqueue_script('customJS', get_template_directory_uri() . '/js/script.js', [], '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'nicolejoseph_script_enqueue');




function nicolejoseph_theme_setup(){
add_theme_support('menus');
register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'nicolejoseph_theme_setup');


// add theme support stuff
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',['aside', 'image', 'video']);




function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBKdyEwhruG0BNj3XXSu4uiN2Ucc-5_NpM');
}

add_action('acf/init', 'my_acf_init');


?>