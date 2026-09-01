<?php


// Task 1: Create and Use a Class Constant
// Goal: Practice a fixed value that belongs to a class.

class Library {
  
    const MAX_BOOKS = 3;
}


echo "Task 1 Output:<br>";
echo "Maximum books allowed: " . Library::MAX_BOOKS . "<br><br>";

// Task 2: Create a Static Property and Static Method
// Goal: Practice one value that is shared by the whole class.

class StudentCounter {
   
    public static $count = 0;
    
   
    public static function addStudent() {
        self::$count++; // self:: refers to the current class
    }
}


StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();


echo "Task 2 Output:<br>";
echo "Total students: " . StudentCounter::$count . "<br><br>";

// Task 3: Create an Abstract Class and Abstract Method
// Goal: Practice a parent class that requires every child class to implement one method.


abstract class Vehicle {
  
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
