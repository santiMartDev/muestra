<?php // Module Artist ?>

<?php

// artist variables
$content = (!empty($history['content'])) ? $history['content'] : '';
?>

<div>

    <div>
        <?php echo $content; ?>
    </div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</div>