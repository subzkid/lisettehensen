<?php
/**
 * lisette functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lisette
 */

if ( ! function_exists( 'lisette_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lisette_setup() {
      
        function pwwp_mytheme_setup() {

register_nav_menus(
array(
'footer' => __( 'Footer Menu'),
'top_menu' => __( 'Top Menu', 'bootpress' )
)
);

}
add_action( 'after_setup_theme', 'mytheme_setup' );
      
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lisette, use a find and replace
		 * to change 'lisette' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lisette', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lisette' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
//			'search-form',
//			'comment-form',
//			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lisette_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lisette_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lisette_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lisette_content_width', 640 );
}
add_action( 'after_setup_theme', 'lisette_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lisette_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lisette' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lisette' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  
  	register_sidebar( array(
		'name' => 'Footer Area Links',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item widget-item-left">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
  
    	register_sidebar( array(
		'name' => 'Footer Area Rechts',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item widget-item-right">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'lisette_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lisette_scripts() {
  
  // register your script location, dependencies and version
   wp_register_script('custom_script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0' );   
 
  // enqueue the script
  
    wp_enqueue_script('custom_script');
  
  
	wp_enqueue_style( 'lisette-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lisette-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lisette-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lisette_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Register Custom Navigation Walker
require_once 'wp-bootstrap-navwalker.php';

require_once 'noParoundIMG.php';

function paulund_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'paulund_remove_default_image_sizes');

//function remove_img_attributes( $html ) {
//$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
//return $html;
//}
//add_filter( 'post_thumbnail_html', 'remove_img_attributes', 10 );
//add_filter( 'image_send_to_editor', 'remove_img_attributes', 10 );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

