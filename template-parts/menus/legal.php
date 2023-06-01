<?php

/**
 * Legal Menu
 *
 * @package      witsound
 * @author       Rload
 * @since        1.0.0
**/

?>

<?php $theme_content = get_field('theme_content','options'); ?>

<nav class="legal-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Legal menu', 'witsound' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'legal-menu',
		'container'      => '',
		'menu_class'     => 'legal-menu',
		'depth'          => 1,
	) ); ?>

</nav>
