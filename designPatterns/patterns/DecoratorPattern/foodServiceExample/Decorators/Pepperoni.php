<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 4:11 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class Pepperoni implements IngredientInterface{

    public function getName()
    {
        return "Pepperoni";
    }

    public function getPrice()
    {
        return 2;
    }
}