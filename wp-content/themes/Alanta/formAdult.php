<?php

namespace formAdult;

require_once('handler/metaboxe.php');
require_once('handler/formateur.php');
require_once('handler/taxonomie.php');


function supports () {
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' ); 
}

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



/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
}



function formation_taxonomies() {
    $labels = array(
      'name'              => _x( 'Formation Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Formation Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Formation Categories' ),
      'all_items'         => __( 'All Formation Categories' ),
      'parent_item'       => __( 'Parent Formation Category' ),
      'parent_item_colon' => __( 'Parent Formation Category:' ),
      'edit_item'         => __( 'Edit Formation Category' ), 
      'update_item'       => __( 'Update Formation Category' ),
      'add_new_item'      => __( 'Add New Formation Category' ),
      'new_item_name'     => __( 'New Formation Category' ),
      'menu_name'         => __( 'Formation Categories' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    register_taxonomy( 'formation_category', 'product', $args );
  }
 
//add_action( 'init', 'formadult\add_formation', 0 );




//add_action( 'wp_enqueue_scripts', 'formAdult\wps_deregister_styles', 100 );
style();
add_action('after_setup_theme', 'formAdult\supports', 5);
add_action('wp_enqueue_style', 'formAdult\style', 2);

