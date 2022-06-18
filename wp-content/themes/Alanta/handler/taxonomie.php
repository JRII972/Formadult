<?php


add_action( 'init', 'register', 0 );


function register(){
    $formation_id = "formation";
    register_taxonomy( 'formation_modalite', $formation_id, formation_modalite_taxonomy() );
    register_taxonomy( 'formation_competence', $formation_id, formation_competence_taxonomy() );
}


function formation_modalite_taxonomy() {
    $labels = array(
        'name'              => _x( 'Métier lier aux Formations', 'taxonomy general name' ),
        'singular_name'     => _x( 'Metier lier à la Formation', 'taxonomy singular name' ),
        'search_items'      => __( 'Recherche métier' ),
        'all_items'         => __( 'Toute les métiers' ),
        'parent_item'       => __( 'Modalité parente' ),
        'parent_item_colon' => __( 'Modalite Parente:' ),
        'edit_item'         => __( 'Edit Modality' ), 
        'update_item'       => __( 'Update Modality' ),
        'add_new_item'      => __( 'Add New Modality' ),
        'new_item_name'     => __( 'New Modality' ),
        'menu_name'         => __( 'Modalité' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_in_rest' => true,
    );
    return $args;
}

function formation_competence_taxonomy() {
    $labels = array(
        'name'              => _x( 'Compétences des Formations', 'taxonomy general name' ),
        'singular_name'     => _x( 'Compétence de Formation', 'taxonomy singular name' ),
        'search_items'      => __( 'Recherche de Competence' ),
        'all_items'         => __( 'Toute les Competence' ),
        'parent_item'       => __( 'Competence parente' ),
        'parent_item_colon' => __( 'Competence Parente:' ),
        'edit_item'         => __( 'Edit Modality' ), 
        'update_item'       => __( 'Update Modality' ),
        'add_new_item'      => __( 'Add New Modality' ),
        'new_item_name'     => __( 'New Modality' ),
        'menu_name'         => __( 'Compétence' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'competence' )
    );
    return $args;
}

function formation_metier_taxonomy() {
    $labels = array(
        'name'              => _x( 'Modalités des Formations', 'taxonomy general name' ),
        'singular_name'     => _x( 'Modalite de Formation', 'taxonomy singular name' ),
        'search_items'      => __( 'Recherche de modalite' ),
        'all_items'         => __( 'Toute les Metier' ),
        'parent_item'       => __( 'Metier parente' ),
        'parent_item_colon' => __( 'Metier Parent:' ),
        'edit_item'         => __( 'Edit metier' ), 
        'update_item'       => __( 'Update metier' ),
        'add_new_item'      => __( 'Add New metier' ),
        'new_item_name'     => __( 'New metier' ),
        'menu_name'         => __( 'Metier' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_in_rest' => true,
    );
    return $args;
}

function administration_page() {
    $labels = array(
        'name'              => _x( 'Administration des Pages', 'taxonomy general name' ),
        'singular_name'     => _x( 'Administration', 'taxonomy singular name' ),
        'menu_name'         => __( 'Administration' ),
    );
    $args = array(
        'labels' => $labels,
        'show_in_rest' => true,
    );
    return $args;
}


