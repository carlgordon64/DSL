<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/style.php">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Play:700" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<script type="text/javascript">  
        $(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });  
   </script> 
</head>
<body >
<?php

$servername = "mysql6.openhost.net.nz";
$username = "dslai_CarlGordon";
$password = "Qt1i0d%9";
$dbname = "dslair36506nz46867_myDatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<div style="height:120px; width:100%; ">
  <div class="contactDets">
   <div style="width:30px; height:30px; background-image:url('img/ph-icon.png'); right:160px; top:70px; background-size:100% ,100%; position:absolute;"></div>
    <p style="font-size:24px;">Napier, Hawke’s Bay</p>
    <p style="font-size:16px;">NZ Nationwide Service</p>
    <p style="font-size:24px;">06 843 5287</p>
  </div>

  <a href="index.php"><div style="width:287px; height:120px;background-image:url('img/Dsl_Logo.png');" id="Logo">
 
  </div></a>
  <div style="position:absolute; left:287px; top:2px; width:255px; height:120px; border:none; background-image:url('img/Banner_sponsors.png');" id="Sponsors">
 
  </div>


</div>
<div style="height:auto;padding:0px;min-height:50px; overflow:hidden; width:100%; background:#fff">
  <p id="automotive">AUTOMOTIVE</p> <p id="autoalttext"style="position:absolute; z-index:100; left:290px; top:130px;">Specialists in Diesel Injection, turbochargers and diagnostics for over 35 years</p>

</div>
      <nav class="navbar navbar-default" role="navigation" style='background:#f5e901;' >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin:0px;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
       
            <li><a href="index.php">Home</a></li>
           
               <li class="dropdown">
                <a href="About.php">About</a>
            <ul class="dropdown-menu">
              <li><a href="About-more.php">Testimonials</a></li>
            </ul>
          </li>
               <li>
                   
             
                <?
          $sql3 = "SELECT ID, pagename, link FROM Pages";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

  echo " <li ><a href='".$row["link"]."'>".$row["pagename"]."</a></li> ";
    }
} else {
    echo "<br> 0 results";
}
                ?>
              
            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

   </div>





</body>

</html>