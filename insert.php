<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myguest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john.doe@example.com";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>