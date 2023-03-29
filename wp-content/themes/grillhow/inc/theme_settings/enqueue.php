<?php 

function grillhow_load_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ) . '/css/bootstrap.min.css', array(), '5.3.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri(  ) . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ) . '/js/bootstrap.min.js', array('jquery'), '5.3.0', true );

}

add_action( 'wp_enqueue_scripts', 'grillhow_load_styles' );