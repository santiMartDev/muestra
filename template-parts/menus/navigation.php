<?php

/**
 * Main Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav id="navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'imaneo' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'main-menu',
		'container'      => '',
		'menu_class'     => 'site-menu',
		'depth'          => 2,
	) ); ?>
</nav>
