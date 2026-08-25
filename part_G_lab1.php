<?php
// ============================================
// Part G — Vehicle and Car Inheritance
// ============================================
// Lab: Introduction to Object-Oriented PHP
// Web Information Systems

// Parent Class: Vehicle
class Vehicle
{
    protected $brand;

    function __construct($brand)
    {
        $this->brand = $brand;
    }

    function start()
    {
        echo "The vehicle is starting.";
    }
}

// Child Class: Car
class Car extends Vehicle
{
    function showBrand()
    {
        echo "Car brand: " . $this->brand;
    }
}

// Create an Object
$car1 = new Car("Toyota");

$car1->start();
echo "<br>";
$car1->showBrand();
?>
