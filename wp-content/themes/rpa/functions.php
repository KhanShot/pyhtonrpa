<?php
/**
 * Rpa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rpa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rpa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rpa, use a find and replace
		* to change 'rpa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rpa', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rpa' ),
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
			'rpa_custom_background_args',
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
add_action( 'after_setup_theme', 'rpa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rpa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rpa_content_width', 640 );
}
add_action( 'after_setup_theme', 'rpa_content_width', 0 );
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rpa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rpa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rpa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rpa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rpa_scripts() {
	wp_enqueue_style( 'rpa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rpa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rpa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
 // Register Custom Post Type
 function faq_rpa() {

	$labels = array(
		'name'                  => _x( 'Вопрос/ответ', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Вопрос/ответ', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Вопросы/ответы', 'text_domain' ),
		'name_admin_bar'        => __( 'Вопросы/ответы', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все вопросы/ответы', 'text_domain' ),
		'add_new_item'          => __( 'Добавить вопрос/ответ', 'text_domain' ),
		'add_new'               => __( 'Добавить вопрос/ответ', 'text_domain' ),
		'new_item'              => __( 'Новый вопрос/ответ', 'text_domain' ),
		'edit_item'             => __( 'Редактировать вопрос/ответ', 'text_domain' ),
		'update_item'           => __( 'Обновить вопрос/ответ', 'text_domain' ),
		'view_item'             => __( 'Посмотреть вопрос/ответ', 'text_domain' ),
		'view_items'            => __( 'Посмотреть вопросы/ответы', 'text_domain' ),
		'search_items'          => __( 'Поиск по вопросу/ответу', 'text_domain' ),
		'not_found'             => __( 'Вопросы/ответы отсутствуют', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Faq', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'faq_rpa', 0 );
 // Register Custom Post Type
function case_rpa() {

	$labels = array(
		'name'                  => _x( 'Кейсы', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Кейс', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Кейсы', 'text_domain' ),
		'name_admin_bar'        => __( 'Кейсы', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все кейсы', 'text_domain' ),
		'add_new_item'          => __( 'Добавить новый кейс', 'text_domain' ),
		'add_new'               => __( 'Добавить кейс', 'text_domain' ),
		'new_item'              => __( 'Новый кейс', 'text_domain' ),
		'edit_item'             => __( 'Редактировать кейс', 'text_domain' ),
		'update_item'           => __( 'Обновить кейс', 'text_domain' ),
		'view_item'             => __( 'Посмотреть кейс', 'text_domain' ),
		'view_items'            => __( 'Посмотреть кейсы', 'text_domain' ),
		'search_items'          => __( 'Поиск по кейсам', 'text_domain' ),
		'not_found'             => __( 'Кейсы отсутствуют', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Кейс', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'case', $args );

}
add_action( 'init', 'case_rpa', 0 );
add_action( 'wp_enqueue_scripts', 'rpa_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/carbon-fields.php';

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

add_action( 'wp_enqueue_scripts', 'true_stili_frontend', 25 );
 
function true_stili_frontend() {
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'webflow', get_stylesheet_directory_uri() . '/css/webflow.css' );
 	wp_enqueue_style( 'rpa', get_stylesheet_directory_uri() . '/css/rpa-9d49ca.webflow.css' );
}
add_action( 'wp_enqueue_scripts', 'webflow_js' );
function webflow_js(){
  wp_enqueue_script( 'webflow_js', get_template_directory_uri() . '/js/webflow.js','','1.1', true);
}
