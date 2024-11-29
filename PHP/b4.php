<?php
// Defining an interface
interface Shape {
    public function area();
    public function perimeter();
}

// Implementing the interface in Circle class
class Circle implements Shape {
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the area() method
    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    // Implementing the perimeter() method
    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Implementing the interface in Rectangle class
class Rectangle implements Shape {
    private $width;
    private $height;

    // Constructor
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the area() method
    public function area() {
        return $this->width * $this->height;
    }

    // Implementing the perimeter() method
    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Creating objects of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(10, 5);

echo "Circle Area: " . $circle->area() . "<br>"; // Output: Circle Area: 78.53981633974483
echo "Circle Perimeter: " . $circle->perimeter() . "<br>"; // Output: Circle Perimeter: 31.41592653589793

echo "Rectangle Area: " . $rectangle->area() . "<br>"; // Output: Rectangle Area: 50
echo "Rectangle Perimeter: " . $rectangle->perimeter() . "<br>"; // Output: Rectangle Perimeter: 30
?>
