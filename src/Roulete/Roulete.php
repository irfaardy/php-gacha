<?php 
/* 
	Author:Irfa Ardiansyah <irfa.backend@protonmail.com>
	Simple Items Gatcha with PHP
*/
namespace Irfa\Gatcha\Roulete;
use Exception;

class Roulete {

	protected static function get($items) {
		if(is_array($items))
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