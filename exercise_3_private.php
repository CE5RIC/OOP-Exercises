<?php

declare(strict_types=1);

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



// Creating a class beverage

class Beverage{
    // changed all the properties to private
       private string $name;
       private string $color;
       private float $price;
       private string $temperature;
   
       // constructor
       public function __construct(string $name, string $color, float $price){
           $this->name = $name;
           $this->color = $color;
           $this->price = $price;
           $this->temperature = 'cold';
       }
   
       // getters
       public function getInfo() : string{
           return "this beverage is a $this->name , costs $this->price euro and has a $this->color color, usually served $this->temperature";
       }
   
       /**
        * @return string
        */
       public function getName(): string
       {
           return $this->name;
       }
   
       /**
        * @return string
        */
       public function getColor(): string
       {
           return $this->color;
       }
   
   }
   
   class Beer extends Beverage {
   
       private float $alcoholPercentage;
   
       public function __construct(string $name, string $color, float $price, float $alcoholPercentage){
           parent::__construct( $name,  $color,  $price);
           $this->alcoholPercentage = $alcoholPercentage;
           $this->name = $name;
           $this->color = $color;
       }
   
       public function getAlcoholPercentage() : float {
           return $this->alcoholPercentage;
       }
   
       public function getDuvelInfo() : string {
           return "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.";
       }
   
   }
   
   
   $cola = new Beverage('Cola', 'black', 2);
   echo $cola->getInfo()."<br>";
   
   $caraPils = new Beer('Duvel', 'light', 3.5, 8.5);
   echo $caraPils->getInfo()."<br>";
   echo $caraPils->getAlcoholPercentage();
   echo $caraPils->getDuvelInfo();