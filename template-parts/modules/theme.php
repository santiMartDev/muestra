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
$videos = (!empty($topics['videos'])) ? $topics['videos'] : '';
$content = (!empty($topics['content'])) ? $topics['content'] : '';

?>
<article class="module-video-gallery">
    <?php require(TEMPLATEPATH . '/template-parts/modules/topics.php'); ?>
</article>

<article class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>