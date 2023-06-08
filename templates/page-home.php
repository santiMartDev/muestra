<?php /* Template name: Home */ ?>

<?php get_header(''); ?>

<?php
////////////////////////////////////////////////////////////////
// Home Grid
////////////////////////////////////////////////////////////////
?>

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

	<div class="grid grid-projects">

		<?php while ( $portfolio->have_posts() ) {  $portfolio->the_post();

			$projects = get_field('projects');
			$location = (!empty($projects['project_info']['location'])) ? '<span>'.$projects['project_info']['location'].'</span>' : '' ;

			$thumb_id = get_post_thumbnail_id(get_the_ID());
			$thumb_url = wp_get_attachment_image_src($thumb_id,'theme_vertical', true);
			?>

			<div class="grid-item">
				<img src="<?php echo $thumb_url[0]; ?>" alt="" >
				<h2><?php the_title(); ?></h2>
				<?php echo $location; ?>
			</div>

		<?php }  wp_reset_postdata();  ?>

	</div>

<?php } ?>


<?php

////////////////////////////////////////////////////////////////
// Home About
////////////////////////////////////////////////////////////////

$template = get_field('template','options');
$about = $template['about'];

$about_title = (!empty($about['title'])) ? '<h2>'.$about['title'].'</h2>' : '';
$about_content = (!empty($about['content'])) ? $about['content'] : '';
$about_image = (!empty($about['image'])) ? '<img src="'.$about['image']['sizes']['theme_full'].'" alt="" >' : '';

if(!empty($about['buttons'])):
	foreach ($about['buttons'] as $button) {
		$button_echo .= '<a href="'.$button['link'].'" class="btn btn-link">'.$button['title'].'</a>';
	}
endif;
?>

<div class="home-about">
	<?php echo $about_title; ?>
	<?php echo $about_content; ?>
	<?php echo $about_image; ?>
	<?php echo $button_echo; ?>
</div>

<?php get_footer(); ?>