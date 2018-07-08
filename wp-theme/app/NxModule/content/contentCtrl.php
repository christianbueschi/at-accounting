<?php

namespace NxModule\content;

class ContentCtrl {

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
		'main_nav' => ''
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
		$viewData['title'] = get_sub_field('title');
		$viewData['anchor'] = get_sub_field('anchor');
		$viewData['icon'] = get_sub_field('icon');
		$viewData['copy'] = get_sub_field('content');
		$viewData['copyLeft'] = get_sub_field('content_left');
		$viewData['copyRight'] = get_sub_field('content_right');
		$viewData['buttonInfo'] = get_sub_field('button_info');
		$viewData['buttonTitle'] = get_sub_field('button_title');
		$viewData['buttonTarget'] = get_sub_field('button_target');
		$viewData['formText'] = get_sub_field('form_text');

		return $viewData;
	}
}