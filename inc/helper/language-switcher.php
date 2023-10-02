<?php

/**
 * Language Swicher
 *
 * @package      imaneo
 * @author       Fresco & Fino
 * @since        1.0.0
 **/


if (!function_exists('ffTheme_language_switcher')) :
	function ffTheme_language_switcher()
	{

		$languages = icl_get_languages('skip_missing=1');


		if(1 < count($languages)){
			foreach($languages as $code => $l){
			  if(!$l['active']) $langs[] = '<li class="inactive"><a href="'.$l['url'].'">'.strtoupper($code).'</a></li>';
			  if($l['active']) $langs[] = '<li class="active"><span>'.strtoupper($code).'</span></li>';
			}
			echo join($langs);
		}
	}
endif;
