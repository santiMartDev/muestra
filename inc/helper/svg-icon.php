<?php

/**
 * SVG icon
 *
 * @package      imaneo
 * @author       Fresco & Fino
 * @since        1.0.0
**/


// Get ========================================

if ( ! function_exists( 'ffTheme_get_svg_icon' ) ) :
	function ffTheme_get_svg_icon( $args = array() ) {

		$path  = array_key_exists( 'path', $args ) ? $args[ 'path' ] : 'src/assets/icons';
		$file  = array_key_exists( 'file', $args ) ? $args[ 'file' ] : 'icons';
		$class = array_key_exists( 'class', $args ) ? ' class="svg-icon ' . $args[ 'class' ] . '"' : ' class="svg-icon"';

		$url   = get_stylesheet_directory_uri() . '/' . $path . '/';

		if ( $args[ 'icon' ] ) :
			$output  = '<svg ' . $class . '><use href="' . $url . $file . '.svg#' . $args[ 'icon' ] . '"/></svg>';
		else :
			$output  = '<img ' . $class . ' src="' . $url . $file . '.svg"/>';
		endif;

		return $output;

	}
endif;


// Show ========================================

if ( ! function_exists( 'ffTheme_svg_icon' ) ) :
	function ffTheme_svg_icon( $args = array() ) {

		echo ffTheme_get_svg_icon( $args );

	}
endif;
