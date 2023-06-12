<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php /* ACTIONS end <head> */  do_action('ffTheme_append-head'); ?>

</head>

<body <?php body_class() ?>>

	<?php /* ACTIONS init <body> */ do_action('ffTheme_prepend-body');  ?>
    <?php /* GET part - loading */ //get_template_part( 'template-parts/partials/loading'); ?>
    <?php /* GET part - header */ get_template_part( 'template-parts/layout/header/header'); ?>

    <main id="wrapper">