<?php

// unset variables
unset($tabs_links);
unset($tabs_content);

// texts
$tab_text_photo = __('Contemporary photography', 'imaneo');
$tab_text_history = __('History', 'imaneo');
$tab_text_map = __('Map', 'imaneo');
$tab_text_artist = __('Artistic looks', 'imaneo');
$tab_text_podcast = __('Word of people', 'imaneo');
$tab_text_theme = __('Related topics', 'imaneo');
$tab_text_education = __('Educational activity', 'imaneo');

// get fields
$project = get_field('projects');

// project info
$project_location = (!empty($project['project_info']['location'])) ? $project['project_info']['location'] : '--';
$project_year = (!empty($project['project_info']['year'])) ? $project['project_info']['year'] : '--';

// architects terms
$terms = get_the_terms( get_the_ID(), 'project_architect');
$architects = array();

if($terms) {
    foreach ($terms as $term) {
        array_push($architects, $term->name);
    }
}

$project_architects = $custom_post->post_title.''.implode(', ', $architects).'';

// history

// map

// artist

// education


?>