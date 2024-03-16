<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'footer'  => __( 'Footer Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 840 <= $width ) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ( 'page' === get_post_type() ) {
		if ( 840 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if ( 840 > $width && 600 <= $width ) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif ( 600 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list'; 

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


/* Additional Custom Codes Added by Russel */

show_admin_bar(false);

// Remove Images Sizes
add_action('init', 'remove_plugin_image_sizes');

function remove_plugin_image_sizes() {
	remove_image_size('gas-thumb');
}

// Equipments Custom post type
function equipment() {
  $labels = array(
    'name'               => _x( 'Equipment', 'post type general name' ),
    'singular_name'      => _x( 'Equipment', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Equipment' ),
    'add_new_item'       => __( 'Add New Equipment' ),
    'edit_item'          => __( 'Edit Equipment' ),
    'new_item'           => __( 'New Equipment' ),
    'all_items'          => __( 'All Equipment' ),
    'view_item'          => __( 'View Equipment' ),
    'search_items'       => __( 'Search Equipment' ),
    'not_found'          => __( 'No Equipment found' ),
    'not_found_in_trash' => __( 'No Equipment found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Equipment'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Pilot Steel Equipments Products',
    'public'        => true,
    'menu_position' => 5,
    'rewrite'       => array( 'slug' => 'equipment' ),
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'taxonomies'          => array( 'category' ),
  );
  register_post_type( 'equipment', $args ); 
}
add_action( 'init', 'equipment' );

// Team Members Custom post type
function our_team() {
  $labels = array(
    'name'               => _x( 'Member', 'post type general name' ),
    'singular_name'      => _x( 'Member', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Member' ),
    'add_new_item'       => __( 'Add New Member' ),
    'edit_item'          => __( 'Edit Member' ),
    'new_item'           => __( 'New Member' ),
    'all_items'          => __( 'All Member' ),
    'view_item'          => __( 'View Member' ),
    'search_items'       => __( 'Search Member' ),
    'not_found'          => __( 'No Member found' ),
    'not_found_in_trash' => __( 'No Member found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Our Team'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Pilot Steel Team Members',
    'public'        => true,
    'menu_position' => 6,
    'rewrite'       => array( 'slug' => 'Our Team' ),
    'supports'      => array( 'title', 'excerpt', 'thumbnail' ),
    'has_archive'   => true,
    'taxonomies'          => array( 'category' ),
  );
  register_post_type( 'our_team', $args ); 
}
add_action( 'init', 'our_team' );

//Works and Projects Custom post type
function main_tagline() {
  $labels = array(
    'name'               => _x( 'Tagline', 'post type general name' ),
    'singular_name'      => _x( 'Tagline', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Tagline' ),
    'add_new_item'       => __( 'Add New Tagline' ),
    'edit_item'          => __( 'Edit Tagline' ),
    'new_item'           => __( 'New Tagline' ),
    'all_items'          => __( 'All Tagline' ),
    'view_item'          => __( 'View Tagline' ),
    'search_items'       => __( 'Search Tagline' ),
    'not_found'          => __( 'No Tagline(handle, format, args) found' ),
    'not_found_in_trash' => __( 'No Tagline found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Main Section Tagline'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Pilot Steel Main Section Tagline',
    'public'        => true,
    'menu_position' => 7,
    'rewrite'       => array( 'slug' => 'main_tagline' ),
    'supports'      => array( 'title'),
    'has_archive'   => true,
    'taxonomies'          => array( 'category' ),
  );
  register_post_type( 'main_tagline', $args ); 
}
add_action( 'init', 'main_tagline' );

// Equipments Custom post type
// function our_projects() {
//   $labels = array(
//     'name'               => _x( 'Projects', 'post type general name' ),
//     'singular_name'      => _x( 'Projects', 'post type singular name' ),
//     'add_new'            => _x( 'Add New', 'Projects' ),
//     'add_new_item'       => __( 'Add New Projects' ),
//     'edit_item'          => __( 'Edit Projects' ),
//     'new_item'           => __( 'New Projects' ),
//     'all_items'          => __( 'All Projects' ),
//     'view_item'          => __( 'View Projects' ),
//     'search_items'       => __( 'Search Projects' ),
//     'not_found'          => __( 'No Projects found' ),
//     'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
//     'parent_item_colon'  => '',
//     'menu_name'          => 'Projects'
//   );
//   $args = array(
//     'labels'        => $labels,
//     'description'   => 'Pilot Steel Projects',
//     'public'        => true,
//     'menu_position' => 8,
//     'rewrite'       => array( 'slug' => 'projects' ),
//     'supports'      => array( 'title', 'editor', 'thumbnail' ),
//     'has_archive'   => true,
//     'taxonomies'          => array( 'category' ),
//   );
//   register_post_type( 'our_projects', $args ); 
// }
// add_action( 'init', 'our_projects' );

// Custom Post MetoBox

// Meta Box for Member Position
add_filter( 'rwmb_meta_boxes', 'mem_pos_meta_boxes' );
function mem_pos_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Member Positions',
        'pages'  => array( 'our_team' ),
        'fields' => array(
            array(
                'id'   => 'mem_position',
                'name' => 'Position',
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'main_tag_meta_boxes' );
function main_tag_meta_boxes( $tagline_meta_boxes ) {
    $tagline_meta_boxes[] = array(
        'title'  => 'Main Tagline Titles and Text',
        'pages'  => array( 'main_tagline' ),
        'fields' => array(
            array(
                'id'   => 'main_title',
                'name' => 'Main Title',
                'type' => 'text',
            ),

            array(
                'id'   => 'sub_title',
                'name' => 'Main Sub Title',
                'type' => 'text',
            ),

            array(
                'id'   => 'main_slogan',
                'name' => 'Main Slogan Text',
                'type' => 'text',
            ),

            array(
                'id'   => 'btn_red_link',
                'name' => 'Button Red Link',
                'type' => 'text',
            ),

            array(
                'id'   => 'btn_blue_link',
                'name' => 'Button Blue Link',
                'type' => 'text',
            ),
        ),
    );
    return $tagline_meta_boxes;
}

// Prevent and Error in the front-end display if the plugin META BOX accidentally deleted.
if ( ! function_exists( 'rwmb_meta' ) ) {
    function rwmb_meta( $key, $args = '', $post_id = null ) {
        return false;
    }
}

// Pagination code for custom post type
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function fix_request_redirect( $request ) {
    if ( isset( $request->query_vars['post_type'] )
         && 'equipments' === $request->query_vars['post_type']
         && true === $request->is_singular
         && - 1 == $request->current_post
         && true === $request->is_paged
    ) {
            add_filter( 'redirect_canonical', '__return_false' );
    }

    return $request;
}
add_action( 'parse_query', 'fix_request_redirect' );