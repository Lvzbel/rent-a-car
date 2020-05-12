<?php 

// Enqueue Styles and Scripts
function add_theme_scripts() {
  // Vendor CSS
  wp_enqueue_style( 'vendor_styles', get_template_directory_uri() . '/dist/vendor.css', array(), '1.0.0', 'all');
  // Google Fonts
  wp_enqueue_style( 'google_fonts','https://fonts.googleapis.com/css?family=Montserrat:300,500,700&display=swap', array(), '1.0.0', 'all');
  // Line Awesome Icons
  wp_enqueue_style( 'line_awesome_all','https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css', array(), '1.3.0', 'all');
  wp_enqueue_style( 'line_awesome_min','https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css', array(), '1.3.0', 'all');
  // bxSlider CSS
  wp_enqueue_style( 'bxSlider_css', get_template_directory_uri() . '/node_modules/bxslider/dist/jquery.bxslider.css', array(), '4.2.14', 'all');
  // bxSlider Script
  wp_enqueue_script( 'bxSlider_script', get_template_directory_uri() . '/node_modules/bxslider/dist/jquery.bxslider.min.js', array ('jquery'), '4.2.14', true);
  // Custom Styles CSS
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/app.css', array('vendor_styles'), '1.0.0', 'all');
  // Cusom JavaScript
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/app.js', array ('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Create the Menus
function rentacar_menu()
{
  register_nav_menus( array(
    'main-menu' => 'Main Menu'
  ));
}

add_action('init', 'rentacar_menu');

// Enable extra features
// Add Featured Images
add_theme_support( 'post-thumbnails' );
// Reduce the_excerpt to only 20 words
add_filter( 'excerpt_length', function($length) {
  return 20;
} );