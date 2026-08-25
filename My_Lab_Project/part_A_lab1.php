<?php
// ============================================
// Part A — Simple Class and Object
// ============================================
// Lab: Introduction to Object-Oriented PHP
// Web Information Systems

class Student
{
    function sayHello()
    {
        echo "Hello! I am a student.";
    }
}

// Create an object
$student1 = new Student();

// Call the method
$student1->sayHello();
?>
