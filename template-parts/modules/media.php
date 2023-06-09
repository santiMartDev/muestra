<?php //  var_dump($media); ?>


<?php if(!empty($media['video'])): ?>

    <?php echo $media['video']; ?>

<?php elseif(!empty($media['gallery'])): ?>

    <?php foreach ($media['gallery'] as $img) { ?>
        <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
    <?php } ?>

<?php endif; ?>
