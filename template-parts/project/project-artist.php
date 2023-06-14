<?php // Project Artist ?>

<?php

// assign artist field to module artist
$artist = $project['artist'];

// artist sidebar and all button
$sidebar = (!empty($artist['sidebar'])) ? $artist['sidebar'] : '';
$sidebar_artist_all = array( array('title' => __('All artistic looks', 'imaneo'), 'link' => array('url' => get_the_permalink(132)), 'blank' => false) );
$sidebar = array_merge($sidebar_artist_all, $sidebar);

// config menus from artist
$sidebar_menus = array($sidebar);

// include module education
require( TEMPLATEPATH . '/template-parts/modules/artist.php' );

?>