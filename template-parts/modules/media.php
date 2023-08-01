<?php // Video Gallery 
?>

<?php if (!empty($media['video_single']['number'])) : ?>

<article class="video">
    <a data-src="//vimeo.com/<?php echo $media['video_single']['number']; ?>"
        data-poster="<?php echo $media['video_single']['image']['url']; ?>" ?>">
        <img src="<?php echo $media['video_single']['image']['url']; ?>" alt="">
        <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-play-video.svg" alt="">
    </a>
</article>


<?php elseif (!empty($media['video_gallery'])) : ?>

<article class="module-video-gallery">
    <article class="module-wrapper">

        <section class="videos splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php foreach ($media['video_gallery'] as $video) { ?>
                    <li class="splide__slide" data-splide-vimeo="<?php echo $video['link']; ?>">
                        <img src="<?php echo $video['img']; ?>">
                    </li>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="covers splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php foreach ($media['video_gallery'] as $video) { ?>
                    <div class="splide__slide">
                        <img src="<?php echo $video['img']; ?>" alt="">
                        <p><?php echo $video['title']; ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

    </article>
</article>

<?php // Gallery 
    ?>

<?php elseif (!empty($media['gallery'])) : ?>

<div class="gallery-wrap">

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
                <?php foreach ($media['gallery'] as $img) { ?>
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
                <?php foreach ($media['gallery'] as $img) { ?>
                <div class="splide__slide">
                    <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </article>

</div>

<?php endif; ?>