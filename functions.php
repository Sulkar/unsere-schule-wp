<?php
/**
 * unsere-schule functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unsere-schule
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'unsere_schule_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unsere_schule_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on unsere-schule, use a find and replace
		 * to change 'unsere-schule' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unsere-schule', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'unsere-schule' ),
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
				'unsere_schule_custom_background_args',
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
add_action( 'after_setup_theme', 'unsere_schule_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unsere_schule_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unsere_schule_content_width', 640 );
}
add_action( 'after_setup_theme', 'unsere_schule_content_width', 0 );





/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unsere_schule_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'unsere-schule' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'unsere-schule' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'unsere_schule_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unsere_schule_scripts() {
	wp_enqueue_style( 'unsere-schule-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'unsere-schule-style', 'rtl', 'replace' );

	wp_enqueue_script( 'unsere-schule-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	/* Custom CSS */
	wp_enqueue_style( 
		'unsere-schule',
		get_template_directory_uri() . '/css/unsere-schule.css',
		array(),
		'1.0.1'
	);

	/* Navbar CSS */
	wp_enqueue_style( 
		'unsere-schule-navbar',
		get_template_directory_uri() . '/css/us-navigation.css',
		array(),
		'1.0.1'
	);
	/* Navbar JS */
	wp_enqueue_script( 
		'unsere-schule-navbar',
		get_template_directory_uri() . '/js/us-navigation.js',
		array('jquery'),
		'1.0.1',
		true
	);

	/* Prism syntax highlight CSS */
	wp_enqueue_style(
		'prism-highlighter',
		get_template_directory_uri() . '/css/prism.css'
	);

	/* Prism syntax highlight JS */
	wp_enqueue_script( 
		'prism-highlighter',
		get_template_directory_uri() . '/js/prism.js',
		array(),
		'1.0.1',
		true
	);

	/* Prism syntax highlight JS */
	wp_enqueue_script( 
		'unsere-schule',
		get_template_directory_uri() . '/js/unsere-schule.js',
		array('jquery'),
		'1.0.0',
		true
	);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unsere_schule_scripts' );

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
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/navwalkers/UsSidebarNavwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/* display breadcrumbs */
function get_breadcrumb($tempPostID) {
	$parentIDs = array_reverse( get_post_ancestors($tempPostID) );
	$tempBreadcrumbs = "";
	foreach ($parentIDs as $parentID) {
		$tempBreadcrumbs .= '<a href="' . home_url() . '/?p=' . $parentID . '" >' . get_the_title($parentID) . '</a> > ';
	}
	return $tempBreadcrumbs;
}

/* */
function getPostIdByMetaKeyAndValue($key, $value) {
	global $wpdb;
	$meta = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$wpdb->postmeta." WHERE meta_key=%s AND meta_value=%s", $key, $value ) );
	if (is_array($meta) && !empty($meta) && isset($meta[0])) {
		$meta = $meta[0];
	}		
	if (is_object($meta)) {
		return $meta->post_id;
	}
	else {
		return false;
	}
}


/* get custom page_code meta data of post */
function getPageCode($tempPostID){
	$tempMeta = get_metadata( 'post', $tempPostID, 'page_code', false);
	if(!empty($tempMeta)){
		return $tempMeta[0];
	}else{
		return "";
	}
}
		
/* shortcode for child pages */
function listChildPages() { 
	global $post; 
	
	$childpages = wp_list_pages( array(
		'title_li'    => '',
		'echo'		=> false,
		'child_of'    => $post->ID,
		'post_status' => array( 'publish', 'private' )
	) );
	
	if($childpages) return '<ul class="wpb_page_list">' . $childpages . '</ul>';
	else return "";
	
}
add_shortcode('wpus_childpages', 'listChildPages');


/* test shortcode */
add_shortcode('my-wporg', 'wporg_shortcode');
function wporg_shortcode( $atts = [], $content = null) {
    return "Hello";
}


/* move admin bar to bottom*/
function move_admin_bar() {
	echo '
	<style type="text/css">
	body {margin-top: -28px;padding-bottom: 28px;}
	body.admin-bar #wphead {padding-top: 0;}
	body.admin-bar #footer {padding-bottom: 28px;}
	#wpadminbar { top: auto !important;bottom: 0;}
	#wpadminbar .quicklinks .menupop ul { bottom: 28px;}
	</style>';
	}
	add_action( 'wp_head', 'move_admin_bar' );

/* actions for code search input */
add_action( 'admin_post_redirectByCode', 'redirectToPageByCode' );
add_action( 'admin_post_nopriv_redirectByCode', 'redirectToPageByCode' );

/* function called by search input action*/
function redirectToPageByCode(){
	$tempCode = (isset($_POST['search'])) ?sanitize_text_field($_POST['search']) : false;
	$postID = getPostIdByMetaKeyAndValue('page_code', $tempCode);	

	if($postID){
		$tempUrl = home_url() . '/?p=' . $postID;
		wp_redirect( $tempUrl );
		exit;	
	}else{
		wp_redirect( home_url() );
		exit;
	}
}