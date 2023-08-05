<?php

/**
 * Mobile Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
 **/

?>

<header>
    <figure>
        <a href="<?php bloginfo('url') ?>">
            <img src="<?php bloginfo('template_url') ?>/dist/assets/logos/logo-header.png" alt="">
        </a>
    </figure>
    <figure>
        <button id="menu-close">
            <img src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-menu-close.svg" alt="">
        </button>
    </figure>
</header>

<article class="navbar--mobile accordion-container">
    <section class=" nav--menu-mobile">
        <a href="<?php echo get_home_url(); ?>">
            <p class="btnSubmenuMobile"><?php _e("Projects", "imaneo"); ?></p>
        </a>
    </section>
    <article class="ac">
        <section class="ac-header">
            <button class="ac-trigger">
                <p class="btnSubmenuMobile" data-submenuMobile=".submenuMobile1">
                    <span><?php _e('Themes', 'imaneo'); ?></span>
                    <img class="cross1" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
                </p>
            </button>
        </section>
        <nav class="ac-panel nav--submenuMobile">
            <ul class="submenuMobile submenuMobile1">
                <li><a href="<?php echo get_the_permalink(24); ?>">Néo-mauresque au Maghreb</a></li>
                <li><a href="<?php echo get_the_permalink(158); ?>">Nationalisme & impérialisme</a></li>
                <li><a href="<?php echo get_the_permalink(199); ?>">Un style pour les synagogues</a></li>
                <li><a href="<?php echo get_the_permalink(198); ?>">Diffusion</a></li>
            </ul>
        </nav>
    </article>
    <article class="ac">
        <section class="ac-header nav--menu">
            <button class="ac-trigger">
                <p class="btnSubmenuMobile" data-submenuMobile=".submenuMobile2">
                    <span><?php _e('Crossed Imagineries', 'imaneo'); ?></span>
                    <img class="cross2" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
                </p>
            </button>
        </section>
        <nav class="ac-panel nav--submenuMobile">
            <ul class="submenuMobile submenuMobile2">
                <li><a href="<?php echo get_the_permalink(132); ?>">Regards artistiques</a></li>
                <li><a href="<?php echo get_the_permalink(140); ?>">Parole de gens</a></li>
                <li><a href="<?php echo get_the_permalink(142); ?>">Activité pédagogique</a></li>
            </ul>
        </nav>
    </article>
    <article class="ac">
        <section class="ac-header nav--menu">
            <button class="ac-trigger">
                <p class="btnSubmenuMobile" data-submenuMobile=".submenuMobile3">
                    <span><?php _e('Resources', 'imaneo'); ?></span>
                    <img class="cross3" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">
                </p>
            </button>
        </section>
        <nav class="ac-panel nav--submenuMobile">
            <ul class="submenuMobile submenuMobile3">
                <li><a href="<?php echo get_the_permalink(129); ?>">Acteurs de la construction</a></li>
                <li><a href="<?php echo get_the_permalink(130); ?>">Bibliographie</a></li>
                <li><a href="<?php echo get_the_permalink(131); ?>">Intervenants</a></li>
            </ul>
        </nav>
    </article>
</article>
<?php get_template_part('template-parts/menus/languages'); ?>