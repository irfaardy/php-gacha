<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
	v2.1
	https://github.com/irfaardy/php-gacha
*/
namespace Irfa\Gatcha\Roulette;

use Exception;

class RateUp {

	 /**
     * Add drop up rate to items.
     *
     * @param mixed $item_list
     * @param array $items
     * @param float $rate
     * @return array
     */
	protected static function _itemDropUp($item_list, $items, $rate)
	{
		$rt = new RateUp();
		return $rt->calc_rate($item_list, $items, $rate);		
	}

	 /**
     * Calculate Drop Up Rate.
     *
     * @param mixed $item_list
     * @param array $items
     * @param float $rate
     * @return array
     */
	private function calc_rate($item_list, $items, $rate)
	{
		$item = [];
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