<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Establish connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 1. CREATE DATABASE
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql);

// Select the database
mysqli_select_db($conn, $dbname);

// 2. CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10, 2),
    age INT
)";
mysqli_query($conn, $sql);

// 3. INSERT DATA
$sql = "INSERT INTO employees (name, department, salary, age) VALUES
    ('Alice', 'HR', 5000.00, 28),
    ('Bob', 'IT', 7000.00, 32),
    ('Charlie', 'Finance', 6500.00, 35),
    ('David', 'IT', 7200.00, 29),
    ('Eve', 'HR', 4800.00, 25)";
mysqli_query($conn, $sql);

// 4. SELECT DATA with WHERE, LIKE, AND, OR
echo "<h3>SELECT Query with WHERE, LIKE, AND, OR</h3>";
$sql = "SELECT * FROM employees WHERE department LIKE 'IT' AND salary > 6000";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Department: " . $row['department'] . " - Salary: " . $row['salary'] . "<br>";
}

// 5. ORDER BY and GROUP BY
echo "<h3>ORDER BY Salary DESC</h3>";
$sql = "SELECT * FROM employees ORDER BY salary DESC";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

echo "<h3>GROUP BY Department with COUNT</h3>";
$sql = "SELECT department, COUNT(*) AS count FROM employees GROUP BY department";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Department: " . $row['department'] . " - Count: " . $row['count'] . "<br>";
}

// 6. HAVING clause
echo "<h3>HAVING Clause Example</h3>";
$sql = "SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department HAVING avg_salary > 6000";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Department: " . $row['department'] . " - Average Salary: " . $row['avg_salary'] . "<br>";
}

// 7. UPDATE DATA
echo "<h3>UPDATE Query</h3>";
$sql = "UPDATE employees SET salary = 7500 WHERE name = 'Bob'";
if (mysqli_query($conn, $sql)) {
    echo "Bob's salary updated successfully.<br>";
}

// 8. DELETE DATA
echo "<h3>DELETE Query</h3>";
$sql = "DELETE FROM employees WHERE name = 'Eve'";
if (mysqli_query($conn, $sql)) {
    echo "Eve's record deleted successfully.<br>";
}

// 9. TRUNCATE TABLE
// Uncomment the following line if you want to clear all records from the table
// mysqli_query($conn, "TRUNCATE TABLE employees");

// 10. DROP TABLE
// Uncomment the following line if you want to delete the table
// mysqli_query($conn, "DROP TABLE employees");

// 11. SQL FUNCTIONS: AVG, COUNT, SUM, MIN, MAX, LCASE, UCASE
echo "<h3>SQL Functions Example</h3>";

$sql = "SELECT AVG(salary) AS avg_salary, COUNT(*) AS total_employees, SUM(salary) AS total_salary, MIN(salary) AS min_salary, MAX(salary) AS max_salary FROM employees";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo "Average Salary: " . $row['avg_salary'] . "<br>";
echo "Total Employees: " . $row['total_employees'] . "<br>";
echo "Total Salary: " . $row['total_salary'] . "<br>";
echo "Minimum Salary: " . $row['min_salary'] . "<br>";
echo "Maximum Salary: " . $row['max_salary'] . "<br>";

echo "<h3>LCASE and UCASE Functions</h3>";
$sql = "SELECT LCASE(name) AS lower_name, UCASE(name) AS upper_name FROM employees";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Lowercase: " . $row['lower_name'] . " - Uppercase: " . $row['upper_name'] . "<br>";
}

// Close the connection
mysqli_close($conn);
?>
