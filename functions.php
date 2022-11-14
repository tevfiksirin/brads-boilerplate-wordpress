<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
	wp_enqueue_style('lineawesomecss', get_theme_file_uri('/custom/line-awesome/css/line-awesome.min.css'));
	wp_enqueue_style('glightbox-css', get_theme_file_uri('/custom/glightbox/css/glightbox.min.css'));
	wp_enqueue_style('glightbox-plyr-css', get_theme_file_uri('/custom/glightbox/css/plyr.min.css'));
	wp_register_style('slick-css', get_theme_file_uri() .'/custom/css/slick.css');
	wp_register_style('slick-theme-css', get_theme_file_uri() .'/custom/css/slick-theme.css');
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/custom/js/slick.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('glightbox', get_template_directory_uri().'/custom/glightbox/js/glightbox.min.js', array('jquery'), '1.0.0', true);
		
	wp_enqueue_style( 'swipercss', get_theme_file_uri('/custom/swiper/8-4-4/swiper-bundle.min.css'));
	wp_enqueue_style('swipercss');
	wp_enqueue_script( 'swiperjs', get_template_directory_uri().'/custom/swiper/8-4-4/swiper-bundle.min.js', array('jquery'), '8.4.4', true);
	wp_enqueue_script('swiperjs');
			// Our Custom JS (we'll initialize all here)
	wp_enqueue_script('custom-js', get_template_directory_uri().'/custom/js/custom.js', array('jquery'), '1.0.0', true);
			// Enqueue all CSS & JS files
	wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
	wp_enqueue_script('jquery-min-js');
	wp_enqueue_script('slick-min-js');
	wp_enqueue_script('custom-js');  
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
  register_nav_menu( 'footerMenuLocation', 'Footer Menu Location' );  
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');