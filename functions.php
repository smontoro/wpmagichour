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

	register_nav_menu('top-navigation', 'Top Navbar');
	register_nav_menu('footer-navigation', 'Footer Social Links');
}


add_action('wp_enqueue_scripts', 'my_files');

add_action('after_setup_theme', 'theme_features');

function my_customizer_settings($wp_customize) {

	$wp_customize -> add_section('header_section', array(
		'title' => 'Header Section'
	));

	$wp_customize->add_setting('header_tagline');

	$wp_customize-> add_control(
		new WP_Customize_Control(
			$wp_customize,
			'header_tagline',
			array(
				'label' => 'Header Tagline',
				'description' => 'Enter custom text here.',
				'section' => 'header_section',
				'settings' => 'header_tagline'
			)
		)
	);

	$wp_customize->selective_refresh->add_partial('header_tagline', array('selector'=>'#tagline'
	));
}

add_action('customize_register', 'my_customizer_settings');


?>