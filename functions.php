<?php
/**
 * functions du theme.
 * @package portfoliohl
 */

if( ! function_exists('portfoliohl_setup')) :

  function portfoliohl_setup() {
    /*
    * titre du document
    */
    add_theme_support('title-tag');




    /*
    * menu par default wordpress
    */
    register_nav_menus( array(
      'primary' => esc_html__('Primary','portfoliohl'),
      'footer'  => esc_html__( 'Footer', 'portfoliohl' ),
    ));


    /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'portfoliohl-home-small', 200);
    add_image_size( 'portfoliohl-home-large', 280, 280, true );
    add_image_size( 'portfoliohl-image', 690 );
    add_image_size( 'portfoliohl-thumb', 470);
    add_image_size( 'portfoliohl-header', 1920);

    /*
    * custum background wordpress function
    */
    add_theme_support('custum-background', apply_filters('portfoliohl_custum_background_arg', array(
        'default-color' =>'ffffff',
        'default-image' => '',
    )));


    /*
    * logo custum
    */
    add_theme_support('custom-logo',array(
        // 'height' => 55,
        // 'width' => 200,
        'flex-height' => true,
    ));

  }
endif;
add_action( 'after_setup_theme', 'portfoliohl_setup' );

// // size of the excerpt
// function portfoliohl_post_excerpt($length) {
// 	return 10;
// }
// add_filter('excerpt_length', 'portfoliohl_post_excerpt');

/**
 * Enqueue scripts and styles.
 */
function portfoliohl_scripts() {

  wp_enqueue_style( 'portfoliohl-animate', get_template_directory_uri() . '/css/animate/animate.css', array(), true );
  wp_enqueue_style( 'portfoliohl-main-style', get_template_directory_uri() . '/assets/css/main.css', array(),'', 'all' );
  wp_enqueue_style( 'portfoliohl-style', get_stylesheet_uri() );


/**
 * Scripts : wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer ).
 * =====================================================================
 */
 wp_enqueue_script( 'portfoliohl-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '', true );
 wp_enqueue_script( 'portfoliohl-easings', get_template_directory_uri() . '/assets/js/easings.min.js', array('jquery'), '', true );
// wp_enqueue_script( 'portfoliohl-velocity', get_template_directory_uri() . '/assets/js/vendor/velocity.min.js', array('jquery'), '', true );
// wp_enqueue_script( 'portfoliohl-wow', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array('jquery'), '', true );
// wp_enqueue_script( 'portfoliohl-scroll', get_template_directory_uri() . '/assets/js/vendor/scrollMonitor.min.js', array('jquery'), '', true );
 wp_enqueue_script( 'portfoliohl-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true );
 // wp_enqueue_script( 'portfoliohl-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '', true );
 wp_enqueue_script( 'portfoliohl-app.js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfoliohl_scripts');


// Load scripts on home page ONLY

function jquery_only_home() {
	if (is_page('home' ) )	{
wp_enqueue_script( 'portfoliohl-anim', get_template_directory_uri() . '/assets/js/anime.min.js', array('jquery'), '', true );
wp_enqueue_script( 'portfoliohl-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '', true );
wp_enqueue_script( 'portfoliohl-apphome.js', get_template_directory_uri() . '/assets/js/app-home.js', array('jquery'), '', true );
	}
}

add_action('wp_enqueue_scripts', 'jquery_only_home');

/**
 * Enqueue Bootstrap
 */
function portfoliohl_enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-v4/bootstrap.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'portfoliohl_enqueue_bootstrap', 9 );



/**
 * Customizer defaults
 */
if ( !function_exists('portfoliohl_customizer_defaults') ) :
function portfoliohl_customizer_defaults() {
	$defaults = array(

    //couleur theme
    'color_primary'               => '#64C9FE',
    'color_secondary'             => '#3f4c94',
    'color_nav'                   => '#3f4c94',
    'color_logo'                  => '#000',
    //section slider
    'slider_speed'			          => '7000',
    'slider_class'                => 'container-fluid',
    'slider_img_1'                => get_template_directory_uri() . '/assets/img/slider_1.jpg',
    'slider_img_2'                => get_template_directory_uri() . '/assets/img/slider_2.jpg',
    'slider_img_3'                => get_template_directory_uri() . '/assets/img/slider_3.jpg',
    //section service
    'service_style_icon'          => 'icon-square',
    'service_class'               => 'style-inline',
    //webdesign
    'webdesign_parallax_speed'    =>  '1.85',
    'webdesign_parallax_img'      => get_template_directory_uri() . '/assets/img/template_1.png',
    'webdesign_device_img'        => get_template_directory_uri() . '/assets/img/wireframe.gif',
    //portfolio
    'portfolio_grid'              => '3',
    'portfolio_class'             => 'container',
    'image_phone'                 => get_template_directory_uri() . '/images/img_phone.jpg',

	);
	return $defaults;
}
endif;



/**
 * Styles
 */
// require get_template_directory() . '/inc/styles.php';


/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';




/**
 * Functions
 */
require get_template_directory() . '/inc/functions/loader.php';

/**
 * Custom post type
 */
require get_template_directory() . '/inc/custom-post-type/service.php';
require get_template_directory() . '/inc/custom-post-type/portfolio.php';

/**
 * Shortcode
 */
require get_template_directory() . '/inc/shortcode/shortcode.php';

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/styles.php';


// require get_template_directory() . '/inc/about.php';
//
// require get_template_directory() . '/inc/shortcode.php';
//
// require get_template_directory() . '/inc/portfolio.php';
//
// require get_template_directory() . '/inc/breadcrumb.php';
//
// require get_template_directory() . '/inc/template-tags.php';
//
// require get_template_directory() . '/inc/functions/loader.php';
//
// require get_template_directory() . '/inc/cleanup.php';


/**
* custom metabox
*/
function post_image( $meta_boxes ) {
	$prefix = 'last_post';

	$meta_boxes[] = array(
		'id' => 'img_last_post',
		'title' => esc_html__( 'image_post', 'image en avant de la section post' ),
		'post_types' => array('portfolio' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'image',
				'type' => 'image',
				'name' => esc_html__( 'Image Upload', 'image en avant de la section post' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'post_image' );

/**
* remove version style css/js
*/
 function portfoliohl_remove_wp_version_strings($src) {

  global $wp_version;
  parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if(!empty($query['ver']) && $query['ver'] === $wp_version) {
      $src = remove_query_arg('ver',$src);
    }
    return $src;
 }
add_filter('script_loader_src','portfoliohl_remove_wp_version_strings');
add_filter('style_loader_src','portfoliohl_remove_wp_version_strings');

/**
* remove meta generator version wordpress
*/
function portfoliohl_remove_meta_version() {
  return '';
}
add_filter('the_generator','portfoliohl_remove_meta_version');

/**
* remove class navigation
*/
add_action( 'nav_menu_css_class', 'menu_item_classes', 10, 3 );
function menu_item_classes( $classes ) {
   $classes = array_intersect( $classes, array(
                              'menu-item',
                              'current-menu-item'
                              ) );
   return $classes;
}

/**
* remove id navigation
*/
add_action( 'nav_menu_item_id', 'menu_item_id', 10, 3 );
function menu_item_id( $id ) {
  return '';
}
