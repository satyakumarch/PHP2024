 <!-- //
// //database connection
// $server ="localhost";
// $username="root";
// $password="";
// //establishing connection
// $conn=new mysqli($server,$username,$password);
// //checking connection
// if($conn->connect_error){
//     die("connection failed:".$conn->connect_error);
// }
//creating database
// $sql="create database if not exits $dbname";
// mysqli_query($conn,$sql);

// //select the database
// mysqli_select_db($conn,$dbname);


//creating table
// $sql="CREATE TABLE if not exits Endterm(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     department VARCHAR(30) ,
//     salary Decimal(10,3),
//     age INT(3),
// )";

//insert data
// $sql="INSERT INTO Endterm(name,department,salary,age) VALUES
// ('John', 'Doe', 10000, 25),
// ('Jane', 'Smith', 20000, 30),
// ('Alice', 'Johnson', 30000, 35),
// ('Bob', 'Brown', 40000, 40),
// ('Charlie', 'Davis', 50000, 45)";

// mysqli_query($conn,$sql);

//select data with where ,like and or 
// echo "<h3> Select data with where, like and or </h3>";
// $sql="SELECT * FROM Endterm WHERE department like 'IT' and salary>20000";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result)){
//     echo "id:".$row['id']."<br>";
//     echo "name:".$row['name']."<br>";
//     echo "department:".$row['department']."<br>";
//     echo "salary:".$row['salary']."<br>";
//     echo "age:".$row['age']."<br>";
// }

//5 ORDER BY AND GROUP BY 
// echo "<h3> ORDER BY AND GROUP BY </h3>";
// $sql="SELECT * FROM Endterm ORDER BY salary DESC";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result)){
//     echo "id:".$row['id']."<br>";
//     echo "name:".$row['name']."<br>";
//     echo "department:".$row['department']."<br>";
//     echo "salary:".$row['salary']."<br>";
//     echo "age:".$row['age']."<br>";
// }

// echo "<h3> GROUP BY </h3>";
// $sql="SELECT department, count(*) FROM Endterm GROUP BY department";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result)){
//     echo "department:".$row['department']."<br>";
//     echo "count:".$row['count(*)']."<br>";
// } 

//6 HAVING CLAUSE
// echo "<h3> HAVING CLAUSE </h3>";
// $sql="SELECT department, count(*) FROM Endterm GROUP BY department HAVING count(*)>60000";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result)){
//     echo "department:".$row['department']."<br>";
//     echo "count:".$row['count(*)']."<br>";
// }

//7 UPDATA DATA
echo "<h3> UPDATA DATA </h3>";
$sql="UPDATE Endterm SET salary=60000 WHERE name='John'";
if(mysqli_query($conn,$sql)){
    echo "Record updated successfully";
}

//8 DELETE DATA
echo "<h3> DELETE DATA </h3>";
$sql="DELETE FROM Endterm WHERE name='John'";
if(mysqli_query($conn,$sql)){
    echo "Record deleted successfully";
}

//turnicate table   
echo "<h3> TRUNCATE TABLE </h3>";
$sql="TRUNCATE TABLE Endterm";
if(mysqli_query($conn,$sql)){
    echo "Table truncated successfully";
}

//drop table
echo "<h3> DROP TABLE </h3>";
$sql="DROP TABLE Endterm";
if(mysqli_query($conn,$sql)){
    echo "Table dropped successfully";
}

//




<?php
//database connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "satyaphp5"; // Define the database name

//establishing connection
$conn = new mysqli($server, $username, $password);

//checking connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

//creating database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql);

//select the database
mysqli_select_db($conn, $dbname);

//creating table
$sql = "CREATE TABLE IF NOT EXISTS Endterm (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    department VARCHAR(30),
    salary DECIMAL(10,3),
    age INT(3)
)";
mysqli_query($conn, $sql);

//insert data
$sql = "INSERT INTO Endterm (name, department, salary, age) VALUES
('John', 'Doe', 10000, 25),
('Jane', 'Smith', 20000, 30),
('Alice', 'Johnson', 30000, 35),
('Bob', 'Brown', 40000, 40),
('Charlie', 'Davis', 50000, 45)";
mysqli_query($conn, $sql);

//select data with where, like and or 
echo "<h3>Select data with where, like and or</h3>";
$sql = "SELECT * FROM Endterm WHERE department LIKE 'IT' AND salary > 20000";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row['id'] . "<br>";
    echo "name: " . $row['name'] . "<br>";
    echo "department: " . $row['department'] . "<br>";
    echo "salary: " . $row['salary'] . "<br>";
    echo "age: " . $row['age'] . "<br>";
}

// ORDER BY AND GROUP BY 
echo "<h3>ORDER BY</h3>";
$sql = "SELECT * FROM Endterm ORDER BY salary DESC";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row['id'] . "<br>";
    echo "name: " . $row['name'] . "<br>";
    echo "department: " . $row['department'] . "<br>";
    echo "salary: " . $row['salary'] . "<br>";
    echo "age: " . $row['age'] . "<br>";
}

echo "<h3>GROUP BY</h3>";
$sql = "SELECT department, COUNT(*) as count FROM Endterm GROUP BY department";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "department: " . $row['department'] . "<br>";
    echo "count: " . $row['count'] . "<br>";
}

$conn->close();
?>