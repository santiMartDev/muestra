<?php

/**
 * Scripts & Styles
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

// Custom css and js
function ffTheme_assets() {

    // Include jquery
    wp_enqueue_script( 'jquery');

    // Include css
    wp_enqueue_style( 'custom-style', get_template_directory_uri().'/dist/css/style.css', array(), '1.0', 'all' );

    // Include GSAP
    wp_enqueue_script( 'finuras-scripts-gsap', get_template_directory_uri().'/dist/libs/gsap.min.js', array(), '1.0.0' , 'true' );
    wp_enqueue_script( 'finuras-scripts-gsap-scroll', get_template_directory_uri().'/dist/libs/ScrollTrigger.min.js', array(), '1.0.0' , 'true' );
    wp_enqueue_script( 'finuras-scripts-split', get_template_directory_uri().'/dist/libs/SplitText3.min.js', array(), '1.0.0' , 'true' );

    // Include js
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri().'/dist/js/script.js', array(), '1.0' , 'true' );


}

add_action( 'wp_enqueue_scripts', 'ffTheme_assets' );

?>