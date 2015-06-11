<?php
require '../../index.php';

interface CarService
{
    public function getCost();

    public function getDescription();
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

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->cost + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->description . $this->carService->getDescription();
    }
}

class TireRotation implements CarService
{

    protected $cost = 10;
    protected $description = "We will perform a tire rotation ";
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->cost + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->description . $this->carService->getDescription();
    }
}

echo (new TireRotation(new OilChange(new BasicInspection())))->getDescription();