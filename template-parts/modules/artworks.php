<?php // Module Artist 
?>

<?php

// artist variables
$credits = (!empty($artist['credits'])) ? $artist['credits'] : '';
$media = (!empty($artist['media'])) ? $artist['media'] : '';
$content = (!empty($artist['content'])) ? $artist['content'] : '';
?>

<article class="artwoks">
    <?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>
</article>

<section class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>