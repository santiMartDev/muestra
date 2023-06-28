<?php // Module Artist ?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';
$content = (!empty($podcast['content'])) ? $podcast['content'] : '';
?>

<article>

    <?php //if($podcasts): ?>
        <?php //foreach ($podcasts as $item) { ?>
            <?php //echo $item['url'] ?>
        <?php //} ?>
    <?php //endif; ?>

    <section class="podcast">
        <figure>
            <picture>
                <img src="<?php bloginfo('template_url') ?>/dist/assets/logos/logo-header.png" alt="">
            </picture>
        </figure>
        <section>
            <p></p>
            <div>
                <button class="spotify__play">
                    <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-player-play" alt="">
                </button>
            </div>
        </section>
    </section>

    <section>
        <?php //echo $content; ?>
        <?php //require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
    </section>

    <?php //require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</article>