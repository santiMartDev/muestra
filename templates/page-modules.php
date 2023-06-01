<?php /* Template name: Modules */ ?>

<?php get_header('');

// Number
$n = 1;

// Loop Modules
if(have_rows('modules')):
    while (have_rows('modules')): the_row();

        /* Get Module Variables */
        require( TEMPLATEPATH . '/template-parts/modules/variables.php' ); ?>

        <div id="<?php echo $id_module; ?>" class="module <?php echo get_row_layout(); ?> module-<?php echo $n; ?> ">

            <?php if($config['section']): ?>
                <div class="module-section"><?php echo $config['section']; ?></div>
            <?php endif; ?>

            <?php
            /* Module decoration */
            if(isset($decoration['image'])):  ?>
                <img src="<?php echo $decoration['image']['sizes']['theme_full'] ?>" alt="" class="module-decoration <?php echo $decoration_config; ?>">
            <?php endif; ?>

            <div class="module-wrapper <?php echo $config_module; ?>">
                <div class="module-inside">
                    <?php /* Get Modules */ require( TEMPLATEPATH . '/template-parts/modules/modules.php' );  ?>
                </div>
            </div>

        </div>

    <?php
    $n++;
    endwhile;
endif; ?>

<?php get_footer(); ?>