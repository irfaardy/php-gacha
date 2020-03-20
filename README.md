

# Simple Items Roullete with PHP
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/build.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/build-status/master) [![Latest Stable Version](https://poser.pugx.org/irfa/php-gatcha/v/stable)](https://packagist.org/packages/irfa/php-gatcha) [![License](https://poser.pugx.org/irfa/php-gatcha/license)](https://packagist.org/packages/irfa/php-gatcha) [![Support me](https://img.shields.io/badge/Support-Buy%20me%20a%20coffee-yellow.svg?style=flat-square)](https://www.buymeacoffee.com/OBaAofN) 

<br>
<h3>🛠️ Installation with Composer </h3>

    composer require irfa/php-gatcha

>You can get Composer [ here]( https://getcomposer.org/download/)
<h3> Usage in Laravel</h3>
Open config/app.php<br> add aliases

    'aliases' => [
			   ...
			  'Gatcha' => Irfa\Gatcha\Roll::class,
			   ...
		     ];
**Example:**

    ...
    use Gatcha
    
     class Example {
    	  function index()
    	  {
		     return Gatcha::put([ 'Item 1' => 29.4,  'Item 2' => 0.3])->spin();
    	  }
     }


<h3>💻 Basic Usage</h3>

   
    require_once "vendor/autoload.php";
    
    use Irfa\Gatcha\Roll;
    
	    $items = [
			'common ITEM1' => 70, // 70% chance
		       	'Rare ITEM 2' => 29.4, // 29.4% chance
		       	'Super Rare ITEM' => 0.3, // 0.3% chance
		       	'Super Rare  ITEM 2' => 0.3,
		       	'Super Super Rare  ITEM' => 0.003, // 0.003% chance
		     ];
		  
	    $item_get = Roll::put($items)->spin();
	    echo "Congratulations you get ".$item_get;
    		
<h3>💻 Using DropUp</h3>

> This function is used for certain conditions such as events, bonuses, etc.

    use Irfa\Gatcha\Roll;
	$items = [
			'common ITEM1' => 70, // 70% chance
		       	'Rare ITEM 2' => 29.4, // 29.4% chance
		       	'Super Rare ITEM' => 0.3, // 0.3% chance
		       	'Super Rare  ITEM 2' => 0.3,
		       	'Super Super Rare  ITEM' => 0.003, // 0.003% chance
		  ];
		  
		 Roll::put($items)
		 if(date('Y-m-d') == '2020-03-21') //example event date
		 {
		    Roll::dropUp(['Super Rare ITEM', 'Super Rare  ITEM 2'], 200)
		    ->dropUp('common ITEM1', 300); 
		    //Parameters items (items index in array), rate in percent
		 }
		 
		 $item_get = Roll::spin();
		 
		 echo "Congratulations you get ".$item_get;

## Contributing

1. Fork it (<https://github.com/irfaardy/php-gatcha/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some Feature'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
***
  