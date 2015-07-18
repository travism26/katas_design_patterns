<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 4:04 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample;


use patterns\DecoratorPattern\foodServiceExample\Decorators\Bacon;
use patterns\DecoratorPattern\foodServiceExample\Decorators\Ham;
use patterns\DecoratorPattern\foodServiceExample\Decorators\Pepperoni;

class MeatPizza extends BasePizza
{

    /*
     * Meat Pizza will come with bacon, ham, and pepperoni
     */
    public function __construct()
    {
        $this->addIngredient(new Bacon)->addIngredient(new Ham)->addIngredient(new Pepperoni);
    }

    public function calPrice()
    {
        return $this->calTotalPrice($this->ingredients);
    }
}