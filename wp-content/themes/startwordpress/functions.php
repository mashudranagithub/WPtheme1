<?php

function startwordpress_scripts(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.7');
    wp_enqueue_style( 'blog', get_template_directory_uri(). '/css/blog.css');
    wp_enqueue_style( 'startwordpress_blog', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.min.css', array('jQuery'), '3.3.7, true');
}
add_action('wp_enqueue_scripts', 'startwordpress_scripts');


function startwordpress_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'startwordpress_theme_setup');