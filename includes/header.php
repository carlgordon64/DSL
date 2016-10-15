<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/style.php"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Play:700" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
</head>
<body >
<?php

    

$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "DSL_db";
$host = 'localhost';
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<div style="height:120px; width:100%; ">
  <div class="contactDets">
    <p style="font-size:24px;">Napier, Hawke’s Bay</p>
    <p style="font-size:16px;">NZ Nationwide Service</p>
    <p style="font-size:24px;">06 843 5287</p>
  </div>
  <div style="width:287px; height:120px;background-image:url('img/Dsl_Logo.png');" id="Logo">
 
  </div>
  <div style="position:absolute; left:287px; top:8px; width:255px; height:120px; border:none; background-image:url('img/Banner_sponsors.png');" id="Sponsors">
 
  </div>


</div>
<div style="height:auto;padding:0px;min-height:50px; overflow:hidden; width:100%; background:#fff">
  <p id="automotive">AUTOMOTIVE</p> <p id="autoalttext"style="position:absolute; z-index:100; left:290px; top:136px;">Specialists in Diesel Injection, turbochargers and diagnostics for over 35 years</p>

</div>
      <nav class="navbar navbar-default" role="navigation" >
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