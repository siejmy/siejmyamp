<?php
/**
 * SiejmyAMP functions and definitions
 * @package SiejmyAMP
 * @subpackage SiejmyAMP
 * @since SiejmyAMP 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function siejmyamp_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

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
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SiejmyAMP, use a find and replace
	 * to change 'siejmyamp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'siejmyamp' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new TwentyTwenty_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

function siejmyamp_headers() {
	header( 'Link: <https://cdn.ampproject.org/v0.js>; rel=preload; as=script' , false);
	header( 'Link: <https://cdn.ampproject.org/v0/amp-analytics-0.1.js>; rel=preload; as=script' , false);
	header( 'Link: <https://fonts.googleapis.com/css2?family=Lato%3Aital%2Cwght%400%2C100%3B0%2C300%3B0%2C400%3B0%2C900%3B1%2C300&display=swap&ver=1>; rel=preload; as=style; crossorigin=anonymous' , false);
	header( 'Link: <https://cdn.ampproject.org/v0/amp-consent-0.1.js>; rel=preload; as=script' , false);
	header( 'Link: <https://cdn.ampproject.org/v0/amp-sidebar-0.1.js>; rel=preload; as=script' , false);
}

add_action( 'send_headers', 'siejmyamp_headers' );


add_action( 'after_setup_theme', 'siejmyamp_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function siejmyamp_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style('font-lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,900;1,300&display=swap', array(), '1');

	wp_enqueue_style( 'siejmyamp-style', get_stylesheet_uri(), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'siejmyamp_register_styles' );


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function siejmyamp_menus() {

	$locations = array(
		'megamenu'  => 'Megamenu w sidebarze',
		'footer' => 'Menu w stopce',
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'siejmyamp_menus' );


if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function siejmyamp_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'siejmyamp' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'siejmyamp' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'siejmyamp' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'siejmyamp' ),
			)
		)
	);

}

add_action( 'widgets_init', 'siejmyamp_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 */
function siejmyamp_block_editor_styles() {

	// Enqueue the editor styles.
	wp_enqueue_style( 'siejmyamp-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Enqueue the editor script.
	wp_enqueue_script( 'siejmyamp-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'siejmyamp_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function siejmyamp_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'siejmyamp_classic_editor_styles' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function siejmyamp_block_editor_settings() {
	add_theme_support( 'editor-styles' );
}

add_action( 'after_setup_theme', 'siejmyamp_block_editor_settings' );


/******************************************/
/* User role                              */
/******************************************/
//Let Contributor Role to Upload Media
if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}

/******************************************/
/* Admin welcome                          */
/******************************************/
require_once(dirname(__FILE__) . '/inc/admin/siejmy-admin-dashboard-widget.php');
require_once(dirname(__FILE__) . '/inc/admin/hollyquote_metabox_html.php');
add_action('wp_dashboard_setup', 'siejmy_dashboard_widgets');

function siejmy_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('siejmy_dashboard_widget', '#siewcySIEJMY', 'siejmy_dashboard_widget_render');
}

function hollyquote_add_metaboxes() {
	add_meta_box(
			'hollyquote_metabox',                 // Unique ID
			'Święty cytat',      // Box title
			'hollyquote_metabox_html',  // Content callback, must be of type callable
			'post'                           // Post type
	);
}
add_action( 'add_meta_boxes', 'hollyquote_add_metaboxes' );


/******************************************/
/* UTILITIES                              */
/******************************************/
// Replacement for have_posts() inside while loop
function wpdocs_posts_left() {
  global $wp_query;
  return  $wp_query->post_count - $wp_query->current_post;
}

function wpdocs_current_post_index() {
  global $wp_query;
  return  $wp_query->current_post;
}
