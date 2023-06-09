<?php // Module Podcast ?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$sidebar = (!empty($podcast['sidebar'])) ? $podcast['sidebar'] : '';
$podcasts = (!empty($podcast['podcasts'])) ? $podcast['podcasts'] : '';

// $media = (!empty($podcast['media'])) ? $podcast['media'] : '';
// config menus from artist

$sidebar_menus = array($sidebar_podcast);


?>

<?php if(!empty($podcasts)): ?>
    <?php foreach ($podcasts as $item) { 
        $resources = get_field('resources', $item);
        ?>

        <?php echo $item->post_title ?>

    <?php } ?>
<?php endif;  ?>

<?php // require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>

<div>

    <div>
        <?php echo $podcast['content']; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</div>