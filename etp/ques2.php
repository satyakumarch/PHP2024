<?php

class Book {
    
    public $name;
    public $author;
    public $price;

 
    public function __construct($name, $author, $price) {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
    }

   
    public function displayDetails() {
        echo "  The name of the book is : {$this->name}<br>";
        echo "  Thee author of the book is : {$this->author}<br>";
        echo "The  price of the book is : \${$this->price}<br>";
    }
}


$book1 = new Book("gita", "Balmaki", 10000);


$book1->displayDetails();
?>

