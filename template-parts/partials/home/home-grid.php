<?php

// argumentos query
$args = array(
	'post_type'       	=> 'project',
	'posts_per_page'  	=> -1,
	'orderby' 			=> 'menu-order',
	'order'				=> 'ASC'
);

/* recogida de todos los PROJECTS*/
$portfolio = new WP_Query( $args );

?>

<?php if ( $portfolio->have_posts() ) { ?>

	<article class="grid grid-projects">

		<?php while ( $portfolio->have_posts() ) {  $portfolio->the_post();

            // variables
			$projects = get_field('projects');
			$location = (!empty($projects['project_info']['location'])) ? '<span>'.$projects['project_info']['location'].'</span>' : '' ;
            // featured image
			$thumb_id = get_post_thumbnail_id(get_the_ID());
			$thumb_url = wp_get_attachment_image_src($thumb_id,'theme_vertical', true);
			?>

			<?php  require( TEMPLATEPATH . '/template-parts/partials/cards/card.php' );  ?>

		<?php }  wp_reset_postdata();  ?>

	</article>

<?php } ?>