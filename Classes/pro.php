<?php
require "Roulete.php";

namespace Gatcha;

use Gatcha\Roulete;
class Gatcha {
	private $item;


	public function drop(){
		$this->item = $this->spin();
		return $this->item;
	}
}

$gatcha = new Gatcha();
echo "<h2>kamu mendapatkan </h2><h2>". $gatcha->drop()."</h2>";