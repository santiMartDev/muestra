<?php // Module Education  ?>

<?php
$content_post = get_post($education_id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$title = $content_post->post_title;

$education = get_field('education', $education_id);

?>

<p class="title__edu"><?php echo $title;  ?></p>

<!-- Education content -->
<section class="module-default">

    <section class="motif__edu">
        <a href="<?php echo $education['download']['url'] ?>" target="_blank">
            <img src="<?php echo $education['img'] ?>" alt="">
        </a>
        <section class="pdfs">
            <?php if (!empty($education['items'])) { 
            foreach ($education['items'] as $pdf) { ?>
            <a href="<?php echo $pdf['file']['url']; ?>" target="_blank">
                <p> <?php echo $pdf['title']; ?></p>
            </a>
            <?php } } ?>
        </section>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>