<!-- Project tabs -->

<ul class="tabs">

    <?php // Tab Link Gallery  ?>
    <?php if (!empty($project['gallery'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_gallery); ?>"><?php echo $tab_text_gallery; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link History  ?>
    <?php if (!empty($project['history'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_history); ?>"><?php echo $tab_text_history; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Map  ?>
    <li><a class="tab" href="#<?php echo slugify($tab_text_map); ?>"><?php echo $tab_text_map; ?></a></li>

    <?php // Tab Link Artist  ?>
    <?php if (!empty($project['artist'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_artist); ?>"><?php echo $tab_text_artist; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Podcast  ?>
    <?php if (!empty($project['podcast']['podcast'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_podcast); ?>"><?php echo $tab_text_podcast; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Podcast  ?>
    <?php if (!empty($project['related_topics'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_theme); ?>"><?php echo $tab_text_theme; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Education  ?>
    <?php if (!empty($project['education'])) : ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_education); ?>"><?php echo $tab_text_education; ?></a></li>
    <?php endif; ?>

</ul>

<!-- Tabs contents -->

<?php // Tab Content Gallery  ?>
<?php if (!empty($project['gallery'])) :  ?>
    <div class="section" id="<?php echo slugify($tab_text_gallery); ?>">
        <p class="tabs__title"><?php echo $tab_text_gallery; ?></p>
        <?php require(TEMPLATEPATH . '/template-parts/project/project-gallery.php'); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History  ?>
<?php if (!empty($project['history'])) :  ?>
    <div class="section" id="<?php echo slugify($tab_text_history); ?>" class="history">
        <p class="tabs__title"><?php echo $tab_text_history; ?></p>
        <?php require(TEMPLATEPATH . '/template-parts/project/project-history.php'); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Map  ?>
<div class="section" id="<?php echo slugify($tab_text_map); ?>">
    <p class="tabs__title"><?php echo $tab_text_map; ?></p>
    <?php require(TEMPLATEPATH . '/template-parts/project/project-map.php'); ?>
</div>

<?php // Tab Content Artist  ?>
<?php if (!empty($project['artist'])) :  ?>
    <div class="section" id="<?php echo slugify($tab_text_artist); ?>">
        <p class="tabs__title"><?php echo $tab_text_artist; ?></p>
        <?php require(TEMPLATEPATH . '/template-parts/project/project-artworks.php'); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Podcast  ?>
<?php if (!empty($project['podcast']['podcast'])) : ?>
    <div class="section" id="<?php echo slugify($tab_text_podcast); ?>">
        <p class="tabs__title"><?php echo $tab_text_podcast; ?></p>
        <?php require(TEMPLATEPATH . '/template-parts/project/project-podcast.php'); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Theme  ?>
<div class="section" id="<?php echo slugify($tab_text_theme); ?>">
    <p class="tabs__title"><?php echo $tab_text_theme; ?></p>
    <?php require(TEMPLATEPATH . '/template-parts/project/project-themes.php'); ?>
</div>

<?php // Tab Content Education  ?>
<?php if ($project['education']) :  ?>
    <div class="section" id="<?php echo slugify($tab_text_education); ?>">
        <p class="tabs__title"><?php echo $tab_text_education; ?></p>
        <?php require(TEMPLATEPATH . '/template-parts/project/project-education.php'); ?>
    </div>
<?php endif; ?>