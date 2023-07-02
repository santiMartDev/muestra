<?php

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

    <article class="themes-list">

        <?php while ( $themes->have_posts() ) {  $themes->the_post();

            // theme contenrs
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
                        $project_icon .= (!empty($project['project_info']['icon'])) ? '<img src="'.$project['project_info']['icon']['sizes']['theme_full'].'">' : '' ;
                    } wp_reset_postdata();
                }

            } ?>

            <article class="theme-item">
                <section>
                    <p><?php echo $theme_title ?></p>
                    <picture class="theme-icons">
                        <?php echo $project_icon; ?>
                    </picture>
                </section>
                <a href="<?php echo $theme_permalink; ?>"><?php _e('Read more', 'imaneo'); ?></a>
            </article>

        <?php }  wp_reset_postdata();  ?>

    </article>

<?php } ?>