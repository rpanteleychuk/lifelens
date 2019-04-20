
<?php

function lifelens_child_styles () {

    wp_enqueue_style('normalize-style', get_stylesheet_directory_uri() . '/node_modules/normalize.css/normalize.css');

    wp_enqueue_style('lifelens-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');

    wp_enqueue_script('lifelens-script', get_stylesheet_directory_uri() . '/source-js/main.js');

}

add_action( 'wp_enqueue_scripts', 'lifelens_child_styles');







