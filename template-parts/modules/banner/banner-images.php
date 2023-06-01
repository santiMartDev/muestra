<?php if($media) : ?>

    <div class="banner-bg">
        <?php foreach ($media as $image) { ?>
            <div class="banner-bg-item">
                <img src="<?php echo $image['sizes']['theme_full'] ?>" alt="">
            </div>
        <?php } ?>
    </div>

<?php endif; ?>