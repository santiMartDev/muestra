<!-- Project tabs -->

<ul class="tabs">

    <?php // Tab Photo ?>
    <?php if(!empty($project['photo'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_photo); ?>"><?php echo $tab_text_photo; ?></a></li>
    <?php endif; ?>

    <?php // Tab History ?>
    <?php if(!empty($project['history'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_history); ?>"><?php echo $tab_text_history; ?></a></li>
    <?php endif; ?>

    <?php // Tab Map ?>
    <?php if(!empty($project['map'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_map); ?>"><?php echo $tab_text_map; ?></a></li>
    <?php endif; ?>

    <?php // Tab Artist ?>
    <?php if(!empty($project['artist'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_artist); ?>"><?php echo $tab_text_artist; ?></a></li>
    <?php endif; ?>

    <?php // Tab Podcast ?>
    <?php if(!empty($project['podcast'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_podcast); ?>"><?php echo $tab_text_podcast; ?></a></li>
    <?php endif; ?>

    <?php // Tab Education ?>
    <?php if(!empty($project['education'])): ?>
        <li><a class="tab" href="#<?php echo slugify($tab_text_education); ?>"><?php echo $tab_text_education; ?></a></li>
    <?php endif; ?>

</ul>

<!-- Tabs contents -->

<?php // Tab Content Photo ?>
<?php if(!empty($project['photo'])):  ?>
    <div id="<?php echo slugify($tab_text_photo); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-photo.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['history'])):  ?>
    <div id="<?php echo slugify($tab_text_history); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-history.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['map'])):  ?>
    <div id="<?php echo slugify($tab_text_map); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-map.php' ); ?>
    </div>
<?php endif; ?>


<?php // Tab Content History ?>
<?php if(!empty($project['artist'])):  ?>
    <div id="<?php echo slugify($tab_text_artist); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-artist.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['podcast'])):  ?>
    <div id="<?php echo slugify($tab_text_podcast); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-podcast.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['themes'])):  ?>
    <div id="<?php echo slugify($tab_text_themes); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-themes.php' ); ?>
    </div>
<?php endif; ?>

<?php // Tab Content History ?>
<?php if(!empty($project['education'])):  ?>
    <div id="<?php echo slugify($tab_text_education); ?>">
        <?php require( TEMPLATEPATH . '/template-parts/project/project-education.php' ); ?>
    </div>
<?php endif; ?>

<style>
    a {
        color: red;
    }
</style>