<?php
$servername = "localhost";
$username = "root"; // Replace with your actual MySQL username
$password = ""; // Replace with your actual MySQL password
$dbname = "satyaphp5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS guests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM guests WHERE email = ?");
$stmt->bind_param("s", $emailToDelete);

// Set parameter and execute
$emailToDelete = "john.doe@example.com"; // Replace with the email you want to delete
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
} else {
    echo "No record found with the specified email";
}

$stmt->close();
$conn->close();
?>