<?php
namespace patterns\DecoratorPattern\foodServiceExample;

use patterns\DecoratorPattern\foodServiceExample\Decorators\GreenPepper;
use patterns\DecoratorPattern\foodServiceExample\Decorators\Mushrooms;

require '../../../index.php';

$meatPizza = new MeatPizza;

$meatPizza->extraIngredient(new GreenPepper)->extraIngredient(new Mushrooms);
echo $meatPizza->calPrice();

