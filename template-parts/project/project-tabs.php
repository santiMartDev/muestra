<!-- Project tabs -->

<ul class="tabs">

    <?php // Tab Link Gallery ?>
    <?php if(!empty($project['gallery'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_gallery); ?>"><?php echo $tab_text_gallery; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link History ?>
    <?php if(!empty($project['history'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_history); ?>"><?php echo $tab_text_history; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Map ?>
    <?php if(!empty($project['map'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_map); ?>"><?php echo $tab_text_map; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Artist ?>
    <?php if(!empty($project['artist'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_artist); ?>"><?php echo $tab_text_artist; ?></a></li>
    <?php endif; ?>

    <?php // Tab Link Podcast ?>
    <?php if(!empty($project['podcast'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_podcast); ?>"><?php echo $tab_text_podcast; ?></a></li>
    <?php endif; ?>

    <li><a class="tab" href="#<?php echo slugify($tab_text_theme); ?>"><?php echo $tab_text_theme; ?></a></li>

    <?php // Tab Link Education ?>
    <?php if(!empty($project['education'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_education); ?>"><?php echo $tab_text_education; ?></a></li>
    <?php endif; ?>

</ul>

<!-- Tabs contents -->

<?php // Tab Content Gallery ?>
<?php if(!empty($project['gallery'])):  ?>
    <div id="<?php echo slugify($tab_text_gallery); ?>">
        <h3><?php echo $tab_text_gallery; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-gallery.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['history'])):  ?>
    <div id="<?php echo slugify($tab_text_history); ?>" class="history">
        <h3><?php echo $tab_text_history; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-history.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Map ?>
<?php if(!empty($project['map'])):  ?>
    <div id="<?php echo slugify($tab_text_map); ?>">
        <h3><?php echo $tab_text_map; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-map.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Artist ?>
<?php if(!empty($project['artist'])):  ?>
    <div id="<?php echo slugify($tab_text_artist); ?>">
        <h3><?php echo $tab_text_artist; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-artist.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Podcast ?>
<?php if(!empty($project['podcast'])):  ?>
    <div id="<?php echo slugify($tab_text_podcast); ?>">
        <h3><?php echo $tab_text_podcast; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-podcast.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content Theme ?>
<div id="<?php echo slugify($tab_text_theme); ?>">
    <h3><?php echo $tab_text_theme; ?></h3>
    <?php require( TEMPLATEPATH . '/template-parts/project/project-themes.php' ); ?>
</div>

<?php // Tab Content Education ?>
<?php if($project['education']):  ?>
    <div id="<?php echo slugify($tab_text_education); ?>">
        <h3><?php echo $tab_text_education; ?></h3>
        <?php require( TEMPLATEPATH . '/template-parts/project/project-education.php' ); ?>
    </div>
<?php endif; ?>

<style>
    a {
        color: red;
    }
</style>