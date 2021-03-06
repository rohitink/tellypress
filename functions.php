<?php
/**
 * TellyPress functions and definitions
 *
 * @package TellyPress
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'tellypress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function tellypress_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on TellyPress, use a find and replace
	 * to change 'tellypress' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tellypress', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tellypress' ),
		'footer' => __( 'Footer Menu', 'tellypress' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'tellypress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_editor_style( 'custom-editor-style.css' );
}
endif; // tellypress_setup
add_action( 'after_setup_theme', 'tellypress_setup' );

/*Editor Style Sheer*/

/**
 * Register widgetized area and update sidebar with default widgets
 */
function tellypress_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'tellypress' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'tellypress_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function tellypress_scripts() {
	
	wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:700,300|Roboto:400,300'); 
	
	wp_enqueue_style( 'tellypress-style', get_stylesheet_uri(), array('fonts') );
	
	wp_enqueue_style( 'superfish-style', get_stylesheet_directory_uri().'/css/superfish.css', array(), false, false);

	wp_enqueue_script( 'tellypress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tellypress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'tellypress-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	
	
	wp_enqueue_script('jquery');
	/*can not use the hoverIntent provided in wordpress core, as it is version r6 and does not support event delegation. */
	wp_enqueue_script('hoverIntent-r7', get_template_directory_uri() . '/js/hoverIntent.js', array('jquery'), 'r7');
	wp_enqueue_script(
		'superfish',
		get_stylesheet_directory_uri() . '/js/superfish.js',
		array( 'jquery','hoverIntent-r7' ), '1.5.13'
	);
	
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/custom.js',
		array( 'jquery','superfish' )
	);
	
}
add_action( 'wp_enqueue_scripts', 'tellypress_scripts' );

require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

