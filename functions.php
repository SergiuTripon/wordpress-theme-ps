<?php 

require_once('widgets/social-widget.php');

//fonts
function google_fonts() {
	wp_register_style('google_fonts', 'http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,300,600,700,800|Lato:400,100,300,700,900');
	
	wp_enqueue_style( 'google_fonts');
}
add_action('wp_print_styles', 'google_fonts');

//css
function css_styles() {
	
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_register_style('ie10-viewport-bug-workaround','https://maxcdn.bootstrapcdn.com/css/ie10-viewport-bug-workaround.css');
	wp_register_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_register_style('css-main', get_stylesheet_uri());
	
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('ie10-viewport-bug-workaround');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('css-main');
}
add_action('wp_enqueue_scripts', 'css_styles');

//js
function js_scripts() {
	
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
	wp_register_script('ie10-viewport-bug-workaround', 'https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js');
	wp_register_script('js-main', get_template_directory_uri() . '/script.js');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('ie10-viewport-bug-workaround');
	wp_enqueue_script('js-main');
}

add_action('wp_enqueue_scripts', 'js_scripts');

//Remove ul class from wp_nav_menu
function remove_ul ($menu) {
	return preg_replace(array('#^<ul[^>]*>#', '#</ul>$#' ), '', $menu);
}
add_filter('wp_nav_menu', 'remove_ul');

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'before_widget' => '<div class="sidebar-widget"><div class="panel panel-default panel-custom">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<div class="panel-heading text-center"><h3 class="panel-title">',
	'after_title' => '</h3></div><div class="panel-body text-center">',
));

//register Social widget
function register_social_widget() {
    register_widget('Social');
}
add_action('widgets_init', 'register_social_widget');
?>