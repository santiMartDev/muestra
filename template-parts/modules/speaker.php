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
                            <p><?php echo get_the_title($item->ID);  ?></p>
                            <p><?php echo $speaker_info['position']; ?></p>
                        </div>
                    </div>
                    <div class="">
                        <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>
                    </div>
                </button>
            </div>

            <div class="ac-panel project-panel">
                <section class="splide projectInfo__slider">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/icon-arrow-orange.svg" alt="" class="" />
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/icon-arrow-orange.svg" alt="" class="" />
                        </button>
                    </div>
                    <div class="splide__track">
                        <div class="splide__list lightgallery">
                            <?php if (!empty($speaker_info['videos'])) : ?>
                                <div class="items-videos">
                                    <?php foreach ($speaker_info['videos'] as $video) { ?>
                                        <div class="item-video">
                                            <?php echo $video['title']; ?>
                                            <?php echo $video['url']; ?>
                                            <img src="<?php echo $video['image']['sizes']['theme_full']; ?>" alt="">
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>

        </section>

    <?php } ?>
<?php endif; ?>