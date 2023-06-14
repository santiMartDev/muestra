<?php /* Template name: Home */ ?>

<?php get_header(''); ?>

<?php

// title
$page_title = __('IMANEO', 'imaneo');
$page_description = __('CROSSED IMAGINATIONS OF NEO-MOORISH ARCHITECTURE', 'imaneo');
require( TEMPLATEPATH . '/template-parts/partials/page-header.php' );

// Home grid
require( TEMPLATEPATH . '/template-parts/partials/home/home-grid.php' );

// Home about
require( TEMPLATEPATH . '/template-parts/partials/home/home-about.php' );

?>

<?php get_footer(); ?>