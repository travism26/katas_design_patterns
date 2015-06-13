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
// now that we have our "Base" service class we can now "Decorate" it with additional
// class' this classes can be in their own seperate file but to make it simple ill keep
// them in one file.

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

// now we just decorate our service object with the clients needs.
// if at anytime we need to add more functionality its easy to extend
// the service VIA Polymorphism.
$service->addTask(new TireRotation())->addTask(new OilChange());
echo $service->getCost();