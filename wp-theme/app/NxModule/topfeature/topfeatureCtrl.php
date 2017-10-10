<?php

namespace NxModule\topfeature;

class TopfeatureCtrl {

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
		'title' => ''
	);

	/**
	 * * Get Teaser Query
	 * @param array $args
	 * @return array
	 */
	public static function data(array $args = array()) {

		// Extend default args
		$ctrlArgs = array_merge(self::$DEFAULT_CTRL_ARGS, $args);


		// Set default vars for the view
		$viewData = self::$DEFAULT_VIEW_VARS;

		$viewData['title'] = get_sub_field('topfeature_title');
		$viewData['description'] = get_sub_field('topfeature_description');
		$viewData['image'] = get_sub_field('topfeature_image');
		$viewData['cta'] = get_sub_field('topfeature_cta');
		$viewData['cta_link'] = get_sub_field('topfeature_cta_link');

		return $viewData;
	}
}
