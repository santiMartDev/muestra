<!-- Buttons -->
<?php if($buttons): ?>
    <div class="module-buttons">
        <?php foreach ($buttons as $button) { ?>
            <?php /* estilo */ $button['type'] = $button['type'] ? $button['type'] : 'normal'; ?>
            <?php if($button['tour']): ?>
                <a class="<?php echo $button['type']; ?>" data-iframe="true" data-src="<?php echo $button['tour']; ?>"><?php echo $button['text']; ?></a>
            <?php else: ?>
                <a class="<?php echo $button['type']; ?>" href="<?php echo $button['link']; ?>"><?php echo $button['text']; ?></a>
            <?php endif; ?>
        <?php } ?>
    </div>
<?php endif; ?>