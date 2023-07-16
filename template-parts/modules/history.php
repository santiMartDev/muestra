<?php // Module Artist 
?>

<?php

// artist variables
$content = (!empty($history['content'])) ? $history['content'] : '';
?>

<article class="module-default">

    <section>
        <?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>
        <?php echo $content; ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</article>