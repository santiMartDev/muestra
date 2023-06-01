<?php

/**
 * Main Menu
 *
 * @package      witsound
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav id="navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'witsound' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'main-menu',
		'container'      => '',
		'menu_class'     => 'site-menu',
		'depth'          => 2,
	) ); ?>
</nav>
