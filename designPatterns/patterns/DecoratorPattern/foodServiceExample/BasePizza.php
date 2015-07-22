<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-18
 * Time: 12:48 PM
 */

namespace patterns\DecoratorPattern\foodServiceExample;


use patterns\DecoratorPattern\foodServiceExample\Ingredients\IngredientInterface;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\PizzaSauce;
use patterns\DecoratorPattern\foodServiceExample\Ingredients\SpicyCheese;

/*
 * This say this is a pizza shop or some place that
 * serves pizza as their main dish.
 */

abstract class BasePizza {

	protected $ingredients = [];

	protected $extraIngredients = [];

	public function __construct()
	{
		$this->init();
		$this->addPrimaryIngredients();
	}

	protected function init()
	{
		$this->addIngredient(new PizzaSauce)->addIngredient(new SpicyCheese);
	}

	protected function addIngredient(IngredientInterface $ingredient)
	{
		$this->ingredients[] = $ingredient;

		return $this;
	}

	//this might not be needed but adding in just in case it is.
	public function addExtraIngredient(IngredientInterface $ingredient)
	{
		$this->extraIngredients[] = $ingredient;

		return $this;
	}

	//not needed right now.
//    public function calBasePrice()
//    {
//        return array_sum(array_map(function($task) {
//            return $task->getPrice();
//        }, $this->ingredients));
//    }

	public function calTotalPrice($ingredients = [])
	{
		return array_sum(array_map(function ($ingredients)
		{
			return $ingredients->getPrice();
		}, $ingredients));
	}


	public function getIngredients()
	{
		return $this->ingredients;
	}

	public function getExtraIngredients()
	{
		return $this->extraIngredients;
	}

	public function getAllIngredients()
	{
		$base = $this->getIngredients();
		$extra = $this->getExtraIngredients();

		$merged = array_merge($base, $extra);

		return $merged;
	}

	abstract public function addPrimaryIngredients();

}