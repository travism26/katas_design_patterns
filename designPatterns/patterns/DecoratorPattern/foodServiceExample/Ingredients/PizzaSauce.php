<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 1:06 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample\Ingredients;


class PizzaSauce implements IngredientInterface {

	public function getName()
	{
		return "sauce";
	}

	public function getPrice()
	{
		return 2;
	}
}