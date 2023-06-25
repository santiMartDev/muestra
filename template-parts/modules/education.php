<?php // Module Education 
?>

<?php if ($education) : ?>
    <?php foreach ($education as $item) {

        // get education fields
        $education_info = get_field('education', $item->ID);

        // common sidebar to education
        $sidebar_education = array(array('title' => __('Download', 'imaneo'), 'link' => array('url' => $education_info['download']['url']), 'blank' => true));

        // config menus to education
        $sidebar_menus = array($sidebar_education, $sidebar_education_extra);

    ?>
        <p class="title__edu"><?php echo get_the_title($item->ID);  ?></p>
        <section class="module-default">

            <!-- Education content -->
            <section>
                <?php echo $item->post_content;  ?>
            </section>

            <?php require(TEMPLATEPATH . '/template-parts/modules/sidebar.php'); ?>

        </section>


    <?php } ?>
<?php endif; ?>