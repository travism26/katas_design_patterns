<?php
namespace patterns\DecoratorPattern\foodServiceExample;

use patterns\DecoratorPattern\foodServiceExample\Ingredients\GreenPepper;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\Mushrooms;

require '../../../index.php';

$meatPizza = new MeatPizza;

//testing decorator.
$meatPizza->addExtraIngredient(new GreenPepper)->addExtraIngredient(new Mushrooms);

echo $meatPizza->getNameOfIngredients() . "\n";

$total = $meatPizza->calTotalPrice();

echo $total;
//var_dump($all);

