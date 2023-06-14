<?php

// argumentos query architects
$args = array(
    'post_type'       	=> 'architect',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC'
);

// get all architects
$architects = new WP_Query( $args );

?>

<?php if ( $architects->have_posts() ) { ?>

    <div class="grid grid-architects">

        <?php while ( $architects->have_posts() ) {  $architects->the_post();

            ?>

            <div class="grid-item">

                <div>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content() ?>
                </div>

                <div>
                    <?php if( $projects ): ?>
                        <ul>
                            <?php foreach( $projects as $project ):
                                // project info
                                $project_info = get_field('projects', $project);
                                $project_icon = (!empty($project_info['project_info']['icon'])) ? '<img src="'.$project_info['project_info']['icon']['sizes']['theme_small'].'">' : '' ;
                                $project_location = (!empty($project_info['project_info']['location'])) ? '<span>'.$project_info['project_info']['location'].'</span>' : '' ;
                                ?>
                                <li>
                                    <?php echo $project_icon; ?>
                                    <?php echo get_the_title($project); ?>
                                    <?php echo $project_location; ?>
                                    <a href="<?php echo get_permalink($project) ?>"><?php _e('Read more', 'imaneo'); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>

        <?php }  wp_reset_postdata();  ?>

    </div>

<?php } ?>