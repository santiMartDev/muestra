<?php // Module Sidebar ?>

<?php if(!empty($sidebar_menus)) : ?>
    <div class="module-sidebar">
        <?php foreach ($sidebar_menus as $menu) { ?>
            <ul class="sidebar-menu">
                <?php foreach ($menu as $link) { 
                    $link['target'] = ($link['blank']) ? 'target="_blank"' : ''; ?>
                    <li><a <?php echo $link['target']; ?>  href="<?php echo $link['link']['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
<?php endif; ?>