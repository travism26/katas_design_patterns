<?php
require '../../index.php';

interface CarService
{
    public function getCost();

    public function getDescription();
}

class Service
{
    protected $tasks = [];

    public function addTask(CarService $task)
    {
        $this->tasks[] = $task;
        return $this;
    }

    public function getCost()
    {
        return array_sum(array_map(function($task) {
            return $task->getCost();
        }, $this->tasks));
    }

    public function getDescription()
    {
        $description = "";

        foreach($this->tasks as $task) {
            $description .= $task->getDescription();
        }
    }
}

class BasicInspection implements CarService
{

    private $description = "performing a basic inspection ";
    private $cost = 25;

    public function getCost()
    {
        return $this->cost;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

class OilChange implements CarService
{

    protected $cost = 25;
    protected $description = "We will perform an oil change ";
    protected $carService;

    public function with(CarService $service)
    {
        $this->carService = $service;
        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

class TireRotation implements CarService
{

    protected $cost = 10;
    protected $description = "We will perform a tire rotation ";
    protected $carService;

//    public function __construct(CarService $carService)
//    {
//        $this->carService = $carService;
//    }

    public function with(CarService $service)
    {
        $this->carService = $service;
        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

$service = new Service();

$service->addTask(new TireRotation())->addTask(new OilChange());

echo "ahh";
echo $service->getCost();


//$price = (new TireRotation())->with(new OilChange());

//echo $price;
//$price->getCost();
//var_dump($price);
//echo (new TireRotation(new OilChange(new BasicInspection())))->getDescription();