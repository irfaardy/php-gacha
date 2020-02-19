
# Gatcha Simulator

**Basic Usage**

    <?php
   	    require_once "Autoloader.php";
   
	    use  Irfa\Roulete as Roll;
       
   	    echo Roll::spin(['common ITEM1' => 70,
   		'Rare ITEM 2' => 29.4,
   		'SSR ITEM' => 0.3,
   		'SSR ITEM' => 0.3,]);
    
