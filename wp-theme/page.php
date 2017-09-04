<?
/**
 * The Template for displaying all pages.
 *
 * @package nxtheme
 */

get_header();
?>

	<? while (have_posts()) : the_post(); ?>

		<?=
		module('article')
			->tag('article')
			->ctrl(); ?>

	<? endwhile; ?>

<? get_footer(); ?>