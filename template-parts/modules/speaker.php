<?php // Module Education ?>

<?php if($speaker): ?>
    <?php foreach ($speaker as $item) {

        // get education fields
        $speaker_info = get_field('speakers', $item->ID );

        // config menus to education
        $sidebar_menus = array( $sidebar_speaker_extra );

        ?>

        <section>

            <?php if(!empty($speaker_info['videos'])): ?>
                <div class="items-videos"></div>
                    <?php foreach ($speaker_info['videos'] as $video) { ?>
                        <div class="item-video">
                            <?php echo $video['title']; ?>
                            <?php echo $video['url']; ?>
                            <img src="<?php echo $video['image']['sizes']['theme_full']; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            <?php endif; ?>

            <?php if(!empty($speaker_info['podcasts'])): ?>
                <div class="items-podcasts"></div>
                    <?php foreach ($speaker_info['podcasts'] as $podcast) { ?>
                        <div class="item-podcast">
                            <?php echo $podcast['url']; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php endif; ?>

            <!-- Education content -->
            <div>
                <h2><?php echo get_the_title($item->ID);  ?></h2>
                <h4><?php echo $speaker_info['position']; ?></h4>
            </div>

            <?php require( TEMPLATEPATH . '/template-parts/modules/sidebar.php' ); ?>

        </section>

    <?php } ?>
<?php endif; ?>