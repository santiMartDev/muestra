<?php get_header(''); ?>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

	// title
	$page_title = get_the_title();
	require( TEMPLATEPATH . '/template-parts/partials/page-header.php' );

    // argumentos query themes
    $args = array(
        'post_type'       	=> 'theme',
        'posts_per_page'  	=> 1,
        'p'                 => get_the_ID()
    );

    // get all themes
    $themes = new WP_Query( $args );

    // get terms taxonomy of this theme
    $terms = get_the_terms( get_the_ID(), 'project_theme' );

    // loop terms taxonomy
    foreach ($terms as $term) {

        // argumentos query - projects by term taxonomy
        $args_education = array(
            'post_type'       	=> 'education',
            'posts_per_page'  	=> -1,
            'orderby' 			=> 'menu-order',
            'order'				=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'project_theme',
                    'field' => 'slug',
                    'terms' => $term->name
                ),
            ),
        );

        // get all projects by term taxonomy
        $educations = new WP_Query( $args_education );

        // argumentos query - projects by term taxonomy
        $args_project = array(
            'post_type'       	=> 'project',
            'posts_per_page'  	=> -1,
            'orderby' 			=> 'menu-order',
            'order'				=> 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'project_theme',
                    'field' => 'slug',
                    'terms' => $term->name
                ),
            ),
        );

        // get all projects by term taxonomy
        $projects = new WP_Query( $args_project );

        $sidebar_theme_projects[] = array('title' => __('Related projects','imaneo'), 'link' => '', 'blank' => false);

        // loop projects by term taxonomy
        if ( $projects->have_posts() ) {
            while ( $projects->have_posts() ) {  $projects->the_post();
                $sidebar_theme_projects[] = array('title' => get_the_title(),  'link' => array('url' => get_the_permalink()), 'blank' => false);
            } wp_reset_postdata();
        }

        // loop projects by term taxonomy
        if ( $educations->have_posts() ) {
            while ( $educations->have_posts() ) {  $educations->the_post();
                $sidebar_theme_education[] = array('title' => get_the_title(), 'link' => array('url' => get_the_permalink()), 'blank' => false);
            } wp_reset_postdata();
        }

        $sidebar_menus = array( $sidebar_theme_education, $sidebar_theme_projects );

    }



    require( TEMPLATEPATH . '/template-parts/modules/theme.php' );

endwhile; endif;

?>

<?php get_footer(); ?>