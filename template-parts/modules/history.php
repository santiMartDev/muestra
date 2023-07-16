<?php // Module Artist 
?>

<?php

// artist variables
$content = (!empty($history['content'])) ? $history['content'] : '';
$media = (!empty($history['media'])) ? $history['media'] : '';
?>

<?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>

<article class="module-default">

    <section>
        <?php echo $content; ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>