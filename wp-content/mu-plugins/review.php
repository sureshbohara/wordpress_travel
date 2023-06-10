<?php
add_action('init','reviews_post',4);
 function reviews_post() {
        $labels = array(
            'name'                => _x( 'Reviews', 'Post Type General Name', 'sherpa' ),
            'singular_name'       => _x( 'Reviews', 'Post Type Singular Name', 'sherpa' ),
            'menu_name'           => __( 'Reviews', 'sherpa' ),
            'parent_item_colon'   => __( 'Parent Reviews', 'sherpa'),
            'all_items'           => __( 'All Reviews', 'sherpa' ),
            'view_item'           => __( 'View Reviews', 'sherpa' ),
            'add_new_item'        => __( 'Add New Reviews', 'sherpa' ),
            'add_new'             => __( 'Add New Reviews', 'sherpa' ),
            'edit_item'           => __( 'Edit Reviews', 'sherpa' ),
            'update_item'         => __( 'Update Reviews', 'sherpa' ),
            'search_items'        => __( 'Search Reviews', 'sherpa' ),
            'not_found'           => __( 'Not Found', 'sherpa' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sherpa' ),
        );
        $args = array(
            'label'               => __( 'Reviews', 'sherpa' ),
            'description'         => __( 'Reviews news and reviews', 'sherpa' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('reviews', $args );
      
    }
?>