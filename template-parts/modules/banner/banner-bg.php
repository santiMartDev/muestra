
<div class="module-banner-bg">

    <?php
    if( $media['video'] ):
        /* Banner bg video */
        include( TEMPLATEPATH . '/template-parts/modules/banner/banner-bg-video.php');
    elseif( $media['gallery'] ):
        /* Banner bg images */
        include( TEMPLATEPATH . '/template-parts/modules/banner/banner-bg-carousel.php');
    else:
        /* Banner bg image */
        include( TEMPLATEPATH . '/template-parts/modules/banner/banner-bg-image.php');
    endif;
    ?>

</div>