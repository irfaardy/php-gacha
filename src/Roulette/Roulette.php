<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
	v2.1
	https://github.com/irfaardy/php-gacha
*/
namespace Irfa\Gatcha\Roulette;

use Exception;
use Irfa\Gatcha\Roulette\RateUp;

class Roulette extends RateUp {

 	 /**
     * encode to Json.
     *
     * @param string $dt
     * @return json
     */
 	protected static function jsonItem($dt) {
 		$data['data'] = ['item' => $dt];
 		return json_encode($data);
 	}

 	 /**
     * Add drop up rate to items.
     *
     * @param mixed $item_list
     * @param array $items
     * @param float $rate
     * @return array
     */
 	protected static function itemDropUp($item_list, $items, $rate)
 	{
 		return self::_itemDropUp($item_list, $items, $rate);
 	}

 	 /**
     * Get Item.
     *
     * @param array $item
     * @return string
     */
	protected static function get($items) {
		if (is_array($items))
		{
			$max = 0;
			foreach ($items as $key => $value) {
				$max += $value;
				$items[$key] = $max;
			}

			$random = mt_rand(1, $max);

				foreach ($items as $item => $max)
				{
					if ($random <= $max) {
						break;
					}
				}
				 return $item;
		} else {
				throw new Exception('Parameter must be an array.');

				return false;
		}
	}
	
}