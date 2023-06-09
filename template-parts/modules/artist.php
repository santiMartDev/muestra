<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($artist['credits'])) ? $artist['credits'] : '';
$sidebar = (!empty($artist['sidebar'])) ? $artist['sidebar'] : '';
$media = (!empty($artist['media'])) ? $artist['media'] : '';

// SIDEBAR
//////////////////////

// include all button to main sidebar
array_unshift( $sidebar, array('title' => __('All artistic looks', 'imaneo'), 'link' => array('url' => get_the_permalink(132)), 'blank' => false) );

// config menus from artist
$sidebar_menus = array($sidebar);

?>

<?php require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>

<div>

    <div>
        <?php echo $artist['content']; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</div>