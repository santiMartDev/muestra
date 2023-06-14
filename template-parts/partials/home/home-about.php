<?php

// get_fields
$template = get_field('template','options');
$about = $template['about'];

// contents
$about_title = (!empty($about['title'])) ? '<h2>'.$about['title'].'</h2>' : '';
$about_content = (!empty($about['content'])) ? $about['content'] : '';
$about_image = (!empty($about['image'])) ? '<img src="'.$about['image']['sizes']['theme_full'].'" alt="" >' : '';

// buttons
if(!empty($about['buttons'])):
	foreach ($about['buttons'] as $button) {
		$button_echo .= '<a href="'.$button['link'].'" class="btn btn-link">'.$button['title'].'</a>';
	}
endif;

?>

<div class="home-about">
	<?php echo $about_title; ?>
	<?php echo $about_content; ?>
	<?php echo $about_image; ?>
	<?php echo $button_echo; ?>
</div>