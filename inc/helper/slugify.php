<?php

/**
 * Slugify
 *
 * @package      imaneo
 * @author       Fresco & Fino
 * @since        1.0.0
**/

function slugify($string) {
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
	return $slug;
}

?>