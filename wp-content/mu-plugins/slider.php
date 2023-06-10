<?php
add_action('init','slider_post',2);
 function slider_post() {

        $labels = array(
            'name'                => _x( 'Slider', 'Post Type General Name', 'sherpa' ),
            'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'sherpa' ),
            'menu_name'           => __( 'Slider', 'sherpa' ),
            'parent_item_colon'   => __( 'Parent Slider', 'sherpa'),
            'all_items'           => __( 'All Slider', 'sherpa' ),
            'view_item'           => __( 'View Slider', 'sherpa' ),
            'add_new_item'        => __( 'Add New Slider', 'sherpa' ),
            'add_new'             => __( 'Add New Slider', 'sherpa' ),
            'edit_item'           => __( 'Edit Slider', 'sherpa' ),
            'update_item'         => __( 'Update Slider', 'sherpa' ),
            'search_items'        => __( 'Search Slider', 'sherpa' ),
            'not_found'           => __( 'Not Found', 'sherpa' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sherpa' ),
        );
          
        $args = array(
            'label'               => __( 'Slider', 'sherpa' ),
            'description'         => __( 'Slider news and reviews', 'sherpa' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-images-alt2',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
        register_post_type('slider', $args );
      
    }
?>