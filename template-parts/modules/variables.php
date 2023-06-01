<?php

// Get Variables Modules / COMUNES
$content = get_sub_field('content');
$media = get_sub_field('media');
$config = get_sub_field('config');
$items = get_sub_field('items');
$extras = get_sub_field('extras');
$buttons = get_sub_field('buttons');
$decoration = get_sub_field('decoration');

// CONFIG
///////////////////////////////////////////////////////

$id_module = (isset($config['slug'])) ? $config['slug'] : '';

$config_module = '';
$config_module .= (isset($config['theme'])) ? ' '.$config['theme'] : '';
$config_module .= (isset($config['bg_color'])) ? ' '.$config['bg_color'] : '';
$config_module .= (isset($config['width'])) ? ' '.$config['width'] : '';
$config_module .= (isset($config['margins']['margin-top'])) ? ' '.$config['margins']['margin-top'] : '';
$config_module .= (isset($config['margins']['margin-bottom'])) ? ' '.$config['margins']['margin-bottom'] : '';
$config_module .= (isset($config['type'])) ? ' '.$config['type'] : '';

$decoration_config = (isset($decoration['position'])) ? ' '.$decoration['position'] : '';

// Config - Display
if(isset($config['display'])){
    foreach ($config['display'] as $display) {
        $config_module .= ' '.$display;
    }
}


// EXTRAS [type, align, size, direction]
///////////////////////////////////////////////////////

$config_module .= (isset($extras['type'])) ? ' '.$extras['type'] : '';
$config_module .= (isset($extras['align'])) ? ' '.$extras['align'] : '';
$config_module .= (isset($extras['size'])) ? ' '.$extras['size'] : '';

// Extras - direction
if(isset($extras['direction'])){
    foreach ($extras['direction'] as $reverse) {
        $config_module .= ' '.$reverse;
    }
}

?>