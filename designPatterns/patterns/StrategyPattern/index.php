<?php namespace patterns\StrategyPattern;
require '../../index.php';
use patterns\StrategyPattern\Animal;
use patterns\StrategyPattern\flyable\cantFly;
use patterns\StrategyPattern\flyable\canFly;


$bird = new Animal;

$bird->setName("Twitty the Bird");
$bird->setType("Bird");
//polymorphically set the fly ability of the animal
$bird->setFlies(new canFly);

$dog = new Animal;
$dog->setName("Spike");
$dog->setType("Dog");
//polymorphically set the fly ability of the animal
$dog->setFlies(new cantFly);

//var_dump($dog);
//var_dump($bird);
$bird->getFlies();
$dog->getFlies();

//lets say in the future the dog grows wings we can
//set that on the just by calling the correct class.

$dog->setFlies(new canFly());

$dog->getFlies();