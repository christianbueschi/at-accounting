<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package nxtheme
 */

get_header(); ?>


<?php

$title = get_field('error_title', 'options');
$text = get_field('error_text', 'options');

?>

	<!-- Content Module -->
	<div class="o-content">
		<div class="o-content__inner">

			<h2 class="o-content__title">
				<?= $title ?>
			</h2>
			<div class="o-content__copy">
				<?= $text ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>