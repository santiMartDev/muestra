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
        'main-menu' => esc_html__('Main Menu', 'imaneo'),
        'legal-menu' => esc_html__('Legal Menu', 'imaneo'),
        'projects-menu' => esc_html__('Projects Menu', 'imaneo'),
        'themes-menu' => esc_html__('Themes Menu', 'imaneo'),
        'resources-menu' => esc_html__('Resources Menu', 'imaneo'),
        'imaginaries-menu' => esc_html__('Imaginaries Menu', 'imaneo'),
    ));

}

add_action( 'init', 'ffTheme_register_menus' );