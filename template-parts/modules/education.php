<?php // Module Education  ?>

<?php
$content_post = get_post($education_id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$title = $content_post->post_title;
?>

<p class="title__edu"><?php echo $title;  ?></p>

<section class="module-default">

    <!-- Education content -->
    <section>
        <?php echo $content; ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>
