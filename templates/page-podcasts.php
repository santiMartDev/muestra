<?php /* Template name: Podcasts */ ?>

<?php get_header(''); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

	// title
	$page_title = get_the_title();
	require( TEMPLATEPATH . '/template-parts/partials/page-header.php' );

	// Architect list
	require( TEMPLATEPATH . '/template-parts/partials/podcast/podcast-list.php' );

endwhile; endif; ?>

<?php get_footer(); ?>