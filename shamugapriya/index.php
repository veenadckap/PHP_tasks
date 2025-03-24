<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//-----------------------fib series-----------------------------------------------
$a= 10;
$b=$a;
$b = 20;
echo $b;
// $num = 0;  
// $n1 = 0;  
// $n2 = 1;  
// echo "<h3>Fibonacci series for the first 12 numbers:</h3>";  
// echo "\n";  
// echo $n1 . ' ';
// echo $n2 . ' ';

// while ($num < 10) {  
//     $n3 = $n2 + $n1;  
//     echo $n3 . ' ';  
//     $n1 = $n2;  
//     $n2 = $n3;  
//     $num = $num + 1;  
// }
// echo "<br>Total numbers printed: " . $num ;  
//----------------------------------------------

// function factorial($n)
// {
//     $sum = 0;
//     for ($i = 1; $i <= $n; $i++) {
//         $sum += $i;
//     }
//     return $sum;
// }

// $n = 95;
// $result = factorial($n);
// echo "The factorial sum of $n is: $result";



//------------------------OOPS-------------------------------------------------------
//class Fruit {
//
//    public $name;
//    public $color;
//
//
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//}
//
//$apple = new Fruit();
//$banana = new Fruit();
//$apple->set_name('Apple','red');
//$banana->set_name('Banana');
////var_dump($apple instanceof Fruit);
//echo "<br>";
////echo $this->$name;
//echo $apple->name;
//echo $apple->color;
//
//echo "<br>";
//
//echo $banana->get_name();
//echo "<br>";
//------------------------------------__construct----------------------------------------------------------
// class Example {
//     private $value;
//      public function __construct($value) {
//         $this->value = $value;
//     }
//     public function getValue() {
//         return $this->value;
//     }
// }


// $example = new Example("Hello, World!");
// echo $example->getValue();
//------------------------------------------------------------------------------
// class Fruit {
//
//     public $name;
//     public $color;
//
//
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct() {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }
//
// $apple = new Fruit("Apple", "red");
//-------------------------inheritance------------------------------------------------------
//class Fruit {
//    public $name;
//    public $color;
//    public function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    public function intro() {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//}
//
//// Strawberry is inherited from Fruit
//class Strawberry extends Fruit {
//    public function message() {
//        echo "Am I a fruit or a berry? ";
////        $this->intro();
//    }
//}
//
//$strawberry = new Strawberry("Strawberry", "red");
//$strawberry->message();
//echo "<br>";
//$strawberry->intro();

//-----------------------------over-write inhert--------------------------------------------------------------
//class Fruit {
//    public $name;
//    public $color;
//    public function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    public function intro() {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//}

//class Strawberry extends Fruit {
//    public $weight;
//    public function __construct($name, $color, $weight) {
//        $this->name = $name;
//        $this->color = $color;
//        $this->weight = $weight;
//    }
//    public function intro() {
//        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//    }
//}
//$strawberry = new Strawberry("Strawberry", "red", 50);
//$strawberry->intro();
//-----------------------------------------interface--------------------------------------------
//interface Shape {
//    public function area();
//    public  function hello();
//}
//
//class Circle implements Shape {
//    private $radius;
//
//    public function __construct($radius) {
//        $this->radius = $radius;
//    }
//
//    public function area() {
//        return pi() * $this->radius * $this->radius;
//    }
//    public function hello() {
//        return "hello";
//    }
//}
//class Radius  implements Shape {
//    private $radius;
//
//    public function __construct($radius) {
//        $this->radius = $radius;
//    }
//
//    public function area() {
//        return pi() * $this->radius * $this->radius;
//    }
//    public function hello() {
//        return "hello";
//    }
//}
//$radius = new Radius(5);
//echo $circle->area();
//$circle = new Circle(5);
//echo $circle->area();
//---------------------------------------Access Modifiers-------------------------------------------------------------------
//--------------public-----------------------
//class Fruit {
//    public $name;
//    public $color;
//    public $weight;
//}
//
//$mango = new Fruit();
//$mango->name = 'Mango';
//$mango->color = 'Yellow';
//$mango->weight = '300';
//echo $mango->name . "<br>" .  $mango->color . "<br>" . $mango->weight;
//----------------protected--------------------------
//class MyClass
//{
//    protected $protectedProperty = 'I am protected';
//    public $count = 0;
//    public function __construct()
//    {
//        $this->count++;
//    }
//
//    protected function protectedMethod()
//    {
//        echo "This is a protected method\n";
//    }
//
//    public function accessProtected()
//    {
//        echo $this->protectedProperty . "<br>";  // Accessible within the class
//        $this->protectedMethod();       // Accessible within the class
//    }
//}
//
//class DerivedClass extends MyClass
//{
//    public function accessProtectedFromDerived()
//    {
//        echo $this->protectedProperty . "<br>";  // Accessible within derived class
//        $this->protectedMethod();       // Accessible within derived class
//    }
//}
//
//$obj = new MyClass();
//$obj1 = new MyClass();
//$obj2 = new MyClass();
//$obj3= new MyClass();
//$obj4 = new MyClass();
//$obj5 = new MyClass();
//echo $obj->count ." <br>";
//echo $obj1->count ." <br>";
//echo $obj2->count ." <br>";
//echo $obj3->count ." <br>";
//echo $obj4->count ." <br>";
//echo $obj5->count ." <br>";

// echo $obj->protectedProperty; // Error: Cannot access protected property
// $obj->protectedMethod();      // Error: Cannot access protected method
//$obj->accessProtected();         // Outputs: I am protected, This is a protected method

//$derivedObj = new DerivedClass();
//$derivedObj->accessProtectedFromDerived(); // Outputs: I am protected, This is a protected method

//--------------------final-----------------

//class BaseClass
//{
//    final public function finalMethod()
//    {
//        echo "This is a final method\n";
//    }
//
//    public function normalMethod()
//    {
//        echo "This is a normal method\n";
//    }
//}

//class ChildClass extends BaseClass
//{
////    // This will cause an error
////     public function finalMethod() {
////         echo "Attempting to override final method\n";
////     }
//
//    public function normalMethod()
//    {
//        echo "Overriding normal method\n";
//    }
//}
//
//$obj = new ChildClass();
//$obj->finalMethod();
//$obj->normalMethod();
//
//--------------------------abstract class------------------------------------------------------------------------------


//abstract class Animal
//{
//    abstract protected function makeSound();
//    public function sleep()
//    {
//        echo "Sleeping...\n";
//    }
//}
//
//class Dog extends Animal
//{
//    protected function makeSound()
//    {
//        echo "Woof! Woof!\n";
//    }
//}
//
//class Cat extends Animal
//{
//    public  function makeSound()
//    {
//        echo "Meow! Meow!\n";
//    }
//}
//
//$dog = new Dog();
//$dog->sleep();
//
//$cat = new Cat();
//$cat->makeSound();
//$cat->sleep();
//-----------------------------------------------------------------------------------------------------
//abstract class Vehicle
//{
//    abstract protected function startEngine();
//
//    public function stopEngine()
//    {
//        echo "Engine stopped . <br>";
//    }
//
//    public function honkHorn()
//    {
//        echo "Honk! Honk! . <br>";
//    }
//}
//
//class Car extends Vehicle
//{
//
//    protected function startEngine()
//    {
//        echo "Car engine started . <br>";
//    }
//
//    public function openTrunk()
//    {
//        echo "Trunk opened . <br>";
//    }
//}
//
//class Motorcycle extends Vehicle
//{
//    public function startEngine()
//    {
//        echo "Motorcycle engine started";
//    }
//
//    public function popWheelie()
//    {
//        echo "Popping a wheelie!\n";
//    }
//}
//
//$car = new Car();
//$car->honkHorn();     // Outputs: Honk! Honk!
//$car->openTrunk();    // Outputs: Trunk opened.
//
//$motorcycle = new Motorcycle();
//$motorcycle->startEngine();  // Outputs: Motorcycle engine started.
//$motorcycle->stopEngine();   // Outputs: Engine stopped.
//$motorcycle->honkHorn();     // Outputs: Honk! Honk!
//$motorcycle->popWheelie();   // Outputs: Popping a wheelie!
//----------------------------------------------------------------------------------------------------------


// Define an interface
// interface Fuelable
// {
//     public function refuel($amount);
// }

// // Define another interface
// interface Maintainable
// {
//     public function performMaintenance();
// }

// // Define an abstract class that implements the interfaces
// abstract class Vehicle implements Fuelable, Maintainable
// {
//     protected $fuelLevel;

//     public function __construct()
//     {
//         $this->fuelLevel = 0;
//     }

//     // Implement the method from Fuelable interface
//     public function refuel($amount)
//     {
//         $this->fuelLevel += $amount;
//         echo "Refueled with $amount liters. Current fuel level: $this->fuelLevel liters.\n";
//     }

//     // Implement the method from Maintainable interface
//     public function performMaintenance()
//     {
//         echo "Performing general vehicle maintenance.\n";
//     }

//     // Abstract method
//     abstract protected function startEngine();
// }

// // Define a concrete class that extends the abstract class
// class Car extends Vehicle
// {
//     // Implement the abstract method
//     protected function startEngine()
//     {
//         echo "Car engine started.\n";
//     }

//     // Additional method specific to Car
//     public function openTrunk()
//     {
//         echo "Trunk opened.\n";
//     }
// }

// // Define another concrete class that extends the abstract class
// class Motorcycle extends Vehicle
// {
//     // Implement the abstract method
//     protected function startEngine()
//     {
//         echo "Motorcycle engine started.\n";
//     }

//     // Additional method specific to Motorcycle
//     public function popWheelie()
//     {
//         echo "Popping a wheelie!\n";
//     }
// }

// // Create objects of the subclasses and call their methods
// $car = new Car();
// $car->refuel(50);     // Outputs: Refueled with 50 liters. Current fuel level: 50 liters.
// $car->performMaintenance();  // Outputs: Performing general vehicle maintenance.
// $car->openTrunk();    // Outputs: Trunk opened.

// $motorcycle = new Motorcycle();
// $motorcycle->refuel(15);     // Outputs: Refueled with 15 liters. Current fuel level: 15 liters.
// $motorcycle->performMaintenance();  // Outputs: Performing general vehicle maintenance.
// $motorcycle->popWheelie();   // Outputs: Popping a wheelie!


