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

		// View Data
		$viewData['post_id'] = get_the_ID();
		$viewData['title'] = ($ctrlArgs && $ctrlArgs['Title'] ? $ctrlArgs['Title'] : get_the_title(get_the_ID()));
		$viewData['tagline'] = get_sub_field('stage_landing_tagline');
		$viewData['cta'] = get_sub_field('stage_landing_cta');
		$viewData['cta_link'] = get_sub_field('stage_landing_cta_link');
		$viewData['background_image'] = (get_sub_field('stage_landing_background_image') ? get_sub_field('stage_landing_background_image') : get_sub_field('stage_sub_background_image') );

		$viewData['background_image'] = (!$viewData['background_image']) ? $ctrlArgs['BackgroundImage'] : $viewData['background_image']['url'];

		$viewData['product_image'] = get_sub_field('stage_landing_product_image');

		return $viewData;
	}
}