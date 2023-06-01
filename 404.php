<?php get_header(''); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h4><?php _e('ERROR 404', 'wch') ?></h4>
        <p><?php _e('uups, no hay nada que coincida con tu búsqueda', 'wch') ?></p>
<?php endwhile; endif; ?>

<?php get_footer(); ?>