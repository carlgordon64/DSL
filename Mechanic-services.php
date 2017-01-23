<!-- sample page --> <!DOCTYPE html> 
<html>  
<head> 
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.php">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="margin-bottom:0px;margin-top:0px;">

<?php


$servername = "mysql6.openhost.net.nz";
$username = "dslai_CarlGordon";
$password = "Qt1i0d%9";
$dbname = "dslair36506nz46867_myDatabase";



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
<div style="max-width: 1100px;
  margin:auto;">
<?
include ("includes/mechanic-welcome.php");
//FOOTER
?>

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