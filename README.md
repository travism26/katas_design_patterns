# Learning / Practising design patterns
This repo is just here to practise and lean new design patterns

# Getting Started

Clone repo and run `composer install` to install all the dependencies.

# Observer Pattern
Open the command terminal navigate to the **observerPattern** folder and run `php index.php` in the terminal.

# Decorator Pattern
Open the command terminal navigate to the **DecoratorPattern** folder and run `php index.php` in the terminal.

##Description / whats happening:
I decided to to create a service class that will hold an array of abstract objects (CarService) and just inject the class' that implement them into the addTask method.
Example: ```$service->addTask(new TireRotation())->addTask(new OilChange());```

# Strategy Pattern
Open the command terminal navigate to the **StrategyPattern** folder and run `php index.php` in the terminal.

##Description:
Animal class has behavior that is encapsulated into an interface (Flyable), Satisfying the open/closed principle (Open for extension closed for modification).