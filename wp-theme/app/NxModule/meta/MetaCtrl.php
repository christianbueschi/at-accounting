<?php

namespace NxModule\meta;

class MetaCtrl {

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
		'subheading' => '',
		'tagline' => '',
		'cta' => '',
		'cta_link' => '',
		'background_image' => ''
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
		$id = get_the_ID();

		$viewData['post_id'] = $id;
		$viewData['title'] = get_the_title();
		$viewData['date'] = get_the_date();
		$viewData['author'] = get_the_author();

		// Categories
		$viewData['category_link_list'] = \NxTheme\Helpers::getCategoryLinkList($id);

		return $viewData;
	}
}