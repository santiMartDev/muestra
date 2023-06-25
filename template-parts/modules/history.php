<?php // Module Artist ?>

<?php

// artist variables
$content = (!empty($history['content'])) ? $history['content'] : '';
?>

<article class="module-default">

    <section>
        <?php echo $content; ?>
    </section>

    <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

</article>