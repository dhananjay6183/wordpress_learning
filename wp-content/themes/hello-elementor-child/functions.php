<?php

function my_child_theme_enqueue_styles() {
    // Enqueue parent style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child style
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), wp_get_theme()->get('Version') );

    // Enqueue child script
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );
