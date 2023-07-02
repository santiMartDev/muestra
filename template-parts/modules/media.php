<?php if (!empty($media['video'])) : ?>

    <article class="video">
        <iframe width="1280" height="720" src="<?php echo $media['video']; ?>" allowfullscreen></iframe>
    </article>

<?php elseif (!empty($media['gallery'])) : ?>

    <article class="gallery splide">
        <div class="splide__arrows splide__arrows--ltr">
            <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide01-track">
                <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-arrow-prev.svg" alt="">
            </button>
            <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide01-track">
                <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-arrow-next.svg" alt="">
            </button>
        </div>
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($media['gallery'] as $img) { ?>
                    <div class="splide__slide">
                        <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </article>
    <article class="splide thumbs">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($media['gallery'] as $img) { ?>
                    <div class="splide__slide">
                        <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </article>

<?php endif; ?>