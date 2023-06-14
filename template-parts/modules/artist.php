<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($artist['credits'])) ? $artist['credits'] : '';
$media = (!empty($artist['media'])) ? $artist['media'] : '';
$content = (!empty($artist['content'])) ? $artist['content'] : '';
?>

<div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>

    <div>
        <?php echo $content; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</div>