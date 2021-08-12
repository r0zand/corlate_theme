<?php
/**
 * corlatenew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corlatenew
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'corlatenew_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function corlatenew_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on corlatenew, use a find and replace
		 * to change 'corlatenew' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'corlatenew', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'corlatenew' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'corlatenew_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'corlatenew_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corlatenew_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'corlatenew_content_width', 640 );
}
add_action( 'after_setup_theme', 'corlatenew_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corlatenew_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'corlatenew' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'corlatenew' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'corlatenew_widgets_init' );

/**
 * Enqueue  styles and scripts
 */
function corlatenew_scripts() {
  // Enqueue Styles
	wp_enqueue_style( 'corlatenew-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/css/font-awesome.css', array(), _S_VERSION );
	wp_enqueue_style( 'fontawesomemin', get_template_directory_uri(). '/css/font-awesome.min.css', array('bootstrap'), _S_VERSION, 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.min.css', array('fontawesomemin'), _S_VERSION, 'all' );
	wp_enqueue_style( 'pretty', get_template_directory_uri(). '/css/prettyPhoto.css', array('animate'), _S_VERSION, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri(). '/css/main.css', array('pretty'), _S_VERSION, 'all' );
	wp_enqueue_style( 'responsiveness', get_template_directory_uri(). '/css/responsive.css', array('main'), _S_VERSION, 'all' );
	wp_enqueue_style( 'corlate-style', get_stylesheet_uri(), array('responsiveness'), _S_VERSION );

  // Enqueue Scripts 
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'jquery_prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('bootstrap'), _S_VERSION, true );
	wp_enqueue_script( 'jquery_isotope_min', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery_prettyPhoto'), _S_VERSION, true );
	wp_enqueue_script( 'main_jquery', get_template_directory_uri() . '/js/main.js', array('bootstrap'), _S_VERSION, true );
	wp_enqueue_script( 'wow_min', get_template_directory_uri() . '/js/wow.min.js', array('main_jquery'), _S_VERSION, true );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), _S_VERSION, true );
		
	wp_enqueue_script( 'corlatenew-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'corlatenew_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



//Registering Custom Menus
require get_template_directory() . '/inc/corlate-custom-menus.php';

//Registering Theme Options Page
require get_template_directory() . '/inc/corlate-custom-theme-options.php';

// Registering Custom Nav Menu Active Class 
require get_template_directory() . '/inc/corlate-custom-active-menu-class.php';

//Registering Custom Post Types
require get_template_directory() . '/inc/corlate-custom-posttype.php';

//Registering Comment Listing
require get_template_directory() . '/inc/corlate-custom-comment-listing.php';

//Registering Custom Comment Rating
require get_template_directory() . '/inc/comment_rating.php';

//Registering Custom Comment Rating Display
require get_template_directory() . '/inc/comment-rating-display.php';

//Registering Custom Comment Rating Post To Database
require get_template_directory() . '/inc/rating_post.php';

//Registering Custom Sidebars
require get_template_directory() . '/inc/custom-sidebar.php';

// Registering Custom Widgets
require get_template_directory() . '/inc/widgets.php';

// Registering Custom Widgets
require get_template_directory() . '/inc/corlate-custom-comment-form-design-post.php';
//Registering Custom Js for Ajax filtering
require get_template_directory() . '/inc/corlate-ajax-js.php';



add_image_size( 'custom-size', 220, 180 );








