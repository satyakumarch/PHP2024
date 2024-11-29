<?php

class Book {
   
    private $title;
    private $author;
    private $price;

 
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        if (is_string($title) && !empty($title)) {
            $this->title = $title;
        } else {
            echo "Title must be a non-empty string.";
        }
    }

  
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        if (is_string($author) && !empty($author)) {
            $this->author = $author;
        } else {
            echo "Author must be a non-empty string.";
        }
    }

   
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price > 0) {
            $this->price = $price;
        } else {
            echo "Price must be a positive number.";
        }
    }
}


$book = new Book();
$book->setTitle("Money Maker");
$book->setAuthor("krishna");
$book->setPrice(1000);


echo "The title of the book is: " . $book->getTitle() . "<br>";
echo "The author of the book is: " . $book->getAuthor() . "<br>";
echo "The price of the book is: $" . $book->getPrice() . "<br>";

?>

<!-- 1)Create a header.php and footer.php file to contain the common header and footer of the website.
2)Use include to insert the header.php and footer.php into the main pages.
3)Additionally, create a config.php file with database settings and user info that
 will be used for database operations or user info.
Q5 Write a PHP program to create a simple registration form that collects a user's name, email, and password.
a. The name is not empty.
b. The email is in a valid format.
c. The password is at least 8 characters long.
d. If any validation fails, display appropriate error messages and ensure the form retains the user-entered values.

Q6 Develop a PHP program where users can submit a registration form using the POST method. 
The form should collect a user's first 
name, last name, email, and password. Use POST to handle the submitted data (except the password) on another page.


1)Create a database schema with a table having fields like id, first_name, last_name, etc. 
Connect the data to the database and fetch the data in an HTML table using PHP/MySQL.

2)The schema defines a function table_view, which accepts an array of column names. This 
function generates an HTML table displaying the data from the database table, with each column 
being a column in the table.

3)The instructions state that this function should be able to handle any number of
 columns in the database table, and the HTML table generated should reflect the changes in the number of columns.

4)The function should also provide a basic website with multiple pages (e.g., home,
 about) that utilizes the table_view function to display the data from the database. -->