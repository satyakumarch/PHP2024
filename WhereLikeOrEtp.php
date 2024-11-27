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

// Select data with WHERE, LIKE, and OR conditions
echo "<h3>Select data with WHERE, LIKE, and OR</h3>";
$sql = "SELECT * FROM Endterm WHERE dept LIKE 'IT' OR salary > 20000";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['id'] . "<br>";
        echo "name: " . $row['name'] . "<br>";
        echo "dept: " . $row['dept'] . "<br>";
        echo "salary: " . $row['salary'] . "<br>";
        echo "address: " . $row['address'] . "<br>";
        echo "phone: " . $row['phone'] . "<br><br>";
    }
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>