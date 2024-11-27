<?php
// Database connection establish
$servername = "localhost:3306";
$username = "root";
$password = "";

// Establish the connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$databaseName = "phpmyadmin";
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName"; // Add IF NOT EXISTS to prevent errors

if (mysqli_query($conn, $sql)) {
    echo "Database '$databaseName' created successfully or already exists.";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
