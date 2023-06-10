<?php
add_action('init','team_post',3);
 function team_post() {
        $labels = array(
            'name'                => _x( 'Our Team Member', 'Post Type General Name', 'sherpa' ),
            'singular_name'       => _x( 'Our Team Member', 'Post Type Singular Name', 'sherpa' ),
            'menu_name'           => __( 'Our Team Member', 'sherpa' ),
            'parent_item_colon'   => __( 'Parent Our Team Member', 'sherpa'),
            'all_items'           => __( 'All Our Team Member', 'sherpa' ),
            'view_item'           => __( 'View Our Team Member', 'sherpa' ),
            'add_new_item'        => __( 'Add New Our Team Member', 'sherpa' ),
            'add_new'             => __( 'Add New Our Team Member', 'sherpa' ),
            'edit_item'           => __( 'Edit Our Team Member', 'sherpa' ),
            'update_item'         => __( 'Update Our Team Member', 'sherpa' ),
            'search_items'        => __( 'Search Our Team Member', 'sherpa' ),
            'not_found'           => __( 'Not Found', 'sherpa' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sherpa' ),
        );
        $args = array(
            'label'               => __( 'Our Team Member', 'sherpa' ),
            'description'         => __( 'Our Team Member news and reviews', 'sherpa' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-groups',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('team', $args );
      
    }
?>