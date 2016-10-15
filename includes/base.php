<?php
//session_start();
$servername = "fdb7.biz.nf";
$username = "1989551_db";
$password = "mullamoo2";
$dbname = "1989551_db";

/*local conx settings
$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;
*/

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