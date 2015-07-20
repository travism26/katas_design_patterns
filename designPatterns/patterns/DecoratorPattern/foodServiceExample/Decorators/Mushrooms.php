<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 7:47 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Decorators;


class Mushrooms implements IngredientInterface {

    public function getName()
    {
        return "Mushrooms good ones";
    }

    public function getPrice()
    {
        return 2;
    }
}