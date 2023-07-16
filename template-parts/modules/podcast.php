<?php // Module Artist 
?>

<?php

// artist variables
$credits = (!empty($podcast['credits'])) ? $podcast['credits'] : '';
$podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';
$content = (!empty($podcast['content'])) ? $podcast['content'] : '';
?>

<article>

    <?php if ($podcasts) : ?>
    <?php foreach ($podcasts as $item) { ?>
    <section class="podcast" data-file="<?php echo $item['audio']; ?>" data-title="<?php echo $item['title']; ?>"
        data-intervenants="<?php echo $item['txt']; ?>" data-cover="<?php echo $item['img']; ?>">
    </section>
    <section class="pdfs">
        <?php foreach ($item['pdfs'] as $pdf) { ?>
        <?php //var_dump($pdf); 
                    ?>
        <a href="<?php echo $pdf['file']['url']; ?>">
            <p> <?php echo $pdf['title']; ?></p>
        </a>
        <?php } ?>
    </section>
    <?php } ?>
    <?php endif; ?>

    <section class="module-default">

        <section>
            <?php echo $content; ?>
            <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
        </section>

        <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

    </section>

</article>