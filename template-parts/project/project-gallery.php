<?php // Project Gallery ?>

<?php
// assign gallery to media
$media = $project['gallery'];
?>

<article class="project-gallery">
    <?php require( TEMPLATEPATH . '/template-parts/modules/gallery.php' ); ?>
</article>