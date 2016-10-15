<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body >
<?php
$servername = "fdb7.biz.nf";
$username = "1989551_db";
$password = "mullamoo2";
$dbname = "1989551_db";

$filterbutton=$_POST['filterbutton'];
$limit = 4;


$blogfilter=$_POST['blogfilter'];
$older=$_POST['older'];
$newer=$_POST['newer'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
<div class="Home" >
<!--
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="carousel-caption">
          
      </div>
  <!-- Indicators 
    <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides 
  <div class="carousel-inner text-center">
<?php
$sql30 = "SELECT id, image, caption FROM featured WHERE id=0 LIMIT 1";
$result0 = $conn->query($sql30);
if ($result0->num_rows > 0) {
    // output data of each row
    while($row = $result0->fetch_assoc()) {
echo "
    <div class='item active'>
    <div class='carousel-caption'>
          <p class='carostyle'>".$row["caption"]."</p>
      </div>
      <img class='caroimg' src='".$row["image"]."' alt='awesome idea'>
      
    </div>
";
    }
} else {
    echo "<br> 0 results";
}
 ?>
<?php
$sql3 = "SELECT id, image, caption FROM featured WHERE id = 1 OR id = 2 ORDER BY id ASC";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<div class='item'>
    <div class='carousel-caption'>
          <p class='carostyle' >".$row["caption"]."</p>
      </div>
      <img class='caroimg'src='".$row["image"]."' alt='awesome idea'>
      
    </div>";
    }
} else {
    echo "<br> 0 results";
}
?>
  </div>
 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>  Carousel -->
<?php
include ("includes/welcome.php");
  
?>

<div class="holder"> 

<div class="row" style="padding:0px">

<div class="col-sm-8 layo2">


<?php
include ("includes/content.php");
	
?>

<form name="filter" method="post" action="index.php">
<input class="instyle more" style="width:98%; background-color:rgba(0,0,0,0.3); border:transparent; color:white;" value="+"type="submit" name="filterbutton" placeholder="Filter">

  </form>
</div></div>




<div class="col-sm-4 layo2" id="lefty">

<?php

include ("profile_conx.php");
?>
</div>

</div>
</div>
</div>
</div>
</body>



</html>