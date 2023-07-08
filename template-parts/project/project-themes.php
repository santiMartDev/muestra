<?php // Project Theme 
?>

<?php

// $terms = get_the_terms( get_the_ID() , 'project_theme' );

// foreach ($terms as $term) {

//     $theme_id = $term->term_id;

//     // argumentos query - projects by term taxonomy
//     $args = array(
//         'post_type'       	=> 'theme',
//         'posts_per_page'  	=> -1,
//         'orderby' 			=> 'menu-order',
//         'order'				=> 'ASC',
//         'tax_query' => array(
//             array(
//                 'taxonomy' => 'project_theme',
//                 'field' => 'slug',
//                 'terms' => $term->name
//             ),
//         ),
//     );

//     // get all projects by term taxonomy
//     $themes = new WP_Query( $args );

// }

$sidebar_theme = array(array('title' => __('All related topics', 'imaneo'), 'link' => array('url' => get_the_permalink(132)), 'blank' => true));
$sidebar_theme_extra = '';

$sidebar_menus = array($sidebar_theme);

require(TEMPLATEPATH . '/template-parts/modules/theme.php');

?>