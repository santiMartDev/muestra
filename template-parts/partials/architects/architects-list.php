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

    <article class="module-architects">

        <?php while ( $architects->have_posts() ) {  $architects->the_post();

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

            <article class="profile">

                <section>
                    <p><?php the_title(); ?></p>
                    <?php the_content() ?>
                </section>

                <figure>
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
                </figure>

            </article>

        <?php }  wp_reset_postdata();  ?>

    </article>

<?php } ?>