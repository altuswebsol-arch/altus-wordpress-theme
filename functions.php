<?php
/**
 * Altus Web Solutions Theme — functions
 */

define('ALTUS_VER', '1.0.0');

function altus_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'altus'),
    ));
}
add_action('after_setup_theme', 'altus_setup');

function altus_assets() {
    // Aeonik font
    wp_enqueue_style('altus-aeonik', get_template_directory_uri() . '/assets/fonts/aeonik.css', array(), ALTUS_VER);
    // Main stylesheet
    wp_enqueue_style('altus-style', get_stylesheet_uri(), array(), ALTUS_VER);
    wp_enqueue_style('altus-main', get_template_directory_uri() . '/assets/css/main.css', array(), ALTUS_VER);
    // Main JS
    wp_enqueue_script('altus-main', get_template_directory_uri() . '/assets/js/main.js', array(), ALTUS_VER, true);
}
add_action('wp_enqueue_scripts', 'altus_assets');
