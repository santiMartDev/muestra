<?php /* Template name: Bibliography */ ?>

<?php get_header(''); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();

		// title
		$page_title = get_the_title();
		require(TEMPLATEPATH . '/template-parts/partials/page-header.php');

		// get_fields and content
		$bibliography = get_field('bibliography');
		$content = (!empty($bibliography['content'])) ? $bibliography['content'] : '';

		// sidebar
		if (!empty($bibliography['sidebar'])) {
			$sidebar_menus = array($bibliography['sidebar']);
		}
?>

		<article class="module-default">
			<section>
				<?php echo $content ?>
			</section>

			<?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>
		</article>

<?php

	endwhile;
endif; ?>

<?php get_footer(); ?>