<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

// ========================================
// Part A, B, C
// Student Class
// ========================================

class Student
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function sayHello()
    {
        echo "Hello! I am a student.<br>";
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

// Part A
$student1 = new Student(
    "Dilawar khan Nasiri",
    1001,
    "Computer Science"
);

$student1->sayHello();

echo "<br>";

// Part B
$student1->showInfo();

echo "<br>";

// Part C
$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();

echo "<hr>";


// ========================================
// Part D
// BankAccount Class
// ========================================

class BankAccount
{
    public $ownerName;
    private $balance;

    function __construct($ownerName, $balance)
    {
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    function showBalance()
    {
        echo "Balance: " . $this->balance . "<br>";
    }
}

$account1 = new BankAccount(
    "Dilawar khan Nasiri",
    5000
);

echo "Owner: " . $account1->ownerName . "<br>";

$account1->showBalance();

echo "<hr>";


// ========================================
// Part E & F
// Inheritance
// ========================================

class Person
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}

class StudentPerson extends Person
{
    function study()
    {
        echo $this->name . " is studying.<br>";
    }
}

$student3 = new StudentPerson("Dilawar khan Nasiri");

$student3->introduce();

$student3->study();

echo "<hr>";


// ========================================
// Part G
// Vehicle and Car
// ========================================

class Vehicle
{
    protected $brand;

    function __construct($brand)
    {
        $this->brand = $brand;
    }

    function start()
    {
        echo "The vehicle is starting . <br>";
    }
}

class Car extends Vehicle
{
    function showBrand()
    {
        echo "Car brand: " . $this->brand;
    }
}

$car1 = new Car("Toyota");

$car1->start();

$car1->showBrand();

?>

</body>
</html>