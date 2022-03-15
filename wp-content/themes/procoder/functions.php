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



// Theme Functions

function procoder_customizar_register($wp_customize){
    $wp_customize->add_section(
        'procoder_header_area',
        array(
            'title'       => __('Header Area', 'procoder'),
            'description' => 'Logo edit area',
        ),
    );

    $wp_customize->add_setting('procoder_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'procoder_logo', array(
        'label'   => 'Logo Upload',
        'setting' => 'procoder_logo',
        'section' => 'procoder_header_area',
    ) ));
}

add_action('customize_register', 'procoder_customizar_register');