<?php

/* Module content */
include( TEMPLATEPATH . '/template-parts/modules/comunes/module-contents.php');

?>

<!-- Iconos List -->
<div class="icons-list">
    <?php foreach ($items as $item) { ?>
        <div class="icon animated-item">
            <img src="<?php echo $item['image']['sizes']['theme_full'] ?>" alt="">
            <?php echo $item['title'] ?>
        </div>
    <?php } ?>
</div>