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

		if (1 < count($languages)) {
			foreach ($languages as $code => $l) {
				if (!$l['active']) $langs2[] = '<option class="inactive"><a href="' . $l['url'] . '">' . strtoupper($code) . '</a></option>';
				if ($l['active']) $langs1[] = '<option class="active"><span>' . strtoupper($code) . '</span></option>';
			}

			$lang_ext[] = $langs1[0];
			$lang_ext[] = $langs2[0];

			echo join($lang_ext);
		}
	}
endif;
