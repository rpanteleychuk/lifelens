
<?php

function lifelens_child_styles () {

    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css');

    wp_enqueue_style('lifelens-style', get_template_directory_uri() . '/assets/css/main.min.css');

    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
}

add_action( 'wp_enqueue_scripts', 'lifelens_child_styles');



