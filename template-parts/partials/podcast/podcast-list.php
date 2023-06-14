<?php

// argumentos query architects
$args = array(
    'post_type'       	=> 'project',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC'
);

// get all architects
$projects = new WP_Query( $args );

?>

<?php if ( $projects->have_posts() ) { ?>

    <div class="grid grid-podcast">

        <?php while ( $projects->have_posts() ) {  $projects->the_post();

            $project = get_field('projects');

            // var_dump($project);

            // assign artist field to module artist
            $podcast = $project['podcast'];

            $sidebar = array(
                array('title' => __('Related Project', 'imaneo'), 'link' => '', 'blank' => false),
                array('title' => get_the_title(), 'link' => array('url' => get_the_permalink()), 'blank' => false),
            );

            $sidebar_menus = array($sidebar);

            echo '<div class="grid-item">';

            echo get_the_title();

                // include module education
                require( TEMPLATEPATH . '/template-parts/modules/podcast.php' );

            echo '</div>';

            ?>

        <?php }  wp_reset_postdata();  ?>

    </div>

<?php } ?>