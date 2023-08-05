<?php

$podcasts = (!empty($podcast)) ? $podcast : '';

?>

<article>

    <?php if ($podcasts) : ?>
    <?php foreach ($podcasts as $item) { ?>
    <section class="podcast" data-file="<?php echo $item['audio']; ?>" data-title="<?php echo $item['title']; ?>"
        data-intervenants="<?php echo $item['txt']; ?>" data-cover="<?php echo $item['image']; ?>">
    </section>
    <section class="pdfs">
        <?php if (!empty($item['pdfs'])) { ?>
        <?php foreach ($item['pdfs'] as $pdf) { ?>
        <a href="<?php echo $pdf['file']['url']; ?>">
            <p> <?php echo $pdf['title']; ?></p>
        </a>
        <?php } ?>
        <?php } ?>
    </section>
    <?php } ?>
    <?php endif; ?>

</article>