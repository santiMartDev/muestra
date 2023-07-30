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
            <li class="btnSubmenu" data-submenu=".submenu1"><span><?php _e('Themes', 'imaneo'); ?></span> <img
                    class="cross1" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt=""></li>
            <li class="btnSubmenu" data-submenu=".submenu2"><span><?php _e('Crossed Imagineries', 'imaneo'); ?></span>
                <img class="cross2" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
            </li>
            <li class="btnSubmenu" data-submenu=".submenu3"><span><?php _e('Resources', 'imaneo'); ?></span> <img
                    class="cross3" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt=""></li>
        </ul>
    </nav>

    <nav class="nav--submenu" role="navigation">

        <ul class="submenu submenu1">
            <li><a href="<?php echo get_the_permalink(24); ?>"><?php _e('Néo-mauresque au Maghreb','imaneo'); ?></a>
            </li>
            <li><a href="<?php echo get_the_permalink(158); ?>"><?php _e('Nationalisme & impérialisme','imaneo'); ?></a>
            </li>
            <li><a
                    href="<?php echo get_the_permalink(199); ?>"><?php _e('Un style pour les synagogues','imaneo'); ?></a>
            </li>
            <li><a href="<?php echo get_the_permalink(198); ?>"><?php _e('Diffusion','imaneo'); ?></a></li>
            <li><a href="<?php echo get_the_permalink(198); ?>"><?php _e('Sources','imaneo'); ?></a></li>
        </ul>

        <ul class="submenu submenu2">
            <li><a href="<?php echo get_the_permalink(132); ?>"><?php _e('Artistic looks','imaneo'); ?></a></li>
            <li><a href="<?php echo get_the_permalink(140); ?>"><?php _e('People’s words','imaneo'); ?></a></li>
            <li><a href="<?php echo get_the_permalink(142); ?>"><?php _e('Educational activities','imaneo'); ?></a></li>
        </ul>

        <ul class="submenu submenu3">
            <li><a href="<?php echo get_the_permalink(129); ?>"><?php _e('Construction actors','imaneo'); ?></a></li>
            <li><a href="<?php echo get_the_permalink(130); ?>"><?php _e('Bibliography','imaneo'); ?></a></li>
            <li><a href="<?php echo get_the_permalink(131); ?>"><?php _e('Specialists','imaneo'); ?></a></li>
        </ul>

    </nav>
</section>