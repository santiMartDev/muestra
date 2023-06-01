<?php

/**
 * Social Menu
 *
 * @package      witsound
 * @author       Rload
 * @since        1.0.0
**/

$menu_name = 'social-menu';
?>

<?php if ( has_nav_menu( $menu_name ) ) : ?>

	<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social menu', 'asg' ); ?>">
		<ul id="menu-<?php echo $menu_name; ?>" class="<?php echo $menu_name; ?>-menu">

			<?php
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :

				$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
				$menu_items = wp_get_nav_menu_items( $menu->term_id );

				foreach ( (array) $menu_items as $key => $menu_item ) :

					$id         = $menu_item->ID;
					$title      = $menu_item->title;
					$class      = $menu_item->classes;
					$url        = $menu_item->url;
					$attr_title = $menu_item->attr_title ? ' title="' . $menu_item->attr_title . '"' : '';


					echo '<li class="menu-item menu-item-' . $id . ' '.$class[0].'">';
						echo '<a' . $link_class . ' href="' . $url . '"' . $attr_title . ' target="_blank">';
							if ( 'blog' == strtolower( $title ) ) :
								echo $title;
							else :
								echo theme_get_svg_icon( array( 'icon' => strtolower( $title ), 'class' => strtolower( $title ) ) );
								echo '<span class="screen-reader-text" aria-hidden="true">' . $title . '</span>';
							endif;
						echo '</a>';
					echo '</li>';

				endforeach;
			endif;
			?>

		</ul>
	</nav>

<?php endif; ?>