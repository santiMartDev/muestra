<?php

/**
 * Legal Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav class="projects-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Projects menu', 'imaneo' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'projects-menu',
		'container'      => '',
		'menu_class'     => 'projects-menu',
		'depth'          => 1,
	) ); ?>

</nav>
