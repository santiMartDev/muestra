<?php // Module Education 
?>

<?php if ($speaker) : ?>
<?php foreach ($speaker as $item) {

        // get education fields
        $speaker_info = get_field('speakers', $item->ID);
        $media = $speaker_info['media'];
        // config menus to education
        $sidebar_menus = array($sidebar_speaker_extra);

    ?>

<section class="ac speaker">

    <div class="ac-header">
        <button class="ac-trigger">
            <div class="speaker-content">
                <?php if(!empty(get_the_post_thumbnail( $item->ID, 'thumbnail' ))) :
                    echo get_the_post_thumbnail( $item->ID, 'thumbnail' );
                endif ?>
                <div>
                    <p><?php echo get_the_title($item->ID);  ?></p>
                    <p><?php echo $speaker_info['position']; ?></p>
                </div>
            </div>

        </button>
    </div>

    <div class="ac-panel">
        <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

        <?php require(TEMPLATEPATH . '/template-parts/modules/media.php'); ?>
    </div>

</section>

<?php } ?>
<?php endif; ?>