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
            $args = array(
                'post_type' => 'project',
                'meta_query' => array(
                    array(
                        'key' => 'projects_project_info_architects', // name of custom field
                        'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                        'compare' => 'LIKE'
                    )
                )
            );

            // get all projects by term taxonomy
            $projects = new WP_Query( $args );

            var_dump($projects)

            // var_dump($projects);

            ?>

            <article class="profile">

                <section>
                    <p><?php the_title(); ?></p>
                    <?php the_content() ?>
                </section>

                <figure>

                    <?php  if ( $projects->have_posts() ) { ?>
                        <ul>
                            <?php while ( $projects->have_posts() ) {  $projects->the_post();
                                // project info
                                $project_info = get_field('projects');
                                $project_icon = (!empty($project_info['project_info']['icon'])) ? '<img src="'.$project_info['project_info']['icon']['sizes']['theme_full'].'">' : '' ;
                                $project_location = (!empty($project_info['project_info']['location'])) ? '<span>'.$project_info['project_info']['location'].'</span>' : '' ;
                                ?>
                                <li>
                                    <picture>
                                        <?php echo $project_icon; ?>
                                    </picture>
                                    <p><?php echo get_the_title(); ?></p>
                                    <?php echo $project_location; ?>
                                    <a href="<?php echo get_permalink() ?>"><?php _e('Read more', 'imaneo'); ?></a>
                                </li>
                            <?php } wp_reset_postdata(); ?>
                        </ul>
                    <?php } ?>
                </figure>

            </article>

        <?php }  wp_reset_postdata();  ?>

    </article>

<?php } ?>