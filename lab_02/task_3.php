<?php

// Task 3


abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.<br>";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.<br>";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();

?>

<?php

// Task 3
// Full Name: Your Full Name
// Student ID: Your Student ID

abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.<br>";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.<br>";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();

?>
