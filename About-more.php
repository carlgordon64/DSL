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
$servername = "fdb7.biz.nf";
$username = "1989551_db";
$password = "mullamoo2";
$dbname = "1989551_db";
//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
include ("includes/testimonials.php");
//MAIN INDEX CONTENT
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