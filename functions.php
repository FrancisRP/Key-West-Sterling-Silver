<?php

/**
 * hive-starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hive-starter
 */

/**
 * Implement the Starter ACF Fields
 */
require get_template_directory() . '/inc/acf-starters.php';

/**
 * Load Hive Easy Tag
 */
require get_template_directory() . '/inc/hive-easy-tag.php';

/**
 * Grab schema ACF field and wp_head hook
 */
require get_template_directory() . '/inc/schema.php';

/**
 * Theme helper functions
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * WordPress Options
 */
function hive_starter_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hive-starter, use a find and replace
	 * to change 'hive-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('hive-starter', get_template_directory() . '/languages');


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
		'main-menu' => esc_html__('Primary', 'hive-starter'),
		'footer' => esc_html__('Footer', 'hive-starter'),
		'footer-secondary' => esc_html__('Footer Secondary', 'hive-starter'),
		'locations' => esc_html__('Locations', 'hive-starter'),
		'mobile' => esc_html__('Mobile', 'hive-starter')
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}

add_action('after_setup_theme', 'hive_starter_setup');

/**
 * Header Clean Up.
 */
function hive_cleanup_head()
{
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'parent_post_rel_link', 10);
	remove_action('wp_head', 'start_post_rel_link', 10);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
}

add_action('after_setup_theme', 'hive_cleanup_head');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hive_starter_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'hive-starter'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'hive-starter'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}

add_action('widgets_init', 'hive_starter_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function hive_starter_scripts()
{

	//jQuery
	wp_register_script('jquery3.5.1', get_template_directory_uri() . '/js/vendor/jquery/jquery.min.js');
	wp_add_inline_script('jquery3.5.1', 'var jQuery3_5_1 = $.noConflict(true);');
	wp_enqueue_script('jquery3.5.1', get_template_directory_uri() . '/js/vendor/jquery/jquery.min.js', array('jquery3.5.1'));

	// Slick
	wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	//Bootstrap JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap/bootstrap.bundle.min.js', array('jquery'), null);
	if (WP_DEV == true) {

		// Theme CSS
		wp_enqueue_style('hive-starter-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');

		// Theme JS
		wp_enqueue_script('main-js', get_template_directory_uri() . '/js/dist/main.js', array('jquery'), null);
		wp_enqueue_script('google-map-js', get_template_directory_uri() . '/js/dist/google-map.js', array('jquery'), null);

	} else {

		// Minified CSS
		wp_enqueue_style('hive-starter-style', get_template_directory_uri() . '/css/style.min.css', array(), '1.0');

		// Minified JS
		wp_enqueue_script('main-js', get_template_directory_uri() . '/js/dist/main.min.js', array('jquery'), null);
		wp_enqueue_script('google-map-js', get_template_directory_uri() . '/js/dist/google-map.min.js', array('jquery'), null);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}

add_action('wp_enqueue_scripts', 'hive_starter_scripts');

/**
 * Add ACF site settings page
 */
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		'position' 	    => '2.1',
		'redirect'		=> true
	));


	acf_add_options_sub_page(array(
		'page_title' 	=> 'General',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'site-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'site-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'site-settings',
	));
}



/*=======  Increase upload file size ========*/

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');


/*======= Enable SVG uplaod ========*/
function upload_svg_files($mimes)
{
	if (!current_user_can('manage_options'))
		return $mimes;
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'upload_svg_files');

/*=======  Breadcrumbs ========*/
function the_breadcrumb()
{

	$sep = ' > ';

	if (!is_front_page()) {

		// Start the breadcrumb with a link to your homepage
		echo '<div class="breadcrumbs">';
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo '</a>' . $sep;

		// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
		if (is_category() || is_single()) {
			the_category('title_li=');
		} elseif (is_archive() || is_single()) {
			if (is_day()) {
				printf(__('%s', 'text_domain'), get_the_date());
			} elseif (is_month()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
			} elseif (is_year()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
			} else {
				_e('Blog Archives', 'text_domain');
			}
		}

		// If the current page is a single post, show its title with the separator
		if (is_single()) {
			echo $sep;
			the_title();
		}

		// If the current page is a static page, show its title.
		if (is_page()) {
			echo the_title();
		}

		// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
		if (is_home()) {
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ($page_for_posts_id) {
				$post = get_post($page_for_posts_id);
				setup_postdata($post);
				the_title();
				rewind_posts();
			}
		}

		echo '</div>';
	}
}



//Remove trailing dots for exerpt
function new_excerpt_more($more)
{
	return " ";
}
add_filter('excerpt_more', 'new_excerpt_more');

// Set custom images sizes & make them selectable in Wordpress
if (function_exists('add_image_size')) {

	add_image_size('content-img', 700, 430, true);

}

add_filter( 'image_size_names_choose', 'custom_image_sizes' );

function custom_image_sizes( $sizes ) {

  global $_wp_additional_image_sizes;
  if (empty($_wp_additional_image_sizes)) {
    return $sizes;
  }
  foreach ($_wp_additional_image_sizes as $id => $data) {
    if (!isset($sizes[$id])) {
      $sizes[$id] = ucfirst(str_replace('-', ' ', $id));
    }
  }
  return $sizes;

}

//Remove Gutenberg Block Library CSS from loading on the frontend
function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );
