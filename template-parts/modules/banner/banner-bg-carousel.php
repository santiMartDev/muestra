<!-- Slider main container -->

<div class="swiper swiper-banner module-banner-carousel">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php foreach ($media['gallery'] as $img) { ?>
            <!-- Slides -->
            <div class="swiper-slide parallax-bg">
                <div class="module-banner-bg-wrap">
                    <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="<?php echo $img['alt'] ?>" />
                </div>
            </div>
        <?php } ?>
    </div>

</div>