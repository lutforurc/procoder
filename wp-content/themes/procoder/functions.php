<?php
/**
 * My Theme Functions
 */


//  Theme Title

add_theme_support('title-tag');


function procoder_load_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', [], '1.0.0', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);



}

add_action('wp_enqueue_scripts', 'procoder_load_css_js');