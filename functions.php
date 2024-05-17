<?php
/**
 * Enqueue Styles
 *
 * @package Language_Tutor
 * @version GIT: 1.0.0
 *
 * @phpcs:disable
 * (c) 2024 Language Tutor. All rights reserved.
 */

if (!function_exists('Language_Tutor_setup')) {
    /**
     * Theme setup
     *
     * @return void
     */
    function Language_Tutor_setup()
    {
        // Add theme support
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');

        // Load text domain for translation
        load_theme_textdomain('language-tutor', get_template_directory() . '/languages');
    }
}
add_action('after_setup_theme', 'Language_Tutor_setup');

if (!function_exists('Language_Tutor_Enqueue_style')) {
    /**
     * Enqueue style.
     *
     * @return void
     */
    function Language_Tutor_Enqueue_style()
    {
        // Enqueue main stylesheet
        wp_enqueue_style('language-tutor-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    }
}
add_action('wp_enqueue_scripts', 'Language_Tutor_Enqueue_style');

function Language_Tutor_Load_Dashicons(){
     wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'Language_Tutor_Load_Dashicons');

