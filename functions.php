<?php
/**
 * clickmaterial functions and definitions
 *
 * @package clickmaterial
 */

if (!function_exists('clickmaterial_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function clickmaterial_setup()
    {

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 640; /* pixels */
        }

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on clickmaterial, use a find and replace
         * to change 'clickmaterial' to the name of your theme in all the template files
         */
        load_theme_textdomain('clickmaterial', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        //Suport for WordPress 4.1+ to display titles
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'clickmaterial'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        // add_theme_support( 'post-formats', array(
        // 	'aside', 'image', 'video', 'quote', 'link',
        // ) );

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('clickmaterial_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // clickmaterial_setup
add_action('after_setup_theme', 'clickmaterial_setup');

/* 
 * Remove Post Edit Link
 *
 */
function cmat_remove_edit_post_link($link)
{
    return '';
}

add_filter('edit_post_link', 'cmat_remove_edit_post_link');

/**
 * Setup Soil plugin
 *
 *
 */


//* Load jQuery from the Google CDN
add_theme_support('soil-jquery-cdn');

//* Cleaner WordPress markup
add_theme_support('soil-clean-up');

//* Root relative URLs
add_theme_support('soil-relative-urls');

//* Google Analytics (more info)
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');

//* Move all JS to the footer
add_theme_support('soil-js-to-footer');

//* Disable trackbacks
add_theme_support('soil-disable-trackbacks');

//* Disable asset versioning
add_theme_support('soil-disable-asset-versioning');


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function clickmaterial_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'clickmaterial'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="panel panel-warning">',
        'after_widget' => '</div></aside>',
        'before_title' => ' <div class="panel-heading"><h3 class="panel-title">',
        'after_title' => '</h3></div>',
    ));
}

add_action('widgets_init', 'clickmaterial_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function clickmaterial_scripts()
{
    wp_enqueue_style('cmat-base', get_template_directory_uri() . '/assets/css/base.min.css', array(), '', 'all');
    wp_enqueue_style('cmat-theme', get_stylesheet_uri());

    wp_enqueue_script('cmat-material-scripts', get_template_directory_uri() . '/assets/js/base.min.js', array('jquery'), '', 'true');
    wp_enqueue_script('cmat-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'clickmaterial_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Adds a Walker class for the Bootstrap Navbar.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';