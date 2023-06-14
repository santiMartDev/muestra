<?php // Module Theme ?>

<?php

// loop projects by term taxonomy
if ( $themes->have_posts() ) {
    while ( $themes->have_posts() ) {  $themes->the_post();

        $theme = get_field('themes', get_the_ID() );

        // var_dump($theme);

        $credits = (!empty($theme['credits'])) ? $theme['credits'] : '';
        $media = (!empty($theme['media'])) ? $theme['media'] : '';
        $content = (!empty($theme['content'])) ? $theme['content'] : '';

        ?>

        <?php require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>

        <div>

            <div>
                <?php echo $content;?>
                <?php require( TEMPLATEPATH . '/template-parts/modules/credits.php' ); ?>
            </div>

            <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

        </div>

        <?php


    } wp_reset_postdata();

}

?>