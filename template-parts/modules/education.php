<?php // Module Education  ?>

<p class="title__edu"><?php echo get_the_title($education_id);  ?></p>

<section class="module-default">

    <!-- Education content -->
    <section>
        <?php echo get_the_content($education_id);  ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>
