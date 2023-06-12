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
            <li class="btnSubmenu"><?php _e("Bâtiments", "imaneo"); ?></li>
            <li class="btnSubmenu" data-submenu=".submenu1"><span>Thèmes</span> <img class="cross1" src="dist/assets/icons/icon-nav.svg" alt=""></li>
            <li class="btnSubmenu" data-submenu=".submenu2"><span>Imaginaires croisés</span> <img class="cross2" src="dist/assets/icons/icon-nav.svg" alt=""></li>
            <li class="btnSubmenu" data-submenu=".submenu3"><span>Ressources</span> <img class="cross3" src="dist/assets/icons/icon-nav.svg" alt=""></li>
        </ul>
    </nav>

    <nav class="nav--submenu" role="navigation">
        <ul class="submenu submenu1">
            <li><a href="<?php echo get_the_permalink(24); ?>">Néo-mauresque au Maghreb</a></li>
            <li><a href="">Nationalisme & impérialisme</a></li>
            <li><a href="">Un style pour les synagogues</a></li>
            <li><a href="">Diffusion</a></li>
        </ul>
        <ul class="submenu submenu2">
            <li><a href="">Regards artistiques</a></li>
            <li><a href="">Parole de gens</a></li>
            <li><a href="">Activité pédagogique</a></li>
        </ul>
        <ul class="submenu submenu3">
            <li><a href="">Acteurs de la construction</a></li>
            <li><a href="">Bibliographie</a></li>
            <li><a href="">Intervenants</a></li>
        </ul>
    </nav>
</section>
