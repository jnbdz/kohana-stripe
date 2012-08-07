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

	public static function init()
	{
		if (self::$private_key != null && self::$publishable_key != null) {
			return;
		}

		$config = Kohana::config('stripe');
		self::$private_key = $config['private_key'];
		self::$publishable_key = $config['publishable_key'];

		Stripe::setApiKey(self::$private_key);
	}

	/**
	 * Charge section
	 */

	public static function charge_create($data)
	{
		self::init();
		return Stripe_Charge::create($data);
	}

	public static function charge_retrieve($charge_id)
	{
		self::init();
		return Stripe_Charge::retrieve($charge_id);
	}

	public static function charge_all($settings=array())
	{
		self::init();
		return Stripe_Charge::all($settings);
	}

	/**
	 * Customers section
	 *
	 * Customer objects allow you to perform recurring charges
	 * and track multiple charges that are associated with the
	 * same customer. The API allows you to create, delete,
	 * and update your customers. You can retrieve individual
	 * customers as well as a list of all your customers.
	 */

	public static function customer_create($data)
        {
                self::init();
                return Stripe_Customer::create($data);
        }

	public static function customer_retrieve($customer_id)
	{
		self::init();
		return Stripe_Customer::retrieve($customer_id);
	}

	public static function customer_all($settings=array())
	{
		self::init();
		return Stripe_Customer::all($settings);
	}

} // End of Stripe
