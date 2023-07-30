<?php $template = get_field('template', 'options'); ?>

<!-- site footer -->
<footer class="footer">

    <section class="footer__menu footer__first">
        <p class="footer__title"><?php _e('Projects', 'imaneo'); ?></p>
        <?php get_template_part('template-parts/menus/projects'); ?>
    </section>
    <section class="footer__menu">
        <p class="footer__title"> <?php _e('Themes', 'imaneo'); ?></p>
        <?php get_template_part('template-parts/menus/themes'); ?>
    </section>
    <article>
        <section class="footer__menu footer__menu--half">
            <p class="footer__title"><?php _e('Resources', 'imaneo'); ?></p>
            <?php get_template_part('template-parts/menus/resources'); ?>
        </section>
        <section class="footer__menu footer__menu--half">
            <p class="footer__title"><?php _e('Crossed Imagineries', 'imaneo'); ?></p>
            <?php get_template_part('template-parts/menus/imaginerie'); ?>
        </section>
    </article>
    <section class="footer__menu">
        <p class="footer__title"><?php _e('Appendices', 'imaneo'); ?></p>
        <?php get_template_part('template-parts/menus/legal'); ?>
    </section>

    <?php /* _e('Partners', 'imaneo'); ?>
    <?php if ($template['partners']) : ?>
    <div class="footer-partners">
        <?php foreach ($template['partners'] as $img) { ?>
        <img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
        <?php } ?>
    </div>
    <?php endif */ ?>

</footer>