<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 4:04 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample;



use patterns\DecoratorPattern\foodServiceExample\Ingredients\Bacon;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\Ham;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\Pepperoni;

class MeatPizza extends BasePizza
{
    /*
     * Meat Pizza will come with bacon, ham, and pepperoni
     */
    public function addPrimaryIngredients()
    {
        $this->addIngredient(new Bacon)->addIngredient(new Ham)->addIngredient(new Pepperoni);
    }

}