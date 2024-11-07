<?php
//Database connection establish

$servername="localhost:3306";
$username="root";
$password="";

//Establish the connection
$conn=mysqli_connect($servername,$username,$password);

//Check the connection
if(!$conn){
    die("Connection faied".mysqli_connect_error());
}

//create the database
$databaseName="xg";
$sql="CREATE DATABASE $databaseName";

if(mysqli_query($conn,$sql)){
    echo "Database '$databaseName' created successfully ";
    echo "i can create a first database connect with php3";
}else{
    echo "Error creating database:".mysqli_error($conn);
}


//close the connection
mysqli_close($conn);
?>