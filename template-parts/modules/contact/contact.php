<div class="columns">

    <div class="col">
        <div class="contact-form">
            <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
            <?php include( 'contact-form.php'); ?>
        </div>
    </div>

    <div class="col">
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-images-stack.php'); ?>
    </div>

</div>

<?php if($items) : ?>
    <div class="contact-info">
        <?php foreach ($items as $item) { ?>
            <div class="contact-info-item">
                <h6><?php echo $item['title']; ?></h6>
                <?php echo $item['content']; ?>
            </div>
        <?php } ?>
    </div>
<?php endif; ?>