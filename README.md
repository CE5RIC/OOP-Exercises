# OOP-Exercises

A Becode project

OOP stands for Object-Oriented Programming and it is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.

Exercise 1: Classes

class Beverage {
public string $color;
public int $price = 0;
public string $temperature = "cold";

    public function __construct(string $color, int $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

Totally different mindset needed, the ability to create a "blueprint" really spoke to me. Also to use a function/method construct to instantiate a new object where we can pass in parameters is really cool :). However, it's still a transition moment so I think to keep at it is super important as I want to get better at it. I believe the advantages are numerous.

Exercise 2: Extending

class Beverage {
public string $color;
public float $price;
public string $temperature = "cold";

        function __construct(string $color, float $price, string $temperature) {
                $this->color = $color;
                $this->price = $price;
                $this->temperature = $temperature;
        }


        function getInfo() {
                return "This beverage is $this->temperature and $this->color";
        }

}

class Beer extends Beverage {
public string $name;
public float $alcoholPercentage;

    function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

}

}

It's all about family! Inheritance plays a huge role and by extending, one class inherits properties & methods from another. Only this way though, it's the child class which inhertis the properties from the parent. The parent can't access the properties of it's children. Very useful as we don't need to redefine them on our new class.

Exercise 3: Private

class Beverage {

    private string $color;
    private float $price = 0;
    private string $temperature = "cold";


    public function __construct(string $color, float $price, string $temperature) {
        $this ->color =$color;
        $this->price = $price;
        $this->temperature = $temperature;
    }


    public function setColor ($Duvel) {
        $this->color = $Duvel;
    }


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

For this exercise I had to make all properties private and then still make all of the code work.
Here is where we get introduced to getters and setters. So for this getter we create a public function(s) insdide of the class so we can get the needed private properties and return them so the user can see them. A setter is a method which will set or change a private property for us.

Exercise 4: Protected

In this exercise we had to change our properties to protected. The main difference, is that with protected attributes, children of the class can access their paretns proteced attributes directly.

Learning experience

There's a lot to love about OOP in my opinion. I really love the clear structure and the possibility to re-use so you don't keep repeating yourself. Still got lots to learn about this subject and I'm sure we will in the future.
