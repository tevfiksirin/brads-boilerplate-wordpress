<?php
function prefix_add_footer_styles() {
	wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
	wp_enqueue_style('glightbox-css', get_template_directory_uri(). '/custom/glightbox/css/glightbox.min.css');
	wp_enqueue_style('glightbox-plyr-css', get_template_directory_uri(). '/custom/glightbox/css/plyr.min.css');
	wp_enqueue_style('slick-theme-css', get_template_directory_uri(). '/custom/css/slick-theme.css');
	wp_enqueue_style( 'swipercss', get_template_directory_uri(). '/custom/swiper/8-4-4/swiper-bundle.min.css');
};
add_action( 'get_footer', 'prefix_add_footer_styles' );
function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
	wp_enqueue_script('glightbox', get_template_directory_uri().'/custom/glightbox/js/glightbox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'swiperjs', get_template_directory_uri().'/custom/swiper/8-4-4/swiper-bundle.min.js', array('jquery'), '8.4.4', true);
	wp_enqueue_script('swiperjs');
			// Our Custom JS (we'll initialize all here)
	wp_enqueue_script('custom-js', get_template_directory_uri().'/custom/js/custom.js', array('jquery'), '1.0.0', true);
			// Enqueue all CSS & JS files
	wp_enqueue_script('custom-js');  
}
// function remove_react_dom_scripts() {
// 	wp_dequeue_script( 'custom-js' );
// }
// add_action( 'wp_print_scripts', 'remove_react_dom_scripts' );
add_action('wp_enqueue_scripts', 'boilerplate_load_assets');
function defer_parsing_of_js( $url ) {
	if ( is_user_logged_in() ) return $url; //don't break WP Admin
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

// Alternative
// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // Wordpress core
wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}
function boilerplate_add_support() {
  register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
  register_nav_menu( 'footerMenuLocation', 'Footer Menu Location' );  
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');