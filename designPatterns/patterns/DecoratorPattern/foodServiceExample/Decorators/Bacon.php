<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 4:13 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class Bacon implements IngredientInterface{

    public function getName()
    {
        return "Bacon";
    }

    public function getPrice()
    {
        return 3.4;
    }
}