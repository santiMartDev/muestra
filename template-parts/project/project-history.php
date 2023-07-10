<?php // Project History ?>

<?php

// assign history field to module artist
$history = $project['history'];

// sidebar default
$sidebar_history = array(
    array('title' => __('Construction actors', 'imaneo'), 'link' => array('url' => get_the_permalink(129)), 'blank' => false),
    array('title' => __('Bibliography', 'imaneo'), 'link' => array('url' => get_the_permalink(130)), 'blank' => false),
    array('title' => __('Educational activities', 'imaneo'), 'link' => array('url' => get_the_permalink(142)), 'blank' => false),
);

// sidebar project history
if(!empty($history['sidebar'])) {
    $sidebar = array_merge($sidebar_history, $history['sidebar'] );
} else {
    $sidebar = array_merge($sidebar_history);
}

// config menus from project
$sidebar_menus = array($sidebar);

// include module history
require( TEMPLATEPATH . '/template-parts/modules/history.php' );

?>