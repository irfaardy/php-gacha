<h2>🎲Simple Items Gacha with PHP<h2>

[![Code Climate Maintainabillity](https://codeclimate.com/github/irfaardy/php-gacha/badges/gpa.svg)](https://codeclimate.com/github/irfaardy/php-gacha) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/build.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/build-status/master) [![Latest Stable Version](https://poser.pugx.org/irfa/php-gatcha/v/stable)](https://packagist.org/packages/irfa/php-gatcha) [![License](https://poser.pugx.org/irfa/php-gatcha/license)](https://packagist.org/packages/irfa/php-gatcha)


<a href="https://www.buymeacoffee.com/OBaAofN" target="_blank"><img width="130px" src="https://cdn.buymeacoffee.com/buttons/lato-red.png" alt="Buy Me A Coffee"  ></a>

<br>
<h3>🛠️ Installation with Composer </h3>

```php
composer require irfa/php-gatcha
```

>You can get Composer [ here]( https://getcomposer.org/download/)
<h3> Usage in Laravel</h3>
Open config/app.php<br> add aliases (optional)

```php
'aliases' => [
		   ...
		  'Gatcha' => Irfa\Gatcha\Roll::class,
		   ...
	     ];
```
**Example:**

```php
...
use Gatcha

 class Example {
	  function index()
	  {
	     return Gatcha::put([ 'Item 1' => 29.4,  'Item 2' => 0.3])->spin();
	  }
 }
 
```

<h3>Usage in PHP Native</h3>

```php
require_once "vendor/autoload.php";
use Irfa\Gatcha\Roll;`
```



<h3>💻 Basic Usage</h3>


```php
    $items = [
		'common ITEM1' => 70, // 70% chance
	       	'Rare ITEM 2' => 29.4, // 29.4% chance
	       	'Super Rare ITEM' => 0.3, // 0.3% chance
	       	'Super Rare  ITEM 2' => 0.3,
	       	'Super Super Rare  ITEM' => 0.003, // 0.003% chance
	     ];
	  
    $item_get = Roll::put($items)->spin();
    echo "Congratulations you get ".$item_get;
```

<h3>💻 Using DropUp</h3>

> This function is used for certain conditions such as events, bonuses, etc.

```php
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
	    Roll::dropUp(['Super Rare ITEM', 'Super Rare  ITEM 2'], 200)//Drop up rate 200%
	    ->dropUp('common ITEM1', 300); //Drop up rate 300%
	    //Parameters items (items index in array), rate in percent
	 }
	 
	 $item_get = Roll::spin();
	 
	 echo "Congratulations you get ".$item_get;
```
<h3>💻 JSON Return</h3>

> If you want return to json

```php
Roll::put($items)->jsonSpin();
```
**Result:**

```json
{
  "data":{
	  "item":"SomeItem"
	 }
}
```
## How to Contributing?

1. Fork it (<https://github.com/irfaardy/php-gatcha/fork>)
2. Commit your changes (`git commit -m 'New Feature'`)
3. Push to the branch (`git push origin x.x`)
4. Create a new Pull Request

***
