<?php get_header(''); ?>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

    // project variables and fields
    require( TEMPLATEPATH . '/template-parts/project/project-variables.php' );
   
    echo '<div class="page-header">';
        echo $project_icon;
        echo '<h1>'.get_the_title().'</h1>';
    echo '</div>';

    require( TEMPLATEPATH . '/template-parts/project/project-info.php' );
    require( TEMPLATEPATH . '/template-parts/project/project-tabs.php' );

endwhile; endif;

?>

<?php get_footer(); ?>