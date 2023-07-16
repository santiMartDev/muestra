<?php // Module Theme 
?>

<?php

$topics = $project['related_topics'];

$credits = (!empty($topics['credits'])) ? $topics['credits'] : '';
$content = (!empty($topics['content'])) ? $topics['content'] : '';
$media = (!empty($topics['media'])) ? $topics['media'] : '';

?>

<?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>

<article class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>