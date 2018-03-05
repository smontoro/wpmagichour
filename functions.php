<?php 

function my_files() {

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Josefin+Slab|Lobster|Raleway:400,900');
	wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('my_main_styles', get_stylesheet_uri());

	wp_enqueue_script('jquery-slip', '//code.jquery.com/jquery-3.2.1.slim.min.js', NULL, '1.0', true);
	wp_enqueue_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', NULL, '1.0', true);
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', NULL, '1.0', true);
	wp_enqueue_script('main-scripts', get_theme_file_uri('/js/main.js'), NULL, true);
};


function theme_features() {
	add_theme_support('title-tag');
}


add_action('wp_enqueue_scripts', 'my_files');

add_action('after_setup_theme', 'theme_features');

?>