<?php // Project Podcast ?>

<?php

// assign artist field to module artist
$podcast = $project['podcast'];

// artist sidebar and all button
$sidebar = (!empty($podcast['sidebar'])) ? $podcast['sidebar'] : '';
$sidebar_podcast_all = array( array('title' => __('All the words of people', 'imaneo'), 'link' => array('url' => get_the_permalink(132)), 'blank' => false) );
$sidebar = array_merge($sidebar_podcast_all, $sidebar);

// config menus from podcast
$sidebar_menus = array($sidebar);

// include module podcast
require( TEMPLATEPATH . '/template-parts/modules/podcast.php' );

?>