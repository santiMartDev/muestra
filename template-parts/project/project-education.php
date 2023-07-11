<?php // Project Education ?>

<?php

// assign education field to cpt to include
$education = $project['education'];
$education_id = $education[0]->ID;

// var_dump($education);

// config extra education menu
$sidebar_education_extra = array(
    array('title' => __('All educational activities', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false)
);

$sidebar_menus = array($sidebar_education_extra);

// include module education; ?>

<article class="project-education">
    <?php require( TEMPLATEPATH . '/template-parts/modules/education.php' ); ?>
</article>
