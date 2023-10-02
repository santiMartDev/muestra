<?php // Module Sidebar ?>

<?php if(!empty($sidebar_menus)) : ?>
<aside class="module-history-sidebar module-sidebar">

    <?php foreach ($sidebar_menus as $menu) { ?>
    <ul class="sidebar-menu">

        <li>

            <h4><?php _e('Architects and artists','imaneo'); ?></h4>

            <?php if(!empty($project_info['architects'])) { ?>
            <nav role="navigation">
                <ul class="submenu-architects">
                    <?php foreach ($project_info['architects'] as $architect) { ?>
                    <li><a target="_blank"
                            href="<?php echo get_the_permalink($architect); ?>"><?php echo get_the_title($architect); ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <?php } ?>

        </li>

        <?php foreach ($menu as $link) { 
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