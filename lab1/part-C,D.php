<?php

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

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br><br>";
    }
}

$student1 = new Student(
    "Dilawar khan Nasiri",
    1001,
    "Computer Science"
);

$student1->showInfo();

$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();

?>