<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your actual MySQL username
$password = ""; // Replace with your actual MySQL password
$dbname = "endterm1"; // The name of the database where the table is located

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Specify the name of the record to delete
$nameToDelete = "John Doe"; // Replace with the name you want to delete

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM Endterm WHERE name = ?");
$stmt->bind_param("s", $nameToDelete);

// Execute the statement
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
} else {
    echo "No record found with the specified name";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>