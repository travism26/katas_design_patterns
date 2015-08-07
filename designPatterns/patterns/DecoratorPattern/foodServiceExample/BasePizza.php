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


	/**
	 * This sets the initial ingredients I am assuming here that
	 * every pizza will have pizza sauce and cheese.
	 */
	protected function init()
	{
		$this->addIngredient(new PizzaSauce)->addIngredient(new SpicyCheese);
	}

	/**
	 * @param IngredientInterface $ingredient 
	 *
	 * @return $this returns a BasePizza object.
	 */
	protected function addIngredient(IngredientInterface $ingredient)
	{
		$this->ingredients[] = $ingredient;

		return $this;
	}

	/**
	 * @param IngredientInterface $ingredient
	 *
	 * @return $this returns a BasePizza objec
	 */
	public function addExtraIngredient(IngredientInterface $ingredient)
	{
		$this->extraIngredients[] = $ingredient;

		return $this;
	}

	/**
	 * @return int
	 */
	public function calTotalPrice()
	{
		$ingredients = $this->getAllIngredients();
		$total       = 0;
		foreach ($ingredients as $item)
		{
			$total += $item->getPrice();
		}

		return $total;
	}


	/**
	 * @return array
	 */
	public function getIngredients()
	{
		return $this->ingredients;
	}

	/**
	 * @return array
	 */
	public function getExtraIngredients()
	{
		return $this->extraIngredients;
	}

	/**
	 * @return array
	 */
	public function getAllIngredients()
	{
		$base  = $this->getIngredients();
		$extra = $this->getExtraIngredients();

		$merged = array_merge($base, $extra);

		return $merged;
	}

	public function getNameOfIngredients(){
		$merged = $this->getAllIngredients();
		$list = "";
		foreach ($merged as $item)
		{
			$list .= $item->getName() . ", ";
		}

		return $list;
	}

	/**
	 * @return mixed
	 */
	abstract public function addPrimaryIngredients();

}