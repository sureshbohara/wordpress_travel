<?php
add_action('init', function() {
 register_post_type('partner_region', [
		'label' => __('Partner & Region', 'sherpa'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-image-rotate',
		'supports' => ['title', 'editor', 'thumbnail', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'partner_region'],
		'taxonomies' => ['partner'],
		'labels' => [
			'singular_name' => __('All Partner & Region', 'sherpa'),
			'add_new_item' => __('Add Partner & Region', 'sherpa'),
			'new_item' => __('Add Partner & Region', 'sherpa'),
			'view_item' => __('View Partner & Region', 'sherpa'),
			'not_found' => __('No Partner & Region found', 'sherpa'),
			'not_found_in_trash' => __('No Partner & Region found in trash', 'sherpa'),
			'all_items' => __('All Partner & Region', 'sherpa'),
			'insert_into_item' => __('Insert into Partner & Region', 'sherpa')
		],		
	]);
	register_taxonomy('partner', ['partner_region'], [
		'label' => __('Partner Category', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'partner'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('partner', 'sherpa'),
			'all_items' => __('All Partner & Region', 'sherpa'),
			'edit_item' => __('Edit Partner & Region', 'sherpa'),
			'view_item' => __('View Partner & Region', 'sherpa'),
			'update_item' => __('Update Partner & Region', 'sherpa'),
			'add_new_item' => __('Add New Partner & Region', 'sherpa'),
			'new_item_name' => __('New Partner & Region Name', 'sherpa'),
			'search_items' => __('Search Partner & Regions', 'sherpa'),
			'parent_item' => __('Parent Partner & Region', 'sherpa'),
			'parent_item_colon' => __('Parent Partner & Region:', 'sherpa'),
			'not_found' => __('No partner found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('partner', 'partner_region');

});
?>
