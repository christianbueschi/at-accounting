<?
/**
 * The Template for displaying all single posts.
 *
 * @package nxtheme
 */

get_header();
?>

<? while (have_posts()) : the_post(); ?>

	<?php if (have_rows('flexible_content_sub')): ?>

		<?php while (have_rows('flexible_content_sub')): the_row(); ?>

			<!--STAGE-->

			<?php if (get_row_layout() === 'stage_subpage') : ?>

				<?=
				module('stage')
					->tag('section')
					->classes('o-stage--small')
					->ctrl(); ?>

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>


	<?=
	module('meta')
		->tag('section')
		->ctrl();
	?>

	<?php if (have_rows('flexible_content_sub')): ?>

		<?php while (have_rows('flexible_content_sub')): the_row(); ?>

			<!--INFO-->

			<?php if (get_row_layout() === 'subline_subpage') : ?>

				<?=
				module('info')
					->tag('section')
					->classes('o-info--small')
					->ctrl(); ?>


			<?php endif; ?>

			<!--CONTENT-->

			<?php if (get_row_layout() === 'content_subpage') : ?>

				<?=
				module('content')
					->tag('section')
					->ctrl(); ?>


			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>


<? endwhile; ?>

<? get_footer(); ?>