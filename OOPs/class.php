<?php
class Book{
    //properties
    public $little;
    public $author;
    public $price;

    //constructor
    public fun($little,$author,$price){
        $this->little=$little;
        $this->author=$author;
        $this->price=$price;
    } 
    //methods to display the book details
    public function displayDetails(){
        echo "Title of the book: ".$this->little."<br>";
        echo "Author of the book: ".$this->author."<br>";
        echo "Price of the book: ".$this->price."<br>";
    }
    //creting an object of the Book class
    $book1=new Book("The Alchemist","Paulo Coelho",500);

    //calling methods to display the book details
    $book1->displayDetails();
}
?>