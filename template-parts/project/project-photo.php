<?php // SPLIDE ?>

<?php if(!empty($project['photo'])): ?>

    <?php foreach ($project['photo'] as $img) { ?>
        <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
    <?php } ?>

<?php endif; ?>