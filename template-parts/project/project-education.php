<!-- Education Project -->

<?php $education = $projects['education']; ?>

<?php if($education): ?>

    <?php foreach ($education as $item) {

        // echo $item->ID;
        // $content = apply_filters( 'the_content', $item->post_content );

        $education_info = get_field('education', $item->ID );

        $terms = get_the_terms( get_the_ID(), 'project_theme');

        ?>

        <section>

            <!-- Education content -->
            <div>
                <h2><?php echo get_the_title($item->ID);  ?></h2>
                <?php echo $item->post_content;  ?>
            </div>

            <!-- Education sidebar -->
            <div>

                <?php if(!empty($education_info['download'])): ?>
                    <ul>
                        <li><a href="<?php echo $education_info['download']['url']; ?>" target="_blank"><?php _e('Download', 'imaneo') ?></a></li>
                    </ul>
                <?php endif; ?>

                <!-- Single -->
                <ul>
                    <li><a href="<?php echo get_the_permalink(10) ?>"><?php _e('All educational activities', 'imaneo') ?></a></li>
                </ul>

                <!-- Education page -->
                <?php

                // loop terms taxonomy
                if($terms) {
                    foreach ($terms as $term) {

                        // argumentos query - projects by term taxonomy
                        $args = array(
                            'post_type'       	=> 'theme',
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
					    $themes = new WP_Query( $args );

                        // loop projects by term taxonomy
                        if ( $themes->have_posts() ) {
                            echo '<ul>';
                                while ( $themes->have_posts() ) {  $themes->the_post();
                                    echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
                                } wp_reset_postdata();
                            echo '</ul>';
                        }

                    }
                }
                ?>



            </div>

        </section>

    <?php } ?>

<?php endif; ?>