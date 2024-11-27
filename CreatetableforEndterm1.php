<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your actual MySQL username
$password = ""; // Replace with your actual MySQL password
$dbname = "endterm1"; // The name of the database where the table will be created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS Endterm (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    dept VARCHAR(30),
    salary DECIMAL(10,2),
    address VARCHAR(100),
    phone VARCHAR(15)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Endterm created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>