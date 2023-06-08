<?php /* Template name: Architects */ ?>

<?php get_header(''); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    echo '<h1>'.the_title().'</h1>';

    // argumentos query themes
    $args = array(
        'post_type'       	=> 'architect',
        'posts_per_page'  	=> -1,
        'orderby' 			=> 'menu-order',
        'order'				=> 'ASC'
    );

    // get all themes
    $architects = new WP_Query( $args );
    ?>

    <?php if ( $architects->have_posts() ) { ?>

        <div class="grid grid-themes">

            <?php while ( $architects->have_posts() ) {  $architects->the_post();

				// theme variables
				$architect_title 		= get_the_title();
				$architect_permalink 	= get_the_permalink();
				$architect_permalink 	= get_the_content();

				// get projects by architect
				$projects = get_posts(array(
					'post_type' => 'project',
					'meta_query' => array(
						array(
							'key' => 'projects_project_info_architects', // name of custom field
							'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
							'compare' => 'LIKE'
						)
					)
				));

				?>

				<div class="grid-item">

					<div>
						<h2><?php echo $architect_title ?></h2>
						<?php $architect_content; ?>
					</div>

					<div>
						<?php if( $projects ): ?>
							<ul>
								<?php foreach( $projects as $project ):

									$project_info = get_field('projects', $project);
									$project_icon = (!empty($project_info['project_info']['icon'])) ? '<img src="'.$project_info['project_info']['icon']['sizes']['theme_small'].'">' : '' ;
									$project_location = (!empty($project_info['project_info']['location'])) ? '<span>'.$project_info['project_info']['location'].'</span>' : '' ;
									?>
									<li>
										<?php echo $project_icon; ?>
										<?php echo get_the_title($project); ?>
										<?php echo $project_location; ?>
										<a href="<?php echo get_permalink($project) ?>"><?php _e('Leer más', 'imaneo'); ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>

                </div>

            <?php }  wp_reset_postdata();  ?>

        </div>

    <?php } ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>