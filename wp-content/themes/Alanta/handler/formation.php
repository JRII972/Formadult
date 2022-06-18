<?php
namespace formAdult;

add_action('init', [formation::class, 'register']);

class formation {
    const ID = "formation";

    static function register(){
       
        
        register_post_type(formation::ID, formation::post_args());

        add_action( 'contextual_help', [formation::class,'contextual_help'], 10, 3 );

    }

    static function post_args(){
        $labels = array(
            'name'                => _x( 'Formations', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Formation', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Formations', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Formation:', 'text_domain' ),
            'all_items'           => __( 'All Formations', 'text_domain' ),
            'view_item'           => __( 'View Formation', 'text_domain' ),
            'add_new_item'        => __( 'Add New Formation', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Formation', 'text_domain' ),
            'update_item'         => __( 'Update Formation', 'text_domain' ),
            'search_items'        => __( 'Search Formation', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );

        $args = array(
            'label'               => __( 'Formations', 'text_domain' ),
            'description'         => __( 'Formation proposer par l\'entreprise', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( ),
            'taxonomies'          => array( 'category', 'post_tag', 'formation_type' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        return $args;
    }

    static function contextual_help( $contextual_help, $screen_id, $screen ) { 
        if ( 'product' == $screen->id ) {
      
          $contextual_help = '<h2>Products</h2>
          <p>Products show the details of the items that we sell on the website. You can see a list of them on this page in reverse chronological order - the latest one we added is first.</p> 
          <p>You can view/edit the details of each product by clicking on its name, or you can perform bulk actions using the dropdown menu and selecting multiple items.</p>';
      
        } elseif ( 'edit-product' == $screen->id ) {
      
          $contextual_help = '<h2>Editing products</h2>
          <p>This page allows you to view/modify product details. Please make sure to fill out the available boxes with the appropriate details (product image, price, brand) and <strong>not</strong> add these details to the product description.</p>';
      
        }
        return $contextual_help;
      }
      
}

