<?php

namespace NxModule\feature;

class FeatureCtrl {

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

		$feature = $ctrlArgs['feature'];

		$id = $feature->ID;
		$viewData['title'] = $feature->post_title;
		$viewData['icon'] = get_field('feature_icon_class', $id);
		$viewData['cta_link'] = get_field('feature_cta_link', $id);
		$viewData['color'] = get_field('feature_color', $id);

		return $viewData;
	}
}
