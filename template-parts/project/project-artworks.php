<?php // Project Artist ?>

<?php

// assign artist field to module artist
$artist = $project['artist'];

// artist sidebar and all button
$sidebar_artist_all = array( array('title' => __('All artistic looks', 'imaneo'), 'link' => array('url' => get_the_permalink(132)), 'blank' => false) );

// sidebar project artist
if(!empty($artist['sidebar'])) {
    $sidebar = array_merge($sidebar_artist_all, $artist['sidebar'] );
} else {
    $sidebar = array_merge($sidebar_artist_all);
}

// config menus from artist
$sidebar_menus = array($sidebar);

// include module artistic works; ?>
<article class="project-artworks">
    <?php require( TEMPLATEPATH . '/template-parts/modules/artworks.php' ); ?>
</article>