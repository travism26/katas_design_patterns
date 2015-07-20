<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 4:13 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class Ham implements IngredientInterface{

    public function getName()
    {
        return "Ham";
    }

    public function getPrice()
    {
        return 5;
    }
}