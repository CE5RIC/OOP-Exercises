<?php

declare(strict_types=1);

class Beverage {
    //the properties were set from 'public' to 'private'
    //this means that you can't access them the same way you access public properties
    //we need to use getters to access them, and setters if we want to change their values
    private string $color;
    private float $price = 0;
    private string $temperature = "cold";


    public function __construct(string $color, float $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    //setter that makes it possible to set a new value for the color property
    public function setColor ($Duvel) {
        $this->color = $Duvel;
    }

    //getters get the needed properties from private and return them, so the user can see it
    public function getColor() :string {
        return $this->color;
    }
    public function getPrice() :float {
        return $this->price;
    }
    public function getTemperature () :string {
        return $this->temperature;
    }

    public function getInfoBeverage () :string {
        return("this beverage is " . $this->temperature . " and " . $this->color . " ");
    }

}

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage = 0;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage= $alcoholPercentage;
    }

    public function getName () :string {
        return $this->name;
    }

    public function getAlcoholPercentage () :float {
        return $this->alcoholPercentage;
    }
    //Since the properties are private, we can only access them by calling the getter that returns them
    private function beerInfo () :string {
        return("Hi I'm " . $this->getName() . " and I have an alcohol percentage of " .$this->getAlcoholPercentage() . " and I have a " . $this->getColor() . " color." );
    }

    //we needed to make a private method and try to print that
    //since it's private however, it wouldn't work, so I created a public function that returns the private method
    public function getBeerInfo () :string{
        return $this->beerInfo();
    }
}
$Duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);
print_r($Duvel->getAlcoholPercentage() . "%" . "<br>");
echo($Duvel->getAlcoholPercentage() . "%" . "<br>");
print_r($Duvel->getColor(). "<br>");
print_r($Duvel->getInfoBeverage() . "<br>");
$Duvel->setColor("light");
print_r($Duvel->getInfoBeverage() . "<br>");
print_r($Duvel->getBeerInfo());




/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/