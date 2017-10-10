<?php

namespace NxModule\licenseCalculator;

class licenseCalculatorCtrl {

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
		'text' => '',
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

		// View Data;
		$viewData['title'] = get_sub_field('license_calculator_title');
		$viewData['text'] = get_sub_field('license_calculator_text');
		$viewData['cta_contact'] = get_sub_field('license_calculator_cta_contact');
		$viewData['cta_contact_link'] = get_sub_field('license_calculator_cta_contact_link');
		$viewData['cta_try'] = get_sub_field('license_calculator_cta_try');
		$viewData['cta_try_link'] = get_sub_field('license_calculator_try_link');

		return $viewData;
	}
}