<?php get_header(''); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
    /* Get Project Variables */
    require( TEMPLATEPATH . '/template-parts/project/project-variables.php' );
    ?>

    <!-- Title -->
	<h1><?php the_title(); ?></h1>

    <?php require( TEMPLATEPATH . '/template-parts/project/project-info.php' );  ?>
    <?php require( TEMPLATEPATH . '/template-parts/project/project-tabs.php' );  ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>