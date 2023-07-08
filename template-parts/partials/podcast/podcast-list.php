<?php

// argumentos query architects
$args = array(
    'post_type'           => 'project',
    'posts_per_page'      => -1,
    'orderby'             => 'menu-order',
    'order'                => 'ASC'
);

// get all architects
$projects = new WP_Query($args);

?>

<?php if ($projects->have_posts()) { ?>

<div class="podcast-list">

    <?php while ($projects->have_posts()) {
            $projects->the_post();

            $project = get_field('projects');


            // assign artist field to module artist
            $podcast = $project['podcast'];
            $info = $project['project_info'];

            $sidebar = array(
                array('title' => __('Related Project', 'imaneo'), 'link' => '', 'blank' => false),
                array('title' => get_the_title(), 'link' => array('url' => get_the_permalink()), 'blank' => false),
            );

            $sidebar_menus = array($sidebar);
            $podcasts = (!empty($podcast['podcast'])) ? $podcast['podcast'] : '';

            if ($podcasts) : ?>

    <div class="podcast-item">

        <div class="lists-title">
            <img src="<?php echo $info['icon']['url']; ?>" alt="">
            <p><?php echo get_the_title(); ?></p>
        </div>
        <?php require(TEMPLATEPATH . '/template-parts/modules/podcast.php'); ?>

    </div>

    <?php endif; ?>

    <?php }
        wp_reset_postdata();  ?>

</div>

<?php } ?>