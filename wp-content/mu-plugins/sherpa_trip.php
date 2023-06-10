<?php
add_action('init', function() {
	register_post_type('sherpa_trip', [
		'label' => __('Our Trip', 'sherpa'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-money',
		'supports' => ['title', 'editor', 'thumbnail', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'sherpa_trip'],
		'taxonomies' => ['regions','destination','activities','departure','trip_type'],
		'labels' => [
			'singular_name' => __('All Trip', 'sherpa'),
			'add_new_item' => __('Add Trip', 'sherpa'),
			'new_item' => __('Add   Trip', 'sherpa'),
			'view_item' => __('View  Trip', 'sherpa'),
			'not_found' => __('No  Trip found', 'sherpa'),
			'not_found_in_trash' => __('No  Trip found in trash', 'sherpa'),
			'all_items' => __('All  Trip', 'sherpa'),
			'insert_into_item' => __('Insert into  Trip', 'sherpa')
		],		
	]);
	register_taxonomy('destination', ['sherpa_trip'], [
		'label' => __('Our Destination', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'destination'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('destination', 'sherpa'),
			'all_items' => __('All Destination', 'sherpa'),
			'edit_item' => __('Edit Destination', 'sherpa'),
			'view_item' => __('View Destination', 'sherpa'),
			'update_item' => __('Update Destination', 'sherpa'),
			'add_new_item' => __('Add New Destination', 'sherpa'),
			'new_item_name' => __('New Destination Name', 'sherpa'),
			'search_items' => __('Search Destinations', 'sherpa'),
			'parent_item' => __('Parent Destination', 'sherpa'),
			'parent_item_colon' => __('Parent Destination:', 'sherpa'),
			'not_found' => __('No destination found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('destination', 'sherpa_trip');
	
	register_taxonomy('regions', ['sherpa_trip'], [
		'label' => __('Our Regions', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'regions'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('regions', 'sherpa'),
			'all_items' => __('All Regions', 'sherpa'),
			'edit_item' => __('Edit Regions', 'sherpa'),
			'view_item' => __('View Regions', 'sherpa'),
			'update_item' => __('Update Regions', 'sherpa'),
			'add_new_item' => __('Add New Regions', 'sherpa'),
			'new_item_name' => __('New Regions Sherpa Name', 'sherpa'),
			'search_items' => __('Search Regionss', 'sherpa'),
			'parent_item' => __('Parent Regions', 'sherpa'),
			'parent_item_colon' => __('Parent Regions:', 'sherpa'),
			'not_found' => __('No destination found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('regions', 'sherpa_trip');

	register_taxonomy('activities', ['sherpa_trip'], [
		'label' => __('Our Activities', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'activities'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('activities', 'sherpa'),
			'all_items' => __('All Activities', 'sherpa'),
			'edit_item' => __('Edit Activities', 'sherpa'),
			'view_item' => __('View Activities', 'sherpa'),
			'update_item' => __('Update Activities', 'sherpa'),
			'add_new_item' => __('Add New Activities', 'sherpa'),
			'new_item_name' => __('New Activities Name', 'sherpa'),
			'search_items' => __('Search Activitiess', 'sherpa'),
			'parent_item' => __('Parent Activities', 'sherpa'),
			'parent_item_colon' => __('Parent Activities:', 'sherpa'),
			'not_found' => __('No destination found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('activities', 'sherpa_trip');
	register_taxonomy('departure', ['sherpa_trip'], [
		'label' => __('Our Departure', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'departure'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('departure', 'sherpa'),
			'all_items' => __('All Departure', 'sherpa'),
			'edit_item' => __('Edit Departure', 'sherpa'),
			'view_item' => __('View Departure', 'sherpa'),
			'update_item' => __('Update Departure', 'sherpa'),
			'add_new_item' => __('Add New Departure', 'sherpa'),
			'new_item_name' => __('New Departure Name', 'sherpa'),
			'search_items' => __('Search Departures', 'sherpa'),
			'parent_item' => __('Parent Departure', 'sherpa'),
			'parent_item_colon' => __('Parent Departure:', 'sherpa'),
			'not_found' => __('No destination found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('departure', 'sherpa_trip');
	
	register_taxonomy('trip_type', ['sherpa_trip'], [
		'label' => __('Trip Type', 'sherpa'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'trip_type'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('trip_type', 'sherpa'),
			'all_items' => __('All Trip Type', 'sherpa'),
			'edit_item' => __('Edit Trip Type', 'sherpa'),
			'view_item' => __('View Trip Type', 'sherpa'),
			'update_item' => __('Update Trip Type', 'sherpa'),
			'add_new_item' => __('Add New Trip Type', 'sherpa'),
			'new_item_name' => __('New Trip Type Name', 'sherpa'),
			'search_items' => __('Search Trip Types', 'sherpa'),
			'parent_item' => __('Parent Trip Type', 'sherpa'),
			'parent_item_colon' => __('Parent Trip Type:', 'sherpa'),
			'not_found' => __('No destination found', 'sherpa'),
		]
	]);
	register_taxonomy_for_object_type('trip_type', 'sherpa_trip');
});
?>
