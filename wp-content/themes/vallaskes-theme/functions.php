<?php
/**
 * Vallaskes Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vallaskes_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'vallaskes_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vallaskes_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Vallaskes Theme, use a find and replace
		 * to change 'vallaskes-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vallaskes-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		/*add_theme_support( 'automatic-feed-links' );*/

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
				'head-menu' => esc_html__( 'Header', 'vallaskes-theme' ),
				'footer-menu' => esc_html__( 'Footer', 'vallaskes-theme' ),
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
				'vallaskes_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'vallaskes_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vallaskes_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vallaskes_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'vallaskes_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vallaskes_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'vallaskes-theme' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'vallaskes-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vallaskes_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vallaskes_theme_scripts() {
	wp_enqueue_style( 'vallaskes-theme-style', get_template_directory_uri() . '/css/style.css' , array(), _S_VERSION );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'vallaskes_theme_scripts' );

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

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Footer'),
            'menu_title'  => __('Setting'),
            'menu_slug'     => 'theme-general-settings',
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Head'),
            'menu_title'  => __('Head'),
            'menu_slug'     => 'theme-contact-settings',
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer'),
            'menu_title'  => __('Footer'),
            'menu_slug'     => 'theme-contact-settings',
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}


/**
 * Remove Emoji
 */
add_filter('emoji_svg_url', '__return_empty_string');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
remove_action ('wp_head', 'wp_shortlink_wp_head', 10, 0);

function wph_remove_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}
add_filter('tiny_mce_plugins', 'wph_remove_emojis_tinymce');

/**
 * Remove excess link
 */
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

function remove_styles () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action ('wp_print_styles','remove_styles',100);

function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

/* Убрать слово "Category" из заглавия */
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    return $title;
}

/* убираем ссылку с текущей страницы у меню */
function yourstheme_menu_link_attributes( $args ) {
    global $wp;
    $current_url	= untrailingslashit(add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) ) );
    $href		= untrailingslashit( $args['href']);
    if($current_url == $href){
        $args['href'] = '';
    }
    return $args;
}
add_filter( 'nav_menu_link_attributes', 'yourstheme_menu_link_attributes' );

// сначала отменяем регистрацию старого файла
wp_deregister_script( 'jquery' );

// регистрируем новый
//wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );

// delete in project jquery-migrate and jquery-core
function remove_jq_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
            $script->deps = array_diff( $script->deps, array( 'jquery-core' ) );
        }
    }
}
//add_action( 'wp_default_scripts', 'remove_jq_migrate' );