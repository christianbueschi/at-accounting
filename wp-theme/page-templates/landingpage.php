<?
/**
 * Template name: Landing Page
 *
 * @package nxtheme
 */

get_header();
?>

<? while (have_posts()) : the_post(); ?>

	<?=
	module('stage')
		->tag('section')
		->ctrl(); ?>

	<?=
	module('topfeaturelist')
		->tag('ul')
		->ctrl(); ?>

	<?=
	module('featurelist')
		->tag('ul')
		->ctrl(); ?>

<? endwhile; ?>

<? get_footer(); ?>