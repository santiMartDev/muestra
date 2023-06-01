<?php

// module

if(get_row_layout() == 'module-image-text'):
    require( TEMPLATEPATH . '/template-parts/modules/image-text/image-text.php' );

elseif(get_row_layout() == 'module-values'):
    require( TEMPLATEPATH . '/template-parts/modules/values/values.php' );

elseif(get_row_layout() == 'module-multicolumns'):
    require( TEMPLATEPATH . '/template-parts/modules/multicolumns/multicolumns.php' );

elseif(get_row_layout() == 'module-hero'):
    require( TEMPLATEPATH . '/template-parts/modules/hero/hero.php' );

elseif(get_row_layout() == 'module-header'):
    require( TEMPLATEPATH . '/template-parts/modules/header/header.php' );

// elseif(get_row_layout() == 'module-contact'):
//     require( TEMPLATEPATH . '/template-parts/modules/contact/contact.php' );

// elseif(get_row_layout() == 'module-team'):
//     require( TEMPLATEPATH . '/template-parts/modules/team/team.php' );

endif;

?>