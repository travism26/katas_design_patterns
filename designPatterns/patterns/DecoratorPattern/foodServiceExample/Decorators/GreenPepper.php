<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 7:46 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class GreenPepper implements IngredientInterface {

    public function getName()
    {
        return "Green Peppers";
    }

    public function getPrice()
    {
        return 1;
    }
}