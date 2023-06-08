<?php $template = get_field('template','options'); ?>

<!-- site footer -->
<footer class="site-footer">

	<?php _e('Projects', 'imaneo'); ?>
	<?php get_template_part( 'template-parts/menus/projects' ); ?>

	<?php _e('Themes', 'imaneo'); ?>
	<?php get_template_part( 'template-parts/menus/themes' ); ?>

	<?php _e('Resources', 'imaneo'); ?>
	<?php get_template_part( 'template-parts/menus/resources' ); ?>

	<?php _e('Crossed Imagineries', 'imaneo'); ?>
	<?php get_template_part( 'template-parts/menus/imaginerie' ); ?>

	<?php _e('Partners', 'imaneo'); ?>
	<?php if($template['partners']): ?>
		<div class="footer-partners">
			<?php foreach ($template['partners'] as $img) { ?>
				<img src="<?php echo $img['sizes']['theme_full']; ?>" alt="">
			<?php } ?>
		</div>
	<?php endif ?>

	<?php _e('Appendices', 'imaneo'); ?>
	<?php get_template_part( 'template-parts/menus/legal' ); ?>

</footer>