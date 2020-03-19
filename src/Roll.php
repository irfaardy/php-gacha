<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
*/
namespace Irfa\Gatcha;

use Irfa\Gatcha\Roulete\Roulete;

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
	private static function getItem(){
		$ret =  Roulete::get(self::$items);
		self::$items=null;
		return $ret;
	}
}