<?php

function ct_enqueue_styles() {
    wp_enqueue_style( 'ct-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ct_enqueue_styles' );


function ct_add_editor_styles() {
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_editor_style( 'style.css' );
    }
add_action( 'after_setup_theme', 'ct_add_editor_styles' );
