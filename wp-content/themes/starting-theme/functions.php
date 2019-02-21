<?php
/**
 * Starting Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starting_Theme
 */

if ( ! function_exists( 'starting_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starting_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starting Theme, use a find and replace
	 * to change 'starting-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starting-theme', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'starting-theme' ),
		'footer-1' => esc_html__( 'Footer 1', 'starting-theme' ),
		'footer-2' => esc_html__( 'Footer 2', 'starting-theme' ),
		'footer-3' => esc_html__( 'Footer 3', 'starting-theme' ),
		'footer-4' => esc_html__( 'Footer 4', 'starting-theme' ),
		'footer-5' => esc_html__( 'Footer 5', 'starting-theme' ),
		'footer-6' => esc_html__( 'Footer 6', 'starting-theme' ),
		'footer-7' => esc_html__( 'Footer 7', 'starting-theme' ),
		'footer-8' => esc_html__( 'Footer 8', 'starting-theme' ),
	) );

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starting_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'starting_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starting_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starting_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starting_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starting_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starting-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starting-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starting_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starting_theme_scripts() {
	wp_enqueue_style( 'starting-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true );
	wp_enqueue_script( 'starting-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.1.7', true );
	wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.7', true );
	wp_enqueue_script( 'TimeCircles-js', get_template_directory_uri() . '/js/TimeCircles.js', array(), '4.2.12', true );
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), '0.1', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
	wp_enqueue_script( 'matchHeight-js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '0.7.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'starting-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starting_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
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


//add data-toggle class and dropdown-toggle to parent anchor link
function addanchorlink_class($menu) {
    $menu = preg_replace('/ href="#"/','/ href="#" class="dropdown-toggle" data-toggle="dropdown" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','addanchorlink_class');

//replace child ul class
function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','new_submenu_class');

// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );
/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );
/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/**
 * Code to add the custom login css file to the theme
 * - file is "/login/custom-login-styles.css"
 */
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

// Register Custom Post Type
function calendar_post_type() {

	$labels = array(
		'name'                  => _x( 'Calendar', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Calendar', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Calendar', 'text_domain' ),
		'name_admin_bar'        => __( 'Calendar', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
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
		'label'                 => __( 'Calendar', 'text_domain' ),
		'description'           => __( 'Calendar information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured' ),
		// 'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'calendar', $args );

}
add_action( 'init', 'calendar_post_type', 0 );

// Register Custom Post Type
function partner_post_type() {

	$labels = array(
		'name'                  => _x( 'Partners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partners', 'text_domain' ),
		'name_admin_bar'        => __( 'Partner', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
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
		'label'                 => __( 'Partner', 'text_domain' ),
		'description'           => __( 'Partner information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured' ),
		// 'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'partner', $args );

}
add_action( 'init', 'partner_post_type', 0 );

/*
 * Sort post archive by menu_order
 */

add_action( 'pre_get_posts', 'mpe_products_sort_order');
function mpe_products_sort_order($query){
	if(is_archive('calendar') || is_tax('calendar') && $query->get('post_type') == 'calendar' || $query->get('post_type') == 'calendar'):
	   $query->set( 'order', 'ASC' );
	   $query->set( 'orderby', 'date' );
	endif;
};

function set_posts_per_page_for_cpt( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( array('partner', 'calendar') ) ) {
    $query->set( 'posts_per_page', '-1' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_cpt' );

add_post_type_support( 'page', 'excerpt' );

// function set_posts_per_page_for_calendar_cpt( $query ) {
//   if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'calendar' ) ) {
//     $query->set( 'posts_per_page', '-1' );
//   }
// }
// add_action( 'pre_get_posts', 'set_posts_per_page_for_calendar_cpt' );

//adding sitewide ACF

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }
