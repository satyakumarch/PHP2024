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

// Insert data into the Endterm table
$sql = "INSERT INTO Endterm (name, dept, salary, address, phone) VALUES
('satya kumar','manager',4354534,'342 wrjhtw','2424323-2442'),
('John Doe', 'IT', 50000.00, '123 Main St', '123-456-7890'),
('Jane Smith', 'HR', 60000.00, '456 Elm St', '234-567-8901'),
('Alice Johnson', 'Finance', 70000.00, '789 Oak St', '345-678-9012'),
('Bob Brown', 'Marketing', 80000.00, '101 Pine St', '456-789-0123'),
('Charlie Davis', 'Sales', 90000.00, '202 Maple St', '567-890-1234')";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>