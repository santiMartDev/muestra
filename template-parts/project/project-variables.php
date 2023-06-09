<?php

// unset variables
unset($tabs_links);
unset($tabs_content);

// texts to tabs
$tab_text_gallery = __('Contemporary photography', 'imaneo');
$tab_text_history = __('History', 'imaneo');
$tab_text_map = __('Map', 'imaneo');
$tab_text_artist = __('Artistic looks', 'imaneo');
$tab_text_podcast = __('Word of people', 'imaneo');
$tab_text_theme = __('Related topics', 'imaneo');
$tab_text_education = __('Educational activity', 'imaneo');

// get project fields
$project = get_field('projects');
$project_info = $project['project_info'];

// project info / icon, location & year
$project_icon = (!empty($project_info['icon'])) ? '<img src="'.$project_info['icon']['sizes']['theme_small'].'">' : '' ;
$project_location = (!empty($project_info['location'])) ? $project_info['location'] : '--';
$project_year = (!empty($project_info['year'])) ? $project_info['year'] : '--';

// project architects
$architects = array();

if(!empty($project_info['architects'])) {
    foreach ($project_info['architects'] as $architect) {
        array_push($architects, get_the_title($architect));
    }
}

$project_architects = implode(', ', $architects);

?>