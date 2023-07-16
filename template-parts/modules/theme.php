<?php // Module Theme 
?>

<?php

$theme = get_field('themes');

$credits = (!empty($theme['credits'])) ? $theme['credits'] : '';
$content = (!empty($theme['content'])) ? $theme['content'] : '';

// media
$media = (!empty($theme['media'])) ? $theme['media'] : '';

?>
<article class="module-video">

    <?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>

    <article class="module-default">

        <section>
            <?php echo $content; ?>
            <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
        </section>

        <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

    </article>