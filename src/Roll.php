<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
	v2.1
	https://github.com/irfaardy/php-gacha
*/
namespace Irfa\Gatcha;

use Irfa\Gatcha\Roulette\Roulette;
use Exception;

class Roll extends Roulette {

	private static $items;

	 /**
     * Put items to $items.
     */
	public static function put($items)
	{
		self::$items = $items;

		return new static();
	}
	 
	 /**
     * Spin Roullete.
     *
     * @return string
     */
	public static function spin() 
	{
		return self::getItem();
	}

	/**
     * Spin Roullete json result.
     *
     * @return json
     */
	public static function jsonSpin() 
	{
		$ret = self::getItem();
		return self::jsonItem($ret);
	}

	/**
     * Add dropup rate.
     *
     * @param string $item
     * @param float $rate
     * @return mixed
     */
	public static function dropUp($items, $rate)
	{
		$items_bucket = self::$items;
		self::putDropUp(self::itemDropUp($items_bucket, $items, $rate));
		return new static();
	}

	/**
     * Get Spinned items.
     *
     * @return string
     */
	private static function getItem() {
		$ret = self::get(self::$items);
		self::$items = null;
		return $ret;
	}

	/**
     * put dropup item to $items variable.
     *
     * @param array $arr
     * @return void
     */
	private static function putDropUp($arr) {
		foreach ($arr as $k => $v) {
			self::$items[$k] = $v;
		}
	}
	
}