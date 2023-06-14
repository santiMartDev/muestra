<?php /* Template name: Themes */ ?>

<?php get_header(''); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

	// title
	$page_title = get_the_title();
	require( TEMPLATEPATH . '/template-parts/partials/page-header.php' );

	// Themes list
	require( TEMPLATEPATH . '/template-parts/partials/themes/themes-list.php' );

endwhile; endif; ?>

<?php get_footer(); ?>