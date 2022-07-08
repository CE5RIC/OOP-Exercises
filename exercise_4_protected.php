<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/


//protected attributes are similar to private properties
    //their main difference, is that with protected attributes, children of the class can access their parents protected attributes directly

class Beverage {
        protected string $color;
        protected float $price;
        protected string $temperature = "cold";

        function __construct(string $color, float $price, string $temperature) {
                $this->color = $color;
                $this->price = $price;
                $this->temperature = $temperature;
        }
    //The constructor is, quite literally, the thing that constructs the object. 

        function getInfo() {
                return "This beverage is $this->temperature and $this->color";
        }
        
}


class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPercentage;
    
    //A new class, that is a child of the Beverage class
    //Child classes can inherit all the properties of the parent class, but, the parent class can't access the properties of it's children

    function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;


}

function getAlcoholPercentage() {
    return "this beverage has $this->alcoholPercentage";
}

function showColor() {
    return "This beverage has a $this->color color";
}

}



// This is an object created from the beverage class
// We set the values in the brackets, then those values get assigned to different properties in the class
// And finally, in the constructor it gets created into an object


$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);


echo($Duvel->getAlcoholPercentage() . "%" . "<br>");
echo($Duvel->showColor());

