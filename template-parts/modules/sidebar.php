<?php // Module Sidebar ?>

<?php if(!empty($sidebar_menus)) : ?>
    <aside class="module-sidebar">
        <?php foreach ($sidebar_menus as $menu) { ?>
            <ul class="sidebar-menu">
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