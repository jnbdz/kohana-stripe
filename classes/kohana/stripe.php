<?php defined('SYSPATH') or die('No direct script access.');
/**
* Stripe
*
* @package        Stripe
* @author         Jean-Nicolas Boulay
* @copyright      (c) 2012 Jean-Nicolas Boulay
* @license        http://www.opensource.org/licenses/isc-license.txt
*/

class Kohana_Stripe {

	public static $status = NULL;
	private static $secret_key = NULL;
	public static $publishable_key = NULL;

	public static function init()
	{
		if (self::$secret_key != null && self::$publishable_key != null) {
			return;
		}

		require_once Kohana::find_file('vendor', 'stripe-php/lib/Stripe', 'php');

		$config = Kohana::config('stripe');
		self::$status = $config['status'];
		self::$secret_key = $config[self::$status]['secret_key'];
		self::$publishable_key = $config[self::$status]['publishable_key'];

		Stripe::setApiKey(self::$secret_key);
	}

} // End of Stripe
