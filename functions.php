<?php 

// Enqueue Styles and Scripts
function add_theme_scripts() {
  // Vendor CSS
  wp_enqueue_style( 'vendor_styles', get_template_directory_uri() . '/dist/vendor.css', array(), '1.0.0', 'all');
  // Google Fonts
  wp_enqueue_style( 'google_fonts','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,400&display=swap', array(), '1.0.0', 'all');
  // Line Awesome Icons
  wp_enqueue_style( 'line_awesome_all','https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css', array(), '1.3.0', 'all');
  wp_enqueue_style( 'line_awesome_min','https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css', array(), '1.3.0', 'all');
  // bxSlider CSS
  wp_enqueue_style( 'bxSlider_css', get_template_directory_uri() . '/node_modules/bxslider/dist/jquery.bxslider.css', array(), '4.2.14', 'all');
  // bxSlider Script
  wp_enqueue_script( 'bxSlider_script', get_template_directory_uri() . '/node_modules/bxslider/dist/jquery.bxslider.min.js', array ('jquery'), '4.2.14', true);

  // Magnific Popup
  wp_enqueue_style( 'magnific_css', get_template_directory_uri() . '/node_modules/magnific-popup/dist/magnific-popup.css', array(), '1.1.0', 'all');
  wp_enqueue_script( 'manific_script', get_template_directory_uri() . '/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', array ('jquery'), '1.1.0', true);

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
// Custom Image Size for Auto
add_image_size( 'auto_img', 580, 370, true ); 
// Add Featured Images
add_theme_support( 'post-thumbnails' );
// Reduce the_excerpt to only 20 words
add_filter( 'excerpt_length', function($length) {
  return 20;
} );

  //==================================>
  // Custom Auto Post
  //==================================>
	function rentacar_autos_post()
	{
		register_post_type('rentacar_autos', array(
			'public' => true,
			'menu_icon' => 'dashicons-dashboard',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'autos'
			),
			'labels' => array(
				'name' => 'Autos',
				'add_new_item' => 'Add New Auto',
				'edit_item' => 'Edit Auto',
				'all_items' => 'All Autos',
				'singular_name' => 'Auto',
				'archives' => 'autos'
			)
    ));
    
    register_post_type('rentacar_contacts', array(
			'public' => true,
			'menu_icon' => 'dashicons-phone',
			'supports' => array( 'title', 'editor' ),
			'has_archive' => false,
			'rewrite' => array(
				'slug' => 'contacts'
			),
			'labels' => array(
				'name' => 'Contacts',
				'add_new_item' => 'Add New Contact',
				'edit_item' => 'Edit Contact',
				'all_items' => 'All Contacts',
				'singular_name' => 'Contact',
				'archives' => 'contacts'
			)
		));
	}

  add_action('init', 'rentacar_autos_post');

  //==================================>
  // Custom Taxonomies for Autos
  //==================================>
  function rentacar_autos_taxonomies()
{

  // Transmission Type
    $labels = [
      'name'              => _x('Transmissions', 'taxonomy general name'),
      'singular_name'     => _x('Transmission', 'taxonomy singular name'),
      'search_items'      => __('Search Transmissions'),
      'all_items'         => __('All Transmissions'),
      'parent_item'       => __('Parent Transmission'),
      'parent_item_colon' => __('Parent Transmission:'),
      'edit_item'         => __('Edit Transmission'),
      'update_item'       => __('Update Transmission'),
      'add_new_item'      => __('Add New Transmission'),
      'new_item_name'     => __('New Transmission Name'),
      'menu_name'         => __('Transmission'),
      ];
      $args = [
      'hierarchical'      => true, // make it hierarchical (like categories)
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'show_in_quick_edit' => false,
      'meta_box_cb'        => false,
      'rewrite'           => ['slug' => 'transmission'],
      ];
      register_taxonomy('trans', ['rentacar_autos'], $args);

  // Brand
  $labels = [
    'name'              => _x('Brands', 'taxonomy general name'),
    'singular_name'     => _x('Brand', 'taxonomy singular name'),
    'search_items'      => __('Search Brands'),
    'all_items'         => __('All Brands'),
    'parent_item'       => __('Parent Brand'),
    'parent_item_colon' => __('Parent Brand:'),
    'edit_item'         => __('Edit Brand'),
    'update_item'       => __('Update Brand'),
    'add_new_item'      => __('Add New Brand'),
    'new_item_name'     => __('New Brand Name'),
    'menu_name'         => __('Brand'),
    ];
    $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_quick_edit'  => false,
    'meta_box_cb'       => false,
    'rewrite'           => ['slug' => 'brand'],
    ];
    register_taxonomy('brand', ['rentacar_autos'], $args);

  // Drive Type
  $labels = [
    'name'              => _x('Drives', 'taxonomy general name'),
    'singular_name'     => _x('Drive', 'taxonomy singular name'),
    'search_items'      => __('Search Drives'),
    'all_items'         => __('All Drives'),
    'parent_item'       => __('Parent Drive'),
    'parent_item_colon' => __('Parent Drive:'),
    'edit_item'         => __('Edit Drive'),
    'update_item'       => __('Update Drive'),
    'add_new_item'      => __('Add New Drive'),
    'new_item_name'     => __('New Drive Name'),
    'menu_name'         => __('Drive'),
    ];
    $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_quick_edit' => false,
    'meta_box_cb'        => false,
    'rewrite'           => ['slug' => 'drive'],
    ];
    register_taxonomy('drive', ['rentacar_autos'], $args);

    // Car Type
  $labels = [
    'name'              => _x('Types', 'taxonomy general name'),
    'singular_name'     => _x('Type', 'taxonomy singular name'),
    'search_items'      => __('Search Types'),
    'all_items'         => __('All Types'),
    'parent_item'       => __('Parent Type'),
    'parent_item_colon' => __('Parent Type:'),
    'edit_item'         => __('Edit Type'),
    'update_item'       => __('Update Type'),
    'add_new_item'      => __('Add New Type'),
    'new_item_name'     => __('New Type Name'),
    'menu_name'         => __('Type'),
    ];
    $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_quick_edit' => false,
    'meta_box_cb'        => false,
    'rewrite'           => ['slug' => 'type'],
    ];
    register_taxonomy('type', ['rentacar_autos'], $args);
}
add_action('init', 'rentacar_autos_taxonomies');