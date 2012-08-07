<?php defined('SYSPATH') or die('No direct script access.');
/**
* Stripe
*
* @package        Stripe
* @author         Jean-Nicolas Boulay
* @copyright      (c) 2012 Jean-Nicolas Boulay
* @license        http://www.opensource.org/licenses/isc-license.txt
*/

class Kohana_STRIPE {

	private static $private_key = NULL;
	public static $publishable_key = NULL;

	public static function init()
	{
		if (self::$private_key != null && self::$publishable_key != null) {
			return;
		}

		require_once Kohana::find_file('vendor', '../../stripe-php/lib/Stripe', 'php');

		$config = Kohana::config('stripe');
		self::$status = $config['status'];
		self::$private_key = $config[self::$status]['private_key'];
		self::$publishable_key = $config[self::$status]['publishable_key'];

		Stripe::setApiKey(self::$private_key);
	}

} // End of Stripe
