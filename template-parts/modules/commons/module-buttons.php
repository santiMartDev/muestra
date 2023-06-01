<?php  if( $buttons && (count($buttons) > 0) ):  ?>
    <div class="module-buttons">
        <?php foreach ($buttons as $button) {
            $link = isset($button['link']['url']) ? $button['link']['url'] : '';
            $style = isset($button['style']) ? $button['style'] : 'normal';
            $title = isset($button['title']) ? $button['title'] : ''; ?>
            <a href="<?php echo $link; ?>" class="<?php echo $style; ?>">
                <?php echo $title; ?>
            </a>
        <?php } ?>
    </div>
<?php endif; ?>