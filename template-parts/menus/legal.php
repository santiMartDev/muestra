<?php

/**
 * Legal Menu
 *
 * @package      imaneo
 * @author       Rload
 * @since        1.0.0
**/

?>

<nav class="legal-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Legal menu', 'imaneo' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'legal-menu',
		'container'      => '',
		'menu_class'     => 'legal-menu',
		'depth'          => 1,
	) ); ?>

</nav>
