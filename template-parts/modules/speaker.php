<?php // Module Education 
?>

<?php if ($speaker) : ?>
    <?php foreach ($speaker as $item) {

        // get education fields
        $speaker_info = get_field('speakers', $item->ID);

        // config menus to education
        $sidebar_menus = array($sidebar_speaker_extra);

    ?>

        <section class="ac speaker">

            <div class="ac-header">
                <button class="ac-trigger">
                    <div class="">
                        <img class="sector__arrow" src="<?php bloginfo('template_url'); ?>/src/assets/icons/icon-arrow-up.svg" alt="" class="">
                        <div>
                            <p class="h0"><?php echo get_the_title($item->ID);  ?></p>
                            <p class="h0"><?php echo $speaker_info['position']; ?></p>
                        </div>
                    </div>
                    <div class="">
                        <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>
                    </div>
                </button>
            </div>

        </section>

    <?php } ?>
<?php endif; ?>