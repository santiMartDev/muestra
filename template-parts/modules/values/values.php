<div class="columns">

    <div class="col col-content">
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
        <?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-buttons.php'); ?>
    </div>

    <div class="col">
        <?php if($items) : ?>
            <!-- Slider main container -->
            <div class="swiper swiper-values">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <?php foreach ($items as $item) { ?>
                        <div class="swiper-slide">
                            <div class="card-value">
                                <p><?php echo $item['text'] ?></p>
                                <img src="<?php echo $item['img']['sizes']['slider_icons'] ?>" alt="">
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>

            </div>
        <?php endif; ?>
    </div>

</div>