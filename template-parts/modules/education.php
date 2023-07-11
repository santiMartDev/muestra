<?php // Module Education  ?>

<p class="title__edu"><?php echo get_the_title(get_the_ID());  ?></p>

<section class="module-default">

    <!-- Education content -->
    <section>
        <?php echo the_content();  ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>
