<?php

// get_fields
$template = get_field('template', 'options');
$about = $template['about'];

// contents
$about_title = (!empty($about['title'])) ? '<p>' . $about['title'] . '</p>' : '';
$about_content = (!empty($about['content'])) ? $about['content'] : '';
$about_image = (!empty($about['image'])) ? '<figure><img src="' . $about['image']['sizes']['theme_full'] . '" alt="" ></figure>' : '';

$button_echo = '';

// buttons
if (!empty($about['buttons'])) :
	foreach ($about['buttons'] as $button) {
		$button_echo .= '<a href="' . $button['link'] . '" class="about__link link"><span>' . $button['title'] . '</span></a>';
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