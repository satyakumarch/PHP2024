<?php
// Parent class
class Vehicle {
    public $brand;
    public $model;

    // Constructor for Vehicle
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to describe the vehicle
    public function describe() {
        echo "This is a {$this->brand} {$this->model}.<br>";
    }
}

// Child class (inherits from Vehicle)
class Car extends Vehicle {
    public $doors;

    // Constructor for Car
    public function __construct($brand, $model, $doors) {
        // Call the parent class constructor
        parent::__construct($brand, $model);
        $this->doors = $doors;
    }

    // Overriding the describe() method
    public function describe() {
        echo "This is a {$this->brand} {$this->model} with {$this->doors} doors.<br>";
    }
}

// Creating an object of the parent class
$vehicle = new Vehicle("Toyota", "Camry");
$vehicle->describe(); // Output: This is a Toyota Camry.

// Creating an object of the child class
$car = new Car("Honda", "Civic", 4);
$vehicle->describe();
$car->describe(); // Output: This is a Honda Civic with 4 doors.
?>
