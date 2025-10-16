<?php
/**
 * Functions for MitaPay Theme
 * Powered by Cronotics Technology 🚀
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}

/**
 * Theme setup
 */
function mitapay_theme_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mitapay' ),
        'footer'  => __( 'Footer Menu', 'mitapay' ),
    ) );
}
add_action( 'after_setup_theme', 'mitapay_theme_setup' );

/**
 * Enqueue styles and scripts
 */
function mitapay_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style( 'mitapay-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    // Custom script (optional)
    wp_enqueue_script( 'mitapay-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mitapay_enqueue_assets' );

/**
 * Register widget areas (optional for future dashboard sidebars)
 */
function mitapay_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget', 'mitapay' ),
        'id'            => 'footer-widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mitapay_widgets_init' );

/**
 * Load text domain for translation
 */
function mitapay_load_textdomain() {
    load_theme_textdomain( 'mitapay', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mitapay_load_textdomain' );
