<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 1:07 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class SpicyCheese implements IngredientInterface {

    public function getName()
    {
        return "some sorta spicy Cheese";
    }

    public function getPrice()
    {
        return 1.0;
    }
}