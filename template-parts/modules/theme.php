<?php // Module Theme ?>

<?php

// loop projects by term taxonomy
if ( $themes->have_posts() ) {
    while ( $themes->have_posts() ) {  $themes->the_post();

        $theme = get_field('themes', get_the_ID() );

        $credits = (!empty($theme['credits'])) ? $theme['credits'] : '';
        $media = (!empty($theme['media'])) ? $theme['media'] : '';
        $content = (!empty($theme['content'])) ? $theme['content'] : '';

        ?>

        <?php require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>

        <article class="module-default">

            <section>
                <?php echo $content; ?>
                <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
            </section>

            <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

        </article>

        <?php


    } wp_reset_postdata();

}

?>