<?php // Module Map 

$id = get_the_ID();
?>

<section 
    id="mapID" 
    data-marker="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-map-dot.svg" 
    data-highlight="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-map-dot-green.svg"
    data-id="<?php echo $id; ?>"
    ></section>
    
<section class="map__layer"></section>