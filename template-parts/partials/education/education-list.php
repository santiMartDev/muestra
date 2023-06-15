<?php

// argumentos query education
$args = array(
    'post_type'       	=> 'education',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC'
);

// get all education
$educations = new WP_Query( $args );

?>

<?php if ( $educations->have_posts() ) { ?>

    <div class="grid grid-education">

        <?php while ( $educations->have_posts() ) {  $educations->the_post();

            // assign education field to cpt to include
            $education = array( get_post( get_the_ID()) );

            // get terms taxonomy of this education
            $terms = get_the_terms( get_the_ID(), 'project_theme');

            // loop terms taxonomy
            foreach ($terms as $term) {

                // argumentos query - themes by term taxonomy
                $args = array(
                        'post_type'       	=> 'theme',
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

                // get all themes by term taxonomy
                $themes = new WP_Query( $args );

                // unset sidebar themes
                unset($sidebar_education_themes);

                // loop themes by term taxonomy
                if ( $themes->have_posts() ) {
                    while ( $themes->have_posts() ) {  $themes->the_post();
                        $sidebar_education_themes[] = array('title' => get_the_title(), 'link' => array('url' => get_the_permalink()), 'blank' => false);
                    } wp_reset_postdata();
                }

            }

            // config extra education menu - title and buttons
            $sidebar_education_extra = array( array('title' => __('Related topcis', 'imaneo'), 'link' => '', 'blank' => false));
            $sidebar_education_extra = array_merge($sidebar_education_extra, $sidebar_education_themes);

            // include module education
            require( TEMPLATEPATH . '/template-parts/modules/education.php' );

            ?>

        <?php }  wp_reset_postdata();  ?>

    </div>

<?php } ?>