<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
*/
namespace Irfa\Gatcha;

use Irfa\Gatcha\Roulette\Roulette;
use Exception;

class Roll extends Roulette {

	private static $items;

	public static function put($items)
	{
		self::$items = $items;

		return new static();
	}
	public static function spin() 
	{
		return self::getItem();
	}
	public static function jsonSpin() 
	{
		$ret = self::getItem();
		return self::jsonItem($ret);
	}
	public static function dropUp($items, $rate)
	{
		$items_bucket = self::$items;
		self::putDropUp(self::itemDropUp($items_bucket, $items, $rate));
		return new static();
	}
	private static function getItem() {
		$ret = self::get(self::$items);
		self::$items = null;
		return $ret;
	}
	private static function putDropUp($arr) {
		foreach ($arr as $k => $v) {
			self::$items[$k] = $v;
		}
	}
	
}