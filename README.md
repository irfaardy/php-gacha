
# Gatcha Simulator

**Basic Usage**

    <?php
   	    require_once "Autoloader.php";
   
	    use  Irfa\Roulete as Roll;
       
   	    echo Roll::spin(['common ITEM1' => 70,// 70% chance
   		'Rare ITEM 2' => 29.4,// 29.4% chance
   		'SSR ITEM' => 0.3,// 0.3% chance
   		'SSR ITEM' => 0.3,]);
    
