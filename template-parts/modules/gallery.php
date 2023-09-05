<div class="contemporary-wrap">

    <article class="gallery splide">
        <div class="splide__arrows splide__arrows--ltr">
            <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                aria-controls="splide01-track">
                <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-arrow-prev.svg" alt="">
            </button>
            <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                aria-controls="splide01-track">
                <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-arrow-next.svg" alt="">
            </button>
        </div>
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($media as $img) { ?>
                <a class="splide__slide" href="<?php echo $img['sizes']['theme_full']; ?>"
                    data-sub-html="<?php echo $img['title']; ?>">
                    <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
                    <div>
                        <p class="slide-title"><?php echo $img['title']; ?></p>
                        <p class="slide-caption"><?php echo $img['caption']; ?></p>
                        <p class="slide-description"><?php echo $img['description']; ?></p>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </article>
    <article class="splide thumbs">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($media as $img) { ?>
                <div class="splide__slide">
                    <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </article>

</div>