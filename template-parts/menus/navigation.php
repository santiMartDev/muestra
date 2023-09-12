<?php

/**
 * Main Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
 **/

?>

<section class="navbar">
    <nav class="nav--menu" role="navigation">
        <ul>
            <a href="<?php echo get_home_url(); ?>" class="btnSubmenu"><?php _e("Projects", "imaneo"); ?></a>
            <li class="btnSubmenu" data-submenu=".submenu1">
                <span><?php _e('Themes', 'imaneo'); ?></span>
                <img class="cross cross1" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
            </li>
            <li class="btnSubmenu" data-submenu=".submenu2">
                <span><?php _e('Crossed Imagineries', 'imaneo'); ?></span>
                <img class="cross cross2" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
            </li>
            <li class="btnSubmenu" data-submenu=".submenu3">
                <span><?php _e('Resources', 'imaneo'); ?></span>
                <img class="cross cross3" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
            </li>
        </ul>
    </nav>

    <nav class="nav--submenu" role="navigation">

        <?php $themes_menu = wp_get_nav_menu_items('Themes menu'); ?>
        <ul class="submenu submenu1">
            <?php foreach ($themes_menu as $item) {
                $link = $item->url;
                $title = $item->title;
            ?>
            <li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
            <?php } ?>
        </ul>

        <?php $imaginerie_menu = wp_get_nav_menu_items('Imaginerie menu'); ?>
        <ul class="submenu submenu2">
            <?php foreach ($imaginerie_menu as $item) {
                $link = $item->url;
                $title = $item->title;
            ?>
            <li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
            <?php } ?>
        </ul>

        <?php $resources_menu = wp_get_nav_menu_items('Resources menu'); ?>
        <ul class="submenu submenu3">
            <?php foreach ($resources_menu as $item) {
                $link = $item->url;
                $title = $item->title;
            ?>
            <li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
            <?php } ?>
        </ul>

    </nav>
</section>