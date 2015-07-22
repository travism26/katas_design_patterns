<?php
namespace patterns\DecoratorPattern\foodServiceExample;

use patterns\DecoratorPattern\foodServiceExample\Ingredients\GreenPepper;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\Mushrooms;

require '../../../index.php';

$meatPizza = new MeatPizza;

$meatPizza->addExtraIngredient(new GreenPepper)->addExtraIngredient(new Mushrooms);
$merged = $meatPizza->getAllIngredients();

foreach ($merged as $item)
{
	echo $item->getName() . ", ";
}

$total = 0;
foreach($merged as $item){
	$total += $item->getPrice();
}

echo $total;
//var_dump($all);

