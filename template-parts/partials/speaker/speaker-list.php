<?php

// argumentos query education
$args = array(
    'post_type'       	=> 'speaker',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC'
);

// get all education
$speakers = new WP_Query( $args );

?>

<?php if ( $speakers->have_posts() ) { ?>

<div class="speakers">

    <?php while ( $speakers->have_posts() ) {  $speakers->the_post();

            // assign education field to cpt to include
            $speaker = array( get_post( get_the_ID()) );

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
                                'field' => 'id',
                                'terms' => $term->term_id
                            ),
                    ),
                );

                // get all themes by term taxonomy
                $themes = new WP_Query( $args );

                // unset sidebar themes
                unset($sidebar_speaker_themes);

                // loop themes by term taxonomy
                if ( $themes->have_posts() ) {
                    while ( $themes->have_posts() ) {  $themes->the_post();
                        $sidebar_speaker_themes[] = array('title' => get_the_title(), 'link' => array('url' => get_the_permalink()), 'blank' => false);
                    } wp_reset_postdata();
                }

            }

            // config extra education menu - title and buttons
            $sidebar_speaker_extra = array( array('title' => __('Related topcis', 'imaneo'), 'link' => '', 'blank' => false));

            if($sidebar_speaker_themes) {
                $sidebar_speaker_extra = array_merge($sidebar_speaker_extra, $sidebar_speaker_themes);
            }

            // include module education
            require( TEMPLATEPATH . '/template-parts/modules/speaker.php' );

            ?>

    <?php }  wp_reset_postdata();  ?>

</div>

<?php } ?>