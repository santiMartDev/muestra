<?php if( $content['title'] || $content['content'] || $content['surtitle'] || $content['subtitle'] ): ?>
    <div class="module-content">
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-surtitle.php'); ?>
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-subtitle.php'); ?>
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-buttons.php'); ?>
    </div>
<?php endif; ?>


