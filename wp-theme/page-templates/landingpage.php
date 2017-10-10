<?
/**
 * Template name: Landing Page
 *
 * @package nxtheme
 */

get_header();
?>

<? while (have_posts()) : the_post(); ?>

	<?php if (have_rows('flexible_content')): ?>


		<?php while (have_rows('flexible_content')): the_row(); ?>

			<!--STAGE-->

			<?php if (get_row_layout() === 'stage_landingpage') : ?>

				<?=
				module('stage')
					->tag('section')
					->ctrl(); ?>

			<?php endif; ?>

			<!--INFO-->

			<?php if (get_row_layout() === 'info') : ?>

				<?=
				module('info')
					->tag('section')
					->ctrl(); ?>


			<?php endif; ?>

			<!--TOP FEATURES-->

			<?php if (get_row_layout() === 'top_features') : ?>

				<?=
				module('topfeaturelist')
					->tag('ul')
					->ctrl(); ?>


			<?php endif; ?>

			<!--FEATURES-->

			<?php if (get_row_layout() === 'features') : ?>

				<?=
				module('featurelist')
					->tag('ul')
					->ctrl(); ?>

			<?php endif; ?>

			<!--PLATFORM-->

			<?php if (get_row_layout() === 'platform') : ?>

				<?=
				module('platform')
					->tag('section')
					->ctrl(); ?>

			<?php endif; ?>

			<!--LICENCSE CALCULTAOR-->

			<?php if (get_row_layout() === 'license_calculator') : ?>

				<?=
				module('licenseCalculator')
					->tag('section')
					->ctrl(); ?>

			<?php endif; ?>

			<!--TEAM-->

			<?php if (get_row_layout() === 'team') : ?>

				<?=
				module('team')
					->tag('section')
					->ctrl(); ?>

			<?php endif; ?>



		<?php endwhile; ?>

	<?php endif; ?>

<? endwhile; ?>

<? get_footer(); ?>