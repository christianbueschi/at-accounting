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
		<link rel="shortcut icon" type="image/x-icon" href="<?=ASSETS_URL?>/img/favicon.ico"/>
		<link rel="apple-touch-icon" href="<?=ASSETS_URL?>/img/apple-touch-icon.png"/>

		<?php wp_head(); ?>

		<script>var assetsUrl = '<?=ASSETS_URL?>';</script>

		<!--Fancy Box-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />

		<!-- Open Graph !-->
		<?= partial('opengraph') ?>

		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-90999533-1', 'auto');
            ga('send', 'pageview');
		</script>

	</head>

	<body <?php body_class(); ?>>

		<?= module('nav')
			->tag('nav')
			->classes('l-nav')
			->ctrl() ?>

		<div class="l-page">

		<?= module('header')
			->tag('header')
			->attrib('role', 'banner')
			->ctrl() ?>

		<main id="content" role="main" class="page-centered">
