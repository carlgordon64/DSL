<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/style.php"/>
   
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
</head>
<body>
<?php

    

$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ActiveUsername = $_SESSION['Username'];

$sql3 = "SELECT ID, username, password FROM email WHERE username = '$ActiveUsername'";
$result = $conn->query($sql3);

?>
<div>
<?
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

  echo " <a>".$row["username"]."</a>";
    }
} else {
    echo "<br> 0 results";
}
?>




</div>
</body>

</html>