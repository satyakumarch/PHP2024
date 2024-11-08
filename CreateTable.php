<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "satyaphp1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table with additional attributes
$sql = "CREATE TABLE Avinandan (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP,
phone VARCHAR(15),
address VARCHAR(100),
city VARCHAR(50),
state VARCHAR(50),
zip_code VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL to insert multiple rows with values for all attributes
$sql = "INSERT INTO Avinandan (firstname, lastname, email, reg_date, phone, address, city, state, zip_code) VALUES
('John', 'Doe', 'john.doe@example.com', NOW(), '123-456-7890', '123 Main St', 'Anytown', 'Anystate', '12345'),
('Jane', 'Smith', 'jane.smith@example.com', NOW(), '234-567-8901', '456 Elm St', 'Othertown', 'Otherstate', '23456'),
('Alice', 'Johnson', 'alice.johnson@example.com', NOW(), '345-678-9012', '789 Oak St', 'Sometown', 'Somestate', '34567'),
('Bob', 'Brown', 'bob.brown@example.com', NOW(), '456-789-0123', '101 Pine St', 'Yourtown', 'Yourstate', '45678'),
('Charlie', 'Davis', 'charlie.davis@example.com', NOW(), '567-890-1234', '202 Maple St', 'Thistown', 'Thisstate', '56789')";
";('John', 'Doe', 'john.doe@example.com', NOW(), '123-456-7890', '123 Main St', 'Anytown', 'Anystate', '12345'),
('Jane', 'Smith', 'jane.smith@example.com', NOW(), '234-567-8901', '456 Elm St', 'Othertown', 'Otherstate', '23456'),
('Alice', 'Johnson', 'alice.johnson@example.com', NOW(), '345-678-9012', '789 Oak St', 'Sometown', 'Somestate', '34567'),
('Bob', 'Brown', 'bob.brown@example.com', NOW(), '456-789-0123', '101 Pine St', 'Yourtown', 'Yourstate', '45678'),
('Charlie', 'Davis', 'charlie.davis@example.com', NOW(), '567-890-1234', '202 Maple St', 'Thistown', 'Thisstate', '56789')";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>