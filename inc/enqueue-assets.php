<?php

/**
 * Scripts & Styles
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
 **/

// Custom css and js
function ffTheme_assets()
{

    // Include jquery
    wp_enqueue_script('jquery');

    // Include CSS Libraries
    wp_enqueue_style('custom-style-leaflet', get_template_directory_uri() . '/dist/libs/leaflet/leaflet.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-accordion', get_template_directory_uri() . '/dist/libs/accordion.min.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-lg', get_template_directory_uri() . '/dist/libs/lightgallery/css/lightgallery-bundle.min.css', array(), '1.0', 'all');

    // Include CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0', 'all');

    // Include JS Libraries
    wp_enqueue_script('finuras-scripts-gsap', get_template_directory_uri() . '/dist/libs/gsap.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-gsap-scroll', get_template_directory_uri() . '/dist/libs/ScrollTrigger.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-leaflet', get_template_directory_uri() . '/dist/libs/leaflet/leaflet.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-accordion', get_template_directory_uri() . '/dist/libs/accordion.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-vimeo', get_template_directory_uri() . '/dist/libs/vimeo-player.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-lg', get_template_directory_uri() . '/dist/libs/lightgallery/lightgallery.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('finuras-scripts-lgVideo', get_template_directory_uri() . '/dist/libs/lightgallery/plugins/video/lg-video.min.js', array(), '1.0.0', 'true');

    // Include JS
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/dist/js/script.js', array(), '1.0', 'true');
}

add_action('wp_enqueue_scripts', 'ffTheme_assets');


// Admin

add_action('admin_enqueue_scripts', 'custom_admin_scripts');

function custom_admin_scripts()
{
    wp_enqueue_style('custom-admin-styles', get_template_directory_uri() . '/dist/css/admin.css', array(), wp_get_theme()->get('Version'), 'all');
}