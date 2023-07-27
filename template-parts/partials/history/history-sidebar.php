<?php // Module Sidebar ?>
hello
<?php if(!empty($sidebar_menus)) :  // var_dump($sidebar_menus); ?>
    <aside class="module-sidebar">

        <?php foreach ($sidebar_menus as $menu) { // var_dump($menu); ?>
            <ul class="sidebar-menu">

                <li class="btnSubmenu" data-submenu=".submenu-architects">

                    <span><?php _e('All Construction actors','imaneo'); ?></span>
                    <img class="cross1" src="<?php bloginfo('template_url') ?>/dist/assets/icons/icon-nav.svg" alt="">

                    <?php if(!empty($project_info['architects'])) { ?>
                        <nav class="nav--submenu" role="navigation">
                            <ul class="submenu submenu-architects">
                                <?php foreach ($project_info['architects'] as $architect) { ?>
                                    <li><a target="_blank" href="<?php echo get_the_permalink($architect); ?>"><?php echo get_the_title($architect); ?></a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    <?php } ?>   

                </li>

                <?php foreach ($menu as $link) { // var_dump($link);
                    $target = (!empty($link['blank'])) ? 'target="_blank"' : '';
                    $href = (!empty($link['link'])) ? 'href="'.$link['link']['url'].'"' : '';
                    $tag = (!empty($link['link'])) ? 'a' : 'h4';
                    $title = (!empty($link['title'])) ? $link['title']: '';
                    ?>
                    <li>
                        <<?php echo $tag; ?> <?php echo $target; ?> <?php echo $href; ?>>
                            <?php echo $title; ?>
                        </<?php echo $tag; ?>>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>                

    </aside>
<?php endif; ?>