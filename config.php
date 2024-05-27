<?php
$hostname='localhost';
$username='root';
$password='';
$databasename='table';
$mysqli =mysqli_connect($hostname,$username,$password,$databasename);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>