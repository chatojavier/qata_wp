<?php
/**========================
 * Qata Alpaca Theme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Qata_Alpaca_Theme
===========================*/

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'qatatheme_setup' ) ) :
	/**========================
	 * Sets up theme defaults and registers support for various WordPress features.
	===========================*/
	function qatatheme_setup() {
		/**========================
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		===========================*/
		load_theme_textdomain( 'qatatheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'qatatheme' ),
			)
		);

		/**========================
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		===========================*/
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
				'qatatheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**========================
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		===========================*/
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
add_action( 'after_setup_theme', 'qatatheme_setup' );

/**========================
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
===========================*/
function qatatheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'qatatheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'qatatheme_content_width', 0 );

/**========================
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
===========================*/
function qatatheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'qatatheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'qatatheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'qatatheme_widgets_init' );

/**========================
 * Enqueue scripts and styles.
===========================*/
function qatatheme_scripts() {
	//Wordpress Styles
	wp_enqueue_style( 'qatatheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'qatatheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'qatatheme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//main css & js
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
	wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main-min.js', array(), _S_VERSION, true );
	wp_enqueue_style('main-css');
	wp_enqueue_script('main-js');

	//swiper slider
	wp_register_script( 'swiper-js', get_stylesheet_directory_uri() . '/node_modules/swiper/js/swiper.min.js');
	wp_enqueue_script('swiper-js');
}
add_action( 'wp_enqueue_scripts', 'qatatheme_scripts' );

/**========================
 * Implement the Custom Header feature.
===========================*/
require get_template_directory() . '/inc/custom-header.php';

/**========================
 * Custom template tags for this theme.
===========================*/
require get_template_directory() . '/inc/template-tags.php';

/**========================
 * Functions which enhance the theme by hooking into WordPress.
===========================*/
require get_template_directory() . '/inc/template-functions.php';

/**========================
 * Customizer additions.
===========================*/
require get_template_directory() . '/inc/customizer.php';

/**========================
 * Load Jetpack compatibility file.
===========================*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

