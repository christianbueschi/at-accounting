<?php

namespace NxModule\stage;

class StageCtrl {

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
		$logo = get_sub_field('stage_logo');

		$viewData['logo'] = $logo['url'];
		$viewData['logoAlt'] = $logo['alt'];
		$viewData['text'] = get_sub_field('stage_text');

		return $viewData;
	}
}