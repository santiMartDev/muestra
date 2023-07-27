<?php // Project Gallery ?>

<?php
// assign gallery to media
$media['gallery'] = $project['gallery'];
?>

<article class="project-gallery">
    <?php require( TEMPLATEPATH . '/template-parts/modules/media.php' ); ?>
</article>