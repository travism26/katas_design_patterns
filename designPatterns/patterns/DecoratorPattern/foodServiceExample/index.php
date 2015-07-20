<?php
namespace patterns\DecoratorPattern\foodServiceExample;

use patterns\DecoratorPattern\foodServiceExample\Decorators\GreenPepper;
use patterns\DecoratorPattern\foodServiceExample\Decorators\Mushrooms;

require '../../../index.php';

$meatPizza = new MeatPizza();

//$meatPizza->addExtraIngredient(new GreenPepper)->addExtraIngredient(new Mushrooms);
//echo $meatPizza->calPrice();

var_dump($meatPizza);

