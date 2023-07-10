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

$topics = $project['related_topics'];

$credits = (!empty($topics['credits'])) ? $topics['credits'] : '';
$content = (!empty($topics['content'])) ? $topics['content'] : '';

// media
$media['videos'] = (!empty($topics['videos'])) ? $topics['videos'] : '';

?>

<?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>

<article class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>