<?php

// Database connection details
$servername = "p:localhost"; // 'p:' prefix creates a persistent connection
$username = "root";
$password = "";

// Establishing the persistent connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Persistent can connection failed: " . mysqli_connect_error());
}

// Create the database
$databaseName = "persistent_db";
$sql = "CREATE DATABASE $databaseName";

if (mysqli_query($conn, $sql)) {
    echo "Database '$databaseName' created successfully using a persistent connection!";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Closing the connection is optional with persistent connections
// mysqli_close($conn); // You can leave this out for persistent connections
?>
