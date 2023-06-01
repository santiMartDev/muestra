<?php

/**
 * Gutenberg Blocks
 *
 * @package      finuras
 * @author       the Finuras
 * @since        1.0.0
**/


// Funcion cuando init acf
add_action('acf/init', 'my_acf_init');

function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'bio',
			'title'				=> __('Bio'),
			'description'		=> __('A custom bio image block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'bio', 'quote' ),
			'enqueue_style' 	=> get_template_directory_uri() . '/template-parts/block/bio.css',
		));
	}
}

// funcion render block
function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}

}

?>