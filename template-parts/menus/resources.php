<?php

/**
 * Legal Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav class="resources-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Resources menu', 'imaneo' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'resources-menu',
		'container'      => '',
		'menu_class'     => 'resources-menu',
		'depth'          => 1,
	) ); ?>

</nav>
