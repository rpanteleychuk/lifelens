<?php

function lifelens_child_styles () {
    wp_enqueue_style('lifelens-style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/style.css');
}

add_action( 'wp_enqueue_scripts', 'lifelens_child_styles');