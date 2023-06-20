<?php // Project Map ?>

<?php

//$arr = [['lat' => 40.46414168984538, 'long' => -3.711470916474365], ['lat' => 48.85714041668663, 'long' => 2.3539304445125113], ['lat' => 37.33684741750186, 'long' => -6.165581046815576]];
$arr = $project['map']['location'];
$data = json_encode($arr); 

$locations = fopen('locations.json', "w");

fwrite($locations, $data);
fclose($locations);

?>

<article class="project-map">
    <?php require( TEMPLATEPATH . '/template-parts/modules/map.php' ); ?>
</article>