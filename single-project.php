<?php get_header('');?>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

    // project variables and fields
    require( TEMPLATEPATH . '/template-parts/project/project-variables.php' );
   
    ?>

    <article class="singleHeader">
        <?php echo $project_icon; ?>
        <h1><?php echo get_the_title(); ?></h1>
    </article>

    <?php
        require( TEMPLATEPATH . '/template-parts/project/project-info.php' );
        require( TEMPLATEPATH . '/template-parts/project/project-tabs.php' );

endwhile; endif;

?>

<?php get_footer(); ?>