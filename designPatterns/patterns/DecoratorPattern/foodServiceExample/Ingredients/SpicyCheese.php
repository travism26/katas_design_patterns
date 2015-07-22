<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 1:07 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Ingredients;


class SpicyCheese implements IngredientInterface {

	public function getName()
	{
		return "Cheese";
	}

	public function getPrice()
	{
		return 1.0;
	}
}