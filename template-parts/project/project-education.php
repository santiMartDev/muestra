<?php // Project Education ?>

<?php

// assign education field to cpt to include
$education = $project['education'];

// config extra education menu
$sidebar_education_extra = array(
    array('title' => __('All educational activities', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false)
);

// include module education; ?>

<article class="project-education">
    <?php require( TEMPLATEPATH . '/template-parts/modules/education.php' ); ?>
</article>
