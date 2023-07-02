<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';
$content = (!empty($podcast['content'])) ? $podcast['content'] : '';
?>

<article>

    <section class="player" id="embed-iframe"></section>

    <?php if($podcasts): ?>
    <section class="podcast">
        <?php foreach ($podcasts as $item) { ?>
            <?php echo $item['url'] ?>
            <?php echo $item['title'] ?>
        <?php } ?>
    </section>
    <?php endif; ?>

    <section>
        <?php echo $content; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </section>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</article>