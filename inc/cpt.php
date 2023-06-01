<?php

/**
 * CPT (custom post types)
 *
 * @package      witsound
 * @author       Reload
 * @since        1.0.0
**/

///////////////////////////
// Post type Projects

// Register Projects Post type
function projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Promotion General Name', 'wch' ),
		'singular_name'         => _x( 'Projects', 'Projects Singular Name', 'wch' ),
		'menu_name'             => __( 'Projects', 'wch' ),
		'name_admin_bar'        => __( 'Projects', 'wch' ),
		'archives'              => __( 'Projects Archives', 'wch' ),
		'attributes'            => __( 'Projects Attributes', 'wch' ),
		'parent_item_colon'     => __( 'Parent Projects:', 'wch' ),
		'all_items'             => __( 'All Projects', 'wch' ),
		'add_new_item'          => __( 'Add New Projects', 'wch' ),
		'add_new'               => __( 'Add New', 'wch' ),
		'new_item'              => __( 'New Projects', 'wch' ),
		'edit_item'             => __( 'Edit Projects', 'wch' ),
		'update_item'           => __( 'Update Projects', 'wch' ),
		'view_item'             => __( 'View Projects', 'wch' ),
		'view_items'            => __( 'View Projects', 'wch' ),
		'search_items'          => __( 'Search Projects', 'wch' ),
		'not_found'             => __( 'Not found', 'wch' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wch' ),
		'featured_image'        => __( 'Featured Image', 'wch' ),
		'set_featured_image'    => __( 'Set featured image', 'wch' ),
		'remove_featured_image' => __( 'Remove featured image', 'wch' ),
		'use_featured_image'    => __( 'Use as featured image', 'wch' ),
		'insert_into_item'      => __( 'Insert into Projects', 'wch' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Projects', 'wch' ),
		'items_list'            => __( 'Projects list', 'wch' ),
		'items_list_navigation' => __( 'Projects list navigation', 'wch' ),
		'filter_items_list'     => __( 'Filter Projects list', 'wch' ),
	);

	$args = array(
		'label'                 => __( 'Projects', 'wch' ),
		'description'           => __( 'Projects Description', 'wch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'project', $args );

}

add_action( 'init', 'projects_post_type', 0 );

?>