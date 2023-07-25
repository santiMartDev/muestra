<?php

// get_fields
$template = get_field('template', apply_filters('wpml_object_id', 670, 'page'));

// contents
$about_title = (!empty($template['about']['title'])) ? '<p>' . $template['about']['title'] . '</p>' : '';
$about_content = (!empty($template['about']['content'])) ? $template['about']['content'] : '';
$about_image = (!empty($template['about']['image'])) ? '<figure class="about__image"><img src="' . $template['about']['image']['sizes']['theme_full'] . '" alt="" ></figure>' : '';

$button_echo = '';

// buttons
if (!empty($template['about']['buttons'])) :
	foreach ($template['about']['buttons'] as $button) {
		$link = (!empty($button['link']['url'])) ? $button['link']['url'] : '';
		$title = (!empty($button['title'])) ? $button['title'] : '';
		$button_echo .= '<a href="' . $link . '" class="about__link link"><span>' . $title . '</span></a>';
	}
endif;

?>

<article class="about">
	<header> <?php echo $about_title; ?></header>
	<section>
		<div class="about__content">
			<?php echo $about_content; ?>
			<?php echo $button_echo; ?>
		</div>
		<?php echo $about_image; ?>
	</section>
</article>