<?php

namespace NxModule\article;

class ArticleCtrl {

	/**
	 * Define default args for the controller
	 *
	 * @var array
	 */
	protected static $DEFAULT_CTRL_ARGS = array();

	/**
	 * Define default vars for the view
	 * In the view, test with empty() if a value is set
	 *
	 * @var array
	 */
	protected static $DEFAULT_VIEW_VARS = array(
		'post_id' => '',
		'title' => '',
		'content' => '',
		'date' => '',
		'permalink' => '',
		'category_link_list' => '',
		'excerpt' => '',
		'tags' => array(),
		'thumbnail_id' => array(),

		'author_display_name' => '',
		'author_page_url' => '',
		'author_avatar' => ''
	);

	/**
	 * Get data for an article
	 *
	 * @param $args
	 * @return array
	 */
	public static function data(array $args = array()) {

		// Extend default args
		$ctrlArgs = array_merge(self::$DEFAULT_CTRL_ARGS, $args);

		// Set default vars for the view
		$viewData = self::$DEFAULT_VIEW_VARS;

		// View Data
		$viewData['post_id'] = get_the_ID();
		$viewData['title'] = get_the_title(get_the_ID());
		$viewData['content'] = apply_filters('the_content',get_the_content());
		$viewData['date'] = get_the_date();
		$viewData['permalink'] = get_permalink(get_the_ID());
		$viewData['excerpt'] = get_the_excerpt();
		$viewData['tags'] = get_the_tags();

		// Author
		$viewData['author_display_name'] = get_the_author_meta('display_name');
		$viewData['author_page_url'] = get_author_posts_url(get_the_author_meta('ID'));
		$viewData['author_avatar'] = get_avatar(get_the_author_meta('ID'), 96);

		// Images
		$viewData['thumbnail_id'] = get_post_thumbnail_id();

		// Categories
		$viewData['category_link_list'] = \NxTheme\Helpers::getCategoryLinkList(get_the_ID());

		return $viewData;
	}
}