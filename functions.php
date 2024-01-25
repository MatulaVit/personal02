<?php

/**
 * Umíme Weby functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Umíme_Weby
 */

require __DIR__ . '/vendor/autoload.php';

if (!defined('UW_VERSION')) {
    // Replace the version number of the theme on each release.
    define('UW_VERSION', '0.0.1');
}

if (!function_exists('uw_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function uw_setup(): void
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Umíme Weby, use a find and replace
         * to change 'uw' to the name of your theme in all the template files.
         */
        load_theme_textdomain('uw', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

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

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'primary' => 'Primary menu',
                'footer_service' => 'Footer menu services',
                'footer_about' => 'Footer menu about',
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

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Enqueue editor styles.
        add_editor_style('style-editor.css');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Remove support for block templates.
        remove_theme_support('block-templates');
    }
endif;
add_action('after_setup_theme', 'uw_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uw_widgets_init(): void
{
    register_sidebar(
        array(
            'name' => __('Footer', 'uw'),
            'id' => 'sidebar-1',
            'description' => __('Add widgets here to appear in your footer.', 'uw'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'uw_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function uw_scripts(): void
{
    wp_enqueue_style('uw-style', get_stylesheet_uri(), array(), UW_VERSION);
    wp_enqueue_script('uw-script', get_template_directory_uri() . '/js/script.min.js', array(), UW_VERSION, true);
}

add_action('wp_enqueue_scripts', 'uw_scripts');

/**
 * @param array<mixed> $settings
 */
function uw_tinymce_add_class($settings): mixed
{
    $settings['body_class'] = 'block-editor-block-list__layout';
    return $settings;
}

add_filter('tiny_mce_before_init', 'uw_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * disables automatic addition of p element to contact form
 */
add_filter('wpcf7_autop_or_not', '__return_false');