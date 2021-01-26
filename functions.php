<?php
/**
 * skmponz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skmponz
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'skmponz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function skmponz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on skmponz, use a find and replace
		 * to change 'skmponz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'skmponz', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'skmponz' ),
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
				'skmponz_custom_background_args',
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
add_action( 'after_setup_theme', 'skmponz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skmponz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'skmponz_content_width', 640 );
}
add_action( 'after_setup_theme', 'skmponz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skmponz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'skmponz' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'skmponz' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
        array(
            'name'          => esc_html__( 'Mobile', 'skmponz' ),
            'id'            => 'sidebar-mobile',
            'description'   => esc_html__( 'Add widgets here.', 'skmponz' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'skmponz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skmponz_scripts() {
	wp_enqueue_style( 'skmponz-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'skmponz-main', get_template_directory_uri() . '/js/main.js', array('gsap'), _S_VERSION, true );
    wp_register_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', null, null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skmponz_scripts' );

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

/* Add custom post types */

// Add Wspomnienia z misji post type
function skmponz_add_wspomnienia_z_misji_post_type() {
    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $labels = array(
        'name' => 'Wspomnienia z misji'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'wspomnienia' ),
        'has_archive'          => false,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-admin-site-alt'
    );

    register_post_type("Wspomnienia z misji", $args);
}

add_action("init", "skmponz_add_wspomnienia_z_misji_post_type");

// Add Posiedzenia zarzdu post type
function skmponz_add_posiedzenia_zarzadu_post_type() {
    $supports = array(
        'title',
        'editor'
    );

    $labels = array(
        'name' => 'Posiedzenia zarzadu'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-businessman'
    );

    register_post_type("Posiedzenia zarzadu", $args);
}

add_action("init", "skmponz_add_posiedzenia_zarzadu_post_type");

// Add Komunikaty organizacyjne post type
function skmponz_add_komunikaty_organizacyjne_post_type() {
    $supports = array(
        'title',
        'editor'
    );

    $labels = array(
        'name' => 'Kom. organizacyjne'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 32,
        'menu_icon'            => 'dashicons-welcome-write-blog'
    );

    register_post_type("Kom organizacyjne", $args);
}

add_action("init", "skmponz_add_komunikaty_organizacyjne_post_type");

/* Archives for custom post types */
function my_custom_post_type_archive_where($where,$args){
    $post_type  = isset($args['Posiedzenia zarzadu'])  ? $args['Posiedzenia zarzadu']  : 'post';
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;
}

add_filter( 'getarchives_where','my_custom_post_type_archive_where',10,2);