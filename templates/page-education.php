<?php /* Template name: Education */ ?>

<!-- Education page -->
<?php

$terms = get_the_terms( get_the_ID(), 'project_theme');

// loop terms taxonomy
if($terms) {
	foreach ($terms as $term) {

		// argumentos query - projects by term taxonomy
		$args = array(
			'post_type'       	=> 'theme',
			'posts_per_page'  	=> -1,
			'orderby' 			=> 'menu-order',
			'order'				=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'project_theme',
					'field' => 'slug',
					'terms' => $term->name
				),
			),
		);

		// get all projects by term taxonomy
		$themes = new WP_Query( $args );

		// loop projects by term taxonomy
		if ( $themes->have_posts() ) {
			echo '<ul>';
				while ( $themes->have_posts() ) {  $themes->the_post();
					echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
				} wp_reset_postdata();
			echo '</ul>';
		}

	}
}
?>

<?php get_header(''); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>