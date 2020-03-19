
# Simple Items Roullete with PHP
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/build.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/build-status/master) [![Latest Stable Version](https://poser.pugx.org/irfa/php-gatcha/v/stable)](https://packagist.org/packages/irfa/php-gatcha) [![License](https://poser.pugx.org/irfa/php-gatcha/license)](https://packagist.org/packages/irfa/php-gatcha) [![Support me](https://img.shields.io/badge/Support-Buy%20me%20a%20coffee-yellow.svg?style=flat-square)](https://www.buymeacoffee.com/OBaAofN) 

<br>
<h3>🛠️ Installation with Composer </h3>

    composer require irfa/php-gatcha

>You can get Composer [ here]( https://getcomposer.org/download/)

<h3>💻 Basic Usage</h3>

   
    require_once "vendor/autoload.php";
    
    use Irfa\Gatcha\Roll;
    
    $item_get = Roll::put([
				'common ITEM1' => 70, // 70% chance
	           		'Rare ITEM 2' => 29.4, // 29.4% chance
	           		'Super Rare ITEM' => 0.3, // 0.3% chance
	           		'Super Rare  ITEM 2' => 0.3,
	           		'Super Super Rare  ITEM' => 0.003, // 0.003% chance
		           	])
	           	 ->spin();
	echo "Congratulations you get ".$item_get;
    		

## Contributing

1. Fork it (<https://github.com/irfaardy/php-gatcha/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some Feature'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
***
  
