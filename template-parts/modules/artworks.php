<?php // Module Artist 
?>

<?php

// artist variables
$credits = (!empty($artist['credits'])) ? $artist['credits'] : '';
$media = (!empty($artist['media'])) ? $artist['media'] : '';
$content = (!empty($artist['content'])) ? $artist['content'] : '';
$extra = (!empty($artist['extra'])) ? $artist['extra'] : '';

?>

<article class="artwoks">
    <?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>
</article>

<?php if($extra['iframe']) { ?>
<article class="module-iframes">
    <?php foreach($extra['iframe'] as $iframe) { ?>
    <iframe src="<?php echo $iframe['url']; ?>" frameborder="0"></iframe>
    <?php } ?>
</article>
<?php } ?>

<section class="module-default">

    <section>
        <?php echo $content; ?>
        <?php require(TEMPLATEPATH . '/template-parts/modules/credits.php'); ?>
    </section>

    <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

</section>