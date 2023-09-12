<?php // Module Education  ?>

<?php
$content_post = get_post($education_id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$title = $content_post->post_title;

$motif = get_field('education', $education_id);

// var_dump($motif['download']);
?>

<p class="title__edu"><?php echo $title;  ?></p>

<!-- Education content -->
<section class="module-default">

    <section class="motif__edu">
        <a href="<?php echo $motif['download']['url'] ?>" target="_blank">
            <img src="<?php echo $motif['img'] ?>" alt="">
        </a>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>