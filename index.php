<!-- sample page --> <!DOCTYPE html> 
<html>  
<head> 
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.php">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="margin-bottom:0px;">

<?php


$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;
session_start();
$ActiveUsername = $_SESSION['Username'];
$ActivePassword = $_SESSION['Password'];
$_SESSION['ID'] = "112233";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
	//echo "DSL CONN TRUE";
}
error_reporting(0);
// includes header

?>

<div style=" background:#2A035D;">
<? 
//HEADER
include ("includes/header.php");
//WELCOME IMG BANNER
?>
<div style="max-width: 1208px;
  margin:auto;">
<?
include ("includes/welcome.php");
//MAIN INDEX CONTENT
include ("includes/landing.php");
//FOOTER
?>
</div>
</div>
<?
include ("includes/footer.php");

?>

</div>
</body>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" ></script>
<script src="js/isotope-docs.min.js"></script>

</html>