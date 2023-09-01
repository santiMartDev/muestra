<?php // Module Map 

$id = get_the_ID();
$thumb_id = get_post_thumbnail_id(get_the_ID());
$thumb_url = wp_get_attachment_image_src($thumb_id, 'theme_vertical', true);
$location = $project_location;

?>

<section id="mapID" data-marker="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-map-dot.svg"
    data-highlight="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-map-dot-green.svg"
    data-id="<?php echo $id; ?>"></section>

<section class="map__layer">
    <?php require(TEMPLATEPATH . '/template-parts/partials/cards/card.php');  ?>
</section>