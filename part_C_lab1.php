<?php
// ============================================
// Part C — Create Another Object
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
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

// Create first student object
$student1 = new Student(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();

echo "<br>";

// Create second student object
$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();
?>
