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

function resource_post_type() {

	$labels = array(
		'name'                  => _x( 'Resources', 'Project', 'imaneo' ),
		'singular_name'         => _x( 'Resources', 'Project', 'imaneo' ),
		'menu_name'             => __( 'Resources', 'imaneo' ),
		'name_admin_bar'        => __( 'Resources', 'imaneo' ),
		'archives'              => __( 'Resources Archives', 'imaneo' ),
		'attributes'            => __( 'Resources Attributes', 'imaneo' ),
		'parent_item_colon'     => __( 'Parent Resources:', 'imaneo' ),
		'all_items'             => __( 'All Resources', 'imaneo' ),
		'add_new_item'          => __( 'Add New Resources', 'imaneo' ),
		'add_new'               => __( 'Add New', 'imaneo' ),
		'new_item'              => __( 'New Resources', 'imaneo' ),
		'edit_item'             => __( 'Edit Resources', 'imaneo' ),
		'update_item'           => __( 'Update Resources', 'imaneo' ),
		'view_item'             => __( 'View Resources', 'imaneo' ),
		'view_items'            => __( 'View Resources', 'imaneo' ),
		'search_items'          => __( 'Search Resources', 'imaneo' ),
		'not_found'             => __( 'Not found', 'imaneo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'imaneo' ),
		'featured_image'        => __( 'Featured Image', 'imaneo' ),
		'set_featured_image'    => __( 'Set featured image', 'imaneo' ),
		'remove_featured_image' => __( 'Remove featured image', 'imaneo' ),
		'use_featured_image'    => __( 'Use as featured image', 'imaneo' ),
		'insert_into_item'      => __( 'Insert into Resources', 'imaneo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Resources', 'imaneo' ),
		'items_list'            => __( 'Resources list', 'imaneo' ),
		'items_list_navigation' => __( 'Resources list navigation', 'imaneo' ),
		'filter_items_list'     => __( 'Filter Resources list', 'imaneo' ),
	);

	$args = array(
		'label'                 => __( 'Resources', 'imaneo' ),
		'description'           => __( 'Resources Description', 'imaneo' ),
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

	register_post_type( 'resource', $args );

}

add_action( 'init', 'resource_post_type', 0 );


// Resources / category

function resource_taxonomy() {

	$labels = array(
	  'name'              => _x( 'Resource category', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Resource category', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Resource category' ),
	  'all_items'         => __( 'All Resource category' ),
	  'parent_item'       => __( 'Parent Resource category' ),
	  'parent_item_colon' => __( 'Parent Resource category:' ),
	  'edit_item'         => __( 'Edit Resource category' ),
	  'update_item'       => __( 'Update Resource category' ),
	  'add_new_item'      => __( 'Add New Resource category' ),
	  'new_item_name'     => __( 'New Resource category' ),
	  'menu_name'         => __( 'Resource category' ),
	);

	$args = array(
	  'labels' => $labels,
	  'show_ui' => true,
	  'show_admin_column' => true,
	  'query_var'  => true,
	  'hierarchical' => true,
	);

	register_taxonomy( 'resource_cat', 'resource' , $args );

}

add_action( 'init', 'resource_taxonomy', 0 );


// Resources / intervenants

function intervenants_taxonomy() {

	$labels = array(
	  'name'              => _x( 'Intervenants', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Intervenants', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Intervenants' ),
	  'all_items'         => __( 'All Intervenants' ),
	  'parent_item'       => __( 'Parent Intervenants' ),
	  'parent_item_colon' => __( 'Parent Intervenants:' ),
	  'edit_item'         => __( 'Edit Intervenants' ),
	  'update_item'       => __( 'Update Intervenants' ),
	  'add_new_item'      => __( 'Add New Intervenants' ),
	  'new_item_name'     => __( 'New Intervenants' ),
	  'menu_name'         => __( 'Intervenants' ),
	);

	$args = array(
	  'labels' => $labels,
	  'show_ui' => true,
	  'show_admin_column' => true,
	  'query_var'  => true,
	  'hierarchical' => true,
	);

	register_taxonomy( 'intervenants_cat', 'resource' , $args );

}

add_action( 'init', 'intervenants_taxonomy', 0 );


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

	register_taxonomy( 'project_theme', array( 'theme', 'project' ) , $args );

}

add_action( 'init', 'project_tax_theme', 0 );

// Project / Architects

function project_tax_architect() {

	$labels = array(
	  'name'              => _x( 'Project architect', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Project architect', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Project architect' ),
	  'all_items'         => __( 'All Project architect' ),
	  'parent_item'       => __( 'Parent Project architect' ),
	  'parent_item_colon' => __( 'Parent Project architect:' ),
	  'edit_item'         => __( 'Edit Project architect' ),
	  'update_item'       => __( 'Update Project architect' ),
	  'add_new_item'      => __( 'Add New Project architect' ),
	  'new_item_name'     => __( 'New Project architect' ),
	  'menu_name'         => __( 'Project architect' ),
	);

	$args = array(
	  'labels' => $labels,
	  'show_ui' => true,
	  'show_admin_column' => true,
	  'query_var'  => true,
	  'hierarchical' => true,
	);

	register_taxonomy( 'project_architect', 'project' , $args );

}

add_action( 'init', 'project_tax_architect', 0 );

?>