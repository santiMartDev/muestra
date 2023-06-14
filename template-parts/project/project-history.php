<?php // Project History ?>

<?php

// assign history field to module artist
$history = $project['history'];

// artist sidebar and all button
$sidebar = (!empty($history['sidebar'])) ? $history['sidebar'] : '';

$sidebar_artist_all = array(
    array('title' => __('Construction actors', 'imaneo'), 'link' => array('url' => get_the_permalink(129)), 'blank' => false),
    array('title' => __('Bibliography', 'imaneo'), 'link' => array('url' => get_the_permalink(130)), 'blank' => false),
    array('title' => __('Educational activities', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false),
);

$sidebar = array_merge($sidebar_artist_all, $sidebar);

// config menus from artist
$sidebar_menus = array($sidebar);

// include module education
require( TEMPLATEPATH . '/template-parts/modules/history.php' );

?>