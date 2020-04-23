<?php
//  ../vendor/bin/phpunit --bootstrap ../vendor/autoload.php tests/GachaTest.php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;
use Irfa\Gatcha\Roll;

// Class untuk run Testing.
class GachaTest extends TestCase
{
	public function testGachaItems()
	{
		$items = ['SSR ITEM' => 0.1,
					'SSR ITEM 2' => 0.2,
					'SSR ITEM 3' => 0.3,
					'SSR ITEM 4' => 0.4,
					'SR ITEM 1' => 0.5,
					'SR ITEM 2' => 0.6,
					'SR ITEM 3' => 1.2,
					'item 8' => 2,
					'item 9' => 2.8,
					'item 10' => 3.6,
					'item 11' => 4.4,
					'item 12' => 5.2,
					'item 13' => 6,
					'item 14' => 6.8,
					'item 15' => 7.6,
					'item 16' => 8.4,
					'item 17' => 9.2,
					'item 18' => 10,
					'item 19' => 10.8,
					'item 20' => 11.6,
					'item 21' => 8.3,
					];
		$this->assertArrayHasKey(Roll::put($items)->spin(),$items);
	}
	public function testGachaDropUpItems()
	{
		$items = ['SSR ITEM' => 0.1,
					'SSR ITEM 2' => 0.2,
					'SSR ITEM 3' => 0.3,
					'SSR ITEM 4' => 0.4,
					'SR ITEM 1' => 0.5,
					'SR ITEM 2' => 0.6,
					'SR ITEM 3' => 1.2,
					'item 8' => 2,
					'item 9' => 2.8,
					'item 10' => 3.6,
					'item 11' => 4.4,
					'item 12' => 5.2,
					'item 13' => 6,
					'item 14' => 6.8,
					'item 15' => 7.6,
					'item 16' => 8.4,
					'item 17' => 9.2,
					'item 18' => 10,
					'item 19' => 10.8,
					'item 20' => 11.6,
					'item 21' => 8.3,
					];
		$this->assertArrayHasKey(Roll::put($items)->dropUp('SSR ITEM',300)->spin(),$items);
	}
	public function testGachaJsonItems()
	{
		$items = ['SSR ITEM' => 0.1,
					'SSR ITEM 2' => 0.2,
					'SSR ITEM 3' => 0.3,
					'SSR ITEM 4' => 0.4,
					'SR ITEM 1' => 0.5,
					'SR ITEM 2' => 0.6,
					'SR ITEM 3' => 1.2,
					'item 8' => 2,
					'item 9' => 2.8,
					'item 10' => 3.6,
					'item 11' => 4.4,
					'item 12' => 5.2,
					'item 13' => 6,
					'item 14' => 6.8,
					'item 15' => 7.6,
					'item 16' => 8.4,
					'item 17' => 9.2,
					'item 18' => 10,
					'item 19' => 10.8,
					'item 20' => 11.6,
					'item 21' => 8.3,
					];
					$this->assertNotEquals(null,Roll::put($items)->dropUp('SSR ITEM',300)->jsonSpin());
	}
}