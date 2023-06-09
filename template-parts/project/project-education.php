<?php // Project Education ?>

<?php
$education = $project['education'];
$sidebar_education_extra = array( array('title' => __('All educational activities', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false) );
require( TEMPLATEPATH . '/template-parts/modules/education.php' );
?>