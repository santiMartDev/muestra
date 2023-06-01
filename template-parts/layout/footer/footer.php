<?php

$theme_content = get_field('theme_content','options');
$copyright = (isset($theme_content['copyright'])) ? $theme_content['copyright'] : '';

?>

<!-- site footer -->
<footer class="site-footer">

	<div class="footer-top">
		<img src="<?php bloginfo('template_url') ?>/src/assets/logos/logo-brand-footer.svg" alt="" class="footer-brand">
		<?php get_template_part( 'template-parts/menus/legal' ); ?>
		<img src="<?php bloginfo('template_url') ?>/src/assets/logos/logo-tpn.png" alt="" class="footer-brand">
	</div>

	<div class="footer-bottom">
		<p class="footer-copyright"><?php echo $copyright; ?></p>
	</div>

</footer>