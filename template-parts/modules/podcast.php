<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';
$content = (!empty($podcast['content'])) ? $podcast['content'] : '';
?>

<div>

    <?php if($podcasts): ?>
        <?php foreach ($podcasts as $item) { ?>
            <?php echo $item['url'] ?>
        <?php } ?>
    <?php endif; ?>

    <div>
        <?php echo $content; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </div>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</div>