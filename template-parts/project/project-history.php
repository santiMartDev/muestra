<?php // Project History ?>

<?php

// assign history field to module artist
$history = $project['history'];

// sidebar project history
if(!empty($history['sidebar'])) {
    $sidebar_menus = array($history['sidebar']);
}

// include module history
require( TEMPLATEPATH . '/template-parts/modules/history.php' );

?>