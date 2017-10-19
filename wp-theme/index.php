<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nxtheme
 */

get_header(); ?>

<?php

$title = get_the_title(get_option('page_for_posts', true));
$backgroundImageBlog = get_the_post_thumbnail_url(get_option('page_for_posts', true));

?>


<?=
module('stage')
	->tag('section')
	->classes('o-stage--small')
	->ctrl(array('Title' => $title, 'BackgroundImage' => $backgroundImageBlog)) ?>


<?=
module('teaserlist')
	->ctrl(); ?>

<? get_footer(); ?>
