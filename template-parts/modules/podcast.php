<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';
$content = (!empty($podcast['content'])) ? $podcast['content'] : '';
?>

<article>

    <?php if($podcasts): ?>
    <section class="podcast">
        <?php foreach ($podcasts as $item) { ?>
            <?php echo $item['url'] ?>
            <?php echo $item['title'] ?>
        <?php } ?>
        <?php //echo do_shortcode( '[podcastplayer feed_url="https://feeds.simplecast.com/54nAGcIl"]' ); ?>
    </section>
    <?php endif; ?>

    <section>
        <?php echo $content; ?>
        <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </section>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</article>