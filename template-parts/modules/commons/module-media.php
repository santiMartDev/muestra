
<?php if( $media['video'] || $media['images'] || $media['image'] ): ?>
    <div class="module-media">
        <?php /* Module image */ include( TEMPLATEPATH . '/template-parts/modules/comunes/module-image.php'); ?>
        <?php /* Module video */ include( TEMPLATEPATH . '/template-parts/modules/comunes/module-video.php'); ?>
        <?php /* Module carousel */ // include( TEMPLATEPATH . '/template-parts/modules/comunes/module-carousel.php'); ?>
    </div>
<?php endif; ?>