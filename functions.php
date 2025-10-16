<?php
/**
 * MitaPay Theme Functions
 * Powered by Cronotics Technology
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue Styles and Scripts
function mitapay_enqueue_assets() {
    wp_enqueue_style( 'mitapay-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'mitapay-custom', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'mitapay-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mitapay_enqueue_assets' );

// Theme Support
function mitapay_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mitapay' )
    ) );
}
add_action( 'after_setup_theme', 'mitapay_theme_setup' );

// Register a homepage widget area (optional)
function mitapay_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Homepage Widgets', 'mitapay' ),
        'id'            => 'homepage-widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mitapay_widgets_init' );
