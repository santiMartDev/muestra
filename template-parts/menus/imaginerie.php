<?php

/**
 * Legal Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav class="imagineries-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Imaginerie menu', 'imaneo' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'imagineries-menu',
		'container'      => '',
		'menu_class'     => 'imagineries-menu',
		'depth'          => 1,
	) ); ?>

</nav>
