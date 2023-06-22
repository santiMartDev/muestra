<?php // Project Map ?>

<?php

$id = get_the_ID();

// argumentos query architects
$args = array(
    'post_type'       	=> 'project',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC',
    'post__in'          => array($id) 
);

// get all architects
$main = new WP_Query( $args );

// var $arr;

if ( $main->have_posts() ) {
    while ( $main->have_posts() ) {  $main->the_post(); 
        $project = get_field('projects');
        $main_arr[] = array( 'lat'=> $project['project_info']['map']['latitude'], 'long'=> $project['project_info']['map']['longitude'] );
    } wp_reset_postdata();
}

var_dump($main_arr);

echo '/////////////////////////////////////////<br/>';

////////////////////////////////////////////////////

// argumentos query architects
$args = array(
    'post_type'       	=> 'project',
    'posts_per_page'  	=> -1,
    'orderby' 			=> 'menu-order',
    'order'				=> 'ASC',
    'post__not_in'      => array( $id ) 
);

// get all architects
$projects = new WP_Query( $args );

// var $arr;

if ( $projects->have_posts() ) {
    while ( $projects->have_posts() ) {  $projects->the_post(); 
        $project = get_field('projects');
        if(!empty($project['project_info']['map']['latitude'])) {
            $secondary_arr[] = array( 'lat'=> $project['project_info']['map']['latitude'], 'long'=> $project['project_info']['map']['longitude'] );
        }        
    } wp_reset_postdata();
}

var_dump($secondary_arr);

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