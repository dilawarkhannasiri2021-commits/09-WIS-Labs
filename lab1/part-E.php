<?php

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

class StudentE extends Person
{
    function study()
    {
        echo $this->name . " is studying.";
    }
}

$student1 = new StudentE("Dilawar khan Nasiri");

$student1->introduce();

$student1->study();

?>