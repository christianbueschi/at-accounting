<?php

namespace NxModule\footer;

class FooterCtrl {

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
		'menu_links' => '',
		'menu_social' => '',
		'address' => ''
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

		$viewData['title'] = get_field('title', 'options');
		$viewData['address'] = get_field('address', 'options');
		$viewData['mobile'] = get_field('mobile', 'options');
		$viewData['mobilelink'] = get_field('mobilelink', 'options');
		$viewData['email'] = get_field('email', 'options');


		return $viewData;
	}
}
