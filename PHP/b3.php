<?php
// Abstract class
abstract class Animal {
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method (no implementation)
    abstract public function makeSound();

    // Concrete method (with implementation)
    public function describe() {
        echo "This is a {$this->name}.<br>";
    }
}

// Child class Dog extends abstract class Animal
class Dog extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "{$this->name} says: Woof! Woof!<br>";
    }
}

// Child class Cat extends abstract class Animal
class Cat extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "{$this->name} says: Meow! Meow!<br>";
    }
}

// Creating objects of Dog and Cat
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->describe(); // Output: This is a Buddy.
$dog->makeSound(); // Output: Buddy says: Woof! Woof!

$cat->describe(); // Output: This is a Whiskers.
$cat->makeSound(); // Output: Whiskers says: Meow! Meow!
?>
