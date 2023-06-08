<?php

/**
 * Legal Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav class="themes-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Themes menu', 'imaneo' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'themes-menu',
		'container'      => '',
		'menu_class'     => 'themes-menu',
		'depth'          => 1,
	) ); ?>

</nav>
