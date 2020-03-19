<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
*/
namespace Irfa\Gatcha;

use Irfa\Gatcha\Roulete\Roulete;
use Exception;

class Roll extends Roulete {

	private static $items;
	private static $return;

	public static function put($items)
	{
		self::$items = $items;

		return new static();
	}
	public static function spin() 
	{
		return self::getItem();
	}
	public static function dropUp($items, $rate)
	{
		self::itemDropUp($items, $rate);
		return new static();
	}
	private static function getItem() {
		$ret = self::get(self::$items);
		self::$items = null;
		return $ret;
	}
	private static function itemDropUp($items, $rate) {
		if (is_array($items))
		{
			foreach ($items as $itm)
			{
				self::$items[$itm] = self::$items[$itm] * ($rate / 100);
			}
		} else {
				self::$items[$items] = self::$items[$items] * ($rate / 100);
		}
		
	}
}