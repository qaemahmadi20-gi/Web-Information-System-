<?php
/*
 * WEB INFORMATION SYSTEMS | PHP OOP LAB_03
 * Kabul University | Faculty of Computer Science
 * 
 * Student Name: Qaem Ahmadi
 * Student ID: [Your Student ID]
 * 
 * Lab Assignment: PHP OOP Building Blocks
 * Topics: Class Constants, Static Methods and Properties, Abstract Classes and Methods
 */

// Task 1: Create and Use a Class Constant
// Goal: Practice a fixed value that belongs to a class.

class Library {
    // Constant is a fixed value that cannot be changed
    // Using constant because the maximum number of books is a fixed rule
    const MAX_BOOKS = 3;
}

// Display the constant outside the class using ::
echo "Task 1 Output:<br>";
echo "Maximum books allowed: " . Library::MAX_BOOKS . "<br><br>";

// Task 2: Create a Static Property and Static Method
// Goal: Practice one value that is shared by the whole class.

class StudentCounter {
    // Static property is shared across all instances of the class
    // Using static because we want to count all students globally, not per object
    public static $count = 0;
    
    // Static method can be called without creating an object
    // Using static because we're modifying the shared counter
    public static function addStudent() {
        self::$count++; // self:: refers to the current class
    }
}

// Call addStudent() three times without creating an object
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

// Display the final value using ::
echo "Task 2 Output:<br>";
echo "Total students: " . StudentCounter::$count . "<br><br>";

// Task 3: Create an Abstract Class and Abstract Method
// Goal: Practice a parent class that requires every child class to implement one method.

// Abstract class cannot be instantiated directly
// Using abstract because Vehicle is a general concept - we can't create a generic "vehicle"
abstract class Vehicle {
    // Abstract method has no implementation - child classes must provide it
    // Using abstract because every vehicle type has its own way to start
    abstract public function start();
}

// Car class extends Vehicle and must implement start()
class Car extends Vehicle {
    public function start() {
        echo "Car engine started.<br>";
    }
}

// Bike class extends Vehicle and must implement start()
class Bike extends Vehicle {
    public function start() {
        echo "Bike started.<br>";
    }
}

// Create objects and call start() for each
echo "Task 3 Output:<br>";

$car = new Car();
$car->start();

$bike = new Bike();
$bike->start();
?>