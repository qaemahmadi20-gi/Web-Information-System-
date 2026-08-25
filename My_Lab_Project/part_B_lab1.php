<?php
// ============================================
// Part B — Class with Constructor
// ============================================
// Lab: Introduction to Object-Oriented PHP
// Web Information Systems

class Student
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department)
    {
        // Store the values in the properties
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        // Display student information
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

$student1 = new Student(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();
?>
