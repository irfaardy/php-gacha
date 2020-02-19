<?php 
/* 
	Author:Irfa Ardiansyah <irfaardiansyah95@gmail.com>
	Simple Gatcha Simulator
*/
namespace Irfa;

class Roulete {

	public function spin($items){

		$max = 0;
		foreach ($items as $key => $value) {
			$max += $value;
			$items[$key] = $max;
		}

		$random = mt_rand(1,$max);

			foreach ($items as $item => $max)
			{
				if ($random <= $max){
					break;
				}
			}
			 return $item;
		}
}