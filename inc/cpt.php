<?php

/**
 * CPT (custom post types)
 *
 * @package      imaneo
 * @author       Fresco & Fino
 * @since        1.0.0
**/


// Post type RESOURCES
///////////////////////////

// Register RESOURCE Post type

function speaker_post_type() {

	$labels = array(
		'name'                  => _x( 'Speaker', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Speaker', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Speaker', 'imaneo' ),
		'name_admin_bar'        => __( 'Speaker', 'imaneo' ),
		'archives'              => __( 'Speaker Archives', 'imaneo' ),
		'attributes'            => __( 'Speaker Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Speaker:', 'imaneo' ),
		'all_items'             => __( 'All Speaker', 'imaneo' ),
		'add_new_item'          => __( 'Add New Speaker', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Speaker', 'imaneo' ),
		'edit_item'             => __( 'Edit Speaker', 'imaneo' ),
		'update_item'           => __( 'Update Speaker', 'imaneo' ),
		'view_item'             => __( 'View Speaker', 'imaneo' ),
		'view_items'            => __( 'View Speaker', 'imaneo' ),
		'search_items'          => __( 'Search Speaker', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Speaker', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Speaker', 'imaneo' ),
		'items_list'            => __( 'Speaker list', 'imaneo' ),
		'items_list_navigation' => __( 'Speaker list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Speaker list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Speaker', 'imaneo' ),
		'description'           => __( 'Speaker Description', 'imaneo' ),
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

	register_post_type( 'speaker', $args );

}

add_action( 'init', 'speaker_post_type', 0 );


// Post type THEMES
///////////////////////////

// Register THEME Post type

function themes_post_type() {

	$labels = array(
		'name'                  => _x( 'Theme', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Theme', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Theme', 'imaneo' ),
		'name_admin_bar'        => __( 'Theme', 'imaneo' ),
		'archives'              => __( 'Theme Archives', 'imaneo' ),
		'attributes'            => __( 'Theme Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Theme:', 'imaneo' ),
		'all_items'             => __( 'All Theme', 'imaneo' ),
		'add_new_item'          => __( 'Add New Theme', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Theme', 'imaneo' ),
		'edit_item'             => __( 'Edit Theme', 'imaneo' ),
		'update_item'           => __( 'Update Theme', 'imaneo' ),
		'view_item'             => __( 'View Theme', 'imaneo' ),
		'view_items'            => __( 'View Theme', 'imaneo' ),
		'search_items'          => __( 'Search Theme', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Theme', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Theme', 'imaneo' ),
		'items_list'            => __( 'Theme list', 'imaneo' ),
		'items_list_navigation' => __( 'Theme list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Theme list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Themes', 'imaneo' ),
		'description'           => __( 'Themes Description', 'imaneo' ),
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

	register_post_type( 'theme', $args );

}

add_action( 'init', 'themes_post_type', 0 );


// Post type PROJECT
///////////////////////////

// Register PROJECT Post type

function projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Projects', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Projects', 'imaneo' ),
		'name_admin_bar'        => __( 'Projects', 'imaneo' ),
		'archives'              => __( 'Projects Archives', 'imaneo' ),
		'attributes'            => __( 'Projects Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Projects:', 'imaneo' ),
		'all_items'             => __( 'All Projects', 'imaneo' ),
		'add_new_item'          => __( 'Add New Projects', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Projects', 'imaneo' ),
		'edit_item'             => __( 'Edit Projects', 'imaneo' ),
		'update_item'           => __( 'Update Projects', 'imaneo' ),
		'view_item'             => __( 'View Projects', 'imaneo' ),
		'view_items'            => __( 'View Projects', 'imaneo' ),
		'search_items'          => __( 'Search Projects', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Projects', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Projects', 'imaneo' ),
		'items_list'            => __( 'Projects list', 'imaneo' ),
		'items_list_navigation' => __( 'Projects list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Projects list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Projects', 'imaneo' ),
		'description'           => __( 'Projects Description', 'imaneo' ),
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


// Project & Themes / Themes

function project_tax_theme() {

	$labels = array(
	  'name'              => _x( 'Project theme', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Project theme', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Project theme' ),
	  'all_items'         => __( 'All Project theme' ),
	  'parent_item'       => __( 'Parent Project theme' ),
	  'parent_item_colon' => __( 'Parent Project theme:' ),
	  'edit_item'         => __( 'Edit Project theme' ),
	  'update_item'       => __( 'Update Project theme' ),
	  'add_new_item'      => __( 'Add New Project theme' ),
	  'new_item_name'     => __( 'New Project theme' ),
	  'menu_name'         => __( 'Project theme' ),
	);

	$args = array(
	  'labels' => $labels,
	  'show_ui' => true,
	  'show_admin_column' => true,
	  'query_var'  => true,
	  'hierarchical' => true,
	);

	register_taxonomy( 'project_theme', array( 'theme', 'project', 'education', 'speaker' ) , $args );

}

add_action( 'init', 'project_tax_theme', 0 );

// Post type PROJECT
///////////////////////////

// Register PROJECT Post type

function architect_post_type() {

	$labels = array(
		'name'                  => _x( 'Architect', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Architect', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Architect', 'imaneo' ),
		'name_admin_bar'        => __( 'Architect', 'imaneo' ),
		'archives'              => __( 'Architect Archives', 'imaneo' ),
		'attributes'            => __( 'Architect Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Architect:', 'imaneo' ),
		'all_items'             => __( 'All Architect', 'imaneo' ),
		'add_new_item'          => __( 'Add New Architect', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Architect', 'imaneo' ),
		'edit_item'             => __( 'Edit Architect', 'imaneo' ),
		'update_item'           => __( 'Update Architect', 'imaneo' ),
		'view_item'             => __( 'View Architect', 'imaneo' ),
		'view_items'            => __( 'View Architect', 'imaneo' ),
		'search_items'          => __( 'Search Architect', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Architect', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Architect', 'imaneo' ),
		'items_list'            => __( 'Architect list', 'imaneo' ),
		'items_list_navigation' => __( 'Architect list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Architect list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Architect', 'imaneo' ),
		'description'           => __( 'Architect Description', 'imaneo' ),
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

	register_post_type( 'architect', $args );

}

add_action( 'init', 'architect_post_type', 0 );

// Post type PROJECT
///////////////////////////

// Register PROJECT Post type

function education_post_type() {

	$labels = array(
		'name'                  => _x( 'Education', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Education', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Education', 'imaneo' ),
		'name_admin_bar'        => __( 'Education', 'imaneo' ),
		'archives'              => __( 'Education Archives', 'imaneo' ),
		'attributes'            => __( 'Education Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Education:', 'imaneo' ),
		'all_items'             => __( 'All Education', 'imaneo' ),
		'add_new_item'          => __( 'Add New Education', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Education', 'imaneo' ),
		'edit_item'             => __( 'Edit Education', 'imaneo' ),
		'update_item'           => __( 'Update Education', 'imaneo' ),
		'view_item'             => __( 'View Education', 'imaneo' ),
		'view_items'            => __( 'View Education', 'imaneo' ),
		'search_items'          => __( 'Search Education', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Education', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Education', 'imaneo' ),
		'items_list'            => __( 'Education list', 'imaneo' ),
		'items_list_navigation' => __( 'Education list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Education list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Education', 'imaneo' ),
		'description'           => __( 'Education Description', 'imaneo' ),
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

	register_post_type( 'education', $args );

}

add_action( 'init', 'education_post_type', 0 );

?>