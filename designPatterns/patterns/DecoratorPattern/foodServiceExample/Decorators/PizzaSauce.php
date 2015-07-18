<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 1:06 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class PizzaSauce implements IngredientInterface{

    public function getName()
    {
        return "travis' awesome pizza sauce";
    }

    public function getPrice()
    {
        return 2.25;
    }
}