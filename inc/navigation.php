<?php

/**
 * Menu & Navigation
 *
 * @package      imaneo
 * @author       Fresco & Fino
 * @since        1.0.0
**/

function ffTheme_register_menus() {

    register_nav_menus( array(
        'main-menu' => esc_html__('Main Menu', 'wch'),
        'legal-menu' => esc_html__('Legal Menu', 'wch'),
        'social-menu' => esc_html__('Social Menu', 'wch'),
    ));

}

add_action( 'init', 'ffTheme_register_menus' );