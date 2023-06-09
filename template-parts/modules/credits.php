<?php // Module Credits ?>

<?php if(!empty($credits)) : ?>
    <div class="module-credits">
        <?php foreach ($credits as $credit) { ?>
            <h3><?php echo $credit['title']; ?></h3>
            <?php echo $credit['content']; ?>
        <?php } ?>
    </div>
<?php endif; ?>