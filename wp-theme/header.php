<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package nxtheme
 */
?><!doctype html>
	<!--[if lt IE 9]>      <html class="no-js lt-ie10 lt-ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9]>         <html class="no-js ie9 lt-ie10" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="apple-mobile-web-app-title" content=“<?php bloginfo('name'); ?>”>

		<title><?php wp_title('|', true, 'right'); ?></title>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS_URL?>/images/favicon-32x32.png?v2">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS_URL?>/images/favicon-16x16.png?v2">
		<link rel="shortcut icon" type="image/x-icon" href="<?=ASSETS_URL?>/images/favicon.ico?v2"/>
		<link rel="apple-touch-icon" href="<?=ASSETS_URL?>/images/apple-icon.png?v2"/>
		<meta name="theme-color" content="#ffffff">


		<?php wp_head(); ?>

		<script>var assetsUrl = '<?=ASSETS_URL?>';</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113283964-1"></script>
		<script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-113283964-1');
		</script>

	</head>

	<body <?php body_class(); ?>>



		<div class="l-page">

		<?= module('header')
			->tag('header')
			->attrib('role', 'banner')
			->ctrl() ?>

		<main id="content" role="main">
