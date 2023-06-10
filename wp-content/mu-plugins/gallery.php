<?php
add_action('init','gallery_post',5);
 function gallery_post() {
        $labels = array(
            'name'                => _x( 'Gallery', 'Post Type General Name', 'sherpa' ),
            'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'sherpa' ),
            'menu_name'           => __( 'Gallery', 'sherpa' ),
            'parent_item_colon'   => __( 'Parent Gallery', 'sherpa'),
            'all_items'           => __( 'All Gallery', 'sherpa' ),
            'view_item'           => __( 'View Gallery', 'sherpa' ),
            'add_new_item'        => __( 'Add New Gallery', 'sherpa' ),
            'add_new'             => __( 'Add New Gallery', 'sherpa' ),
            'edit_item'           => __( 'Edit Gallery', 'sherpa' ),
            'update_item'         => __( 'Update Gallery', 'sherpa' ),
            'search_items'        => __( 'Search Gallery', 'sherpa' ),
            'not_found'           => __( 'Not Found', 'sherpa' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sherpa' ),
        );
        $args = array(
            'label'               => __( 'Gallery', 'sherpa' ),
            'description'         => __( 'Gallery news and reviews', 'sherpa' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-gallery',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('gallery', $args );
      
    }
?>