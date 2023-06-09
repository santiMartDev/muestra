<?php // Project Podcast ?>

<?php
$podcast = $project['podcast'];
$sidebar_podcast = array( array('title' => __('All the words of people', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false) );
require( TEMPLATEPATH . '/template-parts/modules/podcast.php' );
?>