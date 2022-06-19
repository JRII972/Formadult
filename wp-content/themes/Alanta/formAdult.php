<?php

namespace formAdult;

require_once('handler/metaboxe.php');


function style() {
    //CSS
    wp_register_style('style-all', get_theme_file_uri() . "/assets/css/styles-screen-all.css", []);
    wp_register_style('correction', get_theme_file_uri() . "/assets/css/correction.css", ['style-all']);
    wp_register_style('style-min1180', get_theme_file_uri() . "/assets/css/styles-screen-and-min-width-1180-px.css", ['style-all'], 1, '(min-width: 1180px)');
    wp_register_style('style-min980', get_theme_file_uri() . "/assets/css/styles-screen-and-min-width-980-px.css", ['style-all'], 1, '(min-width: 980px)');
    wp_register_style('style-max980', get_theme_file_uri() . "/assets/css/styles-screen-and-max-width-980-px.css", ['style-all'], 1, '(max-width: 980px)');
    wp_register_style('style-min768', get_theme_file_uri() . "/assets/css/styles-screen-and-min-width-768-px.css", ['style-all'], 1, '(min-width: 768px)');
    wp_register_style('style-max768', get_theme_file_uri() . "/assets/css/styles-screen-and-max-width-768-px.css", ['style-all'], 1, '(max-width: 768px)');
    wp_register_style('material-symbols-outlined', "https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200");

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('style-min1180');
    wp_enqueue_style('style-min980');
    wp_enqueue_style('style-min768');
    wp_enqueue_style('style-max980');
    wp_enqueue_style('style-max768');
    wp_enqueue_style('correction');
    wp_enqueue_style('material-symbols-outlined');

    

}





//add_action( 'wp_enqueue_scripts', 'formAdult\wps_deregister_styles', 100 );
style();
add_action('after_setup_theme', 'formAdult\supports', 5);
add_action('wp_enqueue_style', 'formAdult\style', 2);

add_action('init', 'style');