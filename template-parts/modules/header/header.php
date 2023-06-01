<?php if($items):  ?>

    <?php foreach ($items as $item) { ?>

        <div class="header-row">

            <?php foreach ($item['item'] as $content) { ?>

                <?php if($content['title']): ?>
                    <span><?php echo $content['title']; ?></span>
                <?php endif; ?>

                <?php if($content['image']): ?>
                    <img src="<?php echo $content['image']['sizes']['theme_full']; ?>" alt="">
                <?php endif; ?>

            <?php } ?>

        </div>

   <?php } ?>

<?php endif; ?>

<?php include( TEMPLATEPATH . '/template-parts/partials/soundwave.php'); ?>