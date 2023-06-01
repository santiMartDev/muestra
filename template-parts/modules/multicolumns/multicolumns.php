
<?php

if($items):
    foreach ($items as $item) {

        $content['surtitle'] = (isset($item['content']['surtitle'])) ? $item['content']['surtitle'] : '';
        $content['title'] = (isset($item['content']['title'])) ? $item['content']['title'] : '';
        $content['subtitle'] = (isset($item['content']['subtitle'])) ? $item['content']['subtitle'] : '';
        $content['content'] = (isset($item['content']['content'])) ? $item['content']['content'] : '';
        $buttons = (isset($item['buttons'])) ? $item['buttons'] : '';
        $media['gallery'] = (isset($item['media']['gallery'])) ? $item['media']['gallery'] : '';

        ?>
        <div class="columns">

            <div class="col">
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-surtitle.php'); ?>
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-subtitle.php'); ?>
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-buttons.php'); ?>
            </div>

            <div class="col">
                <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-images-stack.php'); ?>
            </div>

        </div>
    <?php }
endif; ?>




