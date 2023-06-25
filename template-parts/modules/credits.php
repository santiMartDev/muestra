<?php // Module Credits ?>

<?php if(!empty($credits)) : ?>
    <div class="module-credits">
        <?php foreach ($credits as $credit) { ?>
            <div class="item">
            <p><?php echo $credit['title']; ?></p>
            <?php echo $credit['content']; ?>
            </div>
        <?php } ?>
    </div>
<?php endif; ?>