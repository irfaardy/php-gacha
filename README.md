
# Simple Items Roullete
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/badges/build.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-gatcha/build-status/master)
**Basic Usage**

    <?php
   	    require_once "Autoloader.php";
   
	    use  Irfa\Roulete as Roll;
       
   	    echo Roll::spin(['common ITEM1' => 70,// 70% chance
   		'Rare ITEM 2' => 29.4,// 29.4% chance
   		'SSR ITEM' => 0.3,// 0.3% chance
   		'SSR ITEM' => 0.3,]);
		
<h3>Contribute</h3>    
If you want to contribute this project and make it better, your help is very welcome.
  
