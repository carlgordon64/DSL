<?php
session_start();
$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;

//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
	//echo "welcome to DogDash!";
}

//

?>