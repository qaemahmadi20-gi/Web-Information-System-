<?php
// ============================================
// Part E — Simple Inheritance
// ============================================
// Lab: Introduction to Object-Oriented PHP
// Web Information Systems

class Person
{
    public $name;

    function __construct($name)
    {
        // Store the name
        $this->name = $name;
    }

    function introduce()
    {
        // Display the person's name
        echo "My name is " . $this->name;
    }
}

class Student extends Person
{
    function study()
    {
        // Display that the student is studying
        echo $this->name . " is studying.";
    }
}

$student1 = new Student("Ahmad");

$student1->introduce();
echo "<br>";
$student1->study();
?>
