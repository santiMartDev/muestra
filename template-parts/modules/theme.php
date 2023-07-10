<?php // Module Theme
?>

<?php

// loop projects by term taxonomy
// if ($themes->have_posts()) {
//     while ($themes->have_posts()) {
//         $themes->the_post();

//         $theme = get_field('themes', get_the_ID());
//     }
//     wp_reset_postdata();
// }

$theme = get_field('themes');

$credits = (!empty($theme['credits'])) ? $theme['credits'] : '';
$content = (!empty($theme['content'])) ? $theme['content'] : '';

// media
$media = (!empty($theme['media'])) ? $theme['media'] : '';

?>


<?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>

<article class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>