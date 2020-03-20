<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
*/
namespace Irfa\Gatcha\Roulette;

use Exception;

class RateUp {

	protected static function _itemDropUp($item_list, $items, $rate)
	{
		$rt = new RateUp();
		return $rt->calc_rate($item_list, $items, $rate);		
	}
	private function calc_rate($item_list, $items, $rate)
	{
		$item=[];
		if (is_array($items))
		{
			foreach ($items as $itm)
			{
				$item[$itm] = $item_list[$itm] * ($rate / 100);
			}
		} else {
				$item[$items] = $item_list[$items] * ($rate / 100);
		}
		return $item;
	}
}