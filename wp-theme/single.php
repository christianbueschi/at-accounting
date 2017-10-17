<?
/**
 * The Template for displaying all single posts.
 *
 * @package nxtheme
 */

get_header();
?>

<? while (have_posts()) : the_post(); ?>

	<?=
	module('stage')
		->tag('section')
		->classes('o-stage--small')
		->ctrl(array('Title' => get_the_title(), 'BackgroundImage' => get_the_post_thumbnail_url()));
	?>

	<?=
	module('article')
		->tag('section')
		->ctrl();
	?>


<? endwhile; ?>

<? get_footer(); ?>