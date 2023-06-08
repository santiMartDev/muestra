<?php get_header(''); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    $projects = get_field('projects');
    $project_icon = (!empty($projects['project_info']['icon'])) ? '<img src="'.$projects['project_info']['icon']['sizes']['theme_small'].'">' : '' ;

    echo '<div class="page-header">';
        echo $project_icon;
        echo '<h1>'.get_the_title().'</h1>';
    echo '</div>';

    require( TEMPLATEPATH . '/template-parts/project/project-variables.php' );
    require( TEMPLATEPATH . '/template-parts/project/project-info.php' );
    require( TEMPLATEPATH . '/template-parts/project/project-tabs.php' );

endwhile; endif;
?>

<?php get_footer(); ?>