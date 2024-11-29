<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";

// Establish the connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$databaseName = "Aakash";
$sql = "CREATE DATABASE $databaseName";

if (mysqli_query($conn, $sql)) {
    echo "Database '$databaseName' created successfully!";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
