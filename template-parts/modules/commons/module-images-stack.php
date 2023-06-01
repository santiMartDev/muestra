<?php if($media['gallery']) : ?>
    <div class="images-stack">
        <?php foreach ($media['gallery'] as $image) { ?>
            <img src="<?php echo $image['sizes']['theme_full'] ?>" alt="">
        <?php } ?>
    </div>
<?php endif; ?>