<?php /* Template name: Themes */ ?>

<?php get_header(''); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    echo '<h1>'.the_title().'</h1>';

    // argumentos query themes
    $args = array(
        'post_type'       	=> 'theme',
        'posts_per_page'  	=> -1,
        'orderby' 			=> 'menu-order',
        'order'				=> 'ASC'
    );

    // get all themes
    $themes = new WP_Query( $args );
    ?>

    <?php if ( $themes->have_posts() ) { ?>

        <div class="grid grid-themes">

            <?php while ( $themes->have_posts() ) {  $themes->the_post();

				// theme variables
				$theme_title 		= get_the_title();
				$theme_permalink 	= get_the_permalink();

				// get terms taxonomy of this theme
				$terms = get_the_terms( get_the_ID(), 'project_theme');

				// loop terms taxonomy
				foreach ($terms as $term) {

					// argumentos query - projects by term taxonomy
					$args = array(
						'post_type'       	=> 'project',
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
					$projects = new WP_Query( $args );

					// loop projects by term taxonomy
					if ( $projects->have_posts() ) {
						while ( $projects->have_posts() ) {  $projects->the_post();
							$project = get_field('projects');
							$project_icon .= (!empty($project['project_info']['icon'])) ? '<img src="'.$project['project_info']['icon']['sizes']['theme_small'].'">' : '' ;
						} wp_reset_postdata();
					}

				} ?>

                <div class="grid-item">
					<div>
						<h2><?php echo $theme_title ?></h2>
						<div class="grid-icons">
							<?php echo $project_icon; ?>
						</div>
						<a href="<?php echo $theme_permalink; ?>"><?php _e('Leer más', 'imaneo'); ?></a>
					</div>
                </div>

            <?php }  wp_reset_postdata();  ?>

        </div>

    <?php } ?>



<?php endwhile; endif; ?>

<?php get_footer(); ?>