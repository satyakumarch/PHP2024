<?php
// Defining the Book class
class Book {
    // Properties
    public $title;
    public $author;
    public $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to display book details
    public function displayDetails() {
        echo "Title: {$this->title}<br>";
        echo "Author: {$this->author}<br>";
        echo "Price: \${$this->price}<br>";
    }
}

// Creating an object of the Book class
$book1 = new Book("1984", "George Orwell", 15.99);

// Calling the method to display the details of the book
$book1->displayDetails();
?>
